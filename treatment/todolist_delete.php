<?php
include '../classes/todolist.php';
$id = $_GET['id'];
$new = new Todolist;
$new->delete($id);

header("location: ../index.php");
