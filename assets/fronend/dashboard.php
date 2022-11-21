<div class="row g-3 my-2">
    <div class="col-md-4">
        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
                <h3 class="fs-2"><?php echo getTotalBooks() ?></h3>
                <p class="fs-5">Total Books</p>
            </div>
            <i class="fas fa-book fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
    </div>

    <div class="col-md-4">
        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
                <h3 class="fs-2"><?php echo getTotalBookLessTwo() ?></h3>
                <p class="fs-5">Books with quantity less than 2</p>
            </div>
            <i
                class="fas fa-book fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
    </div>



    <div class="col-md-4">
        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
                <h3 class="fs-2"><?php echo getTotalOutedBook() ?></h3>
                <p class="fs-5">Out of stock</p>
            </div>
            <i class="fas fa-book fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </div>
    </div>
</div>

<div class="row my-5">

    <div class="col-12 table-responsive">
        <h3 class="fs-4 mb-3 primary-text">List Books with quantity less than 2</h3>

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
