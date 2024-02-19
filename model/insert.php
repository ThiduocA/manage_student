<?php
require_once 'config.php';
$msv = $_POST['msv'];
$name = $_POST['name'];
$className = $_POST['class_name'];

$sql = "insert into manage_student.tbstudent values('$msv', '$name', '$className')";
$result = mysqli_query($conn, $sql);
header("Location: ../view/managestd/manage.php");
?>