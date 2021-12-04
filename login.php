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
<h3 class="heading text-center"> Login </h3>
<!-- <div id="LoginScreen">
      <button>Login with Google</button>
    </div>

    <div id="dashboard">
      <div id="userDetails"></div>
      <button id="logout">Logout</button>
    </div> -->
<div class="login">

	<div class="col-md-6">
     <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" required="" name="email">
    <span class="error_form" id="email_error"></span>
    <div id="showresult"></div>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" required=""  name="password">
   
    <a href="forgotpassword.php">forgot password</a>
  </div>
  <div class="col-md-6">
 <button type="button" class="btn btn-primary btn-lg btn-block" onclick="signinwith()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
  <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>Login</button>
<!--  <button type="button" class="btn btn-danger btn-lg btn-block" id="login"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
  <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
</svg>Login With Google</button>
 -->
<!--  <button type="button" class="btn btn-success btn-lg btn-block" onclick="LogoutUser()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg>Register Now</button> -->
<a href="register.php"><p color="red">Create an account</p> </a>

</div>
	
</div>
	





<br>
</div>
<?php
include("footer.php")
?>
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



      function signinwith(){
   var email=document.getElementById("email").value
  var password=document.getElementById("password").value
      	firebase.auth().signInWithEmailAndPassword(email, password).then((userCredential) => {
      		console.log("success")
      		$.ajax({
      			type:"POST",
				url:"fetchuser.php",
				data:{
					e:email,
				},
				success: function(data){
					console.log(data)
					if(data=="t"){
						console.log("Travellor")
						window.location.replace("user/index.php")
					}
					else if(data=="g"){
						console.log("Guide")
						window.location.replace("guide/index.php")

					}
					else if(data=="s"){
						console.log("service provider")
						window.location.replace("service provider/index.php")

					}
					else if(data=="admin"){
						console.log("Admin")
					window.location.replace("admin/index.php")

					}
				}
      		})

      	})
      	.catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;
    console.log(errorCode);
    console.log(errorMessage);
    alert(errorMessage)
});
      }





      function showUserDetails(user){
	// $("#registration_form").show()
	// document.getElementById("username").value=`${user.displayName}`
	// document.getElementById("email").value=`${user.email}`


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
        	console.log("Logout")
          //document.getElementById('LoginScreen').style.display="block"
         // document.getElementById('dashboard').style.display="none"
        }).catch(e=>{
          console.log(e)
        })
      }
      //checkAuthState()
    </script>
</body>
</html>