<?php
    require 'DbConnection.php';
        updateOutedBook();
function updateOutedBook(){
    global $mysqli;
    $OutedbkId=$_POST['outBkId'];
    $stdName=$_POST['stdName'];
    $req="CALL updateOutbook('$OutedbkId','$stdName')";
    if($mysqli->query($req)===true){
        echo 'true';
    }else{
        echo 'false';
    }
}
