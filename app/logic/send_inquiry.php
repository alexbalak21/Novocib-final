<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repository/Message_repository.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

$recipient = 'contact@novocib.com';
$recipient = 'alex.balaki@gmail.com';

// 🛠 Error logging function
function logError($message)
{
    $logFile = __DIR__ . '/../../logs/message.log';
    $dir = dirname($logFile);

    if (!is_dir($dir)) {
        if (!@mkdir($dir, 0755, true)) {
            error_log("Failed to create log directory: $dir");
            return;
        }
    }

    if (!is_writable($dir)) {
        error_log("Log directory is not writable: $dir");
        return;
    }

    $timestamp = date('Y-m-d H:i:s');
    $logMessage = "[$timestamp] ERROR: $message" . PHP_EOL;
    @file_put_contents($logFile, $logMessage, FILE_APPEND);
    error_log($message);
}

if (!function_exists('mail')) {
    logError("mail() function is not available on this server");
    http_response_code(500);
    echo "<h2 style='text-align: center; padding-top:40px;'>Email functionality is not available on this server. Please contact the administrator.</h2>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $required = ['name', 'mail', 'message'];
    $missing = [];

    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            $missing[] = $field;
        }
    }

    if (empty($missing)) {
        // 🔒 Sanitize input
        $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
        $visitor_email = filter_var(trim($_POST['mail']), FILTER_SANITIZE_EMAIL);
        $message = htmlspecialchars(trim($_POST['message']), ENT_QUOTES, 'UTF-8');

        $product = !empty($_POST['product']) ? htmlspecialchars(trim($_POST['product']), ENT_QUOTES, 'UTF-8') : '';
        $volume = !empty($_POST['volume']) ? htmlspecialchars(trim($_POST['volume']), ENT_QUOTES, 'UTF-8') : '';
        $ref = !empty($_POST['ref']) ? htmlspecialchars(trim($_POST['ref']), ENT_QUOTES, 'UTF-8') : '';
        $price = !empty($_POST['price']) ? htmlspecialchars(trim($_POST['price']), ENT_QUOTES, 'UTF-8') : '';

        // 🧠 Build inquiry description
        $subject = "[Inquiry]";
        if ($product) $subject .= " $product";
        if ($volume) $subject .= " - $volume";
        if ($price) $subject .= " - $price €";
        if ($ref) $subject .= " (Ref: #$ref)";

        // 💾 Save to DB
        $MessageRepo = new Message_repository();
        $MessageRepo->save_message($name, $visitor_email, $subject, $message);

        // 📨 Build email content
        $email_body = "You have received a new Inquiry:\n\n" .
            "From: $name\n" .
            "Email: $visitor_email\n" .
            (!empty($ref) ? "Ref: #$ref\n" : '') .
            (!empty($product) ? "Product: $product\n" : '') .
            (!empty($volume) ? "Volume: $volume\n" : '') .
            (!empty($price) ? "Price: $price €\n" : '') .
            "\nMessage:\n$message";


        $headers = implode("\r\n", [
            'From: contact@novocib.com',
            'Reply-To: ' . $visitor_email,
            'X-Mailer: PHP/' . phpversion(),
            'Content-Type: text/plain; charset=UTF-8'
        ]);

        $sent = @mail($recipient, $subject, $email_body, $headers);

        if ($sent) {
            http_response_code(202);
            header("Location: /message-sent-successfully");
            exit;
        } else {
            $error = error_get_last();
            logError("Failed to send email: " . ($error['message'] ?? 'Unknown error'));
            logError("Email details - Subject: $email_subject, From: $visitor_email");
            http_response_code(503);
            header("Location: /message-error");
            exit;
        }
    } else {
        logError("Form validation failed: Missing fields - " . implode(', ', $missing));
        http_response_code(400);
        echo "Missing required fields: " . implode(', ', $missing);
        exit;
    }
} else {
    logError("Invalid request method: " . ($_SERVER['REQUEST_METHOD'] ?? 'UNKNOWN'));
    http_response_code(405);
    echo "Method not allowed";
    exit;
}
