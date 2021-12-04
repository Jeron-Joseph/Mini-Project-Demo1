<?php
session_start();
include("dbconn.php"); 
$email=$_SESSION["email"];
$sp_email=$_POST["sp_email"];
$review=$_POST["options"];
$review_content=$_POST["content"];
$review_type=$_POST["review_type"];

$sql="insert into review(customer_email,sp_email,review,review_content,review_type)values('$email','$sp_email',$review,'$review_content','$review_type')";
if(mysqli_query($conn,$sql)){
	echo "<script>
	alert('Review added');
	window.location.replace('mybookings.php');
	</script>";
}



?>