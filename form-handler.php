<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$mesage = $_POST['message'];

$email_from = 'rqmed23@gmail.com';
$email_subject = 'New Message from contact page'
$email_body = "Name: $name. \n". 
                "User Email: $visitor_email. \n".
                "Subject: $subject. \n". 
                "Message: $message .\n".

$to = 'rqmed23@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply to: $visitor_email";

mail($to, $email_subject, $email_body, $headers);
header("Location: contact.html");
?>