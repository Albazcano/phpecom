<?php

include('../config/dbcon.php');

function getAll($table)
{
    global $con;
    $query = "SELECT * from $table";
    return $query_run = mysqli_query($con, $query);
}

function redirect ($url, $message) {
    $_SESSION['message'] = $message;
    header('Location: '.$url);
    exit();
}
?>