<?php
function gen_mail($first_name, $last_name, $key)
{
    $message = "
<html>
<body>
<h1 style='color:red'>Hello, world!</h1>
<p>This is an email with HTML content.</p>
</body>
</html>
";
    return $message;
}
