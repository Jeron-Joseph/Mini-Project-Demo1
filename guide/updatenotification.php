<?php
$notification_id=$_POST["notification_id"];
include("dbconn.php");
$sql="update notification set notification_status=1 where notification_id='$notification_id'";
if(mysqli_query($conn,$sql)){
	echo "Updated";
}

?>