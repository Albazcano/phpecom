<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "phpecom";

    //Creating DB connection
    $con = mysqli_connect($host, $username, $password, $database);

    //Check DB connection
    if(!$con)
    {
            die("Connection Failed: ". mysqli_connect_error());
    }
?>