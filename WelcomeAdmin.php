
<?php include("conn.php");  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	
	
    <center><h1>Welcome to the Admin site</h1></center>

    <?php

		if(!empty($_SESSION["admin"]))
		{ ?>
    <h3>View Users</h3>	
    <form action="view.php">
    	<button> View </button>
    </form><br>
    <h3>Add Users</h3>
    <form action="add.php">
    	<button> Add </button>
    </form><br>
    <h3>Delete Users</h3>
    <form action="delete.php">
    	<button> Delete </button>
    </form><br>
    <center>
    <form action="logout.php">
    	<button> Logout </button>
    </form></center>
    <?php } 
else
{
	@header("location:login.php");
}
?>



</body>
</html>