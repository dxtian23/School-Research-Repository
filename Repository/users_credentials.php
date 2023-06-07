<!--USERS.PHP-->

<?php
include("session.php");   
if (isset($_POST['search'])) {

	$value2search = $_POST['value2search'];
	$query = "SELECT * FROM user WHERE username LIKE '%". $value2search. "%' OR password LIKE '%". $value2search . "%'";
	$result = filterRecord($query);
} else {
	$query = "SELECT *FROM user";
	$result = filterRecord($query);
}

function filterRecord($query) {
	include ("db_con.php");
	$filter_result = mysqli_query($mysqli, $query);
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
  		#header{
  			background-color: darkgray;
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

	
	<div class = "container-fluid p-5 text-white text-center" id="header">
	<h1>Student Credentials</h1>
	</div>
	
	<br>
	
	<div class="container">
	
	<form action = "" method = "POST">
		<input type = "search" name = "value2search" placeholder = "Search">
		<button type  ="submit" class = "signupbtn" name = "search"> Search </button>
	</form>

	<br>
	
	<?php
	
	echo "<table border  = '1'>
	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Password</th>
	</tr>";
	
	while ($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['username'] . "</td>";
		echo "<td>" . $row['password'] . "</td>";
		
		echo "<td><a href ='edit.php?id=".$row['id']."'><img src = 'images/edit-icon.png'   alt = 'Edit'></a></td>";
		echo "<td><a href ='delete.php?id=".$row['id']."'><img src = 'images/delete-icon.png'   alt = 'Delete'></a></td>";
		echo "<td><a href ='print.php?id=".$row['id']."'><img src = 'images/Print-icon.png'   alt = 'Print'></a></td>";
		
		echo "</tr>";
	}
	echo "</table>";
	?>
	</div>
</body>
</html>



