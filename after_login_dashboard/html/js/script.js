
//function change password


function changeProfile(){

	var profile_contact_no = document.getElementById('profile_contact_no').value;
	
	if(profile_contact_no == '')
	{
		document.getElementById('error_profile_contact_no').innerHTML = 'Phone No required';
	}
	else
	{
	

		document.getElementById('error_profile_contact_no').innerHTML = '';
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
						var flg = this.responseText;
							
						if(flg == 0){
						}
						else{

							document.getElementById('checkChangeProfile1').innerHTML = '<div class="alert alert-success"><strong>Profile Updated Successfully!</strong></div>';
						}

				}
			};

			xhttp.open("GET", "background/userProfile_handler.php?profile_contact_no="+profile_contact_no, true);
			xhttp.send();


	}

}




//function change password


function changePassword(){

	var currPassword = document.getElementById('currPassword').value;
	var newPassword = document.getElementById('newPassword').value;
	var confirmNewPassword = document.getElementById('confirmNewPassword').value;

	if(currPassword == '')
	{
		document.getElementById('errorcurrPassword').innerHTML = 'Current Password required';
	}
	else if(newPassword == '')
	{
		document.getElementById('errorcurrPassword').innerHTML = '';
		document.getElementById('errornewPassword'). innerHTML = 'New Password required';
	}
	else if(newPassword != confirmNewPassword)
	{
		document.getElementById('errorcurrPassword').innerHTML = '';
		document.getElementById('errornewPassword'). innerHTML = '';
		document.getElementById('errorconfirmnewPassword').innerHTML = 'Password does not match';
	}
	else
	{
		if(document.getElementById("changePassword").value == "SUBMIT"){
		document.getElementById("changePassword").value = "SUBMITTING...";
		}

		document.getElementById('errorcurrPassword').innerHTML = '';
		document.getElementById('errornewPassword'). innerHTML = '';
		document.getElementById('errorconfirmnewPassword').innerHTML = '';
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
						var flg = this.responseText;
							
						if(flg == 0){
							document.getElementById('checkChangePassword').innerHTML = '<div class="alert alert-danger"><strong>Password Wrong!</strong> Please enter valid Account Password</div>';
							if(document.getElementById("changePassword").value == "SUBMITTING..."){
									document.getElementById("changePassword").value = "SUBMIT";
								}
							document.getElementById('currPassword').value = '';
							document.getElementById('newPassword'). value = '';
							document.getElementById('confirmNewPassword').value = '';
						}
						else{

							document.getElementById('checkChangePassword').innerHTML = '<div class="alert alert-success"><strong>Password Successfully Changed!</strong></div>';
							if(document.getElementById("changePassword").value == "SUBMITTING..."){
									document.getElementById("changePassword").value = "SUBMIT";
								}

							document.getElementById('currPassword').value = '';
							document.getElementById('newPassword'). value = '';
							document.getElementById('confirmNewPassword').value = ''
						}

				}
			};

			xhttp.open("GET", "background/change_password_handler.php?currPassword="+currPassword+"&newPassword="+newPassword, true);
			xhttp.send();


	}

}


//function change password


function new_folder(){

	var folder_name = document.getElementById('folder_name').value;
	
	if(folder_name == '')
	{
		document.getElementById('error_folder_name').innerHTML = 'Folder Name is required';
	}
	else
	{
	

		document.getElementById('error_folder_name').innerHTML = '';
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
						var flg = this.responseText;
							
						if(flg == 0){
							document.getElementById('check_folder_creation').innerHTML = '<div class="alert alert-warning"><strong>Folder Already Exist!</strong></div>';

						}
						else{

							document.getElementById('check_folder_creation').innerHTML = '<div class="alert alert-success"><strong>Folder Created Successfully!</strong></div>';
						}

				}
			};

			xhttp.open("GET", "background/folder_creation_handler.php?folder_name="+folder_name, true);
			xhttp.send();


	}

}

