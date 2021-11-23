<?php include("conn.php");  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>
	<?php

	if(!empty($_SESSION["user"]))
	{ 	
		session_destroy();
		@header("location:login.php?");
	 } 
	else if(!empty($_SESSION["admin"]))
	{ 
		session_destroy();
		@header("location:login.php?");
	 }
else
{
	@header("location:login.php");
}
?>

</body>
</html>