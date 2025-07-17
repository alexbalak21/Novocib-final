<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/Message_repository.php";
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set the recipient email directly
$recipient = 'contact@novocib.com';
// $recipient = 'alex.balaki@gmail.com';
// Error logging function (only logs errors)
function logError($message)
{
    $logFile = __DIR__ . '/../../logs/message.log';
    $dir = dirname($logFile);

    // Create logs directory if it doesn't exist
    if (!is_dir($dir)) {
        if (!@mkdir($dir, 0755, true)) {
            // If we can't create the log directory, log to PHP error log
            error_log("Failed to create log directory: $dir");
            return;
        }
    }

    // Check if we can write to the log file
    if (!is_writable($dir)) {
        error_log("Log directory is not writable: $dir");
        return;
    }

    // Format the error message
    $timestamp = date('Y-m-d H:i:s');
    $logMessage = "[$timestamp] ERROR: $message" . PHP_EOL;

    // Write to log file
    @file_put_contents($logFile, $logMessage, FILE_APPEND);

    // Also log to PHP error log
    error_log($message);
}

// Check if mail function is available
if (!function_exists('mail')) {
    logError("mail() function is not available on this server");
    http_response_code(500);
    echo "<h2 style='text-align: center; padding-top:40px;'>Email functionality is not available on this server. Please contact the administrator.</h2>";
    exit;
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

        // 🔐 Save the message to the DB
        $MessageRepo = new Message_repository();
        $MessageRepo->save_message($name, $visitor_email, $need, $message);

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

        // Send the email
        $sent = @mail($recipient, $email_subject, $email_body, $headers);

        if ($sent) {
            // No logging on success
            http_response_code(202);
            header("Location: /message-sent-successfully");
            exit;
        } else {
            $error = error_get_last();
            $errorMessage = "Failed to send email to $recipient. " . ($error['message'] ?? 'Unknown error');
            logError($errorMessage);
            logError("Email details - Subject: $email_subject, From: $visitor_email");
            http_response_code(503);
            header("Location: /message-error");
            exit;
        }
    } else {
        // Missing required fields
        $errorMsg = "Missing required fields: " . implode(', ', $missing);
        logError("Form validation failed: $errorMsg");
        http_response_code(400);
        echo $errorMsg;
        exit;
    }
} else {
    // Not a POST request
    logError("Invalid request method: " . ($_SERVER['REQUEST_METHOD'] ?? 'UNKNOWN'));
    http_response_code(405);
    echo "Method not allowed";
    exit;
}
