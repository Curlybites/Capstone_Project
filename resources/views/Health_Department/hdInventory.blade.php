@include('components.header');

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
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Inventory /</span>
                            Item List
                        </h4>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header"></h5>
                                        {{-- <button class="btn-success mx-4 px-4 py-1 border-0" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"> <i class='bx bxs-add-to-queue'></i> Create
                                            New</button> --}}

                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content ">
                                                    <div class="modal-header ">
                                                        <h1 class="modal-title fs-3" id="exampleModalLabel">Create
                                                            Health Centers
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="/Admin/Store" method="POST">
                                                        @csrf
                                                        <div class="modal-body">

                                                            <div class="row">
                                                                <h5>Personal Details</h5>
                                                                <div class="col-12">
                                                                    <p>Health Center Name</p>
                                                                    <div class="input-group mb-3">
                                                                        <select class="form-select"
                                                                            aria-label="Default select example"
                                                                            name="role">
                                                                            <option value="">Select District
                                                                                Number
                                                                            </option>
                                                                            <option value="1">District 1
                                                                            </option>
                                                                            <option value="2">District 2
                                                                            </option>
                                                                            <option value="3">District 3
                                                                            </option>
                                                                            <option value="4">District 4
                                                                            </option>
                                                                            <option value="5">District 5
                                                                            </option>
                                                                            <option value="6">District 6
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p>District Supervisor</p>
                                                                    <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        name="role">
                                                                        <option value="">Select District
                                                                            Number
                                                                        </option>
                                                                        <option value="1">District 1
                                                                        </option>
                                                                        <option value="2">District 2
                                                                        </option>
                                                                        <option value="3">District 3
                                                                        </option>
                                                                        <option value="4">District 4
                                                                        </option>
                                                                        <option value="5">District 5
                                                                        </option>
                                                                        <option value="6">District 6
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer border-1">
                                                            <button type="button" class="btn btn-secondary mt-3"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary mt-3">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="my-0">
                                    <!-- Account -->
                                    <div class="card-body p-5 ">
                                        <div class="table-responsive text-nowrap overflow-visible">
                                            <table id="dataTable" class="datatables-basic table   border-top "
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Item Name</th>
                                                        <th>Type</th>
                                                        <th>Image</th>
                                                        <th>Price</th>
                                                        <th>Program</th>
                                                        <th>Date of Manufactured</th>
                                                        <th>Date of Expiration</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Paracetamol</td>
                                                        <td>Medicine</td>
                                                        <td class="avatar me-2"><img
                                                                src="https://5.imimg.com/data5/SELLER/Default/2022/9/IV/UY/CG/75459511/500mg-paracetamol-tablet.jpg"
                                                                class="rounded" alt="awts"></td>
                                                        <td>100</td>
                                                        <td>Maternity</td>
                                                        <td>12-12-2023</td>
                                                        <td>12-12-2024</td>
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
                    </div>
                    <!--footer-->

                    @include('components.footer')
