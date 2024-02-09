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
                                        <h5 class="card-header">Program Procurement Management Plan List</h5>

                                        <!-- PPMP Modal -->
                                        <button class="btn-success mx-4 px-4 py-1 border-0" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"> <i class='bx bxs-add-to-queue'></i> Create
                                            PPMP</button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                <div class="modal-content ">
                                                    <div
                                                        class="modal-header justify-content-center d-block text-center">
                                                        <h1 class="modal-title fs-3" id="exampleModalLabel">QUEZON
                                                            CITY<br>PROJECT PROCUREMENT MANAGEMENT PLAN</h1>
                                                        <!-- <h1 class="fs-3">PROJECT PROCUREMENT MANAGEMENT PLAN </h1><br> -->

                                                    </div>
                                                    <!-- <div class="modal-header d-flex justify-content-end">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div> -->
                                                    <form action="{{ route('ppmp.create') }}" method="POST">
                                                        @csrf
                                                        <div class="modal-body">

                                                            <div class="row">

                                                                <!-- <h5>Personal Details</h5> -->
                                                                <div class="col">
                                                                    <p>Year:</p>
                                                                    <div class="input-group mb-3">
                                                                        <select name="year" class="form-control"
                                                                            id="yearSelect">
                                                                            <?php for ($year = 2000; $year <= 2024; $year++) : ?>
                                                                            <option value="<?= $year ?>"><?= $year ?>
                                                                            </option>
                                                                            <?php endfor; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Department/Office/Unit:</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Sizing e xample input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="department" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <p>Program Title</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="programtitle" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <p>Project Title</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="projecttitle" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row pb-4">

                                                                <div class="col">
                                                                    <p>Type of Contract</p>
                                                                    <div class="input-group mb-3">
                                                                        <select class="form-select"
                                                                            aria-label="Default select example"
                                                                            name="typeofcontract">
                                                                            <option value="goods">Goods</option>
                                                                            <option value="infra">Infra</option>
                                                                            <option value="consultingservice">Consulting
                                                                                Service</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <p>Account Title</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="accounttitle" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <p>Item Name</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="itemname" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <p>Description/Specifications</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="description" required>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row pb-4">

                                                                <div class="col">
                                                                    <p>Quantity</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="number" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="quantity" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <p>Unit of Issue</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="number" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="unitofissue" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <p>Unit Price</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="number" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="unitprice" required>
                                                                    </div>
                                                                </div>

                                                                <div class="row pb-4">

                                                                    <div class="col">
                                                                        <p>Schedule / Milestone of Activities</p>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control"
                                                                                aria-label="Sizing example input"
                                                                                aria-describedby="inputGroup-sizing-default"
                                                                                name="schedule" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- <div class="row">
                                                                    <div class="d-flex">
                                                                        <p>Jan</p>
                                                                        <div class="col-1">
                                                                            <input type="text"
                                                                                class="form-control">
                                                                        </div>
                                                                        <p>Feb</p>
                                                                        <div class="col-1">
                                                                            <input type="text"
                                                                                class="form-control">
                                                                        </div>
                                                                        <p>Mar</p>
                                                                        <div class="col-1">
                                                                            <input type="text"
                                                                                class="form-control">
                                                                        </div>
                                                                        <p>Apr</p>
                                                                        <div class="col-1">
                                                                            <input type="text"
                                                                                class="form-control">
                                                                        </div>
                                                                        <p>May</p>
                                                                        <div class="col-1">
                                                                            <input type="text"
                                                                                class="form-control">
                                                                        </div>
                                                                        <p>Jun</p>
                                                                        <div class="col-1">
                                                                            <input type="text"
                                                                                class="form-control">
                                                                        </div>
                                                                        <p>Jul</p>
                                                                        <div class="col-1">
                                                                            <input type="text"
                                                                                class="form-control">
                                                                        </div>
                                                                        <p>Aug</p>
                                                                        <div class="col-1">
                                                                            <input type="text"
                                                                                class="form-control">
                                                                        </div>
                                                                        <p>Sep</p>
                                                                        <div class="col-1">
                                                                            <input type="text"
                                                                                class="form-control">
                                                                        </div>
                                                                        <p>Oct</p>
                                                                        <div class="col-1">
                                                                            <input type="text"
                                                                                class="form-control">
                                                                        </div>
                                                                        <p>Nov</p>
                                                                        <div class="col-1">
                                                                            <input type="text"
                                                                                class="form-control">
                                                                        </div>
                                                                        <p>Dec</p>
                                                                        <div class="col-1">
                                                                            <input type="text"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div> --}}
                                                                <div class="modal-footer border-1">
                                                                    <button type="button"
                                                                        class="btn btn-secondary mt-3"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary mt-3">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>

                                            <!-- / Content -->

                                            <div class="content-backdrop fade"></div>
                                        </div>

                                    </div>

                                    <hr class="">
                                    <div class="card-body p-5 ">
                                        <div class="table-responsive text-nowrap">
                                            <table id="dataTable" class="datatables-basic table   border-top "
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>id</th>

                                                        <th>Department</th>
                                                        <th>Program Title</th>
                                                        <th>Project Title</th>
                                                        <th>Types of Contract</th>
                                                        <th>Account Title</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($ppmp as $ppmps)
                                                        <tr>
                                                            <td>{{ $ppmps->id }} </td>

                                                            <td>{{ $ppmps->department }}</td>
                                                            <td>{{ $ppmps->programtitle }}</td>
                                                            <td>{{ $ppmps->projecttitle }}</td>
                                                            <td>{{ $ppmps->typeofcontract }}</td>
                                                            <td>{{ $ppmps->accounttitle }}</td>
                                                            <td>
                                                                <span
                                                                    class="badge bg-label-success me-1">Approved</span>
                                                            </td>
                                                            {{-- <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-secondary dropdown-toggle"
                                                                        type="button" id="dropdownMenuButton1"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        Action
                                                                    </button>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton1">
                                                                        <li><a class="dropdown-item"
                                                                                href="{{ '/Program_Manager/pmPPMPView' }}"><i
                                                                                    class="bi bi-eye-fill fs-5 text-primary"></i>
                                                                                View</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="{{ '/Program_Manager/pmPPMPEdit' }}"><i
                                                                                    class="bi bi-pen-fill fs-5 text-info"></i>
                                                                                Edit</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#"><i
                                                                                    class="bi bi-trash-fill fs-5 text-danger"></i>
                                                                                Delete</a>
                                                                        </li>
                                                                    </ul>
                                                            </td> --}}
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button type="button"
                                                                        class="btn p-0 dropdown-toggle hide-arrow"
                                                                        data-bs-toggle="dropdown"><i
                                                                            class="bx bx-dots-vertical-rounded"></i></button>

                                                                    <div class="dropdown-menu">

                                                                        <a class="dropdown-item" 
                                                                            href="{{ url('/Program_Manager/pmPPMPView' . $ppmps->id) }}">
                                                                            <i class="bi bi-eye-fill me-2"></i>View
                                                                        </a>

                                                                        <a class="dropdown-item"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#exampleModal2{{ $ppmps->id }}"><i
                                                                                class="bx bx-edit-alt me-2"></i>Edit</a>

                                                                        <a class="dropdown-item" href={{ url('/Program_Manager/PPMPlist/delete' . $ppmps->id) }}>
                                                                        {{--  @foreach ($ppmp as $ppmps) --}} 
                                                                            <form
                                                                            action="{{ route('ppmp.delete',  $ppmps->id) }}"
                                                                            id="deletePPMP{{ $ppmps->id }}"
                                                                            method="post"> @csrf @method('DELETE') 
                                                                            <i class="bx bx-trash me-2">
                                                                            </i>Delete
                                                                        </form>
                                                                        </a>
                                                                        
                                                                        {{-- @endforeach --}}
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                </tbody>
                                                {{-- Modal for edit --}}
                                                <div class="modal fade" id="exampleModal2{{ $ppmps->id }}"
                                                    tabindex="-1"
                                                    aria-labelledby="exampleModalLabel{{ $ppmps->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                        <div class="modal-content ">
                                                            <div
                                                                class="modal-header justify-content-center d-block text-center">
                                                                <h1 class="modal-title fs-3"
                                                                    id="exampleModalLabel{{ $ppmps->id }}">
                                                                    QUEZON
                                                                    CITY<br>PROJECT PROCUREMENT MANAGEMENT PLAN</h1>
                                                                <!-- <h1 class="fs-3">PROJECT PROCUREMENT MANAGEMENT PLAN </h1><br> -->

                                                            </div>
                                                            <!-- <div class="modal-header d-flex justify-content-end">
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div> -->

                                                            <div class="modal-body">

                                                                <form
                                                                    action="{{ route('routes.update', $ppmps->id) }}"
                                                                    id="editPPMP{{ $ppmps->id }}" method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="row">

                                                                        <!-- <h5>Personal Details</h5> -->
                                                                        <div class="col">
                                                                            <p>Year:</p>
                                                                            <div class="input-group mb-3">
                                                                                <select name="year"
                                                                                    class="form-control"
                                                                                    id="yearSelect">
                                                                                    <?php for ($year = 2000; $year <= 2024; $year++) : ?>

                                                                                    <option value="<?= $year ?>">
                                                                                        <?= $year ?>
                                                                                    </option>
                                                                                    <?php endfor; ?>
                                                                                    <option selected>
                                                                                        {{ $ppmps->year }}</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <p>Department/Office/Unit:</p>
                                                                            <div class="input-group mb-3">
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    aria-label="Sizing e xample input"
                                                                                    aria-describedby="inputGroup-sizing-default"
                                                                                    name="department" required
                                                                                    value={{ $ppmps->department }}>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col">
                                                                            <p>Program Title</p>
                                                                            <div class="input-group mb-3">
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    aria-label="Sizing example input"
                                                                                    aria-describedby="inputGroup-sizing-default"
                                                                                    name="programtitle" required
                                                                                    value={{ $ppmps->programtitle }}>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col">
                                                                            <p>Project Title</p>
                                                                            <div class="input-group mb-3">
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    aria-label="Sizing example input"
                                                                                    aria-describedby="inputGroup-sizing-default"
                                                                                    name="projecttitle" required
                                                                                    value={{ $ppmps->projecttitle }}>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row pb-4">

                                                                        <div class="col">
                                                                            <p>Type of Contract</p>
                                                                            <div class="input-group mb-3">
                                                                                <select class="form-select"
                                                                                    aria-label="Default select example"
                                                                                    name="typeofcontract"
                                                                                    value={{ $ppmps->typeofcontract }}>
                                                                                    <option
                                                                                        value={{ $ppmps->typeofcontract }}>
                                                                                        select</option>
                                                                                    <option value="goods">Goods
                                                                                    </option>
                                                                                    <option value="infra">Infra
                                                                                    </option>
                                                                                    <option value="consultingservice">
                                                                                        Consulting
                                                                                        Service</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col">
                                                                            <p>Account Title</p>
                                                                            <div class="input-group mb-3">
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    aria-label="Sizing example input"
                                                                                    aria-describedby="inputGroup-sizing-default"
                                                                                    name="accounttitle" required
                                                                                    value={{ $ppmps->accounttitle }}>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col">
                                                                            <p>Item Name</p>
                                                                            <div class="input-group mb-3">
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    aria-label="Sizing example input"
                                                                                    aria-describedby="inputGroup-sizing-default"
                                                                                    name="itemname" required
                                                                                    value={{ $ppmps->itemname }}>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col">
                                                                            <p>Description/Specifications</p>
                                                                            <div class="input-group mb-3">
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    aria-label="Sizing example input"
                                                                                    aria-describedby="inputGroup-sizing-default"
                                                                                    name="description" required
                                                                                    value={{ $ppmps->description }}>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="row pb-4">

                                                                        <div class="col">
                                                                            <p>Quantity</p>
                                                                            <div class="input-group mb-3">
                                                                                <input type="number"
                                                                                    class="form-control"
                                                                                    aria-label="Sizing example input"
                                                                                    aria-describedby="inputGroup-sizing-default"
                                                                                    name="quantity" required
                                                                                    value={{ $ppmps->quantity }}>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col">
                                                                            <p>Unit of Issue</p>
                                                                            <div class="input-group mb-3">
                                                                                <input type="number"
                                                                                    class="form-control"
                                                                                    aria-label="Sizing example input"
                                                                                    aria-describedby="inputGroup-sizing-default"
                                                                                    name="unitofissue" required
                                                                                    value={{ $ppmps->unitofissue }}>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col">
                                                                            <p>Unit Price</p>
                                                                            <div class="input-group mb-3">
                                                                                <input type="number"
                                                                                    class="form-control"
                                                                                    aria-label="Sizing example input"
                                                                                    aria-describedby="inputGroup-sizing-default"
                                                                                    name="unitprice" required
                                                                                    value={{ $ppmps->unitprice }}>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row pb-4">

                                                                            <div class="col">
                                                                                <p>Schedule / Milestone of Activities
                                                                                </p>
                                                                                <div class="input-group mb-3">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        aria-label="Sizing example input"
                                                                                        aria-describedby="inputGroup-sizing-default"
                                                                                        name="schedule" required
                                                                                        value={{ $ppmps->schedule }}>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        {{-- <div class="row">
                                                                        <div class="d-flex">
                                                                            <p>Jan</p>
                                                                            <div class="col-1">
                                                                                <input type="text"
                                                                                    class="form-control">
                                                                            </div>
                                                                            <p>Feb</p>
                                                                            <div class="col-1">
                                                                                <input type="text"
                                                                                    class="form-control">
                                                                            </div>
                                                                            <p>Mar</p>
                                                                            <div class="col-1">
                                                                                <input type="text"
                                                                                    class="form-control">
                                                                            </div>
                                                                            <p>Apr</p>
                                                                            <div class="col-1">
                                                                                <input type="text"
                                                                                    class="form-control">
                                                                            </div>
                                                                            <p>May</p>
                                                                            <div class="col-1">
                                                                                <input type="text"
                                                                                    class="form-control">
                                                                            </div>
                                                                            <p>Jun</p>
                                                                            <div class="col-1">
                                                                                <input type="text"
                                                                                    class="form-control">
                                                                            </div>
                                                                            <p>Jul</p>
                                                                            <div class="col-1">
                                                                                <input type="text"
                                                                                    class="form-control">
                                                                            </div>
                                                                            <p>Aug</p>
                                                                            <div class="col-1">
                                                                                <input type="text"
                                                                                    class="form-control">
                                                                            </div>
                                                                            <p>Sep</p>
                                                                            <div class="col-1">
                                                                                <input type="text"
                                                                                    class="form-control">
                                                                            </div>
                                                                            <p>Oct</p>
                                                                            <div class="col-1">
                                                                                <input type="text"
                                                                                    class="form-control">
                                                                            </div>
                                                                            <p>Nov</p>
                                                                            <div class="col-1">
                                                                                <input type="text"
                                                                                    class="form-control">
                                                                            </div>
                                                                            <p>Dec</p>
                                                                            <div class="col-1">
                                                                                <input type="text"
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div> --}}
                                                                        <div class="modal-footer border-1">
                                                                            <button type="button"
                                                                                class="btn btn-secondary mt-3"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary mt-3">Save</button>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            </form>
                                                        </div>

                                                    </div>

                                                    <!-- / Content -->

                                                    <div class="content-backdrop fade"></div>
                                                </div>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- / Content -->
<!--footer-->

@include('components.footer')
