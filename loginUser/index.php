<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="form-wrapper">
  
  <form action="#" method="post">
    <h3 style="text-align:center">Login to Account</h3>
	
    <div class="form-item">
		<input type="text" name="firstname" required="required" placeholder="Firstname" autofocus required></input>
    </div>

	<div class="form-item">
		<input type="text" name="lastname" required="required" placeholder="Lastname" autofocus required></input>
    </div>

	<div class="form-item">
		<input type="text" name="email" required="required" placeholder="Email" autofocus required></input>
    </div>

    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" required></input>
	</div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['login']))
		{
			$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
			$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
			$email = mysqli_real_escape_string($con, $_POST['email']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);
			
			$query 		= mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and email='$email'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:home.php');
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}
  ?>
  
</div>

</body>
</html>