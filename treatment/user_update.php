<?php
include '../classes/user.php';
session_start();
$id = $_SESSION['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$new = new User;
$new->update($id, $username, $email, $firstname, $lastname);

header("location: ../views/user_edit.php");
