<?php
require_once 'config.php';
$msv = $_GET['msv'];

$sql = "delete from manage_student.tbstudent where msv = '$msv'";
$result = mysqli_query($conn, $sql);

header("Location: ../view/managestd/manage.php");


?>