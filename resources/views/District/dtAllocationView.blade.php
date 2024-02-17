@include('components.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('components.sidebar.district_sidebar')

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('components.navbar.navbar')
                <!-- Navbar End-->


                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-fluid  flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Allocation / Allocation List /
                            </span>
                            Allocation View
                        </h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">Allocation Details</h5>
                                        <div class="mx-3 px-3 py-1">
                                            <button type="button" class="btn btn-info text-white"
                                                onclick="printPage()">Print</button>
                                            <a type="button" class="btn btn-danger"
                                                href="{{ '/District/District_Allocation' }}">Back</a>
                                        </div>

                                    </div>

                                    <hr class="my-0">
                                    <!-- Account -->
                                    <div id="printSection">
                                        @include('District.dtAllocationPrint')
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <script>
                        function printPage() {
                            var printContent = document.getElementById("printSection").innerHTML;
                            var originalContent = document.body.innerHTML;
                            document.body.innerHTML = printContent;
                            window.print();
                            document.body.innerHTML = originalContent;
                        }
                    </script>
                    <!--footer-->

                    @include('components.footer')
