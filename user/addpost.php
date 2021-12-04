<?php
session_start();
include("dbconn.php");
$email=$_SESSION["email"];
$post=$_POST["post"];
//$file=$_POST["media"];
$target_path = "uploads/";
$uploadOk = 1;
$media_type="image";
$extension=array("jpeg","jpg","png","gif","mp4");
$j=0;
$arr=array();

for ($i = 0; $i < count($_FILES['file']['name']); $i++) { //loop to get individual element from the array

        $validextensions = array("jpeg", "jpg", "png","mp4"); //Extensions which are allowed
        $ext = explode('.', basename($_FILES['file']['name'][$i])); //explode file name from dot(.) 
        $file_extension = end($ext); //store extensions in the variable

        $basename=basename($_FILES['file']['name'][$i]);
        $target_path = $target_path .$basename;
        $filename=$target_path;
        if($file_extension=="mp4"){
        	$media_type="video";
        }
       // echo $media_type;
       // echo $filename;
        $arr[]=$filename;

        if (($_FILES["file"]["size"][$i] < 25000000) //Approx. 100kb files can be uploaded.
            && in_array($file_extension, $validextensions)) {
            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) { //if file moved to uploads folder
                
            } else { //if file was not moved.
                echo $j.
                ').<span id="error">please try again!.</span><br/><br/>';
            }
        } else { //if file size and file type was incorrect.
            echo "<script>alert('file format not supported')
            window.location.replace('index.php')</script>";
        }

    }

   // echo $arr;
    $sql="insert into post(email,post)values('$email','$post')";
    if(mysqli_query($conn,$sql)){
        $sql1="select max(post_id) from post where email='$email'";
        $r=mysqli_fetch_assoc(mysqli_query($conn,$sql1));
        $post_id=$r['max(post_id)'];
        foreach($arr as $x){
            $s="insert into media(post_id,media,media_type)values($post_id,'$x','$media_type')";
            if(mysqli_query($conn,$s)){
               // echo "uploaded";

            }

        }
        echo "<script>alert('Post uploaded')
            window.location.replace('index.php')</script>";

    }


?>