<?php
// css
$bootstrap = "assets/css/bootstrap.css";
$style = "assets/css/style.css";
$fa = "assets/css/all.css";
// js
$jQuery = "assets/js/jQuery.js";
$bundle = "assets/js/bootstrap.bundle.js";
// logo
$img = "assets/Logo_login.png";
// title
$title = "Log in";
?>

<?php include_once 'include/header.php';?>

<div class="container-fluid login">
    <div class="login-image"></div>
    <div class="login-info">
        <form action="treatment/user_fetch.php" method="POST">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter Your E-mail">
                </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password"  id="password" placeholder="Enter Your Password">
            </div>
            <button style="width:30%;" type="submit" id="connect" name="connect" class="btn btn-primary">Sign In</button>
            <a style="width:30%;" href="views/singin.php" class="btn btn-success">Sign Up</a>
        </form>
    </div>
</div>

<?php include_once 'include/footer.php';?>
