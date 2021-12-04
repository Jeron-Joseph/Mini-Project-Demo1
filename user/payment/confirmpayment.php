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
		if(isset($_POST["room_id"])){
	$room_id=$_POST['room_id'];
	$sql4="select no_of_rooms from rooms where room_id=$room_id";
	$r=mysqli_fetch_assoc(mysqli_query($conn,$sql4));
	$no_of_rooms=$r["no_of_rooms"];
	$sql2="update rooms set no_of_rooms=$no_of_rooms-1 where room_id=$room_id";
	if(mysqli_query($conn,$sql2)){
		header("location:payment.php");
		//echo "in isset";
		//echo $no_of_rooms;

	}
}
else{
		header("location:payment.php");
	echo "in else";

}

	}
	else
echo mysqli_error($conn);
}
else
echo mysqli_error($conn);


?>