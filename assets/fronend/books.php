<div class="  my-5">
    <div class="mb-3 d-flex justify-content-end">

        <button class="btn  btn-primary rounded-pill" type="button" data-bs-toggle="modal" onclick="createTask()">
            <h5 >&emsp;Add Book&emsp;</h5>
        </button>

    </div>
    <div class="row">
        <div class="col-md-6 col-12 table-responsive">
            <h3 class="fs-4  mb-3 primary-text">Books In Stock</h3>
            <table class="table  bg-white rounded shadow-sm  table-hover">
                <thead>
                <tr>
                    <th scope="col" >id</th>
                    <th scope="col">Name</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Writer</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody id="tableBodyData">


                </tbody>
            </table>
        </div>
        <div class="col col-md-6 col-12 table-responsive">
            <h3 class="fs-4  mb-3 primary-text">Recent Books Outed</h3>

            <table class="table  bg-white rounded shadow-sm  table-hover">
                <thead>
                <tr>
                    <th scope="col" >reference</th>
                    <th scope="col">name</th>
                    <th scope="col">Isbn</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Television</td>
                    <td>Jonny</td>
                    <td>$1200</td>

                </tr>

                </tbody>
            </table>
        </div>
    </div>

</div>


