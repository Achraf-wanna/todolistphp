<?php
include '../classes/user.php';
session_start();
$id = $_SESSION['id'];

$image = $_FILES['image'];
$imageName = $_FILES['image']['name'];
$imageTmpName = $_FILES['image']['tmp_name'];
$imageSize = $_FILES['image']['size'];
$imageError = $_FILES['image']['error'];
$imageType = $_FILES['image']['type'];
$imageExt = explode('.', $imageName);
$imageActualExt = strtolower(end($imageExt));

$allowed = array('jpg', 'jpeg', 'png');

if (in_array($imageActualExt, $allowed)) {
    if ($imageError === 0) {
        $imageNameNew = uniqid('', true) . "." . $imageActualExt;
        $imageDestination = '../assets/images/' . $imageNameNew;
        move_uploaded_file($imageTmpName, $imageDestination);
    } else {
        echo "error 1";
    }
} else {
    echo "error 2";
}
echo $imageDestination;
$new = new User;
$new->photo($id, $imageDestination);

header("location: ../views/photo_edit.php");
