<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device=width, initial=scale=1">
	<title>User's Form</title>
	<link href='bootstrap-5.0.2/css/bootstrap.min.css' rel='stylesheet'>
	<script src="bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
	<style type="text/css">
        .wrapper{
            width: 1000px;
            margin: 0 auto;
            border: 3px solid black;
            border-radius: 10px; 
			margin-top: 40px;
        }
        .wrapper::before {    
     	 	content: "";
     		background-image: url('images/ssc2.png');
  			background-size: contain;
  			border-radius: 5px;
  			background-position: center;
  			background-repeat: no-repeat;
		    position: absolute;
		    top: 0px;
		    right: 0px;
		    bottom: 0px;
		    left: 0px;
		    opacity: 0.1;
		}
		form {
			position: relative;
			justify-content: center;
		}
		.form-group{
			font-weight: bold;
		}
		label{
			font-size: 20px;
		}
		.page-header{
			margin-top: 15px;
		}
		#button {
			margin-top: 5px;
		}
		#header1 {
			font-family: rockwell;
			height: 120px;
			justify-content: center;
			align-items: center;
			text-align: center;
			background-image: linear-gradient(to right top, #dfe52b, #dcdc25, #d8d41e, #d4cb17, #d0c310);
			color: #444B4B;
			margin: 0 auto;
			padding: 10px;
		}
		.imgcontainer {
			margin-bottom: 18px;
		}
		#button {
			margin-bottom: 20px;
			font-weight: bold;
			width:150px;
			height:50px;
			border-radius: 5px;
			margin-top: 15px;
		}
		#checkboxu {
			margin-top: 30px;
			margin-right: 7px;
			margin-left: 15px;
		}

		.footer {
		  /* Adjust footer styles as needed */
		  	position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
		}
		.form-control {
			height: 50px;
		}
		h1 {
			font-weight: bold; 
			font-size: 50px; 
			font-style: "Crimson Text", Sans-serif;
			color: #595959;
		}
		p {
			font-size: 20px; 
			font-weight: bold; 
			text-align: center; 
			font-size: 30px;
			font-family: "OpenSans", Sans-serif;
		}

		
    </style>
</head>
<body>

<div class="container-fluid text-center" id="header1">
<h1 class="mt-4">SIQUIJOR STATE COLLEGE</h1>
</div>


 <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">         
                    <form action="new_insert.php" method="post">
                    	  <p class="mt-5">LOGIN PAGE</p>
							<div class="form-group">
								<input type="text" name="id" class="form-control" hidden="true">
							</div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Confirm Password</label>
								<input type="password" name="cpass" class="form-control" required>
							</div>

							
							<input type="submit" class="btn btn-primary ml-2" name="submit" value="LOG IN" id="button">
							<input type="checkbox" class="form-check-input" id="checkboxu" checked>Remember Me
							
                    </form>

                    <form >
                    	<hr>
						<h6 class = "text-center">
						Don't have an account yet?<a href="signup.php"><button class = "btn" id="login"type="login">Sign Up</a></button>
					</h6>
                    </form>
					
					<br>
					
					
                </div>
            </div>        
        </div>
    </div>
   					<footer class  = "footer text-center text-lg-start bg-light ">
						<div class = "text-center p-4" style = "background-color: rgba(0,0,0,0.30);">
							Copyright &COPY; 2023 | Made By: Deion Christian I. Abog 
							<span class="text-muted mx-2">|</span>
							<a class = "text-reset fw-bold" href = "https://siquijorstate.edu.ph/">Siquijor State College</a>
						</div>
					</footer>
</body>
</html>