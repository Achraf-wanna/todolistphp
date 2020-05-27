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
$logout = ".../treatment/logout.php";
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
    <div class="edit row">
        <div class="col-12 row justify-content-center">
            <div class="info col-10 align-self-center">
                <div class="card">
                    <h5 class="card-header">Edit Profile</h5>
                    <div class="card-body">
                        <form action="../treatment/user_update.php" method="post">
                            <div class="form-group">
                                <label for="username">Username :</label>
                                <input type="text" class="form-control" value="<?php echo $user->username ?>" id="username" name="username">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail :</label>
                                <input type="email" class="form-control" value="<?php echo $user->email ?>" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="firstname">Name :</label>
                                <input type="text" class="form-control" value="<?php echo $user->firstname ?>" id="firstname" name="firstname">
                            </div>
                            <div class="form-group">
                                <label for="lastname">First name :</label>
                                <input type="text" class="form-control" value="<?php echo $user->lastname ?>" id="lastname" name="lastname">
                           </div>
                         <center>    <button style="width:40%;" type="submit" class="btn btn-outline-success">Save</button> </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once '../include/footer.php';?>
