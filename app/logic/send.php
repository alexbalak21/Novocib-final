<?php

print_r($_POST);
// PROD MAIL
$to = "awfont@alwaysdata.net";


//RECIVES DATA FORM THE CLIENT CHECKS THE DATA AND RESPONDS 202: MAIL SENT /400: DATA IS MISSING/ 403: BAD METHOD / 503: SERVER ERROR 
function serve()
{
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method != 'POST') {
        http_response_code(403);
        echo "Forbiden";
        return "";
    } else {
        if (!(isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['need']) && isset($_POST['message']))) {
            http_response_code(400);
            echo "Data missing in request";
            return null;
        }
        $name = $_POST['name'];
        $visitor_email = $_POST['mail'];
        $need = $_POST['need'];
        $message = $_POST['message'];
    }
    global $to;
    $name = $_POST['name'];
    $visitor_email = $_POST['mail'];
    $need = $_POST['need'];
    $message = $_POST['message'];
    $sent = send_mail($to, $name, $visitor_email, $need, $message);

    if ($sent) {
        http_response_code(202);
        header("Location: /message-sent-successfully");
        return true;
    } else {
        http_response_code(503);
        echo "Error sending a message.";
        return false;
    }
}

//COMPOSES THE MAIL AND SENDS IT, RETURN TRUE IF MAIL SENT, FALCE OTHERWHISE
function send_mail($to, $name, $visitor_email, $need, $message): bool
{
    $email_from = $visitor_email;
    $email_subject = "[Message from novocib.com] : From: " . $name . " - Need: " .  $need;
    $email_body = $message;
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    // mail returns true or false
    $sent = @mail($to, $email_subject, $email_body, $headers);
    return $sent;
}

serve();