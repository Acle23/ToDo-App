// delete_task.php

<?php
require_once 'config.php';

if ($_GET['task_id']) {
    $task_id = $_GET['task_id'];

    $deleting_tasks = mysqli_query(
        $db,
        "DELETE FROM `task` WHERE `task_id` = $task_id"
    )
        or
        die(mysqli_error($db));

    header("location:index.php");
}
?>