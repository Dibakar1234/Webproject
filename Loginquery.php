<?php include("conn.php");

$email = $_POST["email"];
$password = $_POST["pass"];
if(!($email=="admin@mail.com"))		// checking if user is admin or not,
{
										// normal user part					                                    
$sql = "select * from reg where email='".$email."';";
$select = mysqli_query($con,$sql);

if(mysqli_num_rows($select) == 1)
{
		$row=mysqli_fetch_array($select);
	
		if(password_verify($password, $row["password"]))
		{
			$_SESSION["user"] = $email;
			@header("location:WelcomeUser.php");
		}
		else
			echo "Password and Email not matched";
	
}
else
	echo "Password and Email not matched";
	
}
else
{										// Admin section
$sql = "select * from admin where email='".$email."';";
$select = mysqli_query($con,$sql);

if(mysqli_num_rows($select) == 1)
{
	$row = mysqli_fetch_array($select);
	
		if(password_verify($password, $row["password"]))
		{
			$_SESSION["admin"] = $email;
			@header("location:WelcomeAdmin.php");
		}
		else
			echo "Password and Email not matched";
	
}
else
	echo "Password and Email not matched";
}

?>


