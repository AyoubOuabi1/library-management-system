<?php
    require 'DbConnection.php';
getBooksListLessTwo();
function getBooksListLessTwo(){
    global $mysqli;
    $rqt="select * from book where quqntity<2 or quqntity=2";
    $res=$mysqli->query($rqt);
    $arr=array();
    if($res->num_rows>0){
        while ($row=$res->fetch_assoc()){

            $arr[]=array(
                "bookId"=>$row['bookId'],
                "bookName"=>$row['bookName'],
                "isbn"=>$row['isbn'],
                "writer"=>$row['writer'],
                "quantity"=>$row['quqntity'],

            );
        }
        $data['booksData']=$arr;

    }
    echo json_encode($data);
}
