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
                    @if (session('success'))
                        @include('components.notification')
                    @endif

                    <div class="container-fluid  flex-grow-1 container-p-y">


                        <div class="row">
                            <div class="col-md-12">

                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">Program Procurement Management Plan List</h5>
                                        <a href="{{ '/Program_Manager/pmPPMPcreate' }}"
                                            class="btn-success mx-4 px-4 py-1 border-0"> <i
                                                class='bx bxs-add-to-queue'></i> Create
                                            New</a>
                                        <!-- / Content -->
                                    </div>


                                    <hr class="">
                                    <div class="card-body p-5 ">
                                        <div class="table-responsive text-nowrap overflow-visible">
                                            <table id="dataTable" class="datatables-basic table border-top "
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

                                                                @switch($ppmps->status)
                                                                    @case(1)
                                                                        <span class="badge bg-label-success me-1">
                                                                            Approved
                                                                        </span>
                                                                    @break

                                                                    @case(2)
                                                                        <span class="badge bg-label-danger me-1">
                                                                            Disaproved
                                                                        </span>
                                                                    @break

                                                                    @case(3)
                                                                        <span class="badge bg-label-warning me-1">
                                                                            pending
                                                                        </span>
                                                                    @break

                                                                    @default
                                                                @endswitch

                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button type="button"
                                                                        class="btn p-0 dropdown-toggle hide-arrow"
                                                                        data-bs-toggle="dropdown"><i
                                                                            class="bx bx-dots-vertical-rounded"></i></button>

                                                                    <div class="dropdown-menu">

                                                                        <a class="dropdown-item text-primary"
                                                                            href="{{ url('/Program_Manager/pmPPMPView' . $ppmps->id) }}">
                                                                            <i class="bi bi-eye-fill me-2"></i>View
                                                                        </a>

                                                                        <a class="dropdown-item text-info"
                                                                            href="{{ "/Program_Manager/pmPPMPEdit_{$ppmps->id}" }}"><i
                                                                                class="bx bx-edit-alt me-2"></i>Edit</a>

                                                                        <a>
                                                                            <form
                                                                                action="{{ route('ppmp.delete', $ppmps->id) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit"
                                                                                    class="dropdown-item text-danger"><i
                                                                                        class="bi bi-trash-fill fs-5"></i>
                                                                                    Delete</button>
                                                                            </form>
                                                                        </a>
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

                                                                <form action="{{ route('routes.update', $ppmps->id) }}"
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
