<?php
include("dbconn.php");
session_start();
$email=$_SESSION["email"];
$date1=$_POST["date1"];
$date2=$_POST["date2"];
$room_price=$_POST["room_price"];
$room_id=$_POST['room_id'];
$sp_email=$_POST['sp_email'];
$room_type=$_POST["room_type"];
$no_of_rooms=$_POST["no_of_rooms"];



$no_of_days=round(abs(strtotime($date1) - strtotime($date2))/86400);
if($no_of_days>0){
	$_SESSION['room_price'] = $no_of_days*$room_price;
}
else{
	$_SESSION['room_price'] =  $room_price;
}
$sql="insert into room_booking(customer_email,sp_email,arrival_date,vacating_date,room_id)values('$email','$sp_email','$date1','$date2',$room_id)";
if(mysqli_query($conn,$sql)){
	$sql2="update rooms set no_of_rooms=$no_of_rooms-1 where room_id=$room_id";
	if(mysqli_query($conn,$sql2)){
		$sql3="select max(room_booking_id) from room_booking where customer_email='$email'";
		$r=mysqli_fetch_assoc(mysqli_query($conn,$sql3));
		$room_booking_id=$r['max(room_booking_id)'];
		echo "<script>
	window.location.replace('payment/roomspayment.php?room_id=$room_booking_id')

	</script>";

	}

		
	

}
else
echo mysqli_error($conn);




?>