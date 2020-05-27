<?php
include '../classes/task.php';
echo $id = $_GET['id'];
echo $statue = $_GET['statue'];
$new = new Task;
$new->statue($id, $statue);

header("location: ../index.php");
