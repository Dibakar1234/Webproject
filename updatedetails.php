<?php include("conn.php");

if(isset($_POST["spass"]))
{
	$email = $_SESSION["user"];
	$password = password_hash($_POST["pass"],PASSWORD_DEFAULT);
	$upas = "update reg set password='".$password."' where email='".$email."';";
	mysqli_query($con,$upas);
	@header("location:WelcomeUser.php");
}
if(isset($_GET["scity"]))
{
	$email = $_SESSION["user"];
	$ucity = "update reg set city='".$_GET["city"]."' where email='".$email."';";
	mysqli_query($con,$ucity);
	@header("location:WelcomeUser.php");

}
if(isset($_GET["slang"]))
{
	$email = $_SESSION["user"];
	$ulang = "update reg set lang='".$_GET["lang"]."' where email='".$email."';";
	mysqli_query($con,$ulang);
	@header("location:WelcomeUser.php");
}
if(isset($_GET["sgender"]))
{
	$email = $_SESSION["user"];
	$ugen = "update reg set gender='".$_GET["gender"]."' where email='".$email."';";
	mysqli_query($con,$ugen);
	@header("location:WelcomeUser.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Details</title>
</head>
<body>
	<?php

		if(!empty($_SESSION["user"]))
		{ ?>
	<center><h1>Update Details</h1></center>
		<form action="updatedetails.php" method="post" onsubmit="return validate();">
			New Password:<input type="password" name="pass" id="pass"><br><br>
			Confirm Password:<input type="password" name="cpass" id="cpass">&nbsp;&nbsp;&nbsp;
			<input type="submit" name="spass" value="Update">
		</form><br>
		<form action="updatedetails.php" method="get">
			City:<input type="text" name="city">
			<input type="submit" name="scity" value="Update">
		</form><br>
		<form action="updatedetails.php" method="get">
			Language:<input type="text" name="lang">
			<input type="submit" name="slang" value="Update">
		</form><br>
		<form action="updatedetails.php" method="get">
			Gender:<input type="text" name="gender">
			<input type="submit" name="sgender" value="Update">
		</form>
		
		<?php } 
else
{
	@header("location:login.php");
}
?>

</body>
</html>
<script type="text/javascript">
function validate()
{
		var pass = document.getElementById("pass").value;
		var cpass = document.getElementById("cpass").value;
		var x = true;
    	var flag=0;    
    	var spc=0,cap=0,sml=0;
    	for(var i=0;i<pass.length;i++)
    	{       
        	if((pass.charCodeAt(i)>32 && pass.charCodeAt(i)<44) || pass.charCodeAt(i)==64)
            	spc++;
            if(pass.charCodeAt(i)>64 && pass.charCodeAt(i)<91)
            	cap++; 
            if(pass.charCodeAt(i)>96 && pass.charCodeAt(i)<123)
            	sml++;  
        	if(spc>0 && cap>0 && sml>0)
        	{            
            	flag=1;
            	break;
        	}   
    	}
    	if(flag==0)
    	{
        	alert("Password must has a lower case letter & a capital letter & a special character");
        	document.getElementById("pass").focus();
        	x = false;            
    	}
		if(pass.length<8)
		{
			alert("Password should be minimum 8 charcters long");
			document.getElementById("pass").focus();
			x = false;
		}

		if(pass!=cpass)
		{
			alert("Password not matched");
			document.getElementById("cpass").focus();
			x = false;

		}
		
		return x;
}

</script>
