<?php
include("dbconn.php");
session_start();
$email=$_SESSION["email"];
$sloat_id=$_GET["sloat_id"];
$sp_email=$_GET['sp_email'];

$sql="delete from sloat_booking where sloat_id=$sloat_id";
if(mysqli_query($conn,$sql)){

	$sql1="insert into notification(sender_id,reciever_id,notification_type,content)values('$email','$sp_email','Sloat Cancelled','User cancelled sloat')";
	if(mysqli_query($conn,$sql1)){
		echo "<script>alert('Booking canceled successfully')
	window.location.replace('mybookings.php')

	</script>";

	}
}  


?>