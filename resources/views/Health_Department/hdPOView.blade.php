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
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Purchase Order / PO List / </span>
                            PO View
                        </h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">Purchase Order Details</h5>
                                        <div class="mx-3 px-3 py-1">
                                            <button type="button" class="btn btn-info text-white"
                                                onclick="printPage()">Print</button>
                                            <a type="button" class="btn btn-danger"
                                                href="{{ '/Health_Department/Purchase_Order_List' }}">Back</a>
                                        </div>
                                    </div>

                                    <hr class="my-0">
                                    <!-- Account -->
                                    <div id="printSection">
                                        @include('Health_Department.hdPOPrints')
                                    </div>
                                    a
                                </div>

                            </div>
                        </div>
                    </div>

                    <script>
                        function printPage() {
                            var printContent = document.getElementById("printSection").innerHTML;
                            var originalContent = document.body.innerHTML;
                            document.body.innerHTML = printContent;

                            var style = document.createElement('style');
                            style.innerHTML = '@media print { @page { size: landscape; } }';
                            document.head.appendChild(style);

                            window.print();

                            // Reset the document content to its original state
                            document.body.innerHTML = originalContent;
                        }
                    </script>
                    <!--footer-->

                    @include('components.footer')
