<?php
include '../classes/todolist.php';
$success_message = '';
$color = $_POST['color2'];
$id = $_POST['id'];
$new = new Todolist;
$new->color($id, $color);

header("location: ../index.php");
