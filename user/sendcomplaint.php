<?php
include("dbconn.php");
session_start();
$customer_email=$_SESSION["email"];
$sp_email=$_POST["sp_email"];
$complaint_type=$_POST["complaint_type"];
$complaint_subject=$_POST["complaint_subject"];
$complaint_content=$_POST["complaint_content"];

$sql="insert into complaint(customer_email,sp_email,complaint_type,complaint_subject,complaint_content)values('$customer_email','$sp_email','$complaint_type','$complaint_subject','$complaint_content')";
if(mysqli_query($conn,$sql)){
	echo "<script>alert('Complaint added successfully')
	window.location.replace('viewcomplaint.php')
	</script>";
}


?>
