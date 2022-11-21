<?php
require 'DbConnection.php';
deleteBookFromBooks();
function deleteFromOutedBook(){
    global $mysqli;
    $outBkId=$_POST['outBkId'];
    $rqt="CALL deleteFromOutedBook('$outBkId')";
    if($mysqli->query($rqt)){
        echo 'true';
    }else{
        echo 'false';
    }
}
