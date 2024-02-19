<?php
// $id = $_POST['id'];
// $name = $_POST['name'];
// $quantity = $_POST['quantity'];

$conn = new mysqli('localhost', 'root', 'Xuanhung2k3@', 'manage_student');

$sql = "select * from manage_student.tbstudent order by name asc";
$result = $conn->query($sql);