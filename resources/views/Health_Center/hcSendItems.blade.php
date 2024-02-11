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
                                        <h5 class="card-header">Patients List</h5>
                                        {{-- <button class="btn-success mx-4 px-4 py-1 border-0" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"> <i class='bx bxs-add-to-queue'></i> Create
                                            New</button> --}}

                                        {{-- <div class="modal fade" id="exampleModal" tabindex="-1"
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
                                                                            name="mname" id="exampleFormControlInput1"
                                                                            placeholder="Middle Name">
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="form-label">Last Name</label>
                                                                        <input type="text" class="form-control"
                                                                            name="lname" id="exampleFormControlInput1"
                                                                            placeholder="Last Name">
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="form-label">Age</label>
                                                                        <input type="number" class="form-control"
                                                                            name="age" id="exampleFormControlInput1"
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
                                                                            name="program" id="exampleFormControlInput1"
                                                                            placeholder="Program">
                                                                    </div>

                                                                </div>

                                                                <div class="row justify-content-center">
                                                                    <div class="col-md-4 mb-3">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="form-label">Health Center</label>
                                                                        <input class="form-control" type="text"
                                                                            name="healthcenter"
                                                                            placeholder="COMMONWEALTH HC"
                                                                            aria-label="Disabled input example">
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="form-label">District</label>
                                                                        <input class="form-control" type="text"
                                                                            name="district" placeholder="2"
                                                                            aria-label="Disabled input example">
                                                                    </div>
                                                                    <div class="col-md-4 mb-3">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="form-label">Status</label>
                                                                        <select class="form-select"
                                                                            aria-label="Default select example"
                                                                            name="status">
                                                                            <option selected>Select Status</option>
                                                                            <option value="1">Active</option>
                                                                            <option value="2">Inactive</option>
                                                                        </select>
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
                                        </div> --}}
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
                                                        <th class="text-center">Status</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($tableData as $data)
                                                        <tr>
                                                            <td>{{ $data->id }}</td>
                                                            <td>{{ $data->fname }}
                                                                {{ $data->mname }}
                                                                {{ $data->lname }}</td>
                                                            <td>{{ $data->age }}</td>
                                                            <td>{{ $data->gender }}</td>
                                                            <td>{{ $data->program }}</td>
                                                            <td>{{ $data->district }}</td>
                                                            <td>{{ $data->active ? 'Yes' : '' }}<span class="badge bg-label-success me-1">Active</span>
                                                                {{-- @switch($data->status)
                                                                    @case(1)
                                                                        <span class="badge bg-label-success me-1">Active</span>
                                                                    @break

                                                                    @case(2)
                                                                        <span
                                                                            class="badge bg-label-danger me-1">Inactive</span>
                                                                    @break

                                                                    @default
                                                                @endswitch --}}
                                                            </td>


                                                            <td
                                                                class="d-flex justify-content-center align-items-center overflow-visible">
                                                                <div class="btn-group ">
                                                                    <button class="btn" type="button"
                                                                        data-bs-toggle="dropdown"
                                                                        data-bs-auto-close="true"
                                                                        aria-expanded="false">
                                                                        <i class='bx bx-dots-vertical-rounded'></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu text-start ">
                                                                        <li class="p-2">
                                                                            <a
                                                                                href="{{ url('/Health_Center/Patient_View' . $data->id) }}"><i
                                                                                    class="bi bi-eye-fill "></i>
                                                                                View</a>
                                                                        </li>
                                                                        <li class="p-2"><a type="button"
                                                                                class="text-info"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#exampleModal2{{ $data->id }}">
                                                                                <i class="bi bi-pencil-square"></i>
                                                                                Edit</a></li>
                                                                        <li class="p-2"><a type="button"
                                                                                href="{{ url('/Health_Center/Patient_Sent_Item' . $data->id) }}"
                                                                                class="text-warning"> <i
                                                                                    class='bx bx-arrow-to-right'></i>
                                                                                Send Items</a></i>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        {{-- MODAL --}}
                                                        <div class="modal fade" id="exampleModal1" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLabel">
                                                                            Profile View</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="button"
                                                                            class="btn btn-primary">Save
                                                                            changes</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal fade" id="exampleModal2{{ $data->id }}"
                                                            tabindex="-1"
                                                            aria-labelledby="exampleModalLabel{{ $data->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLabel{{ $data->id }}">
                                                                            Update Patient</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <form
                                                                            action="{{ route('routes.update', $data->id) }}"
                                                                            id="editPatient{{ $data->id }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            <div class="col">
                                                                                <h5>Patient Details</h5>
                                                                                <div
                                                                                    class="row justify-content-center">
                                                                                    <div class="col-lg-4 mb-3">
                                                                                        <label
                                                                                            for="exampleFormControlInput1"
                                                                                            class="form-label">First
                                                                                            Name</label>
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="fName"
                                                                                            aria-label="Disabled input example"
                                                                                            name="fname"
                                                                                            value="{{ $data->fname }}">
                                                                                    </div>
                                                                                    <div class="col-lg-4 mb-3">
                                                                                        <label
                                                                                            for="exampleFormControlInput1"
                                                                                            class="form-label">Middle
                                                                                            Name</label>
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="mName"
                                                                                            aria-label="Disabled input example"
                                                                                            name="mname"
                                                                                            value={{ $data->mname }}>
                                                                                    </div>
                                                                                    <div class="col-lg-4 mb-3">
                                                                                        <label
                                                                                            for="exampleFormControlInput1"
                                                                                            class="form-label">Last
                                                                                            Name</label>
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder=";Name"
                                                                                            aria-label="Disabled input example"
                                                                                            name="lname"
                                                                                            value={{ $data->lname }}>
                                                                                    </div>

                                                                                    <div class="col-md-6 mb-3">
                                                                                        <label
                                                                                            for="exampleFormControlInput2"
                                                                                            class="form-label">Age</label>
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="Age"
                                                                                            aria-label="Disabled input example"
                                                                                            name="age"
                                                                                            value={{ $data->age }}>
                                                                                    </div>
                                                                                    {{-- <div class="col-md-6 mb-3">
                                                                                        <label
                                                                                            for="exampleFormControlInput2"
                                                                                            class="form-label">gender</label>
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="Age"
                                                                                            aria-label="Disabled input example"
                                                                                            name="gender"
                                                                                            value={{$data->gender}} >
                                                                                    </div> --}}
                                                                                    <div class="col-md-6 mb-3">
                                                                                        <label
                                                                                            for="exampleFormControlInput1"
                                                                                            class="form-label">Gender</label>
                                                                                        <select class="form-select"
                                                                                            aria-label="Default select example"
                                                                                            name="gender"
                                                                                            value={{ $data->gender }}>
                                                                                            <option selected>
                                                                                                {{ $data->gender }}
                                                                                            </option>
                                                                                            <option value="Male">Male
                                                                                            </option>
                                                                                            <option value="Female">
                                                                                                Female</option>
                                                                                            <option value="Bading">
                                                                                                Bading</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 mb-3">
                                                                                        <label
                                                                                            for="exampleFormControlInput2"
                                                                                            class="form-label">program</label>
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="Age"
                                                                                            aria-label="Disabled input example"
                                                                                            name="program"
                                                                                            value={{ $data->program }}>
                                                                                    </div>
                                                                                    <div class="col-md-6 mb-3">
                                                                                        <label
                                                                                            for="exampleFormControlInput2"
                                                                                            class="form-label">hc</label>
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="Age"
                                                                                            aria-label="Disabled input example"
                                                                                            name="healthcenter"
                                                                                            value={{ $data->healthcenter }}>
                                                                                    </div>
                                                                                    <div class="col-md-6 mb-3">
                                                                                        <label
                                                                                            for="exampleFormControlInput2"
                                                                                            class="form-label">district</label>
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            placeholder="Age"
                                                                                            aria-label="Disabled input example"
                                                                                            value={{ $data->district }}>
                                                                                    </div>
                                                                                    <div class="col-md-6 mb-3">
                                                                                        <label
                                                                                            for="exampleFormControlInput1"
                                                                                            class="form-label">Status</label>
                                                                                        <select class="form-select"
                                                                                            aria-label="Default select example"
                                                                                            name="status"
                                                                                            value={{ $data->status }}>
                                                                                            <option selected disabled>
                                                                                                @switch($data->status)
                                                                                                    @case(1)
                                                                                                        <span
                                                                                                            class="badge bg-label-success me-1">Active</span>
                                                                                                    @break

                                                                                                    @case(2)
                                                                                                        <span
                                                                                                            class="badge bg-label-danger me-1">Inactive</span>
                                                                                                    @break

                                                                                                    @default
                                                                                                @endswitch
                                                                                            </option>
                                                                                            <option value="1">
                                                                                                Active
                                                                                            </option>
                                                                                            <option value="2 ">
                                                                                                Inactive
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>

                                                                                    <!-- Add more fields for other details -->
                                                                                </div>

                                                                            </div>

                                                                        </form>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary"
                                                                            form="editPatient{{ $data->id }}">Save
                                                                            changes</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
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
