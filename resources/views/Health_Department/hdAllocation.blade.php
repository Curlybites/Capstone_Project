@include('components.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('components.sidebar.hd_sidebar')

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('components.navbar.navbar')
                <!-- Navbar End-->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-fluid  flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Allocation /</span>
                            Allocation List
                        </h4>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-body px-5">
                                        <h4 class="mb-4">Item Allocation</h4>
                                        <form action="">
                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="itemName" class="form-label">Item</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Select Item</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="quantity" class="form-label">Quantity</label>
                                                    <input type="number" class="form-control" id="quantity"
                                                        placeholder="Quantity">
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="program" class="form-label">Type of Program</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Select Pogram</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="program" class="form-label">Program Manager</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Select Program Manager</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <button type="button" class="btn btn-primary me-md-3">Allocate</button>
                                            <button type="button" class="btn btn-danger">Reset</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <!-- Account -->
                                    <div class="card-body px-5">
                                        <h4 class="mb-4">Allocation Details</h4>
                                        <div class="table-responsive text-nowrap">
                                            <table id="dataTable" class="datatables-basic table border-top "
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Item Name</th>
                                                        <th>Program</th>
                                                        <th>Program Manager</th>
                                                        <th>Type</th>
                                                        <th>Quantity</th>
                                                        <th>Image</th>
                                                        <th>Price</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Paracetamol</td>
                                                        <td>Maternity</td>
                                                        <td>John Smith</td>
                                                        <td>Medicine</td>
                                                        <td>12</td>
                                                        <td>1120</td>
                                                        <td class="text-success">Approved</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle"
                                                                    type="button" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Action
                                                                </button>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li><a class="dropdown-item"
                                                                            href="{{ '/Health_Department/Allocation_View' }}"><i
                                                                                class="bi bi-eye-fill fs-5 text-primary"></i>
                                                                            View</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="{{ '/Health_Department/Allocation_Edit' }}"><i
                                                                                class="bi bi-pen-fill fs-5 text-info"></i>
                                                                            Edit</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="#"><i
                                                                                class="bi bi-trash-fill fs-5 text-danger"></i>
                                                                            Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    <div class="card-body">
                                        <form id="formAccountSettings" method="POST" onsubmit="return false">

                                        </form>
                                    </div>
                                    <!-- /Account -->
                                </div>

                            </div>
                        </div>
                    </div> <!--footer-->

                    @include('components.footer');
