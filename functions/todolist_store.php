<?php
require '../classes/todolist.php';
$success_message = '';
$name = $_POST['name'];
$new = new Todolist;
var_dump($new);
$new->insert($name, "#fff");
