
<?php include("conn.php");  ?>

<!DOCTYPE html>
<html>
<head>
	<title> Registration Form </title>
</head>
<body>
	<form action="regquery.php" method="post" onsubmit="return validate();" >
		<center>
			<div ><h1>Registration </h1><br>
				Email:<input type="text" name="email" id="email" placeholder="Enter your email"><br><br>
				Password:<input type="password" name="pass" id="pass" placeholder="Enter your password"> <br><br>
				Confirm Password:<input type="password" name="cpass" id="cpass" placeholder="Enter your password again"><br><br>
				City: <select name="city" id="city">
					<option value="-1" selected>--Select--</option>
					<option value="Kolkata">Kolkata</option>
					<option value="Mumbai">Mumbai</option>
					<option value="Bangalore" >Bangalore</option>
				</select><br><br>
				Programming languages:
				<input type="checkbox" name="lang[]" id="c" value="c"/>
				<label>C</label>
				<input type="checkbox" name="lang[]" id="java" value="java"/>
				<label>Java</label>
				<input type="checkbox" name="lang[]" id="php" value="php" />
				<label>PHP</label><br><br>
				Gender: 
				<input type="radio" name="gen" id="gen" value="male"/>Male
				<input type="radio" name="gen" id="gen" value="female"/>Female<br><br>
				Select image:<input type="file" name="img" id="img" accept="image/*"><br><br>
				<input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="reset" name="res"><br><br>				
			</div>
		</center>
	</form>
<center>Already have an account?&nbsp;&nbsp;<a href="login.php"><button>Login</button></a></center>
</body>
</html>
<script type="text/javascript">

function validate()
	{
		var x=true;
		var email = document.getElementById("email").value;
		var atpos = email.indexOf("@");
		var dotpos = email.indexOf(".");
		var pass = document.getElementById("pass").value;
		var cpass = document.getElementById("cpass").value;


		//Email Validation

		if (atpos<1 || dotpos< atpos+2 || dotpos+2 >= email.length)
		{
			alert("please enter a valid email");
			document.getElementById("email").focus();
			x = false;

		}
		

		// password validation 

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
