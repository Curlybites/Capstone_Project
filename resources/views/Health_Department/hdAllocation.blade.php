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
                                                        {{-- <th>Image</th> --}}
                                                        <th>Program</th>
                                                        <th>Program Manager</th>
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
                                                        {{-- <td>
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
                                                        </td> --}}
                                                        <td>Maternity</td>
                                                        <td>Jong Smith</td>
                                                        <td>Medicine</td>
                                                        <td>12</td>
                                                        <td>1120</td>
                                                        <td class="text-success">Approved</td>
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
