<?php
include("./db.php");
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$category = $_POST['category'];
$message = $_POST['message'];
 mysqli_query($con, "INSERT INTO enquiry (fullNames, email, phone, category, msg) VALUES('$fullname', '$email', '$phone','$category','$message' )");// or die();

mysqli_close($con);

//header("location: index.php?note=Success");
header("location:./thankyou.html");
?>