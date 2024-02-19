<?php

$conn = new mysqli('localhost', 'root', 'Xuanhung2k3@', 'manage_student');
$id = $_POST['id'];
$classname = $_POST['classname'];
$sql = "update manage_student.tbclass set classname = '$classname' where id = '$id'";
$result = mysqli_query($conn, $sql);
header("Location: ../../view/manageclass/manage.php");