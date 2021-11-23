<?php include("conn.php");  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<center><h1>Login</h1>
		<form action="loginquery.php" onsubmit="return validate();" method="post">
		Email:<input type="text" name="email" id="email" placeholder="Enter your email"><br>
		Password:<input type="password" name="pass" id="pass" placeholder="Enter your password"> <br>
		<input type="submit" name="submit" id="submit" value="Login"><br>
		<input type="reset" name="reset">
		</form>
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

</script>