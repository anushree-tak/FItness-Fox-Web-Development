<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Fitness Fox" content="">
  <meta name="Team 11" content="">

  <title>Fitness Fox Homepage</title>

  <!-- Bootstrap core CSS -->
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- social media icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- FONTS -->
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed:400i" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
  <!-- Custom styles for homepage -->
 <link rel="stylesheet" href="css/hompage.css">
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Activity Minutes"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",       
		dataPoints: [
			{ y: 450 },
			{ y: 414},
			{ y: 520, indexLabel: "highest",markerColor: "red", markerType: "triangle" },
			{ y: 460 },
			{ y: 450 },
			{ y: 500 },
			{ y: 480 },
			{ y: 480 },
			{ y: 410 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross" },
			{ y: 500 },
			{ y: 480 },
			{ y: 510 }
		]
	}]
});
chart.render();

}
</script>
</head>

<body>

<header class="py-5 bg-image-full">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <img class="img-fluid d-block mx-auto" src="images/logo.png" alt="logo" width="75" height="75" align="left">
      <a class="navbar-brand" href="#" style="font-family: 'IBM Plex Sans Condensed', sans-serif; font-weight: 700; font-size: 2.5em; color: red;">FITNESS FOX</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
		  
          <li class="nav-item active">
		  <?php if($_SESSION[fname]==""){ ?>
            
		  <?php } else { ?>
		  <a class="nav-link" href="activity.php">My Workouts</a><?php } ?>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Resources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Contact</a>
          </li>
         
		  
		  <li class="nav-item">
                <?php if($_SESSION[fname]==""){ ?> 
				<a class="nav-link" href="loginregister.php">Login | Register</a>
				<?php } else{ ?>
				<a class="nav-link" href="logout.php">Logout</a><?php } ?>
				
				
			</li>
			
			
			 
        </ul>
      </div>
    </div>
  </nav>
  </header>


  <section class="py-5">
    <div class="container">
      <a name="about"></a>
      <h1>Your Activity Log</h1>
      <p class="lead">Helping You Achieve Healthier Lifestyle</p>
      <form method="post" action="my-workout.php"><button class="buttonsd">Add Workout</button></form>
    </div>
  </section>


<div class="container">
<div class="row">
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    
  </div>
  </div>



<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2019 | Developed by Team 11</p>
    </div>
    <!-- /.container -->
  </footer>
 <script  src="js/loginregister.js"></script>
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>