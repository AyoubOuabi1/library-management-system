let checkFName,checkLname,checkEmail1,checkPassword1;


function insertIntoAdmin(){
    $.post("assets/backend/AddNewAdmin.php", {firstname:$("#inputFirstName").val(),lastName:$("#inputLastName").val()
            ,email:$("#inputEmail1").val(),password:$("#inputPassword1").val()},
        function (data) {
            if(data==="already"){
                $('#inputEmail1').addClass('border border-danger')
                $('#emailLabel').removeClass('d-none');
                $('#emailLabel').html('this email already exist')
            }else{
                if (data==="true"){
                    $('#successModal').modal('show');
                    setTimeout(function (){location.href='login.php'},3000)
                }else {
                    alert(data);
                }
            }
        }
    ).fail(function(){
        console.log("failed");
    });

}

function checkLogin(){
    if(!($("#inputEmail").val()=='')  && !($("#inputPassword").val()=='')){
        $.post("assets/backend/checkLogin.php", {email:$("#inputEmail").val(),password:$("#inputPassword").val()},
            function (data) {

                if(data==="true"){
                    location.href='index.php'
                }else{
                    $('#checkLabel').html("Email or password incorrect")
                    $('#checkLabel').removeClass('d-none');
                 }
            }
        ).fail(function(){
            console.log("failed");
        });
    }else{
        $('#checkLabel').html("Email or password can't be empty")
        $('#checkLabel').removeClass('d-none');
     }


}
//start check input section

function checkFirstName(){
    if(checkNumber($('#inputFirstName').val())){
        $('#inputFirstName').addClass('border border-danger')
        $('#firstNameLabel').removeClass('d-none');
        $('#firstNameLabel').html('First Name must contain only characters')
        checkFName=false;
        enableSgnBtn();
    }else {
        $('#firstNameLabel').addClass('d-none');
        $('#inputFirstName').removeClass('border border-danger')
        checkFName=true;
        enableSgnBtn();

    }
}
function checkLastName(){
    if(checkNumber($('#inputLastName').val())){
        $('#inputLastName').addClass('border border-danger')
        $('#lastNameLabel').removeClass('d-none');
        $('#lastNameLabel').html('Last Name must contain only characters')
        checkLname=false;
        enableSgnBtn();
    }else {
         $('#lastNameLabel').addClass('d-none');
        $('#inputLastName').removeClass('border border-danger')
        checkLname=true;
        enableSgnBtn();
    }
}

function checkEmail(){
    if(!checkEmailValidation($('#inputEmail1').val())){
        $('#inputEmail1').addClass('border border-danger')
        $('#emailLabel').removeClass('d-none');
        $('#emailLabel').html('please entre valide Email')
        checkEmail1=false;
        enableSgnBtn();
    }else {
         $('#emailLabel').addClass('d-none');
        $('#inputEmail1').removeClass('border border-danger')
        checkEmail1=true;
        enableSgnBtn();
    }
}
function checkPassword(){
    if(!checkPasswordValidation($('#inputPassword1').val())){
        $('#inputPassword1').addClass('border border-danger')
        $('#passwordLabel').removeClass('d-none');
        $('#passwordLabel').html('your password must longer than 6 and  has at least one special character and one number ')
        checkPassword1=false;
        enableSgnBtn();
     }else {
        $('#passwordLabel').addClass('d-none');
        $('#inputPassword1').removeClass('border border-danger')
        checkPassword1=true;
        enableSgnBtn();
     }
}
//end check input section
function  enableSgnBtn(){
    if(checkFName===true && checkLname===true && checkEmail1===true && checkPassword1===true){
        $('#sgnBtn').removeAttr('disabled');
        $('#sgnBtn').removeClass('disabled');
    }else {
        $('#sgnBtn').addClass('disabled');
        $('#sgnBtn').attr('disabled','disabled');
    }
}
//start regex section
function checkNumber(s) {
    let rgx=/\d/
    return rgx.test(s);
}
function checkPasswordValidation(s){
    let rgx = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/
    return rgx.test(s)

}
function checkEmailValidation(s){
    let rgx = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,9}\b$/i
    return rgx.test(s)

}
//end verefication regex section
//start check login if null
function checkInput(){
    if($("#inputEmail").val()===' '  || $("#inputPassword").val()===' '){
        return true;
    }else {
        return false;
    }
}