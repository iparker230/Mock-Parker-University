<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'uni1876@pui.edu';

$email_subject = 'New Form Submission';

$email_body = "Username: <a href='".$name."'>$name</a>\n".
                "User Email: $visitor_email.\n". 
                  "Subject: $subject.\n". 
                  "User Message: $message.\n";

$to = 'parkeruni1876@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>