<?php
session_start();
include("dbconn.php");
$customer_email=$_SESSION["email"];
$sp_email=$_POST["sp_email"];
$price=$_POST["price"];
$booking_id=$_POST['booking_id'];

$sql="insert into payment(customer_email,sp_email,booking_id,price)values('$customer_email','$sp_email','$booking_id','$price')";
//echo $booking_id;
if(mysqli_query($conn,$sql)){
	$sql1="insert into notification(sender_id,reciever_id,notification_type,content)values('$customer_email','$sp_email','Payment Completed','Payment completed, you earned $price Rs')";
	if(mysqli_query($conn,$sql1)){
		header("location:payment.php");

	}
	else
echo mysqli_error($conn);
}
else
echo mysqli_error($conn);

?>