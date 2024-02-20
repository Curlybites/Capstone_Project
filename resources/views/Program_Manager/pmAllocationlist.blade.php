@include('components.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            {{-- sidebar --}}
            @include('Components.sidebar.pm_sidebar')

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('components.navbar.navbar')
                <!-- / Navbar -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-fluid  flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">Allocation List</h5>
                                    </div>
                                    <hr class="my-0"">
                                    <!-- / Content -->
                                    <div class="card-body px-5">
                                        <div class="table-responsive text-nowrap overflow-visible">
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
                                                        <td>1120</td>
                                                        <td class="text-success">Approved</td>
                                                        <td>
                                                            {{-- <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle"
                                                                    type="button" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Action
                                                                </button>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li><a class="dropdown-item"
                                                                            href="{{ '/Program_Manager/AllocationView' }}"><i
                                                                                class="bi bi-eye-fill fs-5 text-primary"></i>
                                                                            View</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="{{ '/Program_Manager/AllocationEdit' }}"><i
                                                                                class="bi bi-pen-fill fs-5 text-info"></i>
                                                                            Edit</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="#"><i
                                                                                class="bi bi-trash-fill fs-5 text-danger"></i>
                                                                            Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div> --}}
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn p-0 dropdown-toggle hide-arrow"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item"
                                                                        href="{{ '/Program_Manager/AllocationView' }}">
                                                                        <i class="bi bi-eye-fill me-2"></i>View
                                                                    </a>
                                                                    <a class="dropdown-item" 
                                                                    {{-- data-bs-toggle="modal" --}}
                                                                        {{-- data-bs-target="#exampleModal2"  --}}
                                                                        href="{{'/Program_Manager/AllocationEdit'}}"><i
                                                                            class="bx bx-edit-alt me-2"></i>Edit</a>
                                                                    <a class="dropdown-item" href=""><i
                                                                            class="bx bx-trash me-2"></i>Delete</a>
                                                                </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="content-backdrop fade"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Content -->
            <!--footer-->


        </div>
    </div>
</body>

@include('components.footer');
