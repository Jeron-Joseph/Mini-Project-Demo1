<?php 

$food_id=$_GET['food_id'];
include("dbconn.php");

$sql="delete from food where food_id=$food_id";
if(mysqli_query($conn,$sql)){
	echo "<script>alert('Food deleted successfully')
		window.location.replace('addfood.php')
		</script>";
}

?>