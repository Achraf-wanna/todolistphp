<?php
include '../classes/task.php';
$id = $_GET['id'];
$new = new Task;
$new->delete($id);

header("location: ../index.php");
