<?php
    require "assets/backend/DbConnection.php";
    require "assets/backend/checkSession.php";
    require  "assets/backend/getSessionData.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- bootstrap cdn link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootsrap icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link href="./assets/styles/main.css" rel="stylesheet">

</head>
<body>
<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="secondary-bg" id="sidebar-wrapper">
    <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">Welcome Back</div>
    <div class="list-group list-group-flush my-3">
        <div class="d-block text-center  ">
            <img src="assets/images/user.svg" alt="account img" id="userImage">
            <?php
                $res=getUserData();
                echo '<h5 class="mt-1">'.$res[1].' '.$res[2].'</h5>'
            ?>

        </div>
        <button type="button" id="btnDash" onclick="loadDashboard()" class=" list-group-item list-group-item-action bg-transparent second-text active">
            <i class="fas fa-tachometer-alt me-2"></i>Dashboard
        </button>
        <button type="button" id="btnBook" onclick="loadBooks()" class=" list-group-item list-group-item-action bg-transparent second-text ">
            <i  class="fas fa-book me-2"></i>Books
        </button>


        <a href="assets/backend/sessionLogOut.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                    class="fas fa-power-off me-2"></i>Logout</a>
    </div>
</div>
<!-- /#sidebar-wrapper -->
<!-- Page Content -->
<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            <h2 id="pageTitle" class="fs-2 m-0 primary-text">Dashboard</h2>
        </div>
    </nav>

    <div class="container-fluid px-4" id="container">
        <div id="dashboardContainer">
            <?php include "./assets/fronend/dashboard.php" ?>
        </div>
        <div id="bookContainer" class="d-none">
            <?php include "./assets/fronend/books.php" ?>
        </div>



    </div>
</div>
</div>
<!-- /#page-content-wrapper -->
<!-- TASK MODAL -->
<?php
include "./assets/fronend/showBookModal.php"
?>
<!-- END TASK MODAL-->
<!--bootsrap js cdn link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./assets/scripts/main.js"></script>

</body>
</html>

