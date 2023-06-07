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
	<script src="timescript.js"></script>
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
		#logout{
			margin-left:5px;
		}
		.navbar{
			background-image: url('images/bg1.jpg');
            border-bottom: 1px solid black;
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
       
        #headernew {
            background-image: url('images/bg1.jpg');
            text-align: center;
            height: 150px;
            margin: 0 auto;
            padding: 10px;
            color: white;
            font-weight: bold;
            color: black;
        }
        #headernew h1{
            font-family: timesnewroman;
            color: black;
        }
        #users {    
            margin-left: 10px;
            margin-right: 10px;
        }'
        #myCarousel {
            width: 100%;
        }
        .carousel-item{
            width: 900px;
            justify-content: center;
            align-items: center;
            margin-left: 300px;
        } 
        .carousel-container {
            background-color: #f2f2f2; /* Set your desired background color here */
            
        }
       
        #firstLabel {
            margin-right: 100px;
            margin-left: 10px;
            text-transform: uppercase;
            font-family: opensans;
            font-weight: bold;
            font-size: 30px;
        }
        .col-sm-4 {
            border-top: 1px solid black;
            border-right: 1px solid black;
            border-radius: 5px;
        }
        h2 {
            text-align: center;
        }
        #vmgo {
            background-image: url('images/bg1.jpg');
            background-size: cover;
            color: black;
            padding: 3px;
        }
        #description {text-alogn: justify;
            font-size: 18px;
        }
         .carousel-container {
    position: relative;
  }

  .carousel-controls {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
  }

  .faint-button {
    opacity: 0.5;
  }
    </style>
</head>
<body>
<div class="container-solid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="images/ssc2.png" height="80px" width="80px">
                    <label id="firstLabel">Student Research Repository</label>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                             <a class="navbar-link active" aria-current="page" href="home.php" id="Home">Home</a>
                         </li>
                        <li class="nav-item">
                              <a class="navbar-link" href="add_research.php" id="New">Add New Research</a>
                         </li>

                        <li class="nav-item">
                             <a class="navbar-link" href="research_res.php" id="Rrecord">Research Records</a>
                        </li>
                        <li class="nav-item">
                               <a class="navbar-link" href="users_credentials.php" id="users">Edit Credentials</a>
                        </li>
                    </ul>
                    <form>
                        <a href = "logout.php" style="color:black;"><button class = "btn btn-outline-dark" id = "logout" type="login">Logout</a></button>
                    </form>
                </div>
            </div>
        </nav>
    </div>


	

<div class="container-fluid" id="headernew">
<h1>Welcome To My Homepage</h1>
<p id="phst-time"></p>
<p id="current-date"></p>
</div>

<div class="carousel-container">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">

      <!-- Slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class = "d-block w-100" src="images/carousel1.jpg" width="100" height="500"alt="Image 1">
        </div>
        <div class="carousel-item">
          <img class = "d-block w-100" src="images/carousel2.jpg" width="100" height="500"alt="Image 2">
        </div>
        <div class="carousel-item">
          <img class = "d-block w-100" src="images/ssc2.png"width="100" height="500" alt="Image 3">
        </div>
      </div>

    <div class="carousel-controls">
        <button class="faint-button" onclick="pauseCarousel()">Pause</button>
        <button class="faint-button" onclick="continueCarousel()">Continue</button>
    </div>

    <script>
     var myCarousel = document.getElementById('myCarousel');

  function pauseCarousel() {
    // Pause the carousel
    var carousel = bootstrap.Carousel.getInstance(myCarousel);
    carousel.pause();
  }

  function continueCarousel() {
    // Continue the carousel
    var carousel = bootstrap.Carousel.getInstance(myCarousel);
    carousel.cycle();
  }
</script>
    </div>
</div>

<div class="container-solid" id="vmgo">
    <div class="row">
        <div class="col-sm-4">
            <h2>VISION</h2>
            <p id="description">Siquijor State College as the Center of Excellence in Higher and  Technical-Vocational education in the province
            of Siquijor.</p>
        </div>
        <div class="col-sm-4">
            <h2>MISSION</h2>
            <p id="description">To provide effective and excellent Higher and Technical-
            Vocational Education in the different areas through
            instruction, research, extension and production and
            serve as catalyst and partner for local, regional and national
            growth and development.</p>
        </div>
        <div class="col-sm-4">
            <h2>GOALS OF THE COLLEGE OF TECHNOLOGY</h2>
            <p id="description">The College of Technology prepares the students to be
            professionals in their field of specialization and improve the
            quality of life of the people as it trains the nation’s
            manpower in technology-based education for competitive
            skills requirement.</p>
        </div>
    </div>
</div>


</body>
</html>