<?php
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

// Create the email and send the message
$to = 'gradea.ion@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "RS1 Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: igradea@debian-rs1\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";

mail($to,$email_subject,$email_body,$headers);

return true;
?>