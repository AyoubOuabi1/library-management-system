<?php
    include 'DbConnection.php';
    function checkUser(){
        global  $mysqli;
        $email=$_POST['inputEmail'];
        $password=$_POST['inputPassword'];
        $rqt="select adminId from admin where email=' $email' and password= '$password'";
        $res =$mysqli->query($rqt);
        if($res->num_rows>0){
            $row=$res->fetch_assoc();
            $_SESSION["adminId"]=$row['adminId'];
        }

    }
