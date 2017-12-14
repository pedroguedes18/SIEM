	function check_username()
	{

		var formulario = document.myForm

		var username = formulario.username.value

		var password = formulario.password.value

		var submitOK="True"

		if (username == "" || password == "") {
			 alert("Complete all fields")
			 submitOK="False"
		}
		
		if (submitOK=="False")
		{
			 return false
		}
	}
	
	function Password_error(){
		alert("Wrong Password or Username, please try again.")
		
		document.cookie = "password_aux=0; expires=0; path=/"; 
	}
	
	function Username_Exists(){
		alert("Username chosen already exists, please try again.")
		
		document.cookie = "username_aux=0; expires=0; path=/"; 
	}
	
	function Email_error(){
		alert("Invalid email format")
		
		document.cookie = "email_aux=0; expires=0; path=/"; 
	}
	
	function showUserResult(str){
		if (str.length == 0) {
			document.getElementById("txtHint").innerHTML = "";
			return;
		} else {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("txtHint").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", "JavaScript/check_username.php?q=" + str, true);
			xmlhttp.send();
		}
	}