<?php
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];


$email_from = 'jkim69148@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Last Name: $lastname .\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n";
                

$to = 'ji.asanovna08@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");

?>
