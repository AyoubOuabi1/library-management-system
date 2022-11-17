<?php
    include "DbConnection.php";
    session_start();
    addNewBook();
    function addNewBook(){
        global $mysqli;
        $bookName=$_POST['bookName'];
        $isbn=$_POST['isbn'];
        $writer=$_POST['writer'];
        $lang=$_POST['lang'];
        $release=$_POST['release'];
        $category=$_POST['category'];
        $adId=$_SESSION['adminId'];
        $quantity=$_POST['quantity'];
        $req="CALL insertIntoBook('$bookName','$isbn','$writer','$lang','$release','$category','$adId','$quantity')";
        if($mysqli->query($req)===true){
            echo 'true';
        }else{
            echo 'false';
        }
    }