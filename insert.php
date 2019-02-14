<?php
require_once "Mail.php";
include("./db.php");
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$category = $_POST['category'];
$message = $_POST['message'];
 mysqli_query($con, "INSERT INTO enquiry (fullNames, email, phone, category, msg) VALUES('$fullname', '$email', '$phone','$category','$message' )");// or die();

mysqli_close($con);

$subject = "Enquiry";
$from = "An enquiry<henry@smgeservices.com>";
$to = "Info<info@smgeservices.com>";
//$to = "Info<don.unobunjo@gmail.com>";
$username = "henry@smgeservices.com";
$password = "Redlabel@11";
$host = "smtp.smgeservices.com";
$message.= "\n\n ";
$message.=$fullname;
$message.= "\n\n ";
$message.=$email;
$message.= "\n\n ";
$message.=$category;
$message.= "\n\n ";
$message.=$phone;

$headers = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'auth' => true,
    'username' => $username,
    'password' => $password));

$mail = $smtp->send($to, $headers, $message);

if (PEAR::isError($mail)) 
{
  echo("<p>" . $mail->getMessage() . "</p>");
} 
else 
{

//header("location: index.php?note=Success");
header("location:./thankyou.html");
}
?>