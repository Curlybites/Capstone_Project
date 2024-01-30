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

                        {{-- <div class="row">
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
                        </div> --}}

                        {{-- <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <!-- Account -->
                                    <div class="card-body px-5">
                                        <div
                                            class="title d-flex align-items-center justify-content-between border-top border-success">
                                            <h4 class="mb-4">Allocation Details</h4>
                                            <button class="btn-success mx-4 px-4 py-1 border-0" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"> <i class='bx bxs-add-to-queue'></i>
                                                Create
                                                New</button>
                                        </div>

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
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Paracetamol</td>
                                                        <td>Maternity</td>
                                                        <td>John Smith</td>
                                                        <td>Medicine</td>
                                                        <td>100</td>
                                                        <td class="avatar me-2"><img
                                                                src="https://5.imimg.com/data5/SELLER/Default/2022/9/IV/UY/CG/75459511/500mg-paracetamol-tablet.jpg"
                                                                class="rounded" alt="awts"></td>
                                                        <td>100</td>

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
                        </div> --}}

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">Allocation List</h5>
                                    </div>

                                    <hr class="my-0">
                                    <!-- Account -->
                                    <div class="card-body p-5 ">
                                        <div class="table-responsive text-nowrap overflow-visible">
                                            <table id="dataTable" class="datatables-basic table   border-top "
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Item Name</th>
                                                        <th>Image</th>
                                                        <th>District</th>
                                                        <th>Program</th>
                                                        <th>Type</th>
                                                        <th>Quantity</th>
                                                        <th>Price</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Paracetamol</td>
                                                        <td>
                                                            <ul
                                                                class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                                    data-bs-placement="top"
                                                                    class="avatar avatar-xs pull-up"
                                                                    title="Lilian Fuller">
                                                                    <img src="../assets/img/avatars/5.png"
                                                                        alt="Avatar" class="rounded-circle">
                                                                </li>
                                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                                    data-bs-placement="top"
                                                                    class="avatar avatar-xs pull-up"
                                                                    title="Sophia Wilkerson">
                                                                    <img src="../assets/img/avatars/6.png"
                                                                        alt="Avatar" class="rounded-circle">
                                                                </li>
                                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                                    data-bs-placement="top"
                                                                    class="avatar avatar-xs pull-up"
                                                                    title="Christina Parker">
                                                                    <img src="../assets/img/avatars/7.png"
                                                                        alt="Avatar" class="rounded-circle">
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>District 1</td>
                                                        <td>Maternity</td>
                                                        <td>Medicine</td>
                                                        <td>12</td>
                                                        <td>1120</td>
                                                        <td class="text-success">Active</td>
                                                    </tr>
                                                </tbody>
                                                </tfoot>
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
