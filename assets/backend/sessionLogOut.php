<?php
    session_start();
    session_unset();
    session_destroy();
    header("location: http://localhost/library-management-system/login.php");

