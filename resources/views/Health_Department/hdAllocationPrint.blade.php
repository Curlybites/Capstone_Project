    <div class="card-body">
        <div class="pb-1">
            <p style="margin-bottom: 0px; font-weight: bold;">Program</p>
            <p style="margin-bottom: 0px; font-weight: bold;">qcprogram@gmail.com</p>
            <p style="margin-bottom: 0px; font-weight: bold;">Sample Address, 23rd St.,
                Sample City, ####
            </p>
        </div>
        <div class="row pb-3 mt-5">
            <div class="col-md-4 col-4 mb-md-0 mb-3">
                <p style="margin-bottom: 0px; font-weight: bold;">Vendor</p>
                <p style="margin-bottom: 0px;">Supplier 101</p>
                <p style="margin-bottom: 0px;">Sample Address Only</p>
                <p style="margin-bottom: 0px;">George Wilson</p>
                <p style="margin-bottom: 0px;">09123459879</p>
                <p style="margin-bottom: 0px;">supplier101@gmail.com</p>
            </div>
            <div class="col-md-4 text-center col-4 mb-md-0 mb-2">
                <p style="margin-bottom: 0px; font-weight: bold;">P.O #</p>
                <p style="margin-bottom: 0px;">PO-{{ $allotoprogview->POnum }}</p>
            </div>
            <div class="col-md-4 col-4 text-center">
                <p style="margin-bottom: 0px; font-weight: bold;">Date Created:</p>
                <p style="margin-bottom: 0px;">2021-09-08</p>
            </div>
        </div>
        <div class="text-nowrap">
            <table id="" class="datatables-basic table border-top table-bordered" style="width:100%">
                <thead>
                    <tr class="text-center">
                        <th>Qty</th>
                        <th>Unit</th>
                        <th>Item</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Total Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($joinedData as $joinedDatas)
                        <tr>
                            <td>{{ $joinedDatas->alloprog_quan }}</td>
                            <td>{{ $joinedDatas->alloprog_unit }}</td>
                            <td>{{ $joinedDatas->alloprog_item }}</td>
                            <td class="text-wrap ">{{ $joinedDatas->alloprog_descript }}</td>
                            <td>{{ $joinedDatas->alloprog_price }}</td>
                            <td>
                                <div class="float-start">
                                    <span class="fw-bold fs-6">₱</span>
                                </div>
                                <div class="text-center">
                                    <span class="text-center border-0 bg-white fs-6">
                                        {{ $joinedDatas->alloprog_pricetotal }}
                                    </span>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        {{-- <th colspan="4" class="text-end"></th> --}}
                        <th colspan="5" class="fs-6 text-end">Total:</th>
                        <th class="fs-6 text-center">
                            <div class="float-start">
                                <span class="fw-bold fs-6">₱</span>
                            </div>
                            <div class="text-center">
                                <span class="text-center border-0 bg-white fs-6">
                                    {{ $allotoprogview->items_total }}
                                </span>
                            </div>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="row mt-5">
            <div class="col-xxl-6 col-6 mb-md-0 mb-2">
                <p style="margin-bottom: 0px; font-weight: bold;">Note:</p>
                <p style="margin-bottom: 0px;">{{ $allotoprogview->notes }}</p>
            </div>
            <div class="col-md-1 col-6">
                <p style="margin-bottom: 0px; font-weight: bold;">Status:</p>
                <p class="text-success">{{ $allotoprogview->item_status }}</p>
            </div>
        </div>
    </div>
