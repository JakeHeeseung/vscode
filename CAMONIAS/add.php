<?php
require_once('db.php');

$students_id= $_POST['students_id'];
$students_name= $_POST['students_name'];
$year= $_POST['year'];
$course= $_POST['course'];
$email= $_POST['email'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO student (students_id, students_name, year, course, email)
VALUES ('$students_id', '$students_name', '$year', '$course', '$email')";

$conn->exec($sql);
echo "<script>alert('Account successfully added!'); window.location='welcome.php'</script>";
?>