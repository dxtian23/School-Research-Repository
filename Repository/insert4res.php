<?php
include_once 'db_connection.php';
if(isset($_POST['submit']))
{
$id = $_POST['id'];
$studname = $_POST['studname'];
$title = $_POST['title'];
$description = $_POST['description'];
$date = $_POST['date'];
$department = $_POST['department'];


$sql = "INSERT INTO student_data (id,studname,title,description,date,department)
VALUES ('$id','$studname','$title','$description','$date','$department')";
if (mysqli_query($conn,$sql)) {
	header("location:research_res.php");
	} else {
		echo "Error: " . $sql . ":-" . mysqli_error($mysqli);
		}
		mysqli_close($mysqli);
		}
?>
