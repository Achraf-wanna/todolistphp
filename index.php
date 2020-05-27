<?php
// css
$bootstrap = "assets/css/bootstrap.css";
$style = "assets/css/style.css";
$fa = "assets/css/all.css";
// js
$jQuery = "assets/js/jQuery.js";
$bundle = "assets/js/bootstrap.bundle.js";
$jQueryMe = "assets/js/jQueryMe.js";
// links
$index = "index.php";
$profile = "views/profile.php";
$information = "views/user_edit.php";
$photo = "views/photo_edit.php";
$pwd = "views/password_edit.php";
$logout = "treatment/logout.php";
$user = "classes/user.php";
$login = "login.php";
// logo
$img = "../assets/Logo_login.png";
// title
$title = "Accueil";
?>

<?php include_once 'include/header.php';?>
<?php include 'include/navbar.php';?>


<div class="container-fluid content">
    <div class="index row">
        <div class="col-12 row justify-content-center">
            <div class="create-todolist col-10 align-self-center">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-header">
                        Create a List :
                    </div>
                    <div class="card-body">
                        <form action="treatment/todolist_store.php" method="post">
                            <div class="form-group row">
                                <p class="col-sm-2 col-form-label">List Name :</p>
                                <input type="text" class="form-control col-sm-10" name="name">
                            </div>
                            <div class="form-group row">
                                <p class="col-sm-2 col-form-label">List color :</p>
                                <div id="color-picker" class="color-picker col-sm-10"></div>
                                <input type="text" hidden name="color" id="color">
                            </div>
                       <center>     <button style="width:40%;" type="submit" class="btn btn-outline-success" name="submit">Create</button> </center> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php

require_once 'classes/task.php';
require_once 'classes/todolist.php';
$all = new Todolist;
$todo = $all->select($id);
foreach ($todo as $datum) {
    ?>
        <div class="todolist col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="card text-white mb-3" style="background-color:<?php echo $datum->color ?>">
                <div class="card-header">
                    <?php echo $datum->name ?>
                    <button data-toggle="modal" data-target="#name<?php echo $datum->id ?>" class="edit-todolist-btn"><i class="fas fa-edit"></i></button>
                    <div class="modal fade" id="name<?php echo $datum->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Rename</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="treatment/todolist_update.php" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="text" hidden id="id" name="id" value="<?php echo $datum->id ?>">
                                            <label for="name">Name :</label>
                                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $datum->name ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <button data-toggle="modal" data-target="#color<?php echo $datum->id ?>" class="color-todolist-btn"><i class="fas fa-brush"></i></button>
                    <div class="modal fade" id="color<?php echo $datum->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Change Color</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="treatment/todolist_color.php" method="post">
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <p class="col-sm-4 col-form-label">Choose a Color</p>
                                            <div id="color-picker2" class="color-picker2 col-sm-8"></div>
                                            <input type="text" hidden name="color2" id="color2">
                                            <input type="text" hidden id="id" name="id" value="<?php echo $datum->id ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><button data-toggle="modal" data-target="#task<?php echo $datum->id ?>" class="create-task-btn"><i class="fas fa-plus"></i></button>
                    <div class="modal fade" id="task<?php echo $datum->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Task :</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="treatment/task_store.php" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="taskText">Task :</label>
                                            <input type="text" class="form-control" id="taskText" name="taskText">
                                            <input type="text" hidden id="id" name="id" value="<?php echo $datum->id ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <a href="treatment/todolist_delete.php?id=<?php echo $datum->id ?>" class="delete-todolist-btn"><i class="fas fa-trash"></i></a>
                </div>
                <div class="card-body">
                <?php
$task = new Task;
    $tasks = $task->select($datum->id);
    foreach ($tasks as $task) {
        $checked = "";
        if ($task->done == 1) {
            $checked = "checked";
        }
        ?>
                    <div class="task">
                        <!-- <form action="treatment/task_statue.php" method="post"> -->

                        <input type="checkbox" id="check<?php echo $task->id ?>" name="check"  <?php echo $checked ?> onClick="Javascript:window.location.href = 'treatment/task_statue.php?id=<?php echo $task->id ?>&statue=<?php echo $task->done ?>';">
                            <label for="check<?php echo $task->id ?>" class="taskLabel"><?php echo $task->taskText ?></label>
                        <!-- </form> -->
                        <button data-toggle="modal" data-target="#task<?php echo $task->id ?>" class="edit-task-btn"><i class="fas fa-edit"></i></button>
                        <div class="modal fade" id="task<?php echo $task->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Task</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="treatment/task_update.php" method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="text" hidden id="id" name="id" value="<?php echo $task->id ?>">
                                                <label for="taskText">Task</label>
                                                <input type="text" class="form-control" id="taskText" name="taskText" value="<?php echo $task->taskText ?>">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a href="treatment/task_delete.php?id=<?php echo $task->id ?>"><i class="fas fa-trash-alt"></i></a>
                    </div>
            <?php
}
    ?>
                </div>
            </div>
        </div>
        <?php
}
?>
    </div>
</div>

<?php include_once 'include/footer.php';?>
