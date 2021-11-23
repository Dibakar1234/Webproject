<?php
session_start();
$con = mysqli_connect("localhost","root","") or die("Connection Error!!!");
mysqli_select_db($con,"intern") or die("Database Error!!!!");
?>