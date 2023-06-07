<?php
include_once 'db_connection.php';
if(isset($_POST['submit']))
{
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];


$sql = "INSERT INTO user (id, username,password)
VALUES ('$id','$username','$password')";
if (mysqli_query($conn,$sql)) {
	header("location:login.php");
	} else {
		echo "Error: " . $sql . ":-" . mysqli_error($mysqli);
		}
		mysqli_close($mysqli);
		}
?>
