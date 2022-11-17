let wrapper = document.getElementById("wrapper");
let toggleButton = document.getElementById("menu-toggle");
let dashboardContainer=document.getElementById("dashboardContainer");
let bookContainer=document.getElementById("bookContainer");
let btnBook=document.getElementById("btnBook");
let btnDash=document.getElementById("btnDash");
let pageTitle=document.getElementById('pageTitle');
toggleButton.onclick = function () {
    wrapper.classList.toggle("toggled");
};
function createTask() {
    resetForm();
    $('#addDiv').addClass('d-none');
    $('#sttDiv').addClass('d-none');
    $('#entryDiv').addClass('d-none');
    $('#modaltitle').html("Add Book")
    $('#modal-task').modal('show');
    $('#modelFooter').html(`<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >cancel</button>
    <button type="button" name="save" class="btn  btn-primary text-white" data-bs-dismiss="modal" id="saveBookBtn" onclick="insertIntoBook()" >Save</button>`)
}
function loadBooks(){
    pageTitle.innerHTML='Books List'
    bookContainer.classList.remove('d-none');
    dashboardContainer.classList.add('d-none');
    btnDash.classList.remove('active');
    btnBook.classList.add('active');
    getBooksData();
}
function loadDashboard(){
    pageTitle.innerHTML='Dashboard';
    btnDash.classList.add('active');
    btnBook.classList.remove('active');
    bookContainer.classList.add('d-none');
    dashboardContainer.classList.remove('d-none');
}

function resetForm(){
    //document.getElementById('fbookName').value=" ";
    $('#fbookName').val(" ");
    $('#fIsbn').val(" ");
    $('#fwriter').val(" ");
    $('#fLanguage').val(" ");
    $('#frelease').val(" ");
    $('#fcategory').val(" ")
    $('#fquantity').val(" ")
}


function insertIntoBook(){
    $.post("assets/backend/addNewBook.php",{bookName:$('#fbookName').val(),isbn:$('#fIsbn').val(),writer:$('#fwriter').val(),lang:$('#fLanguage').val(),
        release:$('#frelease').val(),category:$('#fcategory').val(),quantity:$('#fquantity').val()
    },function (data,textStatus,jqXHR) {
        if(data==='true'){
            Swal.fire(
                'Good job!',
                'the book has been added with',
                'success'
            )
            getBooksData();
        }else{
            alert(data)
        }
    }).fail(function (error) {
        alert(error.detail)
    })
}


function getBooksData(){
    $.ajax({

        url: 'assets/backend/getBooksData.php',
        dataType: 'json',
        success: function(data){
            document.getElementById('tableBodyData').innerHTML='';
            for (let i=0;i<data.booksData.length;i++){
                document.getElementById('tableBodyData').innerHTML+=`
                <tr>
                     <th scope="row">${data.booksData[i].bookId}</th>
                    <td>${data.booksData[i].bookName}</td>
                    <td>${data.booksData[i].isbn}</td>
                    <td>${data.booksData[i].writer}</td>
                    <td><button type="button" onclick="selectBook(${data.booksData[i].bookId})" class="btn btn-primary">Full information</button></td>
                </tr>`;
            }


        }
    });

}

function selectBook(id){
    $('#modaltitle').html("Full Information")
    $('#addDiv').removeClass('d-none');
    $('#sttDiv').removeClass('d-none');
    $('#entryDiv').removeClass('d-none');
    $('#modal-task').modal('show');
    $('#modelFooter').html(`<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >cancel</button>
    <button type="button" class="btn  btn-success text-white" data-bs-dismiss="modal" id="saveBookBtn" onclick="" >book out</button>
    <button type="button" class="btn  btn-primary text-white" data-bs-dismiss="modal" id="saveBookBtn" onclick="" >Update</button>
    <button type="button" class="btn  btn-danger text-white" data-bs-dismiss="modal" id="saveBookBtn" onclick="" >delete</button>`)
    $.ajax({
        url: 'assets/backend/getBooksData.php',
        dataType: 'json',
        success: function(data){
            for (let i=0;i<data.booksData.length;i++){
                if(data.booksData[i].bookId==id){
                    $('#fbookName').val(data.booksData[i].bookName);
                    $('#fIsbn').val(data.booksData[i].isbn);
                    $('#fwriter').val(data.booksData[i].writer);
                    $('#fLanguage').val(data.booksData[i].language);
                    $('#frelease').val(data.booksData[i].releaseDate);
                    $('#fentry').val(data.booksData[i].inputedDate);
                    $('#fcategory').val(data.booksData[i].category)
                    $('#fquantity').val(data.booksData[i].quantity)
                    $('#faddedBy').val(data.booksData[i].firstName+" "+data.booksData[i].lastName);
                    $('#fstatus').val('in stock');
                    break;

                }

            }


        }
    });
}