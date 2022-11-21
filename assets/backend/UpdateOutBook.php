<?php
    require 'DbConnection.php';
        updateOutedBook();
function updatOutedeBook(){
    global $mysqli;
    $OutedbkId=$_POST['bkId'];
    $req="CALL updateOutbook('$OutedbkId')";
    if($mysqli->query($req)===true){
        echo 'true';
    }else{
        echo 'false';
    }
}
