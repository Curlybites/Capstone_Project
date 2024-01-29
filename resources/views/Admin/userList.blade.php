@include('components.header');

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('Admin.sidebar.User_active');
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
          @include('components.navbar.navbar');
                <!-- / Navbar -->
                

                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-fluid  flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users /</span> List of Users
                        </h4>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">User List</h5>
                                        <button class="btn-success mx-4 px-4 py-1 border-0" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"> <i class='bx bxs-add-to-queue'></i> Create
                                            New</button>

                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                <div class="modal-content ">
                                                    <div class="modal-header ">
                                                        <h1 class="modal-title fs-3" id="exampleModalLabel">Create User
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="/Admin/Store" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-body">

                                                            <div class="row">

                                                                <h5>Personal Details</h5>
                                                                <div class="col">
                                                                    <p>First Name</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Sizing e xample input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="firstname" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <p>Middle Name</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="middlename" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <p>Last Name</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="lastname" required>
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
                                                                    <p>Address</p>
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

                                                                <div class="col">
                                                                    <p>User Image</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="file" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="image">
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row border-top pt-4">
                                                                <h5>Designation / Role Setup</h5>

                                                                <div class="col">
                                                                    <p>Select Role Type</p>
                                                                    <div class="input-group mb-3">
                                                                        <select class="form-select"
                                                                            aria-label="Default select example"
                                                                            name="role">
                                                                            <option value="1">Admin</option>
                                                                            <option value="2">Program Manager
                                                                            </option>
                                                                            <option value="3">Health Department Staff
                                                                            </option>
                                                                            <option value="4">District Stafff</option>
                                                                            <option value="5">Brgy. Health Center
                                                                                Staff</option>
                                                                            <option value="6">Supplier</option>
                                                                        </select>
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
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>

                                    <hr class="my-0">
                                    <!-- Account -->
                                    <div class="card-body p-5 ">
                                        <div class="table-responsive text-nowrap overflow-visible">
                                            <table id="dataTable" class="datatables-basic table   border-top "
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Role</th>
                                                        <th>Sex</th>
                                                        <th>Contact</th>
                                                        <th>Date Created</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($users as $user)
                                                        <tr>
                                                            <td>{{ $user->id }}</td>

                                                            <td>{{ $user->lastname }}, {{ $user->firstname }}
                                                                @if (isset($user->middlename) && !empty($user->middlename))
                                                                    {{ strtoupper(substr($user->middlename, 0, 1)) }}.
                                                                    </>
                                                                @else
                                                                    No middlename provided
                                                                @endif
                                                            </td>
                                                            <td>{{ $user->email }}</td>
                                                            <td>
                                                                @switch($user->role)
                                                                    @case(1)
                                                                        Admin
                                                                    @break

                                                                    @case(2)
                                                                        Program Manager
                                                                    @break

                                                                    @case(3)
                                                                        Health Department Staff
                                                                    @break

                                                                    @case(4)
                                                                        District Staff
                                                                    @break

                                                                    @case(5)
                                                                        Brgy. Health Center Staff
                                                                    @case(6)
                                                                        Supplier
                                                                    @break

                                                                    @default
                                                                @endswitch
                                                            </td>
                                                            <td>{{ $user->sex }}</td>
                                                            <td>{{ $user->contact }}</td>
                                                            <td>{{ $user->created_at }}</td>

                                                            <td
                                                                class="d-flex justify-content-center align-items-center">



                                                                <a type="button"
                                                                    href={{ "/Admin/User_List/$user->id" }}
                                                                    class="text-primary" data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal1">
                                                                    <i class="bi bi-eye-fill"></i>
                                                                </a>

                                                                <a type="button"
                                                                    href={{ "/Admin/User_List/$user->id" }}
                                                                    class="text-primary" data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal2">
                                                                    <i class="bi bi-pencil-square"></i>
                                                                </a>




                                                                {{-- <div class="dropdown">
                                  <a class="btn btn-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                  </a>
          
                                  <ul class="dropdown-menu">
                                    <li>
                                      <a class="dropdown-item" href="#">View</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item text-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Edit</a>
                                    </li> --}}
                                                                {{-- <li>
                                      <button type="button" class="dropdown-item" href="/Admin/User_List/{{ $user->id }}">Edit</button>
                                    </li> --}}
                                                                {{-- <li><a class="dropdown-item" href="#">Delete</a></li>
                                  </ul>
                                </div> --}}
                                                            </td>
                                                        </tr>
                                                    @endforeach
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
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    {{-- <div class="card-body">
                                        <form id="formAccountSettings" method="POST" onsubmit="return false">

                                        </form>
                                    </div> --}}
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
