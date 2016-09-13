<?php
if(!isset($_POST['submit']))
{
  echo "error; you need to submit the form";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

if(empty($name)||empty($visitor_email))
{
  echo "Name and email are blank";
  exit;
}

$email_from = $visitor_email;
$email_subject = "New Form Submission";
$email_body = $message;

$to = "blakebless7@gmail.com";
$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);

header('Location: contact.html');
?>
