@include('components.header')

<body class="container-fluid">
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
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">Project Procurement Management Plan Details</h5>
                                        <div class="mx-3 px-3 py-1">
                                            <button type="button" class="btn btn-info text-white"
                                                onclick="printPage()">Print</button>
                                            <a type="button" class="btn btn-danger"
                                                href="{{ '/Program_Manager/PPMPlist' }}">Back</a>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    <!-- Account -->
                                    <div id="printSection">

                                        <div class="card-body">
                                            <div class="pb-4">
                                                <p style="margin-bottom: 0px; font-weight: bold;">
                                                    @if ($ppmp)
                                                        <p>{{ $ppmp->department }}</p>
                                                    @else
                                                        <p>walang data</p>
                                                    @endif
                                                </p>
                                                <p style="margin-bottom: 0px; font-weight: bold;">
                                                    @if ($ppmp)
                                                        <p>{{ $ppmp->programtitle }}</p>
                                                    @else
                                                        <p>walang data</p>
                                                    @endif
                                                </p>
                                                <p style="margin-bottom: 0px; font-weight: bold;">
                                                    @if ($ppmp)
                                                        <p>{{ $ppmp->projecttitle }}</p>
                                                    @else
                                                        <p>walang data</p>
                                                    @endif
                                                </p>
                                                </p>
                                                <p style="margin-bottom: 0px; font-weight: bold;">
                                                    @if ($ppmp)
                                                        <p>{{ $ppmp->year }}</p>
                                                    @else
                                                        <p>walang data</p>
                                                    @endif
                                                </p>
                                                </p>
                                            </div>
                                            <div class="row pb-4 mt-5">
                                                <div class="col-md-4 col-4 mb-md-0 mb-3">
                                                    <p style="margin-bottom: 0px; font-weight: bold;">Types of Contract
                                                    </p>
                                                    <p style="margin-bottom: 0px;">
                                                        @if ($ppmp)
                                                            <p>{{ $ppmp->typeofcontract }}</p>
                                                        @else
                                                            <p>walang data</p>
                                                        @endif
                                                    </p>
                                                    </p>
                                                    </p>
                                                </div>
                                                <div class="col-md-4 col-4 mb-md-0 mb-3">
                                                    <p style="margin-bottom: 0px; font-weight: bold;">Account Title:</p>
                                                    <p style="margin-bottom: 0px;">
                                                        @if ($ppmp)
                                                            <p>{{ $ppmp->accounttitle }}</p>
                                                        @else
                                                            <p>walang data</p>
                                                        @endif
                                                    </p>
                                                    </p>
                                                </div>
                                                <div class="col-md-4 col-4">
                                                    <p style="margin-bottom: 0px; font-weight: bold;">Description:</p>
                                                    <p style="margin-bottom: 0px;">
                                                        @if ($ppmp)
                                                            <p>{{ $ppmp->description }}</p>
                                                        @else
                                                            <p>walang data</p>
                                                        @endif
                                                    </p>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="text-nowrap">
                                                <table id=""
                                                    class="datatables-basic table border-top table-bordered"
                                                    style="width:100%">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th>Item Name</th>
                                                            <th>Unit</th>
                                                            <th>Quantity</th>
                                                            <th>Description</th>
                                                            <th>Price</th>
                                                            <th>Total Amount</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                @if ($ppmp)
                                                                    <p>{{ $ppmp->itemname }}</p>
                                                                @else
                                                                    <p>walang data</p>
                                                                @endif
                                                                </p>
                                                            </td>
                                                            <td>
                                                                @if ($ppmp)
                                                                    <p>{{ $ppmp->unitofissue }}</p>
                                                                @else
                                                                    <p>walang data</p>
                                                                @endif
                                                                </p>
                                                            </td>
                                                            <td>
                                                                @if ($ppmp)
                                                                    <p>{{ $ppmp->quantity }}</p>
                                                                @else
                                                                    <p>walang data</p>
                                                                @endif
                                                                </p>
                                                            </td>
                                                            <td>
                                                                @if ($ppmp)
                                                                    <p>{{ $ppmp->description }}</p>
                                                                @else
                                                                    <p>walang data</p>
                                                                @endif
                                                                </p>
                                                            </td>
                                                            <td>
                                                                @if ($ppmp)
                                                                    <p>{{ $ppmp->unitprice }}</p>
                                                                @else
                                                                    <p>walang data</p>
                                                                @endif
                                                                </p>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="4"></th>
                                                            <th class="fs-6">Sub Total:</th>
                                                            <th class="fs-6">1000</th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="4"></th>
                                                            <th class="fs-6">Total:</th>
                                                            <th class="fs-6">255</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>

                                            <div class="row mt-5">
                                                <div class="col-xxl-6 col-6 mb-md-0 mb-2">
                                                    <p style="margin-bottom: 0px; font-weight: bold;">Schedule /
                                                        Milestone of Activities:</p>
                                                    <p style="margin-bottom: 0px;">
                                                        @if ($ppmp)
                                                            <p>{{ $ppmp->schedule }}</p>
                                                        @else
                                                            <p>walang data</p>
                                                        @endif
                                                    </p>
                                                    </p>
                                                </div>
                                                <div class="col-md-1 col-6">
                                                    <p style="margin-bottom: 0px; font-weight: bold;">Status:</p>
                                                    <p class="text-success">Approved</p>
                                                </div>
                                            </div>
                                        </div>
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
