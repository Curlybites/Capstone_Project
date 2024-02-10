@include('components.header');

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            {{-- sidebar --}}
            @include('Program_Manager.sidebar.Account_active');

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('components.navbar.navbar');
                <!-- / Navbar -->

                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-fluid  flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account /</span> Profile
                        </h4>

                        <button type="button" class="btn btn-primary mb-3">
                            <span class="tf-icons bx bx-user me-1"></span> Account
                          </button>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                <div
                                    class="title d-flex align-items-center justify-content-between border-top border-success">
                                    <h5 class="card-header">Profile Details </h5>
                                </div>
                                <div class=card-body>
                                <div class="d-flex align-items-center align-items-sm-center gap-4">
                                    <img src="../assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded " height="100" width="100" id="uploadedAvatar">
                                    <div class="button-wrapper">
                                      <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input type="file" id="upload" class="account-file-input" hidden="" accept="image/png, image/jpeg">
                                      </label>
                                      <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                        <i class="bx bx-reset d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Reset</span>
                                      </button>
            
                                      <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                    </div>
                                  </div>
                                </div>
                                        {{-- <button class="btn-success mx-4 px-4 py-1 border-0" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"> <i class='bx bxs-add-to-queue'></i> Create
                                            New</button> --}}
{{-- 
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content ">
                                                    <div class="modal-header ">
                                                        <h1 class="modal-title fs-3" id="exampleModalLabel">Create
                                                            District
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="/Admin/Store" method="POST">
                                                        @csrf
                                                        <div class="modal-body"> --}}
{{-- 
                                                            <div class="row">
                                                                <h5>Personal Details</h5>
                                                                <div class="col-12">
                                                                    <p>District Number</p>
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
                                                        <th>District Number</th>
                                                        <th>District Supervisor</th>
                                                        <th>Action</th>
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
                                    </div> --}}

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
