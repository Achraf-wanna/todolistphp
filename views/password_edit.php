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
            <div class="info col-10 align-self-center">
                <div class="card">
                    <h5 class="card-header">Change Password</h5>
                    <div class="card-body">
                        <form action="../treatment/user_password.php" method="post">
                            <input type="text" hidden value="<?php echo $user->password ?>" id="pwd" name="pwd">
                            <div class="form-group">
                                <label for="password">Current Password :</label>
                                <input type="text" class="form-control" id="password" name="password">
                                <div class="show1" style="display:none;color:red">
                                * Password Mismatch
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="npassword">New Password :</label>
                                <input type="text" class="form-control" id="npassword" name="npassword">
                            </div>
                            <div class="form-group">
                                <label for="confpassword">Repeat New Password :</label>
                                <input type="text" class="form-control" id="confpassword" name="confpassword">
                                <div class="show2" style="display:none;color:red">
                                * Password Mismatch
                                </div>
                            </div>
                            <center>    <button style="width:40%;" type="submit" class="btn btn-outline-success" disabled>Save</button>  </center> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once '../include/footer.php';?>
<script>
$(function () {
  $("#password").blur(function () {
    var PasswordVal=$('#confpassword').val();
    var npassword=$('#password').val();
    if(PasswordVal != ConfirmPasswordVal && ConfirmPasswordVal.length > 0 && PasswordVal.length > 0)
      $('.show1').show();
    else
      $('.show1').hide();
  });

  $("#confpassword").blur(function () {
    var PasswordVal=$('#npassword').val();
    var ConfirmPasswordVal=$('#confpassword').val();
    if(PasswordVal != ConfirmPasswordVal && ConfirmPasswordVal.length > 0 && PasswordVal.length > 0)
      $('.show2').show();
    //   $('.btn').prop("disabled", true);
    else
      $('.show2').hide();
  });

  $("#confpassword").blur(function () {
    var PasswordVal=$('#npassword').val();
    var ConfirmPasswordVal=$('#confpassword').val();
    if(PasswordVal != ConfirmPasswordVal && ConfirmPasswordVal.length > 0 && PasswordVal.length > 0)
    //   $('.show2').show();
      $('.btn').prop("disabled", true);
    else
    //   $('.show2').hide();
      $('.btn').prop("disabled", false);
  });
});
</script>
