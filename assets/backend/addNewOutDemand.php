<?php
    require "DbConnection.php";
    insertIntoOutBook();

    function insertIntoOutBook(){
        global $mysqli;
        session_start();
        $studentName=$_POST['studentName'];
        $bookId=$_POST['bookId'];
        $admnId=$_SESSION['adminId'];
        $rqt="CALL insertIntoOutbook('$studentName','$bookId','$admnId')";
        if($mysqli->query($rqt)){
            $qry="select * from book where bookId= '$bookId'";
            $res=$mysqli->query($qry);
            $qnt=$res->fetch_assoc();
            $newQnt=$qnt['quqntity']-1;
            $updtQry="update book set quqntity='$newQnt' where bookId= '$bookId' ";
            $mysqli->query($updtQry);
            echo 'true';
        }else {
            echo 'false';
        }

    }