<?php include("../connection.php"); ?>
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
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
		  
          
          <li class="nav-item">
            <a class="nav-link" href="#resources">Resources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
         
		  
		  <li class="nav-item">
                <?php if($_SESSION[ad_email]==""){ ?> 
				<a class="nav-link" href="logout.php">Logout</a>
				<?php }  ?>
				
				
				
			</li>
			
			
			 
        </ul>
      </div>
    </div>
  </nav>
  </header>
<section class="py-5">
    <div class="container">
        
        <div class ="aside_section"> 
            <h2>
            Hello Manager!
            </h2>
            <p>
            Please select a date range to view workout history
            </p>
			<form class="form-inline" action="./show.php">
           <div class="form-group col-xs-6 asdf">
                
                From:  <input  class="form-control input-group-lg reg_name" type="date" name="fromdate"/>
            </div>

            <div class="form-group col-xs-6 asdf">
               
                To: <input class="form-control input-group-lg reg_name" type="date" name="todate"/>
            </div>
            <button type="submit" class="btn btn-success sfddf">View Workout log</button>
			</form>
		<div class="admin_log">
    <table class="table table-striped">
  <thead id="first_row">
    <tr>
      <th scope="col">#</th>
	  <th scope="col">Activity User</th>
      <th scope="col">Activity Name</th>
      
      <th scope="col">Date</th>
      <th scope="col">Time</th>
        <th scope="col">Duration</th>
        
        
    </tr>
  </thead>
  <tbody>
  
  <?php
  if( isset($_GET['fromdate']) && isset($_GET['todate']) ){
      $sql="SELECT * FROM `activity_details` WHERE `birthdate` >= '".$_GET['fromdate']."' AND `birthdate` <= '".$_GET['todate']."'";
  }else{
      $sql="select * from `activity_details`";
  }
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
	
echo"
    <tr>
   
      <td>$row[act_id]</td>
	  <td>$row[uploaded_by]</td>
      <td>$row[act_name]</td>
      
        <td>$row[birthdate]</td>
        <td>$row[time]</td>
        <td>$row[duration]</td>
        
    </tr>";
}

?>
    
  </tbody>
</table>
        </div>	
            <!--FOR EMPTY WHITE SPACE-->
  <div style="height: 50px;"></div>
        </div>
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