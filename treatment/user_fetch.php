<?php
include '../classes/user.php';
session_start();
$email = $_POST['email'];
$pwd = $_POST['password'];
$new = new User;
$data = $new->fetch($email, $pwd);
echo $data;
if ($data != 0) {
    $_SESSION['id'] = $data;
    header("location: ../index.php");
} else {
    header("location: ../login.php");
}
// header("location: ../index.php");
