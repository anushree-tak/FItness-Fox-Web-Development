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
          <li class="nav-item ">
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
      <h1>Add Activity </h1>
      <p class="lead">Entry Activity Details</p>
      <form method="post" action="" class="acty">
	  
	  
	  Select a time: <input type="time" name="usr_time">
	 Date: <input type="date" name="bday">
	  Activity Name: <input type="text" name="actname">
	  Activity Duration (Minutes): <input type="text" name="duration">
	  <input type="submit" name="create" class="buttonsd" value="Create">
	  
	  
	  </form>
	  
	  <?php
		if($_POST['create']){
				$sql1="insert into `activity_details` values('','$_POST[usr_time]','$_POST[bday]','$_POST[actname]','$_POST[duration]','".$_SESSION['email']."')";
				$abc=mysql_query($sql1);
				if($abc)
				{
					echo"<script>alert('Activity Successfully Added')</script>";
				}
				else
				{
					echo"<script>alert('Upload Fail')</script>";
				}
			
		}
		?>
    </div>
  </section>






<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2019 | Developed by Team 11</p>
    </div>
    <!-- /.container -->
  </footer>
 <script  src="js/loginregister.js"></script>
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 
  <script>
    $( document ).ready(function() {
        $('input').attr('required','required');
    });
</script>
 
</body>

</html>