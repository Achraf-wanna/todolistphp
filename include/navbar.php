<?php
session_start();
echo $id = $_SESSION['id'];
if (empty($_SESSION['id'])) {
    header("Location: $login");
}
include $user;
$find = new User;
$user = $find->select($id);
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand nav-brand" href="<?php echo $index ?>">ToDo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $index ?>">My Tasks<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $user->photo ?>" width="20px" alt=""> <?php echo $user->username ?></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo $profile; ?>">My Profile</a>
                <a class="dropdown-item" href="<?php echo $information ?>">Edit Profile</a>
                <a class="dropdown-item" href="<?php echo $pwd ?>">Change Password</a>
                <a class="dropdown-item" href="<?php echo $photo ?>">Change Picture</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo $logout ?>">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
