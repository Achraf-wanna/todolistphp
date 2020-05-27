<?php
// css
$bootstrap = "../assets/css/bootstrap.css";
$style = "../assets/css/style.css";
$fa = "../assets/css/all.css";
// js
$jQuery = "../assets/js/jQuery.js";
$bundle = "../assets/js/bootstrap.bundle.js";
$jQueryMe = "../assets/js/jQueryMe.js";
// links
$index = "../index.php";
$profile = "profile.php";
$information = "user_edit.php";
$photo = "photo_edit.php";
$pwd = "password_edit.php";
$logout = "../treatment/logout.php";
$user = "../classes/user.php";
$login = "../login.php";
// logo
$img = "../assets/Logo_login.png";
// title
$title = "Profile";
?>

<?php include_once '../include/header.php';?>
<?php include '../include/navbar.php';?>


<div class="container-fluid content">
    <div class="profile row">
        <div class="col-12 row justify-content-center">
            <div class="info col-10 align-self-center">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="<?php echo $user->photo ?>" height="100%" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class="card-title"><?php echo $user->username ?></h1>
                                <p class="card-text"><label for=""> Name: </label><?php echo $user->firstname ?></p>
                                <p class="card-text"><label for=""> First name: </label><?php echo $user->lastname ?></p>
                                <p class="card-text"><label for=""> Email: </label><?php echo $user->email ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once '../include/footer.php';?>
