@include('components.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            {{-- sidebar --}}
            @include('components.sidebar.hc_sidebar')


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
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Patient /</span> List of
                            Patients
                        </h4>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">Patients List</h5>
                                        <button class="btn-success mx-4 px-4 py-1 border-0" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"> <i class='bx bxs-add-to-queue'></i> Create
                                            New</button>

                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                <div class="modal-content ">
                                                    <div class="modal-header ">
                                                        <h1 class="modal-title fs-3" id="exampleModalLabel">Create
                                                            Patient
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('patientname') }}" method="POST">
                                                        @csrf
                                                        <div class="modal-body">

                                                            <div class="col">
                                                                <h5>Patient Details</h5>
                                                                <div class="row">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="form-label">First Name</label>
                                                                        <input type="text" class="form-control"
                                                                            name="fname" id="exampleFormControlInput1"
                                                                            placeholder="First Name">
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="form-label">Middle Name</label>
                                                                        <input type="text" class="form-control"
                                                                            name="mname"
                                                                            id="exampleFormControlInput1"
                                                                            placeholder="Middle Name">
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="form-label">Last Name</label>
                                                                        <input type="text" class="form-control"
                                                                            name="lname"
                                                                            id="exampleFormControlInput1"
                                                                            placeholder="Last Name">
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="form-label">Age</label>
                                                                        <input type="number" class="form-control"
                                                                            name="age"
                                                                            id="exampleFormControlInput1"
                                                                            placeholder="Age">
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="form-label">Gender</label>
                                                                        <select class="form-select"
                                                                            aria-label="Default select example"
                                                                            name="gender">
                                                                            <option selected>Select Gender</option>
                                                                            <option value="Male">Male</option>
                                                                            <option value="Female">Female</option>
                                                                            <option value="Bading">Bading</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-md-4 mb-3">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="form-label">Program</label>
                                                                        <input type="text" class="form-control"
                                                                            name="program"
                                                                            id="exampleFormControlInput1"
                                                                            placeholder="Program">
                                                                    </div>

                                                                </div>

                                                                <div class="row justify-content-center">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="form-label">Health Center</label>
                                                                        <input class="form-control" type="text"
                                                                            name="healthcenter"
                                                                            aria-label="Disabled input example">
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="form-label">District</label>
                                                                        <input class="form-control" type="text"
                                                                            name="district"
                                                                            aria-label="Disabled input example">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer border-1">
                                                            <button type="button"
                                                                class="btn btn-secondary mt-3"data-bs-dismiss="modal">Close</button>
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
                                            <table id="dataTable"
                                                class="datatables-basic table   text-center border-top "
                                                style="width:100% ">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">Name</th>
                                                        <th class="text-center">Age</th>
                                                        <th class="text-center">Gender</th>
                                                        <th class="text-center">Program</th>
                                                        <th class="text-center">District</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($tableData as $data)
                                                        <tr>
                                                            <td>{{ $data->id }}</td>
                                                            <td>{{ $data->fname }} {{ $data->mname}} {{ $data->lname }}</td>
                                                            <td>{{ $data->age }}</td>
                                                            <td>{{ $data->gender}}</td>
                                                            <td>{{ $data->program }}</td>
                                                            <td>{{ $data->district }}</td>
                                                            <td class="d-flex justify-content-center align-items-center">
                                                                <a href={{'/Health_Center/Patient_View'}}
                                                                class="text-primary">
                                                                <i class="bi bi-eye-fill"></i>
                                                            </a>

                                                            <a type="button" href=/Admin/User_List/1
                                                                class="text-primary" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal2">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                            <a type="button"
                                                                href={{ '/Health_Center/Patient_Item_List' }}
                                                                class="text-primary">
                                                                <i class='bx bx-arrow-to-right'></i>
                                                            </a>
                                                        </td>
                                                        </tr>
                                                    @endforeach
                                                    {{-- MODAL --}}
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

                                                                    <div class="col">
                                                                        <h5>Patient Details</h5>
                                                                        <div class="row justify-content-center">
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                                                                <input class="form-control" type="text" placeholder="Name" aria-label="Disabled input example" disabled>
                                                                            </div>
                                                                    
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="exampleFormControlInput2" class="form-label">Age</label>
                                                                                <input class="form-control" type="text" placeholder="Age" aria-label="Disabled input example" disabled>
                                                                            </div>
                                                                    
                                                                            <!-- Add more fields for other details -->
                                                                        </div>
                                                                    
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="exampleFormControlInput1"
                                                                                    class="form-label">Program</label>
                                                                                <input type="email"
                                                                                    class="form-control"
                                                                                    id="exampleFormControlInput1"
                                                                                    placeholder="Program">
                                                                            </div>
                                                                        </div>

                                                                        <div class="row justify-content-center">
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="exampleFormControlInput1"
                                                                                    class="form-label">Item</label>
                                                                                <input class="form-control"
                                                                                    type="text" placeholder="Amox"
                                                                                    aria-label="Disabled input example"
                                                                                    >

                                                                            </div>
                                                                            <div class="col-md-6 mb-3">
                                                                                <label for="exampleFormControlInput1"
                                                                                    class="form-label">Quantity</label>
                                                                                <input type="email"
                                                                                    class="form-control"
                                                                                    id="exampleFormControlInput1"
                                                                                    placeholder="Program">
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
