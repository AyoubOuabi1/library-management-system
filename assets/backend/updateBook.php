<?php
    include "DbConnection.php";
    updateBook();
function updateBook(){
    global $mysqli;
    $bkId=$_POST['bkId'];
    $bookName=$_POST['bookName'];
    $isbn=$_POST['isbn'];
    $writer=$_POST['writer'];
    $lang=$_POST['lang'];
    $release=$_POST['release'];
    $category=$_POST['category'];
    $quantity=$_POST['quantity'];
    $req="CALL updateBook('$bkId','$bookName','$isbn','$writer','$lang','$release','$category','$quantity')";
    if($mysqli->query($req)===true){
        echo 'true';
    }else{
        echo 'false';
    }
}