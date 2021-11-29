<?php 
include('dbcon.php');
include('session.php'); 
$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div style="background:url(img/abc.jpg)no-repeat center center fixed;"></div>
<div class="form-wrapper"> 
    <h2 class="text-center">Greetings!</h2>
    <h4>Welcome <?php echo $row['name']; ?> !</h4>
    <h3>Firstname: </h3><h4><?php echo $row['firstname']; ?></h4>
    <h3>Lastname: </h3><h4><?php echo $row['lastname']; ?></h4>
    <h3>Email: </h3><h4><?php echo $row['email']; ?></h4>
    <h3>Password: </h3><h4><input type="password" value="1234" id="myInput"><br><br>
<input type="checkbox" onclick="myFunction()">Show Password
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script></h3>
	 <div class="logout">
    <p><a class="btn btn-danger" href="logout.php">Log out</a></p>
  </div>
</div>
</body>
</html>
