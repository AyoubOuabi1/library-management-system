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
<body>
  <div class="col-12 d-flex   align-items-center justify-content-center  flex-column  ">
    <img src="assets/images/user.svg" alt="account img" id="userImage">
    <div class="p-5 col-lg-7  col-md-8   col-10 formContainer  ">
      <h3 class="h3 text-center text-black mt-4">Sign up</h3>
      <form method="post">

            <div class="row mt-2">
                <div class="form-group col-lg-6   col-12 mt-3 ">
                    <label for="inputFirstName" id="firstNameLabel" class="text-danger   d-none">d</label>
                    <input type="text" class="form-control  " name="inputFirstName" id="inputFirstName" onkeyup="checkFirstName()"   placeholder="First Name">

                </div>
                <div class="form-group  col-lg-6   col-12  mt-3">
                    <label for="inputLastName" id="lastNameLabel" class="text-danger   d-none">d</label>
                    <input type="text" class="form-control " name="inputLastName" id="inputLastName" onkeyup="checkLastName()"   placeholder="Last Name">

                </div>


            </div>
           <div class="row mt-2">
              <div class="form-group col-lg-6   col-12 mt-3 ">
                  <label for="inputEmail1" id="emailLabel" class="text-danger d-none">d</label>
                  <input type="email" class="form-control" name="inputEmail1" id="inputEmail1" onkeyup="checkEmail()"   placeholder="Enter email">

              </div>
              <div class="form-group  col-lg-6   col-12  mt-3">
                  <label for="inputPassword1" id="passwordLabel" class="text-danger d-none">d </label>
                  <input type="password" class="form-control " name="inputPassword1" id="inputPassword1" onkeyup="checkPassword()"   placeholder="Password">

              </div>


          </div>


        <div class="d-flex   align-items-center   flex-column">
          <button type="button" id="sgnBtn" class="col-4 btn btn-primary mt-5 disabled" style="border-radius: 30px"  onclick="insertIntoAdmin()">Sign Up</button>
            <h3 class="h3 text-center text-black  mt-3">OR</h3>
            <button type="button" onclick="location.href='login.php'" class="col-4 btn btn-primary mt-3" style="border-radius: 30px">Login</button>
        </div>
      </form>
    </div>
  </div>
  <!-- Modal HTML -->
  <div id="successModal" class="modal fade" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">

              <div class="modal-body p-5 border-0 rounded-3">
                      <h4 class="h4">Your data has ben saved with success you will be redirected into login page after 2 seconds</h4>

              </div>

          </div>
      </div>
  </div>
  <!--bootsrap js cdn link-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="./assets/scripts/login.js"></script>
</body>
</html>