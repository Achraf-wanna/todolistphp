<?php
require 'config.php';

if(!Session::exists('UserData')) header('Location: login.php');

$User = new User();
$User::Logout();

header('Location: login.php');
?>
