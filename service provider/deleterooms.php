<?php 

$room_id=$_GET['room_id'];
include("dbconn.php");

$sql="delete from rooms where room_id=$room_id";
if(mysqli_query($conn,$sql)){
	echo "<script>alert('Room deleted successfully')
		window.location.replace('addrooms.php')
		</script>";
}

?>