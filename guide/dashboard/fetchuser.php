<?php
include("dbconn.php");
$email=$_POST["e"];
//echo($email);
$sql="select usertype from login where email='$email'";
$result=mysqli_query($conn,$sql);
$row=$result->fetch_assoc();
$usertype=$row["usertype"];
// $sql="SELECT * FROM login where email='$email'";
// $results=mysqli_query($conn,$sql);
// if(mysqli_num_rows($results)>0){
// $row=$result->fetch_assoc();
// $usertype=$row["usertype"];


// }
echo($usertype);
?>