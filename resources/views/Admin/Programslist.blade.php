@include('components.header');

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
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Programs /</span> List of
                            Program
                        </h4>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">Program List</h5>
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


                                                                <div class="col">
                                                                    <p>Program Name</p>
                                                                    <div class="input-group mb-3">
                                                                        {{-- @foreach ($programData as $programRow) --}}
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="programName" required>
                                                                        {{-- @endforeach --}}
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <p>Program Manager</p>
                                                                    <div class="input-group mb-3">
                                                                        <select class="form-select"
                                                                            name="programManager"
                                                                            aria-label="Default select example"
                                                                            name="Select District">
                                                                            <option selected>Choose Program Manager
                                                                            </option>
                                                                            @foreach ($userData as $userRow)
                                                                                <option
                                                                                    value="{{ $userRow->id }}">
                                                                                    {{ $userRow->firstname }}
                                                                                    {{ $userRow->lastname }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                {{-- <div class="col">
                                                                    <p>Date</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="date" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="Date" required>
                                                                    </div>
                                                                </div> --}}
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
                                                    <th>#</th>
                                                    <th>Program Name</th>
                                                    <th>Program Manager</th>
                                                    <th>Action</th>
                                                </thead>
                                                <tbody>
<<<<<<< Updated upstream
                                                    @foreach ($programUsers as $programRow)
                                                    <tr>
                                                        <td>{{ $programRow->id }}</td>
                                                        <td>{{ $programRow->name }}</td>
                                                        
                                                        {{-- @foreach ($programUsers as $programUser  ) --}}
                                                        <td>{{ $programRow->firstname }} {{ $programRow->lastname }} </td>
                                                         {{-- @endforeach --}}
                                                         
                                                        <td>
                                                            <a type="button" href=""
                                                                class="text-primary" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal2{{ $programRow->id }}">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                  
                                                    {{-- <div class="modal fade" id="exampleModal1" tabindex="-1"
=======
                                                    @foreach ($programData as $programRow)
                                                        <tr>
                                                            <td>{{ $programRow->id }}</td>
                                                            <td>{{ $programRow->name }}</td>
                                                            <td>{{ $programRow->program_manager }}</td>
                                                            <td>
                                                                <a type="button" href=/Admin/Program_List/
                                                                    class="text-primary" data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal2{{ $programRow->id }}">
                                                                    <i class="bi bi-pencil-square"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <div class="modal fade" id="exampleModal1" tabindex="-1"
>>>>>>> Stashed changes
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
                                                                    <button type="submit" class="btn btn-primary">Save
                                                                        changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}

<<<<<<< Updated upstream
                                                    <div class="modal fade" id="exampleModal2{{ $programRow->id }}" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
=======
                                                    <div class="modal fade" id="exampleModal2{{ $programRow->id }}"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
>>>>>>> Stashed changes
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Edit Program List</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
<<<<<<< Updated upstream
                                                                   <form action={{"/Admin/Program_List/$programRow->id"}} method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="col">
                                                                        <p>Program Name</p>
                                                                        <div class="input-group mb-3">
                                                                            {{-- @foreach ($programData as $programRow) --}}
                                                                            <input type="text" class="form-control"
                                                                                aria-label="Sizing example input"
                                                                                aria-describedby="inputGroup-sizing-default"
                                                                                name="programName" value="{{ $programRow->name }}" required>
                                                                            {{-- @endforeach --}}
                                                                        </div>

                                                                        <div class="row">
                                                                            <p>Program Manager</p>
                                                                            <div class="input-group mb-3">
                                                                                <select class="form-select"
                                                                                    name="programManager"
                                                                                    aria-label="Default select example"
                                                                                    name="Select District">
                                                                                  
                                                                                    @foreach ($userData as $userRow)
                                                                                        <option
                                                                                            value="{{ $userRow->id }}">
                                                                                            {{ $userRow->firstname }}
                                                                                            {{ $userRow->lastname }}
=======
                                                                    <form
                                                                        action={{ "/Admin/Program_List/$programRow->id" }}
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('PUT')

                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <p>Program Name</p>
                                                                                <select class="form-select"
                                                                                    name="programName"
                                                                                    aria-label="Default select example">
                                                                                    @foreach ($programData as $programRow)
                                                                                        <option
                                                                                            value="{{ $programRow->name }}">
                                                                                            {{ $programRow->name }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="col">
                                                                                <p>Program Manager</p>
                                                                                <select class="form-select"
                                                                                    name="programManager"
                                                                                    aria-label="Default select example">
                                                                                    @foreach ($userData as $programRow)
                                                                                        <option
                                                                                            value="{{ $programRow->firstname }} {{ $programRow->lastname }}">
                                                                                            {{ $programRow->firstname }}
                                                                                            {{ $programRow->lastname }}
>>>>>>> Stashed changes
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
<<<<<<< Updated upstream


                                                                    </div>
                                                                
=======
                                                                    </form>
>>>>>>> Stashed changes
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit"
<<<<<<< Updated upstream
                                                                        class="btn btn-primary">Save changes</button>
=======
                                                                        class="btn btn-primary">Save
                                                                        changes</button>
>>>>>>> Stashed changes
                                                                </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </form>
                                                    @endforeach
                                                </tbody>
                                                </tfoot>
                                                @endforeach
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
