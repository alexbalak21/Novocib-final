<?php
function generateEmail($sender_name, $sender_email, $subject, $messageBody)
{
    ob_start(); ?>
    <html>

    <body style="font-family: Arial, sans-serif;">
        <div style="max-width: 900px; margin:auto; background:#fff; padding:0; border-radius:8px; border:3px solid #0072ce;">
            <div style="background: #F5F5F5; text-align:center; padding:20px 0; border-top-left-radius:8px; border-top-right-radius:8px;">
                <a href="https://www.novocib.com/"><img src="https://www.novocib.com/app/img/contact-logo.png" alt="Contact Logo" style="max-width:200px;"></a>
            </div>
            <div style="padding:20px;">
                <h2 style="color:#1b6ec2;">A message form Contact Us 📧</h2>
                <p><span class="noSelect">
                        <svg style="width:1rem; height:1rem; fill:#0072ce;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                        </svg>&nbsp;<strong class="noSelect">Name:</strong>
                    </span> <?= htmlspecialchars($sender_name) ?></p>
                <p><span class="noSelect">
                        <svg style="width:1rem; height:1rem; fill:#0072ce;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                        </svg>&nbsp;<strong class="noSelect">Email: </strong>
                    </span> <?= htmlspecialchars($sender_email) ?></p>
                <p><span class="noSelect">
                        <svg style="width:1rem; height:1rem; fill:#0072ce;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M512 240c0 114.9-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6C73.6 471.1 44.7 480 16 480c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c0 0 0 0 0 0s0 0 0 0s0 0 0 0c0 0 0 0 0 0l.3-.3c.3-.3 .7-.7 1.3-1.4c1.1-1.2 2.8-3.1 4.9-5.7c4.1-5 9.6-12.4 15.2-21.6c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208z" />
                        </svg>&nbsp;<strong class="noSelect">Subject:</strong>
                    </span> <?= htmlspecialchars($subject) ?></p>
                <div style="border:1px solid #ccc; padding:15px; margin-top:15px; border-radius:8px; background:#f9f9f9;">
                    <p style="margin:0 0 10px 0;"><?= nl2br(htmlspecialchars($messageBody)) ?></p>
                </div>
                <footer style="text-align:center; font-size:12px; color:#777; margin-top:20px;">
                    This message was sent automatically via novocib.com
                </footer>
            </div>
        </div>
    </body>
    <style>
        .noSelect {
            user-select: none;
        }
    </style>

    </html>
<?php
    return ob_get_clean();
}





// Dummy values for testing
$sender_name = "Sarah Doe";
$sender_email = "sarah@lab.com";
$subject = "Order for 12 Assay Kits";
$messageBody = "Hello I would like to order 12 assay kits from you.";

// Show the generated HTML
echo generateEmail($sender_name, $sender_email, $subject, $messageBody);
