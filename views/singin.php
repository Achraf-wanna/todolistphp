<?php
// css
$bootstrap = "../assets/css/bootstrap.css";
$style = "../assets/css/style.css";
$fa = "../assets/css/all.css";
// js
$jQuery = "../assets/js/jQuery.js";
$bundle = "../assets/js/bootstrap.bundle.js";
// logo
$img = "../assets/Logo_login.png";
// title
$title = "sing in";
?>

<?php include_once '../include/header.php';?>

<div class="container-fluid login">
    <div class="login-image"></div>
    <div class="login-info">
        <form action="../treatment/user_store.php" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="firstname" class="col-sm-6 col-form-label">Name :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
            </div>
            <div class="form-group row">
                <label for="lastname" class="col-sm-6 col-form-label">First name :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-sm-6 col-form-label">Username :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="username" name="username">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-6 col-form-label">E-mail</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-sm-6 col-form-label">Picture :</label>
                <div class="col-sm-6">
                    <input type="file" class="form-control" id="image" name="image">
                </div>
            </div>
            <div class="form-group row">
                <label for="mot" class="col-sm-6 col-form-label">Password :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="mot" name="mot">
                </div>
            </div>
            <div class="form-group row">
                <label for="conf" class="col-sm-6 col-form-label">Repeat Password :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="conf" name="conf">
                </div>
            </div>
            <button style="width:30%;" type="submit" id="connect" name="connect" class="btn btn-success" disabled>Sign up</button>
        </form>
    </div>
</div>

<?php include_once '../include/footer.php';?>
<script>
    $("#conf").blur(function () {
    var PasswordVal=$('#mot').val();
    var ConfirmPasswordVal=$('#conf').val();
    if(PasswordVal != ConfirmPasswordVal && ConfirmPasswordVal.length > 0 && PasswordVal.length > 0)
    //   $('.show2').show();
      $('.btn').prop("disabled", true);
    else
    //   $('.show2').hide();
      $('.btn').prop("disabled", false);
  });
</script>