<?php
class Mail
{
    public static function send($sender, $subject, $message): bool
    {
        $receiver = "contact@novocib.com";

        $email_from = $sender;
        $email_subject = "[Novocib.com] - " .  $subject;
        $email_body = $message;
        $headers = "From: $email_from \r\n";
        $headers .= "Reply-To: $sender \r\n";
        // mail returns true or false
        return @mail($receiver, $email_subject, $email_body, $headers);
    }
}
