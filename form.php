<?php
$name = $_POST[''];
$visitor_email = $_POST[''];
$subject = $_POST[''];
$message = $_POST[''];

$email_from = 'jstinfo.com'
$email_subject = 'New Form Submission'
$email_body = "USer Name: $name. \n". 
                "user Email: $visitor_email.\n". 
                "Subject: $subject.\n". 
                "User Message: $message.\n";

$to = 'jeansteven043@gmail.com'

$headers = "From: $email_from \r\n";
$headers = "Reply-TO: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers)

header("Location: contact.html")




?>