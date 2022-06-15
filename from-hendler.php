<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'domain website';

$email_subject = 'new from subission';

$email_body = "user name: $name.\n".
               "user email: $visitor_email.\n".
               "subject: $subject\n".
               "user message: $message.\n";

$to ='name imailnya';

$header ="from: $email_from \r\n";

$header .="reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$header);

header("location: contant.html");
?>