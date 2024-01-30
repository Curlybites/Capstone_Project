@include('components.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('components.sidebar.hd_sidebar')

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('components.navbar.navbar')
                <!-- Navbar End-->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-fluid  flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Allocation /</span>
                            Create Allocation
                        </h4>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">Allocation List</h5>

                                    </div>

                                    <hr class="my-0">
                                    <!-- Account -->
                                    <div class="card-body px-5">
                                        <h4 class="mb-4">Item Allocation</h4>
                                        <form action="">
                                            <div class="row">
                                                <div class="row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="itemName" class="form-label">Item</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Select Item</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4 mb-3">
                                                        <label for="quantity" class="form-label">Quantity</label>
                                                        <input type="number" class="form-control" id="quantity"
                                                            placeholder="Quantity">
                                                    </div>

                                                    <div class="col-md-4 mb-3">
                                                        <label for="quantity" class="form-label">Price</label>
                                                        <input type="text" class="form-control" id="price"
                                                            placeholder="Price" value="₱150.00" disabled>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="program" class="form-label">Type of Program</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Select Pogram</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4 mb-3">
                                                        <label for="program" class="form-label">District</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Select District</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4 mb-3">
                                                        <label for="program" class="form-label">Status</label>
                                                        <input type="text" class="form-control" id="status"
                                                            placeholder="Status" value="Approved" disabled>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4 mb-3">
                                                        <div class="form-floating">
                                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px" disabled>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit laudantium cupiditate nostrum quas pariatur et officia sequi sunt vel? Quod corporis veritatis sunt laborum veniam nisi quis ex fuga ea</textarea>
                                                            <label for="floatingTextarea2">Description</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="float-end mt-3">
                                                <button type="button" class="btn btn-primary me-md-3">Allocate</button>
                                                <button type="button" class="btn btn-danger">Reset</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    @include('components.footer');
