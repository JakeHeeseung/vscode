<?php
include 'db.php';

$get_id=$_REQUEST['id'];

$fname= $_POST['students_id'];
$mname= $_POST['students_name'];
$lname= $_POST['year'];
$address= $_POST['course'];
$email= $_POST['email'];

$sql = "UPDATE student SET fname ='$fname', mname ='$mname', lname ='$lname', 
address ='$address', email ='$email' WHERE student_id = '$get_id' ";

$conn->exec($sql);
echo "<script>alert('Successfully Edit The Account!'); window.location='welcome.php'</script>";


?>

