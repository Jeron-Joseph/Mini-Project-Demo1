window.addEventListener('load', (event) => {
  //console.log('page is fully loaded');


	console.log("in validation")
	$("#username_error").hide();
	$("#email_error").hide();
	$("#phone_error").hide();
	$("#house_error").hide();
	$("#place_error").hide();
	$("#pincode_error").hide();

	var error_username=false
	var error_email=false
	var error_phone=false
	var error_house=false
	var error_place=false
	var error_pincode=false

	$("#username").focusout(function() {
		console.log("in usr")

		check_username();
		
	});
	$("#email").focusout(function() {

		check_email();
		
	});
	$("#phone").focusout(function() {

		check_phone();
		
	});
	$("#house").focusout(function() {

		check_house();
		
	});
    $("#place").focusout(function() {

		check_place();
		
	});
	$("#pincode").focusout(function() {

		check_pincode();
		
	});

	function check_username() {
		document.getElementById("sub").disabled = true;

		// console.log(document.getElementById("username").value)
		
		//  var regex = /^[a-zA-Z]+$/;
   
	
		// var username_length = document.getElementById("username").value.length;
		
		// if(username_length < 5 || username_length > 20) {
		// 	$("#username_error").html("Should be between 5-20 characters");
		// 	$("#username_error").show();
		// 	error_username = true;
		// document.getElementById("sub").disabled = true;

		// } else {
		// 	$("#username_error").hide();
		// }
		// if(regex.test($("#username").val())) {
			
		// } else {
		// 	$("#username_error").html("Invalid name");
		// 	$("#username_error").show();
		// 	error_username = true;
		// document.getElementById("sub").disabled = true;

		// }
	
	
	}
	function check_email(){

		console.log("in check email")
		$.ajax({
				type:"POST",
				url:"getemail.php",
				data:'email='+document.getElementById("email").value,
				success: function(data){
		//console.log(data)
		document.getElementById("sub").disabled = true;

		error_email=true
		let a=String(data)
		console.log(a)
	
		$("#showresult").html(data);


	}

	});

	}
	

	
	if(error_username == false && error_email==false && error_phone==false && error_house==false && error_place==false && error_pincode==false) {
		return true;
	} else {
		return false;	
	}

});
// $("#registration_form").submit(function() {
// 	console.log("in submit")
										
// error_username=false
// error_email=false
// error_phone=false
// error_house=false
// error_place=false
// error_pincode=false
										
// 	check_username();
// 	check_email();
// 	check_phone();
// 	check_house();
// 	check_place();
// 	check_pincode();
	
// 	if(error_username == false && error_email==false && error_phone==false && error_house==false && error_place==false && error_pincode==false) {
// 		document.getElementById("sub").disabled = true;
// 		return true;
// 	} else {
// 		return false;	
// 	}

// });