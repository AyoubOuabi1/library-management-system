<?php
require "DbConnection.php";
OutBookBack();

function OutBookBack(){
    global $mysqli;
    $outBkId=$_POST['outBkId'];
    $bookId=$_POST['bookId'];
    $rqt="CALL deleteFromOutedBook('$outBkId')";
    if($mysqli->query($rqt)){
        $qry="select * from book where bookId= '$bookId'";
        $res=$mysqli->query($qry);
        $qnt=$res->fetch_assoc();
        $newQnt=$qnt['quqntity']+1;
        $updtQry="update book set quqntity='$newQnt' where bookId= '$bookId' ";
        $mysqli->query($updtQry);
        echo 'true';
    }else {
        echo 'false';
    }

}