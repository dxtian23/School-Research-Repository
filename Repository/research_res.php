<!--USERS.PHP-->

<?php
include("session.php");   
if (isset($_POST['search'])) {

	$value2search = $_POST['value2search'];
	$query = "SELECT * FROM student_data WHERE studname LIKE '%". $value2search. "%' OR title LIKE '%". $value2search . "%'";
	$result = filterRecord($query);
} else {
	$query = "SELECT *FROM student_data";
	$result = filterRecord($query);
}

function filterRecord($query) {
	include ("db_connection.php");
	$filter_result = mysqli_query($conn, $query);
	return $filter_result;
}
?>

<!DOCTYPE html>
<html>
<head>
	<link href='bootstrap-5.0.2/css/bootstrap.min.css' rel='stylesheet'>
	<script src="bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
	<link rel = "stylesheet" type  = "text/css" href ="css/stylengkalawakan.css">
	<style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
		.page-header{
			margin-top: 15px;
		}
		#button {
			margin-top: 5px;
		}
		#login{
			margin-left:5px;
		}
		.navbar{
			background-image: linear-gradient(to right top, #dfe52b, #dcdc25, #d8d41e, #d4cb17, #d0c310);
		}
		.navbar-link {
    		color: black; /* Default color for nav links */
    		font-family: tenorite;
    		font-size: 20px;
    		text-decoration: none;
    		border: 2px solid;
    		padding: 10px;
    		border-radius: 5px;
  		}

  		.navbar-link:active,
  		.navbar-link:focus,
  		.navbar-link:hover {
    	color: antiquewhite; /* Color for active nav link */
  		}
  		#New {	
  			margin-left: 10px;
  			margin-right: 10px;
  		}
  		#users {	
  			margin-left: 10px;
  			margin-right: 10px;
  		}
  		.table-bordered {
  			border:20px;
  		}
    </style>
</head>

<body>

	<div class="container-solid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php">
                    <img src="images/ssc2.png" height="80px" width="80px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="navbar-link"  href="home.php" id="Home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-link" aria-current="page" href="add_research.php" id="New">Add New Research</a>
                            </li>

                            <li class="nav-item">
                                <a class="navbar-link"  href="research_res.php" id="Rrecord">Research Records</a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-link active" aria-current="page" href="users_credentials.php" id="users">Edit Credentials</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-dark" type="submit">Search</button>
                                <a href = "logout.php" style="color:black;"><button class = "btn btn-outline-dark" id = "login"type="login">Logout</a></button>
                        </form>
                    </div>
            </div>
        </nav>
    </div>

	
	<div class = "container-fluid p-5 bg-primary text-white text-center">
	<h1>Research Database Display</h1>
	</div>
	
	<br>
	
	<div class="container">
	
	<form action = "" method = "POST">
		<input type = "search" name = "value2search" placeholder = "Search">
		<button type  ="submit" class = "signupbtn" name = "search"> Search </button>
	</form>

	<br>
	
	<table class="table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Title</th>
            <th>Description</th>
            <th>Date</th>
            <th>Department</th>
            <th class="control">Edit</th>
            <th class="control">Delete</th>
            <th class="control">Print</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['studname']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['department']; ?></td>
                <td><a href="edit_research.php?id=<?php echo $row['id']; ?>"><img src="images/edit-icon.png" alt="Edit"></a></td>
                <td><a href="delete_research.php?id=<?php echo $row['id']; ?>"><img src="images/delete-icon.png" alt="Delete"></a></td>
                <td><a href="print_research.php?id=<?php echo $row['id']; ?>"><img src="images/Print-icon.png" alt="Print"></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

	</div>
</body>
</html>



