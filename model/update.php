<?php
require_once 'config.php';
$msv = $_POST['id'];
$name = $_POST['name'];
$className = $_POST['class_name'];


$sql = "update manage_student.tbstudent set name = '$name', class_name = '$className' where msv = '$msv'";
$result = mysqli_query($conn, $sql);
header("Location: ../view/managestd/manage.php");
?>