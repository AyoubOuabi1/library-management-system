<?php
    require "DbConnection.php";
    addNewAdmin();
    function addNewAdmin(){
        global $mysqli ;
        $res="false";
        $firstname=$_POST['firstname'];
        $lastName=$_POST['lastName'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $rqt="CALL insertIntoAdmin('$firstname','$lastName','$email','$password')";
        if($mysqli->query($rqt)===true){
            $res="true";
        }
        return $res;
    }
