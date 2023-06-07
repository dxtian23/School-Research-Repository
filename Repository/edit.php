<?php
 include 'db_connection.php';  

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch the record based on the ID
    $query = "SELECT * FROM user WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $username = $row['username'];
        $password = $row['password'];
        
        // Update the record in the database
        if (isset($_POST['update'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $query = "UPDATE user SET username = '$username', password = '$password' WHERE id = '$id'";
            
            if (mysqli_query($conn, $query)) {
                echo "Record updated successfully.";
                header('location: users.php');
                exit;
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    } else {
        echo "No record found with the provided ID.";
        header('location: users.php');
        exit;
    }
} else {
    echo "Invalid ID.";
    header('location: users.php');
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
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>
</body>
</html>
