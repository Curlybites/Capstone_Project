@include('components.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('Health_Department.sidebar.Dashboard_active')

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('components.navbar.navbar')
                <!-- Navbar End-->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-fluid  flex-grow-1 container-p-y">

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
                                                        <th>Date Created</th>
                                                        <th>Item Name</th>
                                                        <th>Program</th>
                                                        <th>Type</th>
                                                        <th>Quantity</th>
                                                        {{-- <th>Image</th> --}}
                                                        <th>Total Amount</th>
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
                                                        <td>100</td>
                                                        {{-- <td class="avatar me-2"><img
                                                                src="https://5.imimg.com/data5/SELLER/Default/2022/9/IV/UY/CG/75459511/500mg-paracetamol-tablet.jpg"
                                                                class="rounded" alt="awts"></td> --}}
                                                        <td>100</td>
                                                        <td>Active</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    Action
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item"
                                                                            href="#">Allocate</a></li>
                                                                    <li><a class="dropdown-item" href="#">Edit</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
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
