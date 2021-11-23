<?php include("conn.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>view users</title>
	<style type="text/css">
		table,th,td,tr{
			color:blue;
			border:1px solid black;
		}
	</style>
</head>
<body>
	<?php

		if(!empty($_SESSION["admin"]))
		{ ?>
	<center><h1>Users</h1>
	<table>
		<tr><th>Email</th><th>Password</th><th>City</th><th>Language</th><th>Gender</th><th>File</th></tr>

	<?php

		$sql = "select * from reg;";
		$sel = mysqli_query($con,$sql);
		if(mysqli_num_rows($sel) > 0)
		{?>
			
			<?php while($row = mysqli_fetch_array($sel))
			{?>
				
					<tr><td><?php  echo $row["email"]; ?></td><td><?php  echo $row["password"]; ?></td><td><?php  echo $row["city"]; ?></td><td><?php  echo $row["lang"]; ?></td><td><?php  echo $row["gender"]; ?></td><td><?php  echo $row["file"]; ?></td></tr>

			<?php } ?>
		</table>
		<?php }
		else
			echo "Result not found";
	?>
</center>
<?php } 
else
{
	@header("location:login.php");
}
?>
</body>
</html>