<?php
include("session.php");
include("db_connection.php");

$query = "SELECT * FROM student_data";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Print Users Record</title>
    <link href="bootstrap-5.0.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
    <link rel = "stylesheet" type  = "text/css" href ="css/stylengkalawakan.css">
    <style type="text/css">
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Users Record</h2>
        <table class="table table-bordered table-striped table-success">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Department</th>
                </tr>
            </thead>
            <tbody class = "table-warning">
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['studname']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['department']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        window.onload = function() {
            window.print();
        }
    </script>
</body>
</html>
