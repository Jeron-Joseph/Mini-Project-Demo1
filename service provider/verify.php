<?php
session_start();
include("dbconn.php");
$email=$_SESSION["email"];
$gender=$_POST["gender"];
$dob=$_POST["date_of_birth"];
$house=$_POST["house"];
$street=$_POST["street"];
$country=$_POST["country"];
$state=$_POST["state"];
$district=$_POST["district"];
$pincode=$_POST["pincode"];

$adhaar_no=$_POST["adhaar_no"];

$ac_holder_name=$_POST["ac_holder_name"];
$ac_no=$_POST["ac_number"];
$ifsc=$_POST["ifsc"];
$bank_name=$_POST["bank_name"];

$shop_name=$_POST["shop_name"];
$shop_category=$_POST["shop_category"];
$shop_email=$_POST["shop_email"];
$shop_phone=$_POST["shop_phone"];
$shop_country=$_POST["shop_country"];
$shop_state=$_POST["shop_state"];
$shop_district=$_POST["shop_district"];
$shop_city=$_POST["shop_city"];
$shop_pincode=$_POST["shop_pincode"];
$shop_bio=$_POST["shop_bio"];



$target_dir="uploads/";
$target_file1= $target_dir . basename($_FILES["adhaar"]["name"]);
$target_file2= $target_dir . basename($_FILES["photo"]["name"]);

$target_file3= $target_dir . basename($_FILES["shop_image"]["name"]);
$target_file4= $target_dir . basename($_FILES["shop_license"]["name"]);





$sql1="update registration set gender='$gender',date_of_birth='$dob',house='$house',place='$street',country=$country,state=$state,district=$district,pincode=$pincode where email='$email'";
if(mysqli_query($conn,$sql1)){

	if(move_uploaded_file($_FILES["adhaar"]["tmp_name"], $target_file1)){
		if(move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file2)){
			$sql2="insert into verification(email,adhaar_no,adhaar,photo)values('$email',$adhaar_no,'$target_file1','$target_file2')";
			if(mysqli_query($conn,$sql2)){
				//ECHO "IN";
				$sql3="insert into bank_account(email,ac_holder_name,ac_no,ifsc,bank_name)values('$email','$ac_holder_name',$ac_no,'$ifsc','$bank_name')";
				//echo $sql3;
				if(move_uploaded_file($_FILES["shop_image"]["tmp_name"], $target_file3)){
		if(move_uploaded_file($_FILES["shop_license"]["tmp_name"], $target_file4)){
				if(mysqli_query($conn,$sql3)){
					$sql4="insert into shop(email,shop_name,shop_category,shop_email,shop_phone,shop_country,shop_state,shop_district,shop_city,shop_pincode,shop_bio,shop_image,shop_license) values('$email','$shop_name','$shop_category','$shop_email','$shop_phone','$shop_country','$shop_state','$shop_district','$shop_city','$shop_pincode','$shop_bio','$target_file3','$target_file4')";
					if(mysqli_query($conn,$sql4)){
						echo "<script>alert('Form submitted successfully. Please wait for admin approval')
						window.location.replace('index.php')
						</script>";
					

					}
					}
				}
				}
			}


		}

	}

}

?>