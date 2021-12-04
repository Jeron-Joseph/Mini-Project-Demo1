<?php
session_start();
include("dbconn.php");
$email=$_SESSION["email"];
if(isset($_POST["pic"])){
	$target_dir="../images/";
	$target_file = $target_dir . basename($_FILES["profile_pic"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg") {
    if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)) {
    	$sql="update registration set profile_pic='$target_file' where email='$email'";
    	if(mysqli_query($conn,$sql)){
    		header("location:profile.php");
    	}
    	else echo mysqli_error($conn);
    
    }
 
    }
    else{
    	echo "Wrong extention";
    }

}
if(isset($_POST["data"])){

	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$sql="update registration set name='$name',phone=$phone where email='$email'";
    	if(mysqli_query($conn,$sql)){
    		    		header("location:profile.php");

    	}
	
}


?>