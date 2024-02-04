@include('components.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('components.sidebar.hc_sidebar')

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('components.navbar.navbar')
                <!-- Navbar End-->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-fluid  flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Patient / Patient List /
                            </span>
                            Patient Item Order
                        </h4>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">Patient Item Order</h5>

                                    </div>

                                    <hr class="my-0">
                                    <!-- Account -->
                                    <div class="card-body px-5">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="">
                                                    <div class="row mb-2">
                                                        <div class="col-md-6 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Name</label>
                                                                <input class="form-control" type="text" placeholder="Sample O. Name" aria-label="Disabled input example" disabled>

                                                        </div>
                                                        <div class="col-md-6 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Program</label>
                                                            <input class="form-control" type="text" placeholder="Family Planning" aria-label="Disabled input example" disabled>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-5">
                                                        <div class="col-md-6 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Barangay Health Center</label>
                                                                <input class="form-control" type="text" placeholder="Commonwealth HC" aria-label="Disabled input example" disabled>

                                                        </div>
                                                        <div class="col-md-6 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">District</label>
                                                            <input class="form-control" type="text" placeholder="2" aria-label="Disabled input example" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered"
                                                            id="myTable">
                                                            <colgroup>
                                                                <col width="7%">
                                                                <col width="5%">
                                                                <col width="10%">
                                                                <col width="20%">
                                                                <col width="30%">
                                                            </colgroup>
                                                            <thead>
                                                                <tr class="bg-navy disabled">
                                                                    <th class="px-1 py-1 text-center"></th>
                                                                    <th class="px-1 py-1 text-center">Qty</th>
                                                                    <th class="px-1 py-1 text-center">Unit</th>
                                                                    <th class="px-1 py-1 text-center">Item</th>
                                                                    <th class="px-1 py-1 text-center">Description</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="addTBRow">
                                                                <tr>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger py-0 text-start"
                                                                            onclick="removeRow(this)">X</button>
                                                                    </td>
                                                                    <td class="align-middle p-0 text-center">
                                                                        <input type="number"
                                                                            class="form-control text-center border-0"
                                                                            value="32">
                                                                    </td>
                                                                    <td class="align-middle p-0 text-center">
                                                                        <input type="text"
                                                                            class="form-control text-center border-0"
                                                                            value="box">
                                                                    </td>
                                                                    <td class="align-middle p-0 text-center">
                                                                        <input type="text"
                                                                            class="form-control text-center border-0"
                                                                            value="Parasatukmol">
                                                                    </td>
                                                                    <td class="align-middle p-0 text-center">
                                                                        <input type="text"
                                                                            class="form-control text-center border-0"
                                                                            value="asdsad">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th colspan="6" class="text-start">
                                                                        <div class="btn btn-primary"
                                                                            style="font-size: 10px" onclick="addRow()">
                                                                            Add
                                                                            Row</div>
                                                                    </th>

                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    <div class="row my-5">
                                                        <div class="col-md-6 mb-md-0 mb-3">
                                                            <label for="">Notes</label>
                                                            <textarea class="form-control" style="height: 100px"></textarea>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">Status</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example">
                                                                <option selected>Open this select menu</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="btn btn-primary">Save</div>
                                                        <a class="btn btn-danger"
                                                            href="{{ '/Health_Center/Patient_List' }}">Cancel</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <script>
                    function addRow() {
                        const table = document.getElementById("myTable");
                        const tbody = table.getElementsByTagName("tbody")[0];

                        let cloneRow;
                        if (tbody.rows.length > 0) {
                            // Clone an existing row if tbody is not empty
                            cloneRow = tbody.rows[0].cloneNode(true);

                            // Reset input values to empty strings
                            const inputs = cloneRow.getElementsByTagName("input");
                            for (let input of inputs) {
                                input.value = "";
                            }
                        } else {
                            // Create a new row if tbody is empty
                            cloneRow = document.createElement("tr");
                            cloneRow.innerHTML = `
            <td>
                <button class="btn btn-sm btn-danger py-0" onclick="removeRow(this)">X</button>
            </td>
            <td class="align-middle p-0 text-center">
                <input type="number" class="form-control text-center border-0">
            </td>
            <td class="align-middle p-0 text-center">
                <input type="text" class="form-control text-center border-0">
            </td>
            <td class="align-middle p-0 text-center">
                <input type="text" class="form-control text-center border-0">
            </td>
            <td class="align-middle p-0 text-center">
                <input type="text" class="form-control text-center border-0">
            </td>
            <td class="align-middle p-0 text-center">
                <input type="number" class="form-control text-center border-0">
            </td>
            <td class="align-middle p-0 text-center">
                <input type="number" class="form-control text-center border-0" disabled>
            </td>
        `;
                        }

                        tbody.appendChild(cloneRow);
                    }

                    function removeRow(button) {
                        const row = button.parentNode.parentNode;
                        row.parentNode.removeChild(row);
                    }
                </script>

                @include('components.footer');
