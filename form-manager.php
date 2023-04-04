<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'paruni1876@pui.edu';

$email_subject = 'New Form Submission'

$email_body = "Username: $name.\n".
                "User Email: $visitor_email.\n". 
                  "Subject: $subject.\n". 
                  "User Message: $message.\n";

$to = 'imaniparker2@gmail.com'

$headers = "From: $email_from \r\n";

$header . = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers)

header("Location: contact.html");
?>

