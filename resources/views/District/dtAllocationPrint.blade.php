@include('components.header')

<body class="container-fluid">
    <div class="card-body">
        <div class="pb-4">
            <p style="margin-bottom: 0px; font-weight: bold;">Program 101</p>
            <p style="margin-bottom: 0px; font-weight: bold;">qcprogram@gmail.com</p>
            <p style="margin-bottom: 0px; font-weight: bold;">Sample Address, 23rd St.,
                Sample City, ####
            </p>
        </div>
        <div class="row pb-4 mt-5">
            <div class="col-md-4 col-4 mb-md-0 mb-3">
                <p style="margin-bottom: 0px; font-weight: bold;">Vendor</p>
                <p style="margin-bottom: 0px;">Supplier 101</p>
                <p style="margin-bottom: 0px;">Sample Address Only</p>
                <p style="margin-bottom: 0px;">George Wilson</p>
                <p style="margin-bottom: 0px;">09123459879</p>
                <p style="margin-bottom: 0px;">supplier101@gmail.com</p>
            </div>
            <div class="col-md-4 col-4 mb-md-0 mb-3">
                <p style="margin-bottom: 0px; font-weight: bold;">P.O #</p>
                <p style="margin-bottom: 0px;">PO-94619964639</p>
            </div>
            <div class="col-md-4 col-4">
                <p style="margin-bottom: 0px; font-weight: bold;">Date Created:</p>
                <p style="margin-bottom: 0px;">2021-09-08</p>
            </div>
        </div>
        <div class="text-nowrap">
            <table id="" class="datatables-basic table border-top table-bordered" style="width:100%">
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
                        <td>Paracetamol</td>
                        <td>Per Box</td>
                        <td>30</td>
                        <td>Sample Item Only. Test 101</td>
                        <td>12</td>
                        <td>20</td>
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
                <p style="margin-bottom: 0px; font-weight: bold;">Note:</p>
                <p style="margin-bottom: 0px;">Sample Purchase Order
                    Only</p>
            </div>
            <div class="col-md-1 col-6">
                <p style="margin-bottom: 0px; font-weight: bold;">Status:</p>
                <p class="text-success">Approved</p>
            </div>
        </div>
    </div>
</body>
@include('components.footer')
