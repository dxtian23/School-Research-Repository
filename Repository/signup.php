<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device=width, initial=scale=1">
	<title>Signup Form</title>
	<link href='bootstrap-5.0.2/css/bootstrap.min.css' rel='stylesheet'>
	<script src="bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
	
	<style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
            border: 2px solid black;
            padding: 10px;
        }
		.page-header{
			margin-top: 15px;
		}
		#button {
			margin-top: 5px;
			background-color: black;
			border: 2px solid black;
			color: white;
			margin-bottom: 20px;
			font-weight: bold;
			border-radius: 5px;
		}
		#login{
			margin-left:5px;
			border: 0;
			background-color: transparent;

		}
		body {
			background-image: linear-gradient(to right top, #bed22f, #c6dd2e, #cde82d, #d5f42c, #dcff2a);
		}
		#header {
			font-family: fantasy;
			color: black;
			font-size: 60px;
		}
		#jumboass {
			margin-top: -15px;
			margin-bottom: 15px;
		}
		.form-group {
			font-weight: bold;
			width:455px;	
		}
		.form-control {
			height: 40px;
		}
		
		.btn {
			width: 455px;
			height: 50px;
		}

    </style>
</head>
<body>
	

<div class="container-fluid p-5 text-center">
	<img src="images/ssc2.png" width="120px" height="120px" id="jumboass">
	<h1 id="header">Sign Up Form</h1>
</div>


 <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-11">
                    <form action="insert.php" method="post"> 
                        <div class="form-group">
                        	<label style="font-style: italic;">Create an account first before logging in.</label>
                        	<br>
                        	<br>
                        	<div class="form-group">
								<input type="text" name="id" class="form-control" hidden="true">
							</div>
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        


                        <input type="submit" class="btn" name="submit" value="Create Account" id="button">
                        <h6 class = "text-center">
						Already have an account?  <a href="login.php" style="color: blue;"><button id="login"type="login">Log in</a></button>
						</h6>
                    </form>
                </div>
            </div>        
        </div>
    </div>

</body>
</html>