<?php
session_start();
include("dbconn.php");
$price=$_POST["price"];
$area=$_POST["area"];
$description=$_POST["description"];
$email=$_SESSION["email"];

if(isset($_POST['submit'])){


$sql="insert into guide(email,price,area,description)values('$email',$price,'$area','$description')";
if(mysqli_query($conn,$sql)){
	echo "<script>alert('Submitted successfully')
	window.location.replace('index.php')

	</script>";

}
else
echo mysqli_error($conn);
}

if(isset($_POST['update'])){
	$sql="update guide set price='$price',area='$area',description='$description'";
	if(mysqli_query($conn,$sql)){

		echo "<script>alert('Submitted successfully')
	window.location.replace('index.php')

	</script>";

	}
}

?>