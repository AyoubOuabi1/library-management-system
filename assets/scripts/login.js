function insertIntoAdmin(){

    $.post("assets/backend/AddNewAdmin.php", {firstname:$("#inputFirstName").val(),lastName:$("#inputLastName").val()
            ,email:$("#inputEmail1").val(),password:$("#inputPassword1").val()},
        function (data, textStatus, jqXHR) {
                $('#successModal').modal('show');
                setTimeout(function (){location.href='login.php'},3000)


        }
    ).fail(function(){
        console.log("failed");
    });

}