<?php
require "DbConnection.php";
updateAdmin();
function updateAdmin(){
    global $mysqli ;
    session_start();
    $adminId=$_SESSION["adminId"];

    $rqt="select * from admin where adminId= '$adminId'";
    $res =$mysqli->query($rqt);
    $oldPass=$res->fetch_assoc();
    $oldPassword=$oldPass['password'];

    $inpuPassword=$_POST['password'];
    $newPassword=$_POST['newPassword'];
    $firstname=$_POST['firstname'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
     if($inpuPassword==''){
         $rqt="CALL updateAdmin('$adminId','$firstname','$lastName','$email','$oldPassword')";
         if($mysqli->query($rqt)===true){
             echo 'true';
         }else{
             echo 'false';
         }
     }else{
         if($inpuPassword==$oldPassword){
             $rqt="CALL updateAdmin('$adminId','$firstname','$lastName','$email','$newPassword')";
             if($mysqli->query($rqt)===true){
                 echo "true";
             }else{
                 echo 'false';
             }
         }else{
             echo 'wrong password';
         }
     }



}