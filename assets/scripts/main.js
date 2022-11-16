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
    $('#tasktitle').html("Add Book")
    $('#modal-task').modal('show');
    $('#modelFooter').html(`<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >cancel</button>
    <button type="submit" name="save" class="btn  btn-primary text-white" data-bs-dismiss="modal" id="saveBookBtn" >Save</button>`)
}
function loadBooks(){
    pageTitle.innerHTML='Books List'
    bookContainer.classList.remove('d-none');
    dashboardContainer.classList.add('d-none');
    btnDash.classList.remove('active');
    btnBook.classList.add('active');
}
function loadDashboard(){
    pageTitle.innerHTML='Dashboard';
    btnDash.classList.add('active');
    btnBook.classList.remove('active');
    bookContainer.classList.add('d-none');
    dashboardContainer.classList.remove('d-none');
 }