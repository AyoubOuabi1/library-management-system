<?php

require "DbConnection.php";
getData();
function getData()
{
    global $mysqli;
    $rqt = "select * from outedBooksData";
    $res = $mysqli->query($rqt);
    $arr = array();
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            $arr[] = array(
                "outId" => $row['outId'],
                "outDate" => $row['outDate'],
                "stdName" => $row['stdName'],
                "bookId" => $row['bookId'],
                "bookName" => $row['bookName'],
                "isbn" => $row['isbn'],
                "writer" => $row['writer'],
                "language" => $row['language'],
                "releaseDate" => $row['releaseDate'],
                "inputedDate" => $row['inputedDate'],
                "quantity" => $row['quqntity'],
                "category" => $row['category'],
                "firstName" => $row['firstName'],
                "lastName" => $row['lastName']
            );
        }
        $data['booksData'] = $arr;

    }
    echo json_encode($data);
}
