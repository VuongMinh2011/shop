<?php
$server = "52.6.114.59";
$user = "your_username";
$pass = "your-password";
$database = "php";
$connect = mysqli_connect($server,$user,$pass,$database); 
if (!$connect) {
	die("Connect Failed:".mysqli_connect_error());
	# code...
}
?>