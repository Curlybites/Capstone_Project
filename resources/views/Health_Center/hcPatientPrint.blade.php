@include('components.header')

<body class="container-fluid">
    <div class="card-body">

        <div class="pb-4">
            <p style="margin-bottom: 0px; font-weight: bold;">
                @if ($tableData)
                    <p>{{ $tableData->healthcenter }}</p>
                @else
                    <p>walang data</p>
                @endif
            </p>
            <p style="margin-bottom: 0px; font-weight: bold;">qchc@gmail.com</p>
            <p style="margin-bottom: 0px; font-weight: bold;">Sample Address, 23rd St.,
                Sample City, ####
            </p>
        </div>
        <div class="row pb-4 mt-5">
            <div class="col-md-4 col-4 mb-md-0 mb-3">
                {{-- <p style="margin-bottom: 0px; font-weight: bold;">
                    @if ($tableData)
                        <p>{{ $tableData->fname }}</p>
                    @else
                        <p>walang data</p>
                    @endif
                </p> --}}
                <p style="margin-bottom: 0px; font-weight: bold;">Patient Name: @if ($tableData)
                        <p>{{ $tableData->fname }} {{ $tableData->mname }}. {{ $tableData->lname }}</p>
                    @else
                        <p>walang data</p>
                    @endif
                </p>
                <p style="margin-bottom: 0px; font-weight: bold;">Program
                    @if ($tableData)
                        <p>{{ $tableData->program }}</p>
                    @else
                        <p>walang data</p>
                    @endif
                </p>
                {{-- <p style="margin-bottom: 0px;">George Wilson</p>
                <p style="margin-bottom: 0px;">09123459879</p>
                <p style="margin-bottom: 0px;">supplier101@gmail.com</p> --}}
            </div>
            {{-- <div class="col-md-4 col-4 mb-md-0 mb-3">
                <p style="margin-bottom: 0px; font-weight: bold;">P.O #</p>
                <p style="margin-bottom: 0px;">PO-94619964639</p>
            </div> --}}
            <div class="col-md-4 col-4">
                <p style="margin-bottom: 0px; font-weight: bold;">Date Created:
                    @if ($tableData)
                        <p>{{ $tableData->created_at }}</p>
                    @else
                        <p>walang data</p>
                    @endif
                </p>
            </div>
        </div>
        <div class="text-nowrap">
            <table id="" class="datatables-basic table border-top table-bordered" style="width:100%">
                <thead>
                    <tr class="text-center">
                        <th>Item Name </th>
                        <th>Unit</th>
                        <th>Quantity</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($joinedPatientItem as $item)
                        <tr>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->unit }}</td>
                            <td>{{ $item->item }}</td>
                            <td>{{ $item->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
                
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
