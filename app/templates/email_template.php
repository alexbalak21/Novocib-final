<?php
function generateEmail($sender_name, $sender_email, $subject, $messageBody)
{
    ob_start(); ?>

    <html>

    <body style="font-family: Arial, sans-serif;">
        <div style="max-width:600px; margin:auto; background:#fff; padding:0; border-radius:8px; border:3px solid #0072ce;">

            <!-- Logo Header -->
            <div style="background: #F5F5F5; text-align:center; padding:20px 0; border-top-left-radius:8px; border-top-right-radius:8px;">
                <a href="https://www.novocib.com/"><img src="https://www.novocib.com/app/static/img/logo.png" alt="NOVOCIB Logo" style="max-width:200px;"></a>
            </div>

            <!-- Message Content -->
            <div style="padding:20px;">
                <h2 style="color:#1b6ec2;">📧 A Message from the NOVOCIB Team</h2>

                <p><strong>Name:</strong> <?= htmlspecialchars($sender_name) ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($sender_email) ?></p>
                <p><strong>Subject:</strong> <?= htmlspecialchars($subject) ?></p>

                <div style="border:1px solid #ccc; padding:15px; margin-top:15px; border-radius:8px; background:#f9f9f9;">
                    <p style="margin:0 0 10px 0;"><?= nl2br(htmlspecialchars($messageBody)) ?></p>
                </div>

                <footer style="text-align:center; font-size:12px; color:#777; margin-top:20px;">
                    This message was sent automatically via novocib.com
                </footer>
            </div>
        </div>
    </body>

    </html>

<?php
    return ob_get_clean();
}






// Dummy values for testing
$sender_name = "Novocib";
$sender_email = "contact@novocib.com";
$subject = "Demo Preview";
$messageBody = "This is a preview of your styled email layout. You can now review this directly in the browser.";

// Show the generated HTML
echo generateEmail($sender_name, $sender_email, $subject, $messageBody);
