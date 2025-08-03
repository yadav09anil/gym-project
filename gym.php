<?php

if (isset($_POST['b1']))
{
	$fname = $_POST['t1'];
	$lname = $_POST['t1'];
	$email = $_POST['t1'];
	$phone = $_POST['t1'];
	$gender = $_POST['t1'];
	$dob = $_POST['t1'];
	$address = $_POST['t1'];
	$con= new mysqli ("localhost","root","","GYM");
	
	if ($con==true)
	{
		$cmd="INSERT INTO `form` (`fname`, `lname`, `email`, `p.no.`, `gender`, `dob`, `address`) VALUES ('$fname', '$lname', '$email', '$phone', '$gender', '$dob', '$address');";
	if ($con->query($cmd))
	{
		echo "<!DOCTYPE html>
		<html>
		<head>
		<link rel='stylesheet' type='text/css' href='gym.css'>
		</head>
		<body class='gym'>
		<h1>You have registered successfully</h1>
		<form method='post'><button type='submit' name='gohome'>Go back to Home</button></form>
		</body>
		</html>";
	}
	else
	{
	echo "Query problem";
	}
	}
	else
	{
		echo "Conection Problem";
	}
}

if(isset($_POST["gohome"])){
    header("Location:index.html");
}
?>
