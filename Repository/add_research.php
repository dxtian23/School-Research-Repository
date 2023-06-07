<?php
	include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device=width, initial=scale=1">
	<title>Input Research Data</title>
	<link href='bootstrap-5.0.2/css/bootstrap.min.css' rel='stylesheet'>
	<script src="bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
	<link rel = "stylesheet" type  = "text/css" href ="css/stylengkalawakan.css">
	<style type="text/css">
        .wrapper{
            width: 1000px;
            margin: 0 auto;	
        }
        label {
        	font-weight: bold;
        	font-family: arial;
        }

   
        body::before {    
     	 	content: "";
     		background-image:url('images/research.jpg');
  			background-size: contain;
  			border-radius: 5px;
  			background-position: center;
  			background-repeat: no-repeat;
		    position: absolute;
		    top: 0px;
		    right: 0px;
		    bottom: 0px;
		    left: 0px;
		    opacity: 0.2;
		}
		form {
			position: relative;
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
  		
    </style>
</head>
<body>
	<div class="container-solid">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img src="images/ssc2.png" height="80px" width="80px">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="navbar-link" href="home.php" id="Home">Home</a>
							</li>
							<li class="nav-item">
								<a class="navbar-link active" aria-current="page" href="add_research.php" id="New">Add New Research</a>
							</li>

							<li class="nav-item">
								<a class="navbar-link" href="research_res.php" id="Rrecord">Research Records</a>
							</li>
							<li class="nav-item">
                                <a class="navbar-link" href="users_credentials.php" id="users">Edit Credentials</a>
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



 <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2 style="text-align: center; margin-bottom: 30px;">Student Research</h2>
                    </div>
                    <p style="font-style: italic;">Please fill this form and submit to add employee record to the database.</p>
                    <form action="insert4res.php" method="post">
                    	<div class="form-group">
							<input type="text" name="id" class="form-control" hidden="true">
						</div>
                        <div class="form-group">
                            <label>Student Name </label>
                            <input type="text" name="studname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Research Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" name="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Department</label>
                            <select name="department" class="form-select">
						    <option value="College of Technology">College of Technology</option>
						    <option value="College of Business Management">College of Business Management</option>
						    <option value="College of Arts and Sciences">College of Arts and Sciences</option>
						    <!-- Add more options as needed -->
						  </select>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit" id="button">
                    </form>
                </div>
            </div>        
        </div>
    </div>

</body>
</html>