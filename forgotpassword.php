<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign up page</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="In Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="text/javascript" language="javascript" src="js/validation.js"></script>
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
	<style type="text/css">
		.login{
			padding-left: 350px;
		}
	</style>
	
</head>
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
<div class="container">
<h3 class="heading text-center"> Forgot Password</h3>
<!-- <div id="LoginScreen">
      <button>Login with Google</button>
    </div>

    <div id="dashboard">
      <div id="userDetails"></div>
      <button id="logout">Logout</button>
    </div> -->
<div class="login">

	<div class="col-md-6">
     <label for="inputEmail4" class="form-label">Enter Registered Email ID</label>
    <input type="email" class="form-control" id="email" required="" name="email">
    <span class="error_form" id="email_error"></span>
    <div id="showresult"></div>
  </div>
  
  <div class="col-md-6">
 <button type="button" class="btn btn-primary btn-lg btn-block" onclick="forgotpassword()">Send Mail</button>
</div>
	
</div>
	





<br>
</div>
<?php
include("footer.php")
?>
<section class="copyright py-4 text-center">
	<div class="container">
		<p>?? 2018 In Travel. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="=_blank"> W3layouts </a></p>
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
<script src="https://www.gstatic.com/firebasejs/9.0.2/firebase-app-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.0.2/firebase-firestore-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.0.2/firebase-auth-compat.js"></script>
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

      

      document.getElementById('login').addEventListener('click', GoogleLogin)
      document.getElementById('logout').addEventListener('click', LogoutUser)

      let provider = new firebase.auth.GoogleAuthProvider()



      function forgotpassword(){
      	var auth = firebase.auth();
var emailAddress = document.getElementById("email").value
auth.sendPasswordResetEmail(emailAddress).then(function() {
  // Email sent.
  console.log('Email Sent');
  alert("Please check your mail for reset password")
}).catch(function(error) {
  // An error happened.
  alert(error.message)
});
      }



      //checkAuthState()
    </script>
</body>
</html>