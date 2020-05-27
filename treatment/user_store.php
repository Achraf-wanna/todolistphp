<?php
include '../classes/user.php';
$success_message = '';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$mot = $_POST['mot'];

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
$new->insert($firstname, $lastname, $username, $email, $imageDestination, $mot);

// $new->insert($firstname, $lastname, $username, $email, $imageDestination, $password);
header("location: ../index.php");
