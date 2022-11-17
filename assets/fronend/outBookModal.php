<!-- TASK MODAL -->
<div aria-hidden="true" aria-labelledby="exampleModalCenterTitle"   class="modal fade" id="modal-task" role="dialog"
     tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h2 id="modaltitle"></h2>
            </div>
            <div class="modal-body">
                <!--begin form-->
                <form  method="POST"  class="form" id="form">
                    <div class="col-12 bg-red text-white h2 p-2 rounded-3 d-none " id="checkEmpty">
                        please remplire tous les champs
                    </div>
                    <div class="form-group">
                        <label for="title">Book Name</label>
                        <input class="form-control form-control-lg check" id="fbookName" name="fbookName" readonly type="text">
                    </div>
                    <div class="form-group">
                        <label for="fIsbn">ISBN</label>
                        <input class="form-control form-control-lg check" id="fIsbn" name="fIsbn" readonly type="text">
                    </div>
                    <div class="form-group">
                        <label for="fwriter">Writer</label>
                        <input class="form-control form-control-lg check" id="fwriter" name="fwriter" required type="text">
                    </div>

                    <div class="form-group">
                        <label for="fLanguage">Language</label>
                        <input class="form-control form-control-lg check" id="fLanguage" name="fLanguage" required type="text">
                    </div>
                    <div class="mt-2 form-group" id="entryDiv">
                        <label for="fentry">entry Date</label>
                        <input type="date" class=" form-control form-control-lg check" id="fentry" name="fentry" readonly >
                    </div>
                    <div class="mt-2 form-group">
                        <label for="frelease">released Date</label>
                        <input type="date" class=" form-control form-control-lg check" id="frelease" name="frelease" required >
                    </div>
                    <div class="form-group">
                        <label for="fcategory">Category</label>
                        <input class="form-control form-control-lg check" id="fcategory" name="fcategory" required type="text">
                    </div>
                    <div class="form-group">
                        <label for="fquantity">Quantity</label>
                        <input class="form-control form-control-lg check" id="fquantity" name="fquantity" required type="text">
                    </div>
                    <div class="form-group d-none" id="addDiv">
                        <label for="faddedBy">Added by</label>
                        <input class="form-control form-control-lg check" id="faddedBy" name="faddedBy" readonly type="text">
                    </div>
                    <div class="form-group d-none" id="sttDiv">
                        <label for="fstatus">status</label>
                        <input class="form-control form-control-lg check " id="fstatus" name="fstatus" readonly type="text">
                    </div>
                    <div class="modal-footer" id="modelFooter">

                    </div>
                </form>
                <!--end form-->
            </div>

        </div>
    </div>
</div>

<!-- TASK MODAL DELETE AND UPDATE-->