<?php

$host = "localhost";
    $user = "root";
    $pass = "";
    $name = "aliance-production";

    $connect = mysqli_connect($host, $user, $pass, $name);

    if(mysqli_connect_errno()){
        echo "MySQL Connect Error " . mysqli_connect_error();
    }