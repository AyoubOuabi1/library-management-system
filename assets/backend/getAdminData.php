<?php
    require "DbConnection.php";
    getData();
function getData()
{
    global $mysqli;
    session_start();
    $adminId=$_SESSION['adminId'];
    $rqt = "select * from admin where adminId='$adminId'";
    $res = $mysqli->query($rqt);
    $arr = array();
    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        $arr[] = array(
            "adminId" => $row['adminId'],
            "firstName" => $row['firstName'],
            "lastName" => $row['lastName'],
            "email" => $row['email'],
            "password" => $row['password']
        );

        $data['adminData'] = $arr;

    }
    echo json_encode($data);
}
