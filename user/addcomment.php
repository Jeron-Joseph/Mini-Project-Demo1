<?php
session_start();
include("dbconn.php");
$email=$_SESSION["email"];
$post_id=$_POST["post_id"];
$comment=$_POST["comment"];

$sql="insert into comment(post_id,email,comment)values($post_id,'$email','$comment')";
if(mysqli_query($conn,$sql)){
	echo "<script>alert('Comment added')
	window.location.replace('viewpost.php?post_id=$post_id')

	</script>";

}


?>