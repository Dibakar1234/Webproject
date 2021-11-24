<?php include("conn.php");  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<center><h1>Login</h1>
		<form action="loginquery.php" onsubmit="return validate();" method="post">
		Email:<input type="text" name="email" id="email" placeholder="Enter your email"><br><br>
		Password:<input type="password" name="pass" id="pass" placeholder="Enter your password"> 
		<br><br>
		<input type="submit" name="submit" id="submit" value="Login">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="reset">

		</form><br><br>
		<form action="sendmail.php" onsubmit="return validate2();" method="post">
		Email:<input type="text" name="email2" id="email2" placeholder="Enter your email">&nbsp;&nbsp;
		<input type="submit" name="foget" id="forget" value="Forget Password">	
		</form><br><br>
		Don't have an account?&nbsp;&nbsp;<a href="reg.php"><button>Register</button></a>
	</center>
	
	

</body>
</html>
<script type="text/javascript">
	
function validate()
{
	var x = true;
	var email = document.getElementById("email").value;
	var pass = document.getElementById("pass").value;
	if(email=="")
	{
		alert("Please enter a email address");
		document.getElementById("email").focus();
		x = false;
	}
	if(pass=="")
    {
        alert("Please enter the password");
        document.getElementById("pass").focus();
        x = false;
    }
    return x;
}

function validate2()
{
	var email = document.getElementById("email2").value;
	if(email=="")
	{
		alert("Please enter a email address");
		document.getElementById("email2").focus();
		return false;
	}
	return true;
}

</script>
