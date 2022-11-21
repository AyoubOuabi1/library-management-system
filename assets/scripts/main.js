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
function openBookModal() {
    resetForm();
    $('#addDiv').addClass('d-none');
    $('#sttDiv').addClass('d-none');
    $('#entryDiv').addClass('d-none');
    $('#modaltitle').html("Add Book")
    $('#modalBook').modal('show');
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
    getOutedBooksData();
}
function loadDashboard(){
    pageTitle.innerHTML='Dashboard';
    btnDash.classList.add('active');
    btnBook.classList.remove('active');
    bookContainer.classList.add('d-none');
    dashboardContainer.classList.remove('d-none');
}

function resetForm(){
    $('#fbookName').val(" ");
    $('#fIsbn').val(" ");
    $('#fwriter').val(" ");
    $('#fLanguage').val(" ");
    $('#frelease').val(" ");
    $('#fcategory').val(" ")
    $('#fquantity').val(" ")
}
//start   book function
function getBooksData(){
    $.ajax({
        url: 'assets/backend/getBooksData.php',
        dataType: 'json',
        success: function(data){
            document.getElementById('tableBodyData').innerHTML='';
            for (let i=0;i<data.booksData.length;i++){
                document.getElementById('tableBodyData').innerHTML+=`
                <tr>
                    <td>${data.booksData[i].bookName}</td>
                    <td>${data.booksData[i].isbn}</td>
                    <td>${data.booksData[i].writer}</td>
                    <td><button type="button" onclick="selectBook(${data.booksData[i].bookId})" class="btn btn-primary">More</button></td>
                </tr>`;
            }


        }
    });

}
function getBooksDataBySearch(){
     $.ajax({
        method: "POST",
        url: 'assets/backend/getBookDataBySearch.php',
        data: { BookName:$('#inputBookSearch').val()},
        dataType: 'json',
        success: function(data){
            document.getElementById('tableBodyData').innerHTML='';
            for (let i=0;i<data.booksData.length;i++){
                document.getElementById('tableBodyData').innerHTML+=`
                <tr>
                    <td>${data.booksData[i].bookName}</td>
                    <td>${data.booksData[i].isbn}</td>
                    <td>${data.booksData[i].writer}</td>
                    <td><button type="button" onclick="selectBook(${data.booksData[i].bookId})" class="btn btn-primary">More</button></td>
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
    $('#modalBook').modal('show');
    $('#modelFooter').html(`<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >cancel</button>
    <button type="button" class="btn  btn-success text-white" data-bs-dismiss="modal"  id="${id}" onclick="openOutBookModal(this.id)" >book out</button>
    <button type="button" class="btn  btn-primary text-white" data-bs-dismiss="modal" id="${id}"  onclick="updateBook(this.id)" >Update</button>
    <button type="button" class="btn  btn-danger text-white" data-bs-dismiss="modal" id="${id}"  onclick="DeleteBook(this.id)" >delete</button>`)
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
function insertIntoBook(){
    $.post("assets/backend/addNewBook.php",{bookName:$('#fbookName').val(),isbn:$('#fIsbn').val(),writer:$('#fwriter').val(),lang:$('#fLanguage').val(),
        release:$('#frelease').val(),category:$('#fcategory').val(),quantity:$('#fquantity').val()
    },function (data,textStatus,jqXHR) {
        if(data==='true'){
            Swal.fire(
                'Good job!',
                'the book has been added with success',
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
function updateBook(bkId){
    $.post("assets/backend/updateBook.php",
        {bkId:bkId,bookName:$('#fbookName').val(),isbn:$('#fIsbn').val(),writer:$('#fwriter').val(),lang:$('#fLanguage').val(),
            release:$('#frelease').val(),category:$('#fcategory').val(),quantity:$('#fquantity').val()},
        function (data,textStatus,jqXHR) {
        if(data==='true'){
            Swal.fire(
                'Good job!',
                'the book has been Updated with success',
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
function DeleteBook(bkId){
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.post("assets/backend/deleteBook.php",
                {bkId:bkId},
                function (data,textStatus,jqXHR) {
                    if(data==='true'){
                        Swal.fire(
                            'Deleted!',
                            'this Book has been deleted.',
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
    })

}

//end out book function
///////////////////////
//start out book function

function openOutBookModal(bkId){
    $('#fstudent').val(" ");
    $('#modalOuttitle').html("Book Information")
    $('#modalBookOut').modal('show');
    $('#modelOutFooter').html(`<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >cancel</button>
    <button type="button" class="btn  btn-success text-white" data-bs-dismiss="modal" id="${bkId}" onclick="insertIntoOutBook(this.id)" >Save</button>`)
    $.ajax({
        url: 'assets/backend/getBooksData.php',
        dataType: 'json',
        success: function(data){
            console.log(bkId)
            for (let i=0;i<data.booksData.length;i++){
                 if(data.booksData[i].bookId==bkId){
                    $('#fbookNameOut').val(data.booksData[i].bookName);
                    $('#fIsbnOut').val(data.booksData[i].isbn);
                    break;

                }

            }


        }
    });
}
function getOutedBooksDataBySearch(){
    console.log($('#inputOutedBookSearch').val())
    $.ajax({
        method: "POST",
        url: 'assets/backend/getOutedBookDataBySearch.php',
        data: { StudentName:$('#inputOutedBookSearch').val()},
        dataType: 'json',
        success: function(data){
            document.getElementById('tableoutedbooks').innerHTML='';
            for (let i=0;i<data.booksData.length;i++){
                document.getElementById('tableoutedbooks').innerHTML+=`
                <tr>
                    <td>${data.booksData[i].bookName}</td>
                    <td>${data.booksData[i].isbn}</td>
                    <td>${data.booksData[i].outDate}</td>
                    <td>${data.booksData[i].stdName}</td>
                    <td><button type="button" onclick="selectOutedBook(${data.booksData[i].outId})" class="btn btn-primary">More</button></td>
                </tr>`;
            }


        }
    });

}
function insertIntoOutBook(id){
    console.log(id)
    $.post("assets/backend/addNewOutDemand.php",{studentName:$('#fstudent').val(),bookId:id
    },function (data,textStatus,jqXHR) {
        if(data==='true'){
            Swal.fire(
                'Good job!',
                'the book has been added with success',
                'success'
            )
            getOutedBooksData();
        }else{
            alert(data)
        }
    }).fail(function (error) {
        alert(error.detail)
    })
}
function getOutedBooksData(){
    $.ajax({
        url: 'assets/backend/getOutedBooksData.php',
        dataType: 'json',
        success: function(data){
            document.getElementById('tableoutedbooks').innerHTML='';
            for (let i=0;i<data.booksData.length;i++){
                document.getElementById('tableoutedbooks').innerHTML+=`
                <tr>
                    <td>${data.booksData[i].bookName}</td>
                    <td>${data.booksData[i].isbn}</td>
                    <td>${data.booksData[i].outDate}</td>
                    <td>${data.booksData[i].stdName}</td>
                    <td><button type="button" id="${data.booksData[i].outId}" onclick="selectOutedBook(this.id,${data.booksData[i].bookId})" class="btn btn-primary">More</button></td>
                </tr>`;
            }


        }
    });

}
function selectOutedBook(id,bkId){
    console.log(id)
    $('#modalOutedtitle').html("Full Information")
    $('#modalOutedBookData').modal('show');
    $('#modelOutedFooter').html(`<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >cancel</button>
    <button type="button" class="btn  btn-success text-white" data-bs-dismiss="modal"  id="${id}" onclick="OutBookBack(this.id,${bkId})" >book Back</button>
    <button type="button" class="btn  btn-primary text-white" data-bs-dismiss="modal" id="${id}"  onclick="updateOutedBook(this.id)" >Update</button>
    <button type="button" class="btn  btn-danger text-white" data-bs-dismiss="modal" id="${id}"  onclick="DeleteOutedBook(this.id)" >delete</button>`)
    $.ajax({
        url: 'assets/backend/getOutedBooksData.php',
        dataType: 'json',
        success: function(data){
            for (let i=0;i<data.booksData.length;i++){
                if(data.booksData[i].outId==id){
                    $('#foutedbookName').val(data.booksData[i].bookName);
                    $('#foutedIsbn').val(data.booksData[i].isbn);
                    $('#foutedwriter').val(data.booksData[i].writer);
                    $('#fstdName').val(data.booksData[i].stdName);
                    $('#foutedDate').val(data.booksData[i].outDate);
                    $('#fOuteddBy').val(data.booksData[i].firstName+" "+data.booksData[i].lastName);
                    break;

                }

            }


        }
    });
}
function DeleteOutedBook(outBkId){
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.post("assets/backend/deleteOutedBook.php",
                {outBkId:outBkId},
                function (data,textStatus,jqXHR) {
                    if(data==='true'){
                        Swal.fire(
                            'Deleted!',
                            'this Book has been deleted.',
                            'success'
                        )
                        getOutedBooksData();
                    }else{
                        alert(data)
                    }
                }).fail(function (error) {
                alert(error.detail)
            })

        }
    })

}

function updateOutedBook(outBkId){
    $.post("assets/backend/UpdateOutBook.php",
        {outBkId:outBkId,stdName:$('#fstdName').val()},
        function (data,textStatus,jqXHR) {
            if(data==='true'){
                Swal.fire(
                    'Good job!',
                    'the book has been Updated with success',
                    'success'
                )
                getOutedBooksData();
            }else{
                alert(data)
            }
        }).fail(function (error) {
        alert(error.detail)
    })
}


function OutBookBack(outBkId,bkId){
    Swal.fire({
        title: 'Are you sure?',
        text: "this Book has been backed into library",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Sure!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.post("assets/backend/BookOutedBack.php",
                {outBkId:outBkId,bookId:bkId},
                function (data,textStatus,jqXHR) {
                    if(data==='true'){
                        Swal.fire(
                            'Backed!',
                            'this Book has been Backed.',
                            'success'
                        )
                        getOutedBooksData();
                    }else{
                        alert(data)
                    }
                }).fail(function (error) {
                alert(error.detail)
            })

        }
    })

}
//end out book function
