<?php
session_start();
include("dbconn.php");
$email=$_SESSION["email"];
$booking_id=$_GET["booking_id"];
$sp_email=$_GET['sp_email'];
$sql="delete from booking where booking_id='$booking_id'";
if(mysqli_query($conn,$sql)){
	$sql1="insert into notification(sender_id,reciever_id,notification_type,content)values('$email','$sp_email','Boking Cancelled','Booking cancelled')";
	if(mysqli_query($conn,$sql1)){

	
	echo "<script>alert('Booking canceled successfully')
	window.location.replace('index.php')

	</script>";
}
}

?>