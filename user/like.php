<?php
session_start();
include("dbconn.php");
$email=$_SESSION["email"];
$post_id=$_POST["p_post_id"];
//echo $post_id;
$sql="select * from likes where post_id=$post_id and email='$email'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){

$sql1="delete from likes where post_id=post_id and email='$email'";
if(mysqli_query($conn,$sql1)){

	$sql3="select count(post_id) from likes where post_id=$post_id";
	$r=mysqli_fetch_assoc(mysqli_query($conn,$sql3));
	$likes=$r['count(post_id)'];

	echo "<i class='fa fa-thumbs-up text-primary'>$likes</i>";

}


}
else{

$sql1="insert into likes(post_id,email)values($post_id,'$email')";
if(mysqli_query($conn,$sql1)){

	$sql3="select count(post_id) from likes where post_id=$post_id";
	$r=mysqli_fetch_assoc(mysqli_query($conn,$sql3));
	$likes=$r['count(post_id)'];
    echo "<i class='fa fa-thumbs-up text-primary'>$likes</i>";


}



}


?>
