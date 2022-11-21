<?php
    require "DbConnection.php";
    getBookDataBySerch();
function getBookDataBySerch(){
    global $mysqli;
    $bookName=$_POST['BookName'];
    $qry="select * from booksData where bookName like '%$bookName%'";
    $ress=$mysqli->query($qry);
    $arr=array();
    if($ress->num_rows>0){
        while ($row=$ress->fetch_assoc()){

            $arr[]=array(
                "bookId"=>$row['bookId'],
                "bookName"=>$row['bookName'],
                "isbn"=>$row['isbn'],
                "writer"=>$row['writer'],
                "language"=>$row['language'],
                "releaseDate"=>$row['releaseDate'],
                "inputedDate"=>$row['inputedDate'],
                "quantity"=>$row['quqntity'],
                "category"=>$row['category'],
                "firstName"=>$row['firstName'],
                "lastName"=>$row['lastName']
            );
        }
        $data['booksData']=$arr;

    }
    echo json_encode($data);
}