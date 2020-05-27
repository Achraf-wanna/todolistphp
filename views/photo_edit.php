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
$title = "Modifier le mot de passe";
?>

<?php include_once '../include/header.php';?>
<?php include '../include/navbar.php';?>


<div class="container-fluid content">
    <div class="edit row">
        <div class="col-12 row justify-content-center">
            <div class="info col-6 align-self-center">
                <div class="card">
                    <img src="<?php echo $user->photo ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <form action="../treatment/user_photo.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="file" class="form-control" id="image" name="image">
                            </div>

                            <center>   <button style="width:40%;" type="submit" class="btn btn-outline-success">Save</button>  </center> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once '../include/footer.php';?>

