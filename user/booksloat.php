<?php
session_start();
include("dbconn.php");
$customer_email=$_SESSION["email"];
$sp_email=$_POST["sp_email"];
$sloat_date=$_POST["sloat_date"];
if($_POST["sloat_time"]=='00:00')
	$sloat_time="12.00";
else
    $sloat_time=$_POST["sloat_time"];

$sql="insert into sloat_booking(customer_email,sp_email,sloat_time,sloat_date)values('$customer_email','$sp_email','$sloat_time','$sloat_date')";



if(mysqli_query($conn,$sql)){
	$sql1="insert into notification(sender_id,reciever_id,notification_type,content)values('$customer_email','$sp_email','Food Boking','A user booked a sloat')";
	if(mysqli_query($conn,$sql1)){


	echo "<script> 
	alert('Your sloat booked successfully');
	window.location.replace('mybookings.php')
	</script>";
}
}



?>