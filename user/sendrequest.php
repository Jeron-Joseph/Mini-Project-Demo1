<?php
session_start();
include("dbconn.php");
$email=$_SESSION["email"];
$sp_email=$_POST["sp_email"];
$date=$_POST["date"];

$sql="insert into booking(customer_email,sp_email,date)values('$email','$sp_email','$date')";
if(mysqli_query($conn,$sql)){
	$sql1="insert into notification(sender_id,reciever_id,notification_type,content)values('$email','$sp_email','Guide Boking','A user requested to book your service')";
	if(mysqli_query($conn,$sql1)){
		echo "<script>alert('Requested send,please wait for accepting')
	window.location.replace('index.php')

	</script>";
	}
}


?>