function onEmailSubmit(){
	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var phone = document.getElementById('phone').value;
	var message = document.getElementById('message').value;
    
     if(name == ""){
		document.getElementById('errorName').innerHTML = 'Name is required';
	}
    else if(email == "")
    {
        document.getElementById('errorName').innerHTML = '';
        document.getElementById('errorEmail').innerHTML = 'Email is required';
    }
    else if(phone == "")
    {
        document.getElementById('errorName').innerHTML = '';
        document.getElementById('errorEmail').innerHTML = '';
        document.getElementById('errorPhone').innerHTML = 'Phone No. is required';
    }
    else if(message == "")
    {
        document.getElementById('errorName').innerHTML = '';
        document.getElementById('errorEmail').innerHTML = '';
        document.getElementById('errorPhone').innerHTML = '';
        document.getElementById('errorMessage').innerHTML = 'Message is required';
        
    }
    else
    {
        document.getElementById('errorName').innerHTML = '';
        document.getElementById('errorEmail').innerHTML = '';
        document.getElementById('errorPhone').innerHTML = '';
        document.getElementById('errorMessage').innerHTML = '';
        
	   sendEmail(name, email, phone, message);
        
    }

}

function sendEmail(name, email, phone, message){
   

	document.getElementById("loading").style.display = 'block';
	if(document.getElementById("send").value == "Submit"){
		document.getElementById("send").value = "Sending...";
	} 

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('sendEmail').innerHTML = this.responseText;
		}
	};

	xhttp.open("GET", "background/sendMail.php?name="+name+"&email="+email+"&phone="+phone+"&message="+message, true);
	xhttp.send();
}




//Registration
function registration(){
	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;
	var f_name = document.getElementById('f_name').value;
	var l_name = document.getElementById('l_name').value;
	var mobile_no = document.getElementById('mobile_no').value;
	
	if(email == ""){
		document.getElementById('errorEmail').innerHTML = 'Email is required';
	}
	else if (password == "") {
		document.getElementById('errorEmail').innerHTML = '';
		document.getElementById('errorPassword').innerHTML = 'Password is required';
	}
	else if (f_name == "") {
		document.getElementById('errorPassword').innerHTML = '';
		document.getElementById('errorFName').innerHTML = "First Name is required";
	}
	else if (l_name == "") {
		document.getElementById('errorFName').innerHTML = '';
		document.getElementById('errorLName').innerHTML = "Last Name is required";
	}
	else if(mobile_no == ""){
		document.getElementById('errorLName').innerHTML = '';
		document.getElementById('errorMobileNumber').innerHTML = 'Please Enter valid Mobile Number';
	}
	else {
		document.getElementById('errorEmail').innerHTML = '';
		document.getElementById('errorPassword').innerHTML = '';
		document.getElementById('errorFName').innerHTML = '';
		document.getElementById('errorLName').innerHTML = '';
		document.getElementById('errorMobileNumber').innerHTML = '';

		register(email,password,f_name,l_name,mobile_no);
	}
}


function register(email,password,f_name,l_name,mobile_no){

	if(document.getElementById("submit").value == "SUBMIT"){
		document.getElementById("submit").value = "SUBMITTING...";
	}

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			var flg = this.responseText;
			if(flg == 1){
				document.getElementById('errorEmail').innerHTML = "This Email already exist";
				if(document.getElementById("submit").value == "SUBMITTING..."){
					document.getElementById("submit").value = "SUBMIT";
				}
			}
			else{
				document.getElementById('confirmRegistration').innerHTML = flg;
			}	
		}
	};

	xhttp.open("GET", "background/registration_handler.php?email="+email+"&password="+password+"&f_name="+f_name+"&l_name="+l_name+"&mobile_no="+mobile_no, true);
	xhttp.send();

}


//login function

function login(){

	var email = document.getElementById('email1').value;
	var password = document.getElementById('password1').value;

	if(email == ""){
		document.getElementById('errorEmail1').innerHTML = 'Email is required';
	}
	else if (password == "") {
		document.getElementById('errorEmail1').innerHTML = '';
		document.getElementById('errorPassword1').innerHTML = 'Password is required';
	}
	else {
		document.getElementById('errorEmail1').innerHTML = '';
		document.getElementById('errorPassword1').innerHTML = '';
		loginmain(email,password);
	}
}

function loginmain(email,password)
{

	if(document.getElementById("login").value == "LOGIN"){
		document.getElementById("login").value = "LOGGING...";
	}

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
				var flg = this.responseText;
			    
				if(flg == 12345)
				{
					window.location.href = "after_login_dashboard/html/index.php";
				}
			    else if(flg == 0){
					document.getElementById('checkLogin').innerHTML = '<div class="alert alert-danger"><strong>Login Failed!</strong> Please enter valid credentials or verify your account if not.</div><div class="modal-body" id="checkLogin"><form><div class="form-group"><label for="email1">Email address</label><input type="email" required class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email"><small id="errorEmail1" style="color: red"></small></div><div class="form-group"><label for="password1">Password</label><input type="password" class="form-control" id="password1" placeholder="Enter Password" required><small id="errorPassword1" style="color: red"></small></div></form><input type="submit" value="LOGIN"  onclick="login();" id="login" class="form-control"></div>';
					if(document.getElementById("login").value == "LOGGING..."){
							document.getElementById("login").value = "LOGIN";
							document.getElementById('password').value="";
						}
				}
				else{
					window.location.href = "main_bookingPage.php";
				}

		}
	};

	xhttp.open("GET", "background/login_handler.php?email="+email+"&password="+password, true);
	xhttp.send();
}