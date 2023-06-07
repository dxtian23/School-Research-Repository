<?php
 include 'db_connection.php';  

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch the record based on the ID
    $query = "SELECT * FROM student_data WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $studname = $row['studname'];
        $title = $row['title'];
        $description = $row['description'];
        $date = $row['date'];
        $department = $row['department'];
        
        // Update the record in the database
        if (isset($_POST['update'])) {
            $studname = $_POST['studname'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $date = $_POST['date'];
            $department = $_POST['department'];
            
            $query = "UPDATE student_data SET studname = '$studname', title = '$title', description = '$description', date = '$date', department = '$department' WHERE id = '$id'";
            
            if (mysqli_query($conn, $query)) {
                echo "Record updated successfully.";
                header('location: research_res.php');
                exit;
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    } else {
        echo "No record found with the provided ID.";
        header('location:research_res.php');
        exit;
    }
} else {
    echo "Invalid ID.";
    header('location: research_res.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Record</title>
    <link href="bootstrap-5.0.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
   
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Edit Record</h2>
        <form method="POST">
        	<div class="form-group">
                <label for="id">ID:</label>
                <input type="text" class="form-control" id="id" name="id" value="<?php echo $id; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="studname">Student Name:</label>
                <input type="text" class="form-control" id="studname" name="studname" value="<?php echo $studname; ?>">
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $title; ?>">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="description" name="description" value="<?php echo $description; ?>">
            </div>
            <div class="form-group">
                <label for="password">Date:</label>
                <input type="date" class="form-control" id="date" name="date" value="<?php echo $date; ?>">
            </div>
            <div class="form-group">
                            <label for="department">Department: </label>
                            <select name="department" class="form-select">
                            <option value="College of Technology">College of Technology</option>
                            <option value="College of Business Management">College of Business Management</option>
                            <option value="College of Arts and Sciences">College of Arts and Sciences</option>
                            <!-- Add more options as needed -->
                          </select>
                        </div>
           
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>
</body>
</html>
