<?php
echo "<script>alert('You are alredy apllied for admin approval')</script>";
include("dbconn.php");
session_start();
$email=$_SESSION["email"];

if(mysqli_query($conn,"select * from verification where email='$email'")){
	echo "<script>alert('You are alredy apllied for admin approval')</script>";
	header("location:index.php");
}

?>