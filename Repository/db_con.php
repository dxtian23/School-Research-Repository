<?php

$servername= 'localhost';
$username= 'root';
$password= '';
$dbname= "student";
$mysqli=mysqli_connect($servername,$username,$password,"$dbname");

if(!$mysqli){
	die('Could not Connect MySql Server:' .mysql_error());
}

?>