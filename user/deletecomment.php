<?php
session_start();
include("dbconn.php");
$email=$_SESSION["email"];
$comment_id=$_GET["comment_id"];
$post_id=$_GET["post_id"];

$sql="delete from comment where comment_id=$comment_id";
if(mysqli_query($conn,$sql)){
	echo "<script>alert('Comment deleted')
	window.location.replace('viewpost.php?post_id=$post_id')

	</script>";
}

?>