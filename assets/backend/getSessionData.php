<?php
    require 'DbConnection.php';
    function getUserData(){
        global  $mysqli;
        $id=$_SESSION['adminId'];
        $rqt="select * from admin where adminId = '$id'";
        $res=$mysqli->query($rqt);
        $arr=array();
        if($res->num_rows>0){
            $row=$res->fetch_assoc();
            $arr[0]=$row['adminId'];
            $arr[1]=$row['firstName'];
            $arr[2]=$row['lastName'];
            $arr[3]=$row['email'];
            $arr[4]=$row['password'];
        }
        return $arr;
    }
