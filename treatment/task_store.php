<?php
include '../classes/task.php';
echo $taskText = $_POST['taskText'];
echo $id = $_POST['id'];
$new = new Task;
$new->insert($id, $taskText);
header("location: ../index.php");
