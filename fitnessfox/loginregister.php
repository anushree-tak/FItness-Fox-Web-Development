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

<div class="form">

    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign-Up</a></li>
        <li class="tab"><a href="#login">Login</a></li>
    </ul>

    <div class="tab-content">
        <div id="signup">
            <h1>Sign Up for Fitness Fox</h1>

            <form action="" method="post">

                <div class="top-row">
                    <div class="field-wrap">
                        <label>
                            First Name<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off"  name="fname"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Last Name<span class="req">*</span>
                        </label>
                        <input type="text"required autocomplete="off" name="lname"/>
                    </div>
                </div>

                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email"required autocomplete="off" name="emai"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Set A Password<span class="req">*</span>
                    </label>
                    <input type="password" required autocomplete="off" name="pass"/>
                </div>

                <div class="top-row">
                    <div class="field-wrap">
                        <label>
                            Birthday<span class="req">*</span>
                        </label>
                        <input type="date" required autocomplete="off" name="dob" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Weight (lbs)<span class="req">*</span>
                        </label>
                        <input type="text"required autocomplete="off" name="weight"/>
                    </div>
                </div>

                <div class="top-row">
                    <div class="pretty p-default p-round field-wrap">
                        <input type="radio" name="gen" value="Male">
                        <div class="state">
                            <label>Male</label>
                        </div>
                    </div>

                    <div class="pretty p-default p-round field-wrap">
                        <input type="radio" name="gen" value="Female">
                        <div class="state">
                            <label>Female</label>
                        </div>
                    </div>
                </div>

                <div style="height: 40px;"></div>

                <input type="submit" class="button button-block" name="sub" value="Let's Get Fit!"/>
            </form>
			
			<?php
			if($_POST['sub'])
			{
				$sql="select * from `user_details` where `email`='$_POST[emai]' and `password`='$_POST[pass]'";
				$query=mysql_query($sql);
				$row=mysql_fetch_array($query);


				if(!$row)
				{
					$sql1="insert into `user_details` values('','$_POST[fname]','$_POST[lname]','$_POST[emai]','$_POST[pass]','$_POST[dob]','$_POST[weight]','$_POST[gen]')";
					$abc=mysql_query($sql1);
					if($abc)
					{
						echo"<script>alert('Registration Successfully')</script>";
					}
					else
					{
						echo"<script>alert('Registration Fail')</script>";
					}
				}
				else
				{
					
					echo "<script> alert('already exits')</script>";
				}
			}
			?>

        </div>

        <div id="login">
            <h1>Welcome Back!</h1>

            <form action="" method="post">

                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email"required autocomplete="off" name="email1"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Password<span class="req">*</span>
                    </label>
                    <input type="password"required autocomplete="off" name="password1"/>
                </div>

                <p class="forgot"><a href="#">Forgot Password?</a></p>

				<input type="submit" class="button button-block" name="login" value="Log In"/>

            </form>
			
			<?php
				if($_POST['login'])
				{
					$n=$_POST['email1'];
					$p=$_POST['password1'];
					$sql2="select * from `user_details` where `email`='$n' and `password`='$p'";
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
						$_SESSION['email']=$row1['email'];
						$_SESSION['fname']=$row1['fname'];
						$_SESSION['CHK']=true;
						echo"<script> alert('Login Sucessfully ')</script>";
						?><script type="text/javascript">
				<!--
				   window.location="activity.php";
				//-->
				</script><?php
					}
				}

					
				?>

        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/loginregister.js"></script>
<script>
    $( document ).ready(function() {
        $('input').attr('required','required');
    });
</script>

</body>

</html>