@include('components.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            {{-- sidebar --}}
            @include('components.sidebar.admin_sidebar')

            <!-- Layout container -->
            <div class="layout-page">

                @include('components.navbar.navbar')
                <!-- / Navbar -->



                <div class="content-wrapper">
                    <!-- Content -->
                    @if (session('success'))
                        @include('components.insertnotification')
                    @endif

                    <div class="container-fluid  flex-grow-1 container-p-y">
                        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Programs /</span> List of
                            Program
                        </h4> --}}

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">Programs List</h5>
                                        <button class="btn-success mx-4 px-4 py-1 border-0" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"> <i class='bx bxs-add-to-queue'></i> Create
                                            New</button>
                                        <!-- Modal Content -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-md modal-dialog-centered">
                                                <div class="modal-content ">
                                                    <div class="modal-header ">
                                                        <h1 class="modal-title fs-3" id="exampleModalLabel">Create
                                                            Programs </h1>

                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="/Admin/Program_Store" method="POST">
                                                        @csrf
                                                        <div class="modal-body">

                                                            <div class="row">
                                                                <div class="row">
                                                                    <p>Program Name</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="programName" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <p>Program Manager</p>
                                                                    <div class="input-group mb-3">
                                                                        <select class="form-select"
                                                                            aria-label="Default select example" name="programManager">
                                                                            <option selected>Choose Program Manager
                                                                            </option>
                                                                            @foreach( $userData as $programRow)
                                                                            <option value="{{ $programRow->id }}">{{ $programRow->firstname }} {{ $programRow->lastname }}</option>
                                                                            @endforeach
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
                                                    {{-- <th>#</th> --}}
                                                    <th>Program Name</th>
                                                    <th>Program Manager</th>
                                                    <th>Action</th>
                                                </thead>
                                                <tbody>
                                                    @foreach ($usersData as $programRow)
                                                        <tr>
                                                            {{-- <td>{{ $programRow->id }}</td> --}}
                                                            <td>{{ $programRow->name }}</td>      
                                                            <td>{{ $programRow->firstname }} {{ $programRow->lastname }}</td>
                                                            <td>
                                                                <a type="button" href="" class="text-primary"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal2{{ $programRow->id }}">
                                                                    <i class="bi bi-pencil-square"></i>
                                                                </a>
                                                                {{-- <a type="button" href="" class="text-primary"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal3{{ $programRow->id }}">
                                                                    <i class="bi bi-box-arrow-in-right"></i>
                                                                </a> --}}
                                                            </td>
                                                        </tr>
                                                        <div class="modal fade" id="exampleModal2{{ $programRow->id }}"
                                                            tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
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
                                                                        <form
                                                                            action={{ "/Admin/Program_List/$programRow->id" }}
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="col">
                                                                                <p>Program Name</p>
                                                                                <div class="input-group mb-3">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            aria-label="Sizing example input"
                                                                                            aria-describedby="inputGroup-sizing-default"
                                                                                            name="programName"
                                                                                            value="{{ $programRow->name }}"
                                                                                            required>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col">
                                                                                <p>Program Manager</p>
                                                                                <div class="input-group mb-3">
                                                                                        <select class="form-select"
                                                                                            aria-label="Default select example"
                                                                                            name="programManager">
                                                                                            <option selected>Assign to
                                                                                                Program Manager</option>
                                                                                                @foreach($userData as $programRow)
                                                                                            <option
                                                                                                value="{{ $programRow->id }}">
                                                                                                {{ $programRow->firstname }}
                                                                                                {{ $programRow->lastname }}
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
                    </div>
                    <!-- / Content -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- / Content -->
                <!--footer-->

                @include('components.footer');
