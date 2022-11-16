<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- bootstrap cdn link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="assets/styles/login.css" rel="stylesheet">
    <!-- bootsrap icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body  >
         <div class="col-12 d-flex   align-items-center justify-content-center  flex-column  ">
            <img src="assets/images/user.svg" alt="account img" id="userImage">
            <div class="p-5 col-lg-5  col-md-6   col-10 formContainer  ">
                <h3 class="h3 text-center text-black mt-4">Login</h3>
                <form method="post">
                    <h4 class="h4 text-center text-danger  mt-5 d-none" id="checkLabel"></h4>
                    <div class="form-group mt-2">
                         <input type="email" class="form-control  " id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                     </div>
                    <div class="form-group mt-3">
                         <input type="password" class="form-control  " id="inputPassword" placeholder="Password">
                    </div>
                    <div class="d-flex   align-items-center   flex-column">
                        <button type="button" class="  col-4 btn btn-primary mt-5" style="border-radius: 30px" onclick="checkLogin()">Login</button>
                        <h3 class="h3 text-center text-black  mt-3">OR</h3>
                        <button type="button" onclick="location.href='signup.php'" class="col-4 btn btn-primary mt-3" style="border-radius: 30px">Sign Up</button>
                    </div>

                </form>
            </div>
        </div>
     <!--bootsrap js cdn link-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="./assets/scripts/login.js"></script>
</body>
</html>
