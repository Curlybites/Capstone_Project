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
                    @if (session('success'))
                        @include('components.insertnotification')
                    @endif

                    <div class="container-fluid  flex-grow-1 container-p-y">
                        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Barangay /</span> List of
                            Barangays
                        </h4> --}}

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">Barangay List</h5>
                                        <button class="btn-success mx-4 px-4 py-1 border-0" data-bs-toggle="modal"
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
                                                    <form action="/Admin/Barangay_Store" method="POST">
                                                        @csrf
                                                        <div class="modal-body">

                                                            <div class="row">
                                                                <h5>Barangay Details</h5>
                                                                <div class="col">
                                                                    <p>Barangay Name</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="barangayName" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <p>District</p>
                                                                    <select class="form-select"
                                                                        name="districtNumber"
                                                                        aria-label="Default select example">
                                                                        <option selected>Choose District
                                                                        </option>
                                                                        @foreach ($districtData as $barangayRow)
                                                                            <option
                                                                                value="{{ $barangayRow->id }}">
                                                                                {{ $barangayRow->number }}
                                                                                </option>
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
                                                        <th>Barangay Name</th>
                                                        <th>District</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($barangaysData as $barangayRow)
                                                        <tr>
                                                            {{-- <td>{{ $barangayRow->id }}</td> --}}
                                                            <td>{{ $barangayRow->barangay_name }}</td>
                                                            <td>{{ $barangayRow->number }}</td>
                                                            <td>
                                                                {{-- <a
                                                                type="button" href=/Admin/User_List/1
                                                                class="text-primary" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal1">
                                                                <i class="bi bi-eye-fill"></i>
                                                            </a> --}}

                                                                <a type="button" href=/Admin/Barangay_List/
                                                                    class="text-primary" data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal2{{ $barangayRow->id }}">
                                                                    <i class="bi bi-pencil-square"></i>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        <div class="modal fade" id="exampleModal2{{ $barangayRow->id }}" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Edit Barangay</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action={{ "/Admin/Barangay_List/$barangayRow->id" }} method="POST">
                                                                            @csrf
                                                                            @method('PUT')
                                                                                        
                                                                                <div class="row">
                                                                                    <p>Barangay Name</p>
                                                                                    <div class="input-group mb-3">
                                                                                        <input type="text" class="form-control"
                                                                                            aria-label="Sizing example input"
                                                                                            aria-describedby="inputGroup-sizing-default"
                                                                                            name="barangayName" value="{{ $barangayRow->barangay_name }}" >
                                                                                    </div>
                                                                                </div>
                                                                     
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Save changes</button>
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
