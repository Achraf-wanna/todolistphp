<?php
include '../classes/task.php';
$success_message = '';
echo $taskText = $_POST['taskText'];
echo $id = $_POST['id'];
$new = new Task;
$new->update($id, $taskText);

header("location: ../index.php");
