<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device=width, initial=scale=1">
	<title>Offline Bootstrap</title>
	<link href='bootstrap-5.0.2/css/bootstrap.min.css' rel='stylesheet'>
	<script src="bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
	<link rel = "stylesheet" type  = "text/css" href ="css/mahstyle.css">
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
		body {
			background-image: linear-gradient(to right top, #dfe52b, #dcdc25, #d8d41e, #d4cb17, #d0c310);
		}
		#header {
			font-family: congenial;
			font-weight: bold;
			color: black;

		}
    </style>
</head>
<body>
	

<div class="container-fluid p-5  text-center">
<h1  id="header">Students Record</h1>
</div>


 <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-11">
                    <div class="page-header">
                        <h2>Contact Form</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="insert.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="number" name="mobile" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit" id="button">
                    </form>
                </div>
            </div>        
        </div>
    </div>

</body>
</html>