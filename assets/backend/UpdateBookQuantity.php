<?php
    require "DbConnection.php";
    updateQuantity();

function updateQuantity(){
    global $mysqli;
    $bookId=$_POST['bookId'];
    $inputQnt=$_POST['inputQnt'];
    $qry="select * from book where bookId= '$bookId'";
    $res=$mysqli->query($qry);
    $qnt=$res->fetch_assoc();
    $newQnt=$qnt['quqntity']+$inputQnt;
    $updtQry="update book set quqntity='$newQnt' where bookId= '$bookId' ";
    $mysqli->query($updtQry);
    if($mysqli->query($updtQry)){
        echo 'true';
    }else {
        echo 'false';
    }

}