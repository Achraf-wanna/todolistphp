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
$title = "Crée une ToDoList";
?>

<?php include_once '../include/header.php';?>
<?php include_once '../include/navbar.php';?>

<div class="container-fluid content">
    <div class="index row">
        <div class="todolist col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    Header
                    <button data-toggle="modal" data-target="#exampleModal" class="create-task-btn"><i class="fas fa-plus"></i></button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ujkrfujjitrgji
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="task">
                        <input type="checkbox" id="check1" name="check1" value="Bike">
                        <label for="check1"> I have a bike</label>
                        <a href=""><i class="fas fa-trash-alt"></i></a>
                    </div>
                    <div class="task">
                        <input type="checkbox" id="check2" name="check2" value="Bike">
                        <label for="check2"> I have a bike</label>
                        <a href=""><i class="fas fa-trash-alt"></i></a>
                    </div>
                    <div class="task">
                        <input type="checkbox" id="check3" name="check3" value="Bike">
                        <label for="check3"> I have a bike</label>
                        <a href=""><i class="fas fa-trash-alt"></i></a>
                    </div>
                    <div class="task">
                        <input type="checkbox" id="check4" name="check4" value="Bike">
                        <label for="check4"> I have a bike</label>
                        <a href=""><i class="fas fa-trash-alt"></i></a>
                    </div>
                    <div class="task">
                        <input type="checkbox" id="check5" name="check5" value="Bike">
                        <label for="check5"> I have a bike</label>
                        <a href=""><i class="fas fa-trash-alt"></i></a>
                    </div>
                    <div class="task">
                        <input type="checkbox" id="check6" name="check6" value="Bike">
                        <label for="check6"> I have a bike</label>
                        <a href=""><i class="fas fa-trash-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once '../include/footer.php';?>
