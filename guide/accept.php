<?php
session_start();
include("dbconn.php");
$email=$_SESSION["email"];
$booking_id=$_GET['booking_id'];
$custmoer_email=$_GET['customer_email'];
// echo $custmoer_email;

$sql="update booking set booking_status=1 where booking_id=$booking_id";
if(mysqli_query($conn,$sql)){
	$sql1="insert into notification(sender_id,reciever_id,notification_type,content)values('$email','$custmoer_email','Guide Boking','Guide accepted your booking')";
	if(mysqli_query($conn,$sql1)){

	echo "<script>alert('Accepted Successfully')
	window.location.replace('viewrequest.php')

	</script>";	

	}
	
}
else
echo mysqli_error($conn);

?>