<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="In Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<!-- <script type="text/javascript" language="javascript" src="js/validation.js"></script> -->
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
	<script type="text/javascript" language="javascript" src="js/validation.js"></script>

	<style type="text/css">
		.login{
			padding-left: 350px;
		}
	</style>
	<script type="text/javascript">
		function getEmail(val){
			console.log("in getEmail")
			console.log(val)
			$.ajax({
				type:"POST",
				url:"getemail.php",
				data:'email='+val,
				success: function(data){
		console.log(data)
	
		$("#showresult").html(data);


	}
			})
		}
	</script>
</head>
<body>
<?php
include("header.php");
?>
<!--Header-->
<!-- inner page banner --> 	
<div class="innerpage-banner">
	<div class="layer1">
	</div>
</div>

<div class="container">
<h3 class="heading text-center"> Create an Account </h3>
<!-- <div id="LoginScreen">
      <button>Login with Google</button>
    </div>

    <div id="dashboard">
      <div id="userDetails"></div>
      <button id="logout">Logout</button>
    </div> -->
<div class="login">
	<form>
	<div class="col-md-6">
     <label for="inputEmail4" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="username" required=""  name="username">
     <span style="color:red;" id="username_error"></span>
    
  </div>
  

	<div class="col-md-6">
     <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" required=""  name="email" onblur="getEmail(this.value)">
    <span class="error_form" id="email_error"></span>
    <div id="showresult"></div>
  </div>

  <div class="col-md-6">
     <label for="inputEmail4" class="form-label">Phone</label>
    <input type="text" class="form-control" id="phone" required="" name="phone">
    <span style="color:red;" id="phone_error"></span>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" required=""  name="password">
   
    
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="conpassword" required=""  name="conpassword">
    <span style="color:red;" id
    ="password_error"></span>
  </div>
  <div class="col-md-6">
  	
<label for="inputState" class="form-label" >Register as</label>
  <select class="form-select" aria-label="Default select example" id="usertype" name="state" required="">

<option value="t" >Travellor</option>

<option value="g">Guide</option>

<option value="s">Service Provider</option>

</select>
</div>
<div class="col-md-6">
 <button type="button" class="btn btn-primary btn-lg btn-block" onclick="phoneSignin()" id="sub"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
  <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>Register</button>


</div>
</form>
	
</div>
	





<br>
</div>
<?php
include("footer.php");
?>

<script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-auth.js"></script>
<script type="text/javascript">
	var firebaseConfig = {
        apiKey: "AIzaSyDxdMkJ1423-R2_SPWhHEMBVoc9raEP_a0",
  authDomain: "explore-b5f66.firebaseapp.com",
  projectId: "explore-b5f66",
  storageBucket: "explore-b5f66.appspot.com",
  messagingSenderId: "896742466542",
  appId: "1:896742466542:web:1cc4cdd5b90c05fa0b64ff"
      };

      firebase.initializeApp(firebaseConfig);
       function phoneSignin(){
      	var email=document.getElementById("email").value

  var password=document.getElementById("password").value
  //const auth = firebase.getAuth();
  //Create User with Email and Password
  firebase.auth().createUserWithEmailAndPassword(email, password).then((userCredential) => {
    // Signed in 
    //window.location.replace("login.php")
    console.log("success")
    var name=document.getElementById("username").value
    var email=document.getElementById("email").value
    var phone=document.getElementById("phone").value
    var password=document.getElementById("password").value
    var usertype=document.getElementById("usertype").value
    $.ajax({
    	type:"POST",
				url:"adduser.php",
				data:{
					n:name,
					e:email,
					ph:phone,
					
					us:usertype,
				},
				success: function(data){
		console.log(data)
		if(usertype=='t'){
			window.location.replace("login.php")
		}
		if(usertype=='g'){
						window.location.replace("login.php")

		}
		if(usertype=='s'){
						window.location.replace("login.php")

		}
		//window.location.replace("home.php")
	}

    })
  })
  .catch(function(error) {
    // Handle Errors here.
    console.log("in reg")
    //window.location.replace("home.php")
    var errorCode = error.code;
    var errorMessage = error.message;
    console.log(errorCode);
    console.log(errorMessage);
    console.log(errorMessage.length)
    alert(errorMessage)
    
  });

      }
</script>
</body>
</html>