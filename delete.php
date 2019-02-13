<?php

include("db.php");

$iden = $_GET['iden'];

$query = mysqli_query($con, "DELETE FROM enquiry WHERE id='$iden' ") or die();

header("location: delete.html");

