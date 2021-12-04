<?php
session_start();
include("dbconn.php");
$email=$_SESSION["email"];
$sp_email=$_GET['sp_email'];
$booking_id=$_GET['booking_id'];
$room_id=$_GET['room_id'];

$s="select no_of_rooms from rooms where room_id=$room_id";
$re=mysqli_query($conn,$s);
$r=mysqli_fetch_assoc($re);
$no_of_rooms=$r["no_of_rooms"];
$sql="delete from room_booking where room_booking_id=$booking_id";
if(mysqli_query($conn,$sql)){
	$sql1="delete from payment where booking_id=$booking_id";
	if(mysqli_query($conn,$sql1)){
		$sql2="insert into notification(sender_id,reciever_id,notification_type,content)values('$email','$sp_email','Cancel Boking','A user cancelled your room')";
		if(mysqli_query($conn,$sql2)){
			$sql3="update rooms set no_of_rooms=$no_of_rooms+1 where room_id=$room_id";
			if(mysqli_query($conn,$sql3)){

			echo "<script>alert('Room cancelled successfully,the payment will be send to your account with in two working days')
	window.location.replace('mybookings.php')

	</script>";
}

		}
	}
}


?>