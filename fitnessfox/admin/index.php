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

<div class="form">

  

    <div class="tab-content">
        

       
            <h1 class="dfr">Hello Admin </h1>

            <form action="" method="post">

                <div class="field-wrap">
                    
                    <input type="email"required autocomplete="off" name="email1" placeholder= "Email Address"/>
                </div>

                <div class="field-wrap">
                    
                    <input type="password"required autocomplete="off" name="password1" placeholder= "Password"/>
                </div>

              

				<input type="submit" class="button button-block" name="login" value="Log In"/>

            </form>
			
			<?php
				if($_POST['login'])
				{
					$n=$_POST['email1'];
					$p=$_POST['password1'];
					$sql2="select * from `admin` where `ad_email`='admin2019@gmail.com' and `ad_pass`='123456'";
					//echo $sql;
					//die;
					$query1=mysql_query($sql2);
					$row1=mysql_fetch_array($query1);
					if(!$row1)
					{
						echo"<script> alert('Does not match.. Please Try Again !!!!!!')</script>";
					}
					else
					{
						$_SESSION['ad_email']=$row1['email'];
						$_SESSION['fname']=$row1['fname'];
						$_SESSION['CHK']=true;
						echo"<script> alert('Login Sucessfully ')</script>";
						?><script type="text/javascript">
				<!--
				   window.location="show.php";
				//-->
				</script><?php
					}
				}

					
				?>

     

    </div><!-- tab-content -->

</div>







 <script  src="js/loginregister.js"></script>
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 
</body>

</html>