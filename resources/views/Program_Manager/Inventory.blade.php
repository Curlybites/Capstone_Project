@include('components.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('components.sidebar.pm_sidebar')

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('components.navbar.navbar')
                <!-- Navbar End-->


                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-fluid  flex-grow-1 container-p-y">
                        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Inventory /</span>
                            Item List
                        </h4> --}}

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">Item List</h5>
                                        {{-- <button class="btn-success mx-4 px-4 py-1 border-0" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"> <i class='bx bxs-add-to-queue'></i> Create
                                            New</button> --}}

                                    </div>

                                    <hr class="my-0">
                                    <!-- Account -->
                                    <div class="card-body px-5 ">
                                        <div class="table-responsive text-nowrap overflow-visible">
                                            <table id="dataTable" class="table table-striped table-bordered"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Item Name</th>
                                                        <th>Description</th>
                                                        <th>Program</th>
                                                        <th>Unit</th>
                                                        <th>Quantity</th>
                                                        {{-- <th>Price</th>
                                                        <th>Total</th> --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($hdInventory as $hdInventories)
                                                        <tr>
                                                            <td>{{ $hdInventories->id }}</td>
                                                            <td>{{ $hdInventories->item_name }}</td>
                                                            <td class="text-wrap text-break w-75">
                                                                {{ $hdInventories->item_description }}</td>
                                                            <td>{{ $hdInventories->program_title }}</td>
                                                            <td>{{ $hdInventories->item_unit }}</td>
                                                            <td>{{ $hdInventories->item_quantity }}</td>
                                                            {{-- <td>{{ $hdInventories->item_price }}</td>
                                                            <td>{{ $hdInventories->item_total }}</td> --}}
                                                        </tr>
                                                    @endforeach


                                                </tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="text-wrap text-break w-75">
                                                    </td>
                                                    <td></td>
                                                    <td>Total: </td>
                                                    <td> @php
                                                        $totalQuantity = $hdInventory->sum('item_quantity');
                                                        echo $totalQuantity;
                                                    @endphp</td>
                                                </tr>
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
                    <!--footer-->

                    @include('components.footer')
