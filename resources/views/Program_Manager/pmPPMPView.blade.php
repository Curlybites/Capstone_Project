@include('components.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('Components.sidebar.pm_sidebar')

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
                                                    Ppmp Code: {{ $ppmpdatas->ppmp_code }}
                                                </p>
                                                <p style="margin-bottom: 0px; font-weight: bold;">
                                                    Year: {{ $ppmpdatas->year }}
                                                </p>
                                                <p style="margin-bottom: 0px; font-weight: bold;">
                                                    Department: {{ $ppmpdatas->department }}
                                                </p>
                                                <p style="margin-bottom: 0px; font-weight: bold;">
                                                    Program title: {{ $ppmpdatas->programtitle }}
                                                </p>

                                                <p style="margin-bottom: 0px; font-weight: bold;">
                                                    Project Title: {{ $ppmpdatas->projecttitle }}
                                                </p>


                                            </div>
                                            <div class="row pb-4 mt-5">
                                                <div class="col-md-4 col-4 mb-md-0 mb-3">
                                                    <p style="margin-bottom: 0px; font-weight: bold;">Types of Contract
                                                    </p>
                                                    <p style="margin-bottom: 0px;">
                                                        {{ $ppmpdatas->typeofcontract }}
                                                    </p>
                                                    </p>
                                                    </p>
                                                </div>
                                                <div class="col-md-4 col-4 mb-md-0 mb-3">
                                                    <p style="margin-bottom: 0px; font-weight: bold;">Account Title:</p>
                                                    <p style="margin-bottom: 0px;">
                                                        {{ $ppmpdatas->accounttitle }}
                                                    </p>
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="text-nowrap ">
                                                <table id=""
                                                    class="datatables-basic table border-top table-bordered "
                                                    style="width:100%">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th>Quantity</th>
                                                            <th>Unit</th>
                                                            <th>Item Name</th>
                                                            <th>Description</th>
                                                            <th>Price</th>
                                                            <th>Total</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($joinedppmpdata as $joinedppmpdatas)
                                                            <tr class="text-center ">
                                                                <td>
                                                                    {{ $joinedppmpdatas->quantity }}
                                                                </td>
                                                                <td>
                                                                    {{ $joinedppmpdatas->unit }}
                                                                </td>
                                                                <td>
                                                                    {{ $joinedppmpdatas->item_name }}
                                                                </td>
                                                                <td class="text-wrap text-break" >
                                                                    {{ $joinedppmpdatas->description }}
                                                                </td>
                                                                <td>
                                                                    {{ $joinedppmpdatas->unitprice }}
                                                                </td>
                                                                <td>
                                                                    {{ $joinedppmpdatas->total }}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="row mt-5">
                                                <div class="col-xxl-6 col-6 mb-md-0 mb-2">
                                                    <p style="margin-bottom: 0px; font-weight: bold;">Schedule /
                                                        Milestone of Activities:</p>
                                                    <p style="margin-bottom: 0px;">
                                                        {{ $ppmpdatas->schedule }}
                                                    </p>
                                                    </p>
                                                </div>
                                                <div class="col-md-1 col-6">
                                                    <p style="margin-bottom: 0px; font-weight: bold;">Status:</p>

                                                    @switch($ppmpdatas->status)
                                                        @case(1)
                                                            <p class="text-success">Approved</p>
                                                        @break

                                                        @case(2)
                                                            <p class="text-danger">Dissaproved</p>
                                                        @break

                                                        @case(3)
                                                            <p class="text-warning">Pending</p>
                                                        @break

                                                        @default
                                                    @endswitch


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!--footer-->

                    @include('components.footer')
