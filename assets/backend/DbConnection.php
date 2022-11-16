<?php
    $localhost='localhost';
    $username='root';
    $passwrod='';
    $database ='librarymangsys';
    global  $mysqli;
    $mysqli=new mysqli($localhost,$username,$passwrod,$database);
    if ($mysqli->connect_errno){
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }