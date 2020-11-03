<?php

$visitor_name = $_POST['name'];
$visitor_email = $_POST["email"];
$visitor_subject = $_POST['subject'];
$visitor_message = $_POST['message'];

$email_from = 'test@localhost.com';
$email_subject = 'new submission';
$email_body = "User Name: $visitor_name. \n ".
            "User Email: $visitor_email. \n".
            "User Message: $visitor_message. \n";


$to = 'jonas17voigt@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to, $email_subject, $email_body, $headers);

header("Location: index.html");









?>