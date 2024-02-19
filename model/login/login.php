<?php
session_start();
require_once '../config.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "select * from manage_student.tbadmin where username = '$username'";
$result = $conn->query($sql)->fetch_assoc();
print_r($result);
if ($result) {
    if ($result['password'] == $password) {
        $_SESSION['username'] = $username;
        header("Location: ../../view/managestd/manage.php");
        exit();
    } else {
        header("Location: ../../view/login/loginform.php");
        exit();
    }
} else {
    header("Location: ../../view/login/loginform.php");
    exit();

}

?>