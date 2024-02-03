@include('components.header');

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            {{-- sidebar --}}
            @include('Program_Manager.sidebar.PPMP_active');

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('components.navbar.navbar');
                <!-- / Navbar -->


                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-fluid  flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">PPMP /</span> List of
                            PPMP
                        </h4>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">PPMP List</h5>
                                        <!-- PPMP Modal -->
                                        <button class="btn-success mx-4 px-4 py-1 border-0" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"> <i class='bx bxs-add-to-queue'></i> Create
                                            PPMP</button>
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                <div class="modal-content ">
                                                    <div class="modal-header justify-content-center d-block text-center">
                                                        <h1 class="modal-title fs-3" id="exampleModalLabel">QUEZON CITY<br>PROJECT PROCUREMENT MANAGEMENT PLAN</h1>
                                                        <!-- <h1 class="fs-3">PROJECT PROCUREMENT MANAGEMENT PLAN </h1><br> -->
                                                    
                                                    </div>
                                                    <!-- <div class="modal-header d-flex justify-content-end">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div> -->

                                                    <form action="/Admin/Store" method="POST">
                                                        @csrf
                                                        <div class="modal-body">

                                                            <div class="row">

                                                                <!-- <h5>Personal Details</h5> -->
                                                                <div class="col">
                                                                    <p>Year:</p>
                                                                    <div class="input-group mb-3">
                                                                        <select name="year" class="form-control" id="yearSelect">
                                                                            <?php for ($year = 2000; $year <= 2024; $year++) : ?>
                                                                              <option value="<?= $year ?>"><?= $year ?></option>
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
                                                                            <option value="consultingservice">Consulting Service</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <p>Account Title</p>
                                                                    <div class="input-group mb-3">
                                                                        <input type="date" class="form-control"
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
                                                                        <input type="number" class="form-control"
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
                                                                        <input type="text" class="form-control"
                                                                            aria-label="Sizing example input"
                                                                            aria-describedby="inputGroup-sizing-default"
                                                                            name="unitprice" required>
                                                                    </div>
                                                                </div>

                                                                <div class="row pb-4">

                                                                    <div class="col">
                                                                        <p>Schedule / Milestone of Activities</p>
                                                                        <div class="input-group mb-3">
                                                                            <input type="number" class="form-control"
                                                                                aria-label="Sizing example input"
                                                                                aria-describedby="inputGroup-sizing-default"
                                                                                name="quantity" required>
                                                                        </div>
                                                                    </div>  
                                                                </div>
                                                                <div class="row">
                                                                    <div class="d-flex">
                                                                    <p>Jan</p>
                                                                    <div class="col-1">
                                                                        <input type="text" class="form-control">    
                                                                    </div>                                                       
                                                                    <p>Feb</p>
                                                                    <div class="col-1">
                                                                        <input type="text" class="form-control">    
                                                                    </div>                                                       
                                                                    <p>Mar</p>
                                                                    <div class="col-1">
                                                                        <input type="text" class="form-control">    
                                                                    </div>                                                       
                                                                    <p>Apr</p>
                                                                    <div class="col-1">
                                                                        <input type="text" class="form-control">    
                                                                    </div>                                                       
                                                                    <p>May</p>
                                                                    <div class="col-1">
                                                                        <input type="text" class="form-control">    
                                                                    </div>                                                       
                                                                    <p>Jun</p>
                                                                    <div class="col-1">
                                                                        <input type="text" class="form-control">    
                                                                    </div>                                                       
                                                                    <p>Jul</p>
                                                                    <div class="col-1">
                                                                        <input type="text" class="form-control">    
                                                                    </div>                                                       
                                                                    <p>Aug</p>
                                                                    <div class="col-1">
                                                                        <input type="text" class="form-control">    
                                                                    </div>                                                       
                                                                    <p>Sep</p>
                                                                    <div class="col-1">
                                                                        <input type="text" class="form-control">    
                                                                    </div>                                                       
                                                                    <p>Oct</p>
                                                                    <div class="col-1">
                                                                        <input type="text" class="form-control">    
                                                                    </div>                                                       
                                                                    <p>Nov</p>
                                                                    <div class="col-1">
                                                                        <input type="text" class="form-control">    
                                                                    </div>                                                       
                                                                    <p>Dec</p>
                                                                    <div class="col-1">
                                                                        <input type="text" class="form-control">    
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

                    <!-- / Content -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- / Content -->
                <!--footer-->

                @include('components.footer');
