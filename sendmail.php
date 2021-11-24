<?php include("conn.php");

$to_email = $_POST["email2"];
$sql = "select * from reg where email='".$to_email."';";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
if($num == 1)
{
	$row = mysqli_fetch_array($result);
	$pass = $row["password"];
	$subject = "Simple Email Test for recover password using PHP";
	$body = "Hi, your password is: ".$pass;
	$headers = "From: mailtestphp9@gmail.com"; 
	if (mail($to_email, $subject, $body, $headers)) 
   		echo "Your password successfully sent to Email id: ".$to_email; 
	else 
   		echo "Email sending failed...";		
}
else
	echo "Email id not exists";
