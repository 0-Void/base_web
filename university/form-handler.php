<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'joginderkumar8391@gmail.com';
$email_subject = 'new user submission';
$email_body = "user name: $name.\n".
              "user email: $visitor_email.\n".
              "subject: $subject.\n".
              "user message: $message.\n";
$to = 'joginderkumar8391@gamil.com';
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $email_from \r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: contact.html");





?>