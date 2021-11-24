<?php include("conn.php");

$email = $_POST["email"];
$password = password_hash($_POST["pass"],PASSWORD_DEFAULT);
$city = $_POST["city"];
$lang = "";
foreach ($_POST["lang"] as $value) 
{
	$lang = $lang.", ".$value;
}

$gender = $_POST["gen"];
$file = $_POST["img"];

$sql ="insert into reg values('".$email."','".$password."','".$city."','".$lang."','".$gender."','".$file."');";

$insert = mysqli_query($con,$sql);

if($insert)
	@header("location:login.php");
else

	echo "User Exists";


?>

