<?php
    require "DbConnection.php";
    session_start();
    if (!isset($_SESSION['adminId']) || $_SESSION['adminId'] == ''){
        header("Location: login.php");
    }