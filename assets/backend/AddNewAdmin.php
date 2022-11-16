<?php
    require "DbConnection.php";
    addNewAdmin();
    function addNewAdmin(){
        global $mysqli ;
        $firstname=$_POST['firstname'];
        $lastName=$_POST['lastName'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $check="select email from admin where email = '$email'";
        $res=$mysqli->query($check);
        if($res->num_rows>0){
            echo "already";
        }else{
            $rqt="CALL insertIntoAdmin('$firstname','$lastName','$email','$password')";
            if($mysqli->query($rqt)===true){
                echo "true";
            }else{
                echo "false";
            }
        }


    }
