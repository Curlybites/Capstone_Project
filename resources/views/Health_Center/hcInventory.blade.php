@include('components.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            {{-- sidebar --}}
            @include('components.sidebar.hc_sidebar');
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
            @include('components.navbar.navbar')
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-fluid  flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">Item List</h5>
                                    </div>
                                    <hr class="my-0">
                                    <!-- Account -->
                                    <div class="card-body p-5 ">
                                        <div class="table-responsive text-nowrap overflow-visible">
                                            <table id="dataTable" class="datatables-basic table   border-top "
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Type</th>
                                                        <th>Program</th>
                                                        <th>Expiration</th>
                                                        <th>Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($hcinventoryitems as $item)
                                                        <tr>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->type }}</td>
                                                            <td>{{ $item->program }}</td>
                                                            <td>{{ $item->expiration }}</td>
                                                            <td>{{ $item->quantity }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>

                                                </tfoot>
                                            </table>
                                        </div>

                                    </div>
                                    <hr class="my-0">
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
