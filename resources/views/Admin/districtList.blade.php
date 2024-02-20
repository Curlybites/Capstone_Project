@include('components.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            {{-- sidebar --}}
            @include('components.sidebar.admin_sidebar')


            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('components.navbar.navbar')
                <!-- / Navbar -->

                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-fluid  flex-grow-1 container-p-y">
                        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">District /</span> List of
                            Districts
                        </h4> --}}

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">District List</h5>
                                        <button class="btn-success mx-4 px-4 py-1 border-0" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"> <i class='bx bxs-add-to-queue'></i> Create
                                            New</button>

                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                <div class="modal-content ">
                                                    <div class="modal-header ">
                                                        <h1 class="modal-title fs-3" id="exampleModalLabel">Create
                                                            District
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="/Admin/District_Store" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <h5>District Details</h5>
                                                                <div class="col">
                                                                    <p>District Number</p>
                                                                    <select class="form-select" name="districtNumber"
                                                                        aria-label="Default select example">
                                                                        <option selected>Choose District</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col">
                                                                    <p>District Supervisor</p>
                                                                    <select class="form-select"
                                                                        name="districtSupervisor"
                                                                        aria-label="Default select example">
                                                                        <option selected>Choose District Supervisor
                                                                        </option>
                                                                        @foreach ($userData as $userRow)
                                                                            <option value="{{ $userRow->id }}">
                                                                                {{ $userRow->firstname }}
                                                                                {{ $userRow->lastname }}</option>
                                                                        @endforeach
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
                                    <!-- Modal Content end-->
                                    <hr class="my-0">
                                    <!-- Account -->
                                    <div class="card-body p-5 ">
                                        <div class="table-responsive text-nowrap overflow-visible">
                                            <table id="dataTable" class="datatables-basic table   border-top "
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        {{-- <th>#</th> --}}
                                                        <th>District Number</th>
                                                        {{-- <th>Barangay</th> --}}
                                                        {{-- <th>Barangay Health Center</th> --}}
                                                        <th>District Supervisor</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($districtsData as $districtRow)
                                                        <tr>
                                                            {{-- <td>{{ $districtRow->id }}</td> --}}
                                                            <td>{{ $districtRow->number }}</td>
                                                            {{-- <td>{{ $districtRow->barangay }}</td> --}}
                                                            {{-- <td>{{ $districtRow->healthcenter }}</td> --}}
                                                            <td>{{ $districtRow->firstname }}
                                                                {{ $districtRow->lastname }}</td>
                                                            <td>
                                                                <a type="button" href="" class="text-primary"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal2{{ $districtRow->id }}">
                                                                    <i class="bi bi-pencil-square"></i>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        <div class="modal fade" id="exampleModal2{{ $districtRow->id }}"
                                                            tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Edit District</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form
                                                                            action={{ "/Admin/District_List/$districtRow->id" }}
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('PUT')

                                                                            <div class="col">
                                                                                <p>District Number</p>
                                                                                <select class="form-select"
                                                                                    name="districtNumber"
                                                                                    aria-label="Default select example">
                                                                                    <option selected>Choose District
                                                                                    </option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="6">6</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col">
                                                                                <p>District Supervisor</p>
                                                                                <div class="input-group mb-3">
                                                                                    <select class="form-select"
                                                                                        aria-label="Default select example"
                                                                                        name="districtSupervisor">
                                                                                        <option selected>Choose
                                                                                            District Supervisor</option>
                                                                                        @foreach ($userData as $districtRow)
                                                                                            <option
                                                                                                value="{{ $districtRow->id }}">
                                                                                                {{ $districtRow->firstname }}
                                                                                                {{ $districtRow->lastname }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Save
                                                                            changes</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </form>
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
