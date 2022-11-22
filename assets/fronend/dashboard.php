<div class="row g-3 my-2">
    <div class="col-md-4">
        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
                <h3 class="fs-2"><?php echo getTotalBooks() ?></h3>
                <p class="fs-5">Total Books</p>
            </div>
            <i class="fas fa-book fs-1 primary-text-color border rounded-full secondary-bg p-3"></i>
        </div>
    </div>

    <div class="col-md-4">
        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
                <h3 class="fs-2 text-danger" id="lessTwo"><?php echo getTotalBookLessTwo() ?></h3>
                <p class="fs-5 text-danger">Books with quantity less than 2</p>
            </div>
            <i
                class="fas fa-book fs-1 text-danger border rounded-full secondary-bg p-3"></i>
        </div>
    </div>



    <div class="col-md-4">
        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
                <h3 class="fs-2"><?php echo getTotalOutedBook() ?></h3>
                <p class="fs-5">Out of stock</p>
            </div>
            <i class="fas fa-book fs-1 primary-text-color border rounded-full secondary-bg p-3"></i>
        </div>
    </div>
</div>

<div class="row my-5">

    <div class="col-12 table-responsive">
        <h3 class="fs-4 mb-3 primary-text-color">List Books with quantity less than 2</h3>

        <table class="table  bg-white rounded shadow-sm  table-hover">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">ISBN</th>
                <th scope="col">Writer</th>
                <th scope="col">Quantity</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody id="dashboarTabledBody">


            </tbody>
        </table>
    </div>
</div>
<div class="d-none col-12" id="noBooksPar">
    <h3 class="h3 text-danger text-center">The are no books with quantity less than 2</h3>
</div>
<div class="modal fade" id="quantityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Update Quantity</h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="fOldqnt">Old Quantity</label>
                    <input class="form-control form-control-lg check" id="fOldqnt" name="fOldqnt" readonly type="text">
                </div>
                <div class="form-group">
                    <label for="fqnt">New Quantity</label>
                    <input class="form-control form-control-lg check" id="fqnt" name="fqnt" required type="text">
                </div>
            </div>
            <div class="modal-footer" id="qntModalFooter">

            </div>
        </div>
    </div>
</div>
