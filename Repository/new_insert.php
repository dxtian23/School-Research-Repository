<?php
	include("config.php");
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpass = $_POST['cpass'];
	$username = $mysqli->real_escape_string($username);

	if ($password !== $cpass) {
        header('location: login.php');
        exit;
    }
	
	$query = "SELECT username, password FROM user WHERE username = '$username' AND password = '$password'";
	$result = $mysqli->query($query);
	
	if($result->num_rows == 1){
		$_SESSION['user'] = $username;
		header('location: home.php');
	} else {
		header('location: login.php');
	}


?>