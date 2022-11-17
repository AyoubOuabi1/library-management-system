<!-- TASK MODAL -->
<div aria-hidden="true" aria-labelledby="exampleModalCenterTitle"   class="modal fade" id="modalBookOut" role="dialog"
     tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h2 id="modalOuttitle"></h2>
            </div>
            <div class="modal-body">
                <!--begin form-->
                <form  method="POST"  class="form" id="form">
                    <div class="form-group">
                        <label for="fbookNameOut">Book Name</label>
                        <input class="form-control form-control-lg check" id="fbookNameOut" name="fbookNameOut" readonly type="text">
                    </div>
                    <div class="form-group">
                        <label for="fIsbn">ISBN</label>
                        <input class="form-control form-control-lg check" id="fIsbnOut" name="fIsbnOut" readonly type="text">
                    </div>
                    <div class="form-group">
                        <label for="fstudent">Student Name</label>
                        <input class="form-control form-control-lg check" id="fstudent" name="fstudent" required type="text">
                    </div>
                    <div class="modal-footer" id="modelOutFooter">

                    </div>
                </form>
                <!--end form-->
            </div>

        </div>
    </div>
</div>

<!-- TASK MODAL DELETE AND UPDATE-->