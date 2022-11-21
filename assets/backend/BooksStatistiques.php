<?php
    require 'DbConnection.php';

     function getTotalBooks(){
         global $mysqli;
         $qry="select count(*) as bookCounter from book";
         $res=$mysqli->query($qry);
         $row=$res->fetch_assoc();
         return $row['bookCounter'];
     }

    function getTotalOutedBook(){
        global $mysqli;
        $qry="select count(*) as bookCounter from outbook";
        $res=$mysqli->query($qry);
        $row=$res->fetch_assoc();
        return $row['bookCounter'];
    }
    function getTotalBookLessTwo(){
        global $mysqli;
        $qry="select count(*) as bookCounter from book where quqntity<2";
        $res=$mysqli->query($qry);
        $row=$res->fetch_assoc();
        return $row['bookCounter'];
    }
