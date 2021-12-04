<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include "dbconn.php";
$query ="SELECT * FROM country";
$results = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>In Travel Travel Category Flat Bootstrap Responsive Website Template | Contact : W3layouts</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="In Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="text/javascript" language="javascript" src="js/validation.js"></script>
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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
		function getState(val) {
	$.ajax({
	type: "POST",
	url: "getState.php",
	data:'country_id='+val,
	success: function(data){
		$("#state-list").html(data);
		getCity();
	}
	});
}
function getCity(val) {
	$.ajax({
	type: "POST",
	url: "getCity.php",
	data:'state_id='+val,
	success: function(data){
		$("#city-list").html(data);
	}
	});
}
	</script>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}


		
	</script>
	<!--// Meta tag Keywords -->
	
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
	
</head>
<style type="text/css">
	.showresult{
		color: black;
	}
</style>
<body>

<!--Header-->
<?php
include("header.php");
?>
<!--Header-->

<!-- inner page banner --> 	
<div class="innerpage-banner">
	<div class="layer1">
	</div>
</div>
<!-- //inner page banner --> 	
		
<!-- contact -->

<!-- //contact -->
<div class="container">
<h3 class="heading text-center"> User Registration </h3>
<br>
<h1>Welcome : Firebase Auth: Google</h1>
    <p>TechFerment: Firebase For Web</p>

    <div id="LoginScreen">
      <button>Login with Google</button>
    </div>

    <div id="dashboard">
      <div id="userDetails"></div>
      <button id="logout">Logout</button>
    </div>
<center>
	<div class="col-md-12">
 <button type="button" class="btn btn-primary btn-lg btn-block" id="login">Login with Google</button>
 <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="emailid" required="" onblur="getEmail(this.value)" name="email">
    <span class="error_form" id="email_error"></span>
    <div id="showresult"></div>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" required=""  name="password">
   
    
  </div>
 <button type="button" class="btn btn-primary btn-lg btn-block" onclick="phoneSignin()">Login with Phone number</button>
</div>
</center>
<br>

<form class="row g-3" id="registration_form">
<div class="col-md-12">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control"  required=""  name="username" id="username">
    <span style="color:red;" id="username_error"></span>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" required="" onblur="getEmail(this.value)" name="email">
    <span class="error_form" id="email_error"></span>
    <div id="showresult"></div>
  </div>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Phone</label>
    <input type="text" class="form-control"  required="" name="phone" id="phone">
    <span style="color:red;" id="phone_error"></span>

  </div>
   <fieldset class="col-md-6">
    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
         Male
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
         Female
        </label>
      </div>
      
    </div>
  </fieldset>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Date of birth</label>
    <input type="date" class="form-control" id="date_of_birth" required="" name="date_of_birth">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">House</label>
    <input type="text" class="form-control" id="house" required="" pattern="[a-zA-Z]+\[ .]+\[0-9]" name="house" >
    <span class="error_form" id="house_error"></span>

  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Street</label>
    <input type="text" class="form-control" id="place" required="" name="place">
    <span class="error_form" id="place_error"></span>

  </div>
  <div class="col-md-3">
  <label for="inputState" class="form-label">Country</label>
  <select class="form-select" aria-label="Default select example" onChange="getState(this.value);" required="" name="country" id="country">
  <option value disabled selected>Select Country</option>
<?php
foreach($results as $country) {
?>
<option value="<?php echo $country["country_id"]; ?>"><?php echo $country["country"]; ?></option>
<?php
}
?>
</select>
    </div>
    <div class="col-md-3">
<label for="inputState" class="form-label" >State</label>
  <select class="form-select" aria-label="Default select example" id="state-list" onChange="getCity(this.value);" name="state" required="">
<option value="">Select State</option>
</select>

    </div>
    <div class="col-md-3">
  <label for="inputState" class="form-label">District</label>
  <select class="form-select" aria-label="Default select example" id="city-list" name="district" required="">
  	<option value="">Select District</option>
  
</select>
    </div>
    <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Pincode</label>
    <input type="text" class="form-control" id="pincode" required="" name="pincode">
    <span class="error_form" id="pincode_error"></span>

  </div>

  
  <div class="col-12">
    <button type="submit" class="btn btn-primary" id="sub">Sign in</button>
  </div>
</form>
</div>
	
<!-- footer -->
<?php
include("footer.php");
?>
<!-- //footer -->

<!-- copyright -->
<section class="copyright py-4 text-center">
	<div class="container">
		<p>© 2018 In Travel. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="=_blank"> W3layouts </a></p>
	</div>
</section>
<!-- //copyright -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	
	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->
 <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-app.js"></script>

    <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-auth.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

    <script>
      // Your web app's Firebase configuration
      var firebaseConfig = {
        apiKey: "AIzaSyDxdMkJ1423-R2_SPWhHEMBVoc9raEP_a0",
  authDomain: "explore-b5f66.firebaseapp.com",
  projectId: "explore-b5f66",
  storageBucket: "explore-b5f66.appspot.com",
  messagingSenderId: "896742466542",
  appId: "1:896742466542:web:1cc4cdd5b90c05fa0b64ff"
      };
      // Initialize Firebase
      firebase.initializeApp(firebaseConfig);

      document.getElementById('dashboard').style.display="none"

      document.getElementById('login').addEventListener('click', GoogleLogin)
      document.getElementById('logout').addEventListener('click', LogoutUser)

      let provider = new firebase.auth.GoogleAuthProvider()

      function phoneSignin(){
      	var email=document.getElementById("emailid").value

  var password=document.getElementById("password").value
  
  //Create User with Email and Password
  firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;
    console.log(errorCode);
    console.log(errorMessage);
    if(!error){
    	signinwith(email,password)
    }
  });

      }

      function signinwith(email,password){
      	firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;
    console.log(errorCode);
    console.log(errorMessage);
});
      }

      function GoogleLogin(){
        console.log('Login Btn Call')
        firebase.auth().signInWithPopup(provider).then(res=>{
          console.log(res.user)
          document.getElementById('LoginScreen').style.display="none"
          document.getElementById('dashboard').style.display="block"
          showUserDetails(res.user)
        }).catch(e=>{
          console.log(e)
        })
      }

      function showUserDetails(user){
	$("#registration_form").show()
	document.getElementById("username").value=`${user.displayName}`
	document.getElementById("email").value=`${user.email}`


        // document.getElementById('userDetails').innerHTML = `
        //   <img src="${user.photoURL}" style="width:10%">
        //   <p>Name: ${user.displayName}</p>
        //   <p>Email: ${user.email}</p>
        // `
      }

      function checkAuthState(){
        firebase.auth().onAuthStateChanged(user=>{
          if(user){
            document.getElementById('LoginScreen').style.display="none"
            document.getElementById('dashboard').style.display="block"
            showUserDetails(user)
          }else{

          }
        })
      }

      function LogoutUser(){
        console.log('Logout Btn Call')
        firebase.auth().signOut().then(()=>{
          document.getElementById('LoginScreen').style.display="block"
          document.getElementById('dashboard').style.display="none"
        }).catch(e=>{
          console.log(e)
        })
      }
      checkAuthState()
    </script>

</body>
</html>