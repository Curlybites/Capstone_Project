@include('components.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('components.sidebar.supplier_sidebar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('components.navbar.navbar')
                <!-- / Navbar -->


                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-fluid  flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Item /</span> List of Items
                        </h4>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">Item List</h5>
                                        <button class="btn-success mx-4 px-4 py-1 border-0" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"> <i class='bx bxs-add-to-queue'></i> Create
                                            New</button>

                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                <div class="modal-content ">
                                                    <div class="modal-header ">
                                                        <h1 class="modal-title fs-3" id="exampleModalLabel">Create Item</h1>

                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="/Admin/Store" method="POST">
                                                        @csrf
                                                        <div class="modal-body">

                                                    
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control " id="floatingInput" placeholder="Item Name" aria-describedby="floatingInputHelp" />
                                                                    <label for="floatingInput">Name</label>
                                                                  </div>

                                                                  <div class="form-floating">
                                                                    <textarea class="form-control mt-2" placeholder="Leave a description here" id="floatingTextarea"></textarea>
                                                                    <label for="floatingTextarea">Description</label>
                                                                  </div>

                                                                  <div class="form-floating mt-2">
                                                                    <input type="number" class="form-control " id="floatingInput" placeholder="Item Price" aria-describedby="floatingInputHelp" />
                                                                    <label for="floatingInput">Price</label>
                                                                  </div>

                                                                  <div class="form-floating mt-2">
                                                                    <input type="date" class="form-control " id="floatingInput" placeholder="Date Creation" aria-describedby="floatingInputHelp" />
                                                                    <label for="floatingInput">Date creation</label>
                                                                  </div>

                                                                  <div class="form-floating mt-2">
                                                                    <input type="date" class="form-control " id="floatingInput" placeholder="Date Expiration" aria-describedby="floatingInputHelp" />
                                                                    <label for="floatingInput">Date Expiration</label>
                                                                  </div>

                                                                  <div class="form-floating mt-2">
                                                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                                    
                                                                      <option value="1">Active</option>
                                                                      <option value="2">Inactive</option>  
                                                                    </select>
                                                                    <label for="floatingSelect">Status</label>
                                                                  </div>

                                                                  <div>
                                                                    <label for="formFileLg" class="form-label mt-3">Input image here</label>
                                                                    <input class="form-control form-control-lg" id="formFileLg" type="file">
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
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Description</th>
                                                        <th>Price</th>
                                                        <th>Date Created</th>
                                                        <th>Date Expiration</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td></td>

                                                        <td>

                                                        </td>
                                                        <td>

                                                        </td>
                                                        <td>

                                                        </td>

                                                        <td>

                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                        <td class="d-flex justify-content-center align-items-center">



                                                            <a type="button" href=class="text-primary"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal1">
                                                                <i class="bi bi-eye-fill"></i>
                                                            </a>

                                                            <a type="button" href=class="text-primary"
                                                                data-bs-toggle="modal"
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
