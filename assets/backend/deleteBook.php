<?php
    require 'DbConnection.php';
    deleteBookFromBooks();
    function deleteBookFromBooks(){
        global $mysqli;
        $bkId=$_POST['bkId'];
        $rqt="CALL deleteFromBook('$bkId')";
        if($mysqli->query($rqt)){
            echo 'true';
        }else{
            echo 'false';
        }
    }
