<?php
include '../classes/todolist.php';
$success_message = '';
echo $name = $_POST['name'];
echo $id = $_POST['id'];
$new = new Todolist;
$new->update($id, $name);

header("location: ../index.php");
