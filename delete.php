<?php include("conn.php"); 
if(isset($_POST["sub"]))
{
	$email = $_POST["email"];
	$sqls = "select * from reg where email='".$email."';";
	$sel = mysqli_query($con,$sqls);
	if(mysqli_num_rows($sel) > 0)
	{
		$sqld = "delete from reg where email='".$email."';";
		$sel = mysqli_query($con,$sqld);
		echo "<center><h1>Delete Successful</h1></center>";
	}
	else
	{
		echo "<center><h1>Delete not Successful</h1></center>";
	}
	
}


?>

<html>
<html>
<head>
	<title>Delete User</title>
</head>
<body>
	<?php

		if(!empty($_SESSION["admin"]))
		{ ?>
	<center><h1>Delete User</h1></center>
	<form action="delete.php" method="post">
		Email: <input type="text" name="email">
		<input type="submit" name="sub" value="Delete">
		
	</form>
	<?php } 
else
{
	@header("location:login.php");
}
?>

</body>
</html>