<?php
require_once('db.php');

$get_id=$_GET['id'];

// sql to delete a record
$sql = "Delete from student where id = '$get_id'";

// use exec() because no results are returned
$conn->exec($sql);
header('location:welcome.php');
?>