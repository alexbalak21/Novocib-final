<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set the recipient email directly
$recipient = 'contact@novocib.com';
$recipient = 'alex.balaki@gmail.com';

// Simple logging function
function logMessage($message)
{
    $logFile = __DIR__ . '/../../logs/message.log';
    $dir = dirname($logFile);
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }

    $timestamp = date('Y-m-d H:i:s');
    $logMessage = "[$timestamp] $message" . PHP_EOL;
    file_put_contents($logFile, $logMessage, FILE_APPEND);
    error_log($message);
}

// Log the start of the script
logMessage("Script started. Recipient: $recipient");
logMessage("Request method: " . ($_SERVER['REQUEST_METHOD'] ?? 'UNKNOWN'));
logMessage("POST data: " . json_encode($_POST, JSON_PRETTY_PRINT));

// Check if mail function is available
if (!function_exists('mail')) {
    logMessage("CRITICAL: mail() function is not available on this server");
    http_response_code(500);
    echo "<h2 style='text-align: center; padding-top:40px;'>Email functionality is not available on this server. Please contact the administrator.</h2>";
    exit;
}

// Test if we can write to the log file
if (!is_writable(dirname(__DIR__ . '/../../logs/'))) {
    logMessage("WARNING: Log directory is not writable");
}

// Check if this is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check required fields
    $required = ['name', 'mail', 'need', 'message'];
    $missing = [];

    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            $missing[] = $field;
        }
    }

    if (empty($missing)) {
        // Sanitize input
        $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
        $visitor_email = filter_var(trim($_POST['mail']), FILTER_SANITIZE_EMAIL);
        $need = htmlspecialchars(trim($_POST['need']), ENT_QUOTES, 'UTF-8');
        $message = htmlspecialchars(trim($_POST['message']), ENT_QUOTES, 'UTF-8');

        // Add volume if provided
        if (!empty($_POST['volume'])) {
            $volume = htmlspecialchars(trim($_POST['volume']), ENT_QUOTES, 'UTF-8');
            $need .= " - volume: $volume";
        }

        // Prepare email
        $email_subject = "[Message from novocib.com] From: $name - Need: $need";
        $email_body = "You have received a new message from the website:\n\n" .
            "Name: $name\n" .
            "Email: $visitor_email\n" .
            "Need: $need\n\n" .
            "Message:\n$message";

        // Set email headers
        $headers = [
            'From: ' . $visitor_email,
            'Reply-To: ' . $visitor_email,
            'X-Mailer: PHP/' . phpversion(),
            'Content-Type: text/plain; charset=UTF-8'
        ];

        $headers = implode("\r\n", $headers);

        // Log the attempt
        logMessage("Attempting to send email to: $recipient");
        logMessage("Subject: $email_subject");

        // Send the email
        $sent = mail($recipient, $email_subject, $email_body, $headers);

        if ($sent) {
            logMessage("Email sent successfully to: $recipient");
            http_response_code(202);
            header("Location: /message-sent-successfully");
            exit;
        } else {
            $error = error_get_last();
            logMessage("Failed to send email. Error: " . ($error['message'] ?? 'Unknown error'));
            http_response_code(503);
            echo "<h2 style='text-align: center; padding-top:40px;'>Error sending message. Please try again later or contact us at contact@novocib.com</h2>";
            echo "<p style='text-align: center;'><a href='/'>Return to Homepage</a></p>";
            exit;
        }
    } else {
        // Missing required fields
        $errorMsg = "Missing required fields: " . implode(', ', $missing);
        logMessage("Validation error: $errorMsg");
        http_response_code(400);
        echo $errorMsg;
        exit;
    }
} else {
    // Not a POST request
    logMessage("Invalid request method: " . $_SERVER['REQUEST_METHOD']);
    http_response_code(405);
    echo "Method not allowed";
    exit;
}
