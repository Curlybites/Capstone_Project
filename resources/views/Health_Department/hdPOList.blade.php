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
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Purchase Order /</span>
                            PO List
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


                                    </div>

                                    <hr class="my-0">
                                    <!-- Account -->
                                    <div class="card-body p-5 ">
                                        <div class="table-responsive text-nowrap">
                                            <table id="dataTable" class="datatables-basic table   border-top "
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>PO#</th>
                                                        <th>Date Created</th>
                                                        <th>Item Name</th>
                                                        <th>Image</th>
                                                        <th>Unit</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                        <th>Supplier</th>
                                                        <th>Total Amount</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>01232</td>
                                                        <td>2024-12-12</td>
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
                                                        <td>Box</td>
                                                        <td>12</td>
                                                        <td>30</td>
                                                        <td>John Smith</td>
                                                        <td>1200</td>
                                                        <td><span class="badge bg-label-success me-1">Approved</span>
                                                        </td>
                                                        <td>
                                                            <a type="button"
                                                                href="{{ '/Health_Department/Purchase_Order_View' }}"
                                                                class="text-primary d-flex justify-content-center">
                                                                <i class="bi bi-eye-fill fs-5"></i>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>

                                    <!-- /Account -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--footer-->

                    @include('components.footer')
