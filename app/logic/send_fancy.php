<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/email_template.php";
$recipient = 'alex.balaki@gmail.com';
$sender_email = 'contact@novocib.com';
$sender_name = 'Novocib';
$subject = 'Test HTML Message';
$messageBody = 'Here is a detailed test message for layout rendering. It includes multiple lines and content blocks for full visual inspection.';

$htmlMessage = generateEmail($sender_name, $sender_email, $subject, $messageBody);

// Email headers
$headers = [
    'MIME-Version: 1.0',
    'Content-type: text/html; charset=UTF-8',
    'From: ' . $sender_name . ' <' . $sender_email . '>',
    'Reply-To: ' . $sender_email,
    'X-Mailer: PHP/' . phpversion()
];

if (@mail($recipient, $subject, $htmlMessage, implode("\r\n", $headers))) {
    echo "<h2 style='text-align:center; padding-top:40px;'>✅ Test email sent to $recipient</h2>";
} else {
    echo "<h2 style='text-align:center; padding-top:40px;'>❌ Failed to send test email</h2>";
}
