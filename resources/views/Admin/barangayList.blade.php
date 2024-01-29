@include('components.header');

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            {{-- sidebar --}}
            @include('components.sidebar.admin_sidebar');


            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-fluid  navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                                    aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                                <a href="#"><i class='bx bxs-bell'></i></a>
                            </li>

                            <!-- District -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../assets/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>

                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../logout.php">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ District -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-fluid  flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Barangay /</span> List of
                            Barangays
                        </h4>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header"></h5>
                                        {{-- <button class="btn-success mx-4 px-4 py-1 border-0" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"> <i class='bx bxs-add-to-queue'></i> Create
                                            New</button>

                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                <div class="modal-content ">
                                                    <div class="modal-header ">
                                                        <h1 class="modal-title fs-3" id="exampleModalLabel">Create
                                                            Barangay
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="/Admin/Store" method="POST">
                                                        @csrf
                                                        <div class="modal-body">

                                                            <div class="row">

                                                                <h5>Barangay Details</h5>
                                                                <div class="col">
                                                                    <p>Name of Barangay Captain</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Sizing e xample input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="firstname" required>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row pb-4">

                                                                <div class="col">
                                                                    <p>Sex</p>
                                                                    <div class="input-group mb-3">
                                                                        <select class="form-select"
                                                                            aria-label="Default select example"
                                                                            name="sex">
                                                                            <option value="male">Male</option>
                                                                            <option value="Female">Female</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <p>Birthdate</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="date" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="birthdate" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <p>Address of Barangay</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="address" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <p>Contact Number</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="number" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="contact" required>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row border-top pt-4 pb-4">
                                                                <h5 class="">Account Setup</h5>

                                                                <div class="col">
                                                                    <p>Email</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="email" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="email" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <p>Password</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="password" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="password" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <p>Confirm Password</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="password" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="password_confirmation" required>
                                                                    </div>
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
                                                    <!-- Modal Content end-->
                                    <hr class="my-0">
                                    <!-- Account -->
                                    <div class="card-body p-5 ">
                                        <div class="table-responsive text-nowrap overflow-visible">
                                            <table id="dataTable" class="datatables-basic table   border-top "
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Date Created</th>
                                                        <th>District</th>
                                                        <th>Barangay</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>District 1</td>
                                                        <td></td>
                                                        <td class="d-flex justify-content-center align-items-center"><a
                                                                type="button" href=/Admin/User_List/1
                                                                class="text-primary" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal1">
                                                                <i class="bi bi-eye-fill"></i>
                                                            </a>

                                                            <a type="button" href=/Admin/User_List/1
                                                                class="text-primary" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal2">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>District 2</td>
                                                        <td></td>
                                                        <td class="d-flex justify-content-center align-items-center"><a
                                                                type="button" href=/Admin/User_List/1
                                                                class="text-primary" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal1">
                                                                <i class="bi bi-eye-fill"></i>
                                                            </a>

                                                            <a type="button" href=/Admin/User_List/1
                                                                class="text-primary" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal2">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>District 3</td>
                                                        <td></td>
                                                        <td class="d-flex justify-content-center align-items-center"><a
                                                                type="button" href=/Admin/User_List/1
                                                                class="text-primary" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal1">
                                                                <i class="bi bi-eye-fill"></i>
                                                            </a>

                                                            <a type="button" href=/Admin/User_List/1
                                                                class="text-primary" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal2">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>District 4</td>
                                                        <td></td>
                                                        <td class="d-flex justify-content-center align-items-center"><a
                                                                type="button" href=/Admin/User_List/1
                                                                class="text-primary" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal1">
                                                                <i class="bi bi-eye-fill"></i>
                                                            </a>

                                                            <a type="button" href=/Admin/User_List/1
                                                                class="text-primary" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal2">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>District 5</td>
                                                        <td></td>
                                                        <td class="d-flex justify-content-center align-items-center"><a
                                                                type="button" href=/Admin/User_List/1
                                                                class="text-primary" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal1">
                                                                <i class="bi bi-eye-fill"></i>
                                                            </a>

                                                            <a type="button" href=/Admin/User_List/1
                                                                class="text-primary" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal2">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>District 6</td>
                                                        <td></td>
                                                        <td class="d-flex justify-content-center align-items-center"><a
                                                                type="button" href=/Admin/User_List/1
                                                                class="text-primary" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal1">
                                                                <i class="bi bi-eye-fill"></i>
                                                            </a>

                                                            <a type="button" href=/Admin/User_List/1
                                                                class="text-primary" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal2">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <div class="modal fade" id="exampleModal1" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Profile View</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="button"
                                                                        class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal fade" id="exampleModal2" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Modal title</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    MODAL 2
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="button"
                                                                        class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

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
                    <!-- / Content -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- / Content -->
                <!--footer-->

                @include('components.footer');
