<?php
session_start();
include("dbconn.php");
$email=$_SESSION["email"];
if(isset($_POST['submit'])){


$food_name=$_POST["food_name"];
$food_price=$_POST["food_price"];

$target_dir="uploads/";
$target_file= $target_dir . basename($_FILES["food_image"]["name"]);

$sql="insert into food(email,food_item,food_image,food_price)values('$email','$food_name','$target_file',$food_price)";
if(mysqli_query($conn,$sql)){
	if(move_uploaded_file($_FILES["food_image"]["tmp_name"], $target_file)){
		echo "<script>alert('Food added successfully')
		window.location.replace('addfood.php')
		</script>";

	}
}
}
if (isset($_POST['update'])) {
	$food_price=$_POST["food_price"];
	$food_id=$_POST['food_id'];
	//echo $food_price;
	//echo $food_id;
	$sql="update food set food_price=$food_price where food_id=$food_id";
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Food price updated successfully')
		window.location.replace('addfood.php')
		</script>";
	}

}



?>