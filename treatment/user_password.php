<?php
include '../classes/user.php';
session_start();
echo $id = $_SESSION['id'];
echo $password = $_POST['npassword'];
$new = new User;
$new->password($id, $password);

header("location: ../views/password_edit.php");
