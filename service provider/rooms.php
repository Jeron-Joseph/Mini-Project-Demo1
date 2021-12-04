<?php
session_start();
$email=$_SESSION["email"];
include("dbconn.php");
if(isset($_POST["submit"]))
{

$room_type=$_POST["room_type"];
$room_price=$_POST["room_price"];
$no_of_rooms=$_POST["no_of_rooms"];

$target_dir="uploads/";
$target_file= $target_dir . basename($_FILES["room_image"]["name"]);

$sql="insert into rooms(email,room_type,room_price,no_of_rooms,room_image)values('$email','$room_type',$room_price,$no_of_rooms,'$target_file')";
if(mysqli_query($conn,$sql)){
	if(move_uploaded_file($_FILES["room_image"]["tmp_name"], $target_file)){
		echo "<script>alert('Rooms added successfully')
		window.location.replace('addrooms.php')
		</script>";

	}

}

}
if(isset($_POST["updateprice"])){

	$room_id=$_POST['room_id'];
	$room_price=$_POST["room_price"];
	$sql="update rooms set room_price=$room_price";
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Room price updated')
		window.location.replace('addrooms.php')
		</script>";
	}
	else
		echo mysqli_error($conn);
}
if(isset($_POST["updaterooms"])){
	
	$room_id=$_POST['room_id'];
	$no_of_rooms=$_POST["no_of_rooms"];
	$sql="update rooms set no_of_rooms=$no_of_rooms";
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Rooms updated')
		window.location.replace('addrooms.php')
		</script>";
	}
	else
		echo mysqli_error($conn);
}



?>