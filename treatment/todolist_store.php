<?php
include '../classes/todolist.php';
session_start();
$id = $_SESSION['id'];
$name = $_POST['name'];
$color = $_POST['color'];
$new = new Todolist;
$new->insert($name, $color, $id);
header("location: ../index.php");
