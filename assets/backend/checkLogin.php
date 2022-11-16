<?php
    require 'DbConnection.php';
    checkUser();
    function checkUser(){
        global  $mysqli;
        $email=$_POST['email'];
        $password=$_POST['password'];
        $rqt="select * from admin where email= '$email' and password = '$password'";
        $res =$mysqli->query($rqt);
        if($res->num_rows>0){
            $row=$res->fetch_assoc();
            $_SESSION["adminId"]=$row["adminId"];
            echo 'true';
        }else{
            echo 'false';
        }

    }
