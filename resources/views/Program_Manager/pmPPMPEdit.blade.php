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
                        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Allocation /</span>
                            Create Allocation
                        </h4> --}}

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">Project Procurement Management Plan Edit</h5>

                                    </div>

                                    <hr class="my-0">
                                    <!-- Account -->

                                    <div class="card-body px-5">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <form action="{{ route('routes.ppmpupdate', $ppmpdatas->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row mb-3">
                                                        <div class="col-md-4 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">PO
                                                                #</label>
                                                            <input type="text" class="form-control" name="POnum"
                                                                value="{{ $ppmpdatas->ppmp_code }}" readonly>
                                                        </div>
                                                        <div class="col-md-4 mb-md-0 mb-3 ">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">year</label>
                                                            <input type="text" class="form-control" name="year"
                                                                value="{{ $ppmpdatas->year }}">

                                                        </div>
                                                        <div class="col-md-4 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Department</label>
                                                            <select class="form-select" name="department"
                                                                aria-label="Default select example">
                                                                <option>{{ $ppmpdatas->department }}</option>
                                                                <option value="One">One</option>
                                                                <option value="Two">Two</option>
                                                                <option value="Three">Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-4 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Program Title</label>
                                                            <input type="text" class="form-control"
                                                                name="programtitle"
                                                                value="{{ $ppmpdatas->programtitle }}">
                                                        </div>
                                                        <div class="col-md-4 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Project Title</label>
                                                            <input type="text" class="form-control"
                                                                name="projecttitle"
                                                                value="{{ $ppmpdatas->projecttitle }}">
                                                        </div>
                                                        <div class="col-md-4 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Type of Contract</label>
                                                            <select class="form-select" name="typeofcontract"
                                                                aria-label="Default select example">
                                                                <option>{{ $ppmpdatas->typeofcontract }}</option>
                                                                <option value="Good">Good</option>
                                                                <option value="Infra">Infra</option>
                                                                <option value="Consulting">Consulting</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-4 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Account Title</label>
                                                            <input type="text" class="form-control"
                                                                name="accounttitle"
                                                                value="{{ $ppmpdatas->accounttitle }}">

                                                        </div>
                                                        <div class="col-md-4 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Schedule</label>
                                                            <input type="text" class="form-control" name="schedule"
                                                                value="{{ $ppmpdatas->schedule }}">
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered"
                                                            id="myTable">
                                                            <colgroup>
                                                                <col width="5%">
                                                                <col width="5%">
                                                                <col width="10%">
                                                                <col width="20%">
                                                                <col width="30%">
                                                                <col width="15%">
                                                                <col width="15%">
                                                            </colgroup>
                                                            <thead>
                                                                <tr class="bg-navy disabled">
                                                                    <th class="px-1 py-1 text-center"></th>
                                                                    <th class="px-1 py-1 text-center">Qty</th>
                                                                    <th class="px-1 py-1 text-center">Unit</th>
                                                                    <th class="px-1 py-1 text-center">Item</th>
                                                                    <th class="px-1 py-1 text-center">Description
                                                                    </th>
                                                                    <th class="px-1 py-1 text-center">Price</th>
                                                                    <th class="px-1 py-1 text-center">Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="addTBRow">
                                                                @foreach ($joinedppmpdata as $key => $joinedData)
                                                                    <tr>
                                                                        <td>
                                                                            <button class="btn btn-sm btn-danger py-0"
                                                                                onclick="removeRow(this)">X</button>
                                                                        </td>

                                                                        <td class="align-middle p-0 text-center">
                                                                            <input type="text"
                                                                                class="form-control text-center border-0"
                                                                                id="quantItem" name="quantity"
                                                                                onkeyup="autoCal()"
                                                                                value="{{ $joinedData->quantity }}">
                                                                        </td>

                                                                        <td
                                                                            class="align-middle
                                                                            p-0 text-center">
                                                                            <input type="text"
                                                                                class="form-control text-center border-0"
                                                                                name="unit"
                                                                                value="{{ $joinedData->unit }}">
                                                                        </td>
                                                                        <td class="align-middle p-0 text-center">
                                                                            <select
                                                                                class="form-select text-center border-0"
                                                                                name="itemname" id="item_id"
                                                                                aria-label="Default select example">
                                                                                <option readonly>
                                                                                    {{ $joinedData->item_name }}
                                                                                </option>
                                                                                @if (@isset($item))
                                                                                    @foreach ($item as $items)
                                                                                        <option
                                                                                            value="{{ $items->id }}"
                                                                                            data-description="{{ $items->item_description }}"
                                                                                            data-unitprice="{{ $items->item_price }}">
                                                                                            {{ $items->item_name }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                @endif
                                                                            </select>
                                                                        </td>
                                                                        <td class="align-middle p-0 text-center">
                                                                            <input type="text"
                                                                                class="form-control text-center border-0"
                                                                                name="description" value="{{ $joinedData->description }}">
                                                                        </td>
                                                                        <td class="align-middle p-0 text-center">
                                                                            <input type="text"
                                                                                class="form-control text-center border-0"
                                                                                name="unitprice" id="price"
                                                                                onkeyup="autoCal()"
                                                                                value="{{ $joinedData->unitprice }}">
                                                                        </td>
                                                                        <script>
                                                                            document.getElementById('item_id').addEventListener('change', function() {
                                                                                var selectedItemId = this.value;


                                                                                var selectedItem = document.querySelector('option[value="' + selectedItemId + '"]');
                                                                                var description = selectedItem.getAttribute('data-description');
                                                                                var unitprice = selectedItem.getAttribute('data-unitprice');


                                                                                document.getElementById('item_d').value = description;
                                                                                document.getElementById('price').value = unitprice;
                                                                            });
                                                                        </script>
                                                                        <td>
                                                                            <div class="float-start">
                                                                                <span class="fw-bold ">₱</span>
                                                                            </div>
                                                                            <div class="text-center">
                                                                                <input
                                                                                    class="text-center border-0 bg-white ms-2 fs-6"
                                                                                    type="text" name="total"
                                                                                    id="totalPrice"
                                                                                    value="{{ $joinedData->total }}"
                                                                                    readonly>
                                                                                {{-- <span id="totalPrice">0</span> --}}
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th colspan="6" class="text-end">
                                                                        <div class="btn btn-primary me-2"
                                                                            style="font-size: 10px"
                                                                            onclick="addRow()">
                                                                            Add
                                                                            Row</div><span>Total</span>
                                                                    </th>
                                                                    <th class="d-flex align-items-center ">
                                                                        <div class="float-start">
                                                                            <span class="fw-bold fs-6">₱</span>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <input
                                                                                class="text-center border-0 bg-white ms-2 fs-6"
                                                                                type="text" name="items_total"
                                                                                id="total" value="{{  $ppmpdatas->items_total}}"
                                                                                readonly>
                                                                        </div>
                                                                    </th>
                                                                </tr>
                                                            </tfoot>
                                                            {{-- <input type="number" name="items_total"
                                                                        id="total"> --}}
                                                        </table>
                                                    </div>
                                                    <div
                                                        class="row
                                                                        my-5">
                                                        <div class="col-md-6 mb-md-0 mb-3">
                                                            <label for="">Notes</label>
                                                            <textarea class="form-control" style="height: 100px" name="note" v>{{ $ppmpdatas->note }}</textarea>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">Status</label>
                                                            <select class="form-select" name="status"
                                                                aria-label="Default select example">
                                                                <option selected value="{{ $ppmpdatas->status }}"
                                                                    @disabled(true)>
                                                                    @switch($ppmpdatas->status)
                                                                        @case(1)
                                                                            Approved
                                                                        @break

                                                                        @case(2)
                                                                            Disapproved
                                                                        @break

                                                                        @case(3)
                                                                            Pending
                                                                        @break

                                                                        @default
                                                                    @endswitch
                                                                </option>

                                                                <option value="1">Approved</option>
                                                                <option value="2">Disapproved
                                                                </option>
                                                                <option value="3">Pending
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <button type="submit" class="btn btn-primary"
                                                            onclick="save()">Save</button>
                                                        <a class="btn btn-danger"
                                                            href="{{ '/Program_Manager/PPMPlist' }}">Cancel
                                                        </a>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script>
                    var i = 0;

                    function addRow() {
                        // Clone the first row
                        // alloprog_item
                        ++i;
                        // Create a new row element
                        var newRow = '<tr>' +
                            `<td><button class="btn btn-sm btn-danger py-0" onclick="removeRow(this)">X</button></td>` +
                            `<td class="align-middle p-0 text-center"><input type="text" class="form-control text-center border-0" name="ppmp[` +
                            i + `][quantity]" id="quantItem" onkeyup="autoCal()"></td>` +
                            `<td class="align-middle p-0 text-center"><input type="text" class="form-control text-center border-0" name="ppmp[` +
                            i + `][unit]"></td>` +
                            `<td class="align-middle p-0 text-center">` +
                            `<select class="form-select text-center border-0" name="ppmp[` +
                            i + `][itemname]" aria-label="Default select example" onchange="updateItemDetails(this)">` +
                            `<option selected>Select Item</option>`;

                        // Iterate through your items and add options
                        @if (isset($item))
                            @foreach ($item as $items)
                                newRow +=
                                    `<option value="{{ $items->id }}" data-description="{{ $items->item_description }}" data-unitprice="{{ $items->item_price }}">{{ $items->item_name }}</option>`;
                            @endforeach
                        @endif

                        newRow += `</select>` +
                            `</td>` +
                            `<td class="align-middle p-0 text-center"><input type="text" class="form-control text-center border-0" name="ppmp[` +
                            i + `][description]" id="item_d"></td>` +
                            `<td class="align-middle p-0 text-center"><input type="text" class="form-control text-center border-0" name="ppmp[` +
                            i + `][unitprice]" id="price" onkeyup="autoCal()"></td>` +
                            `<td>` +
                            `<div class="float-start"><span class="fw-bold">₱</span></div>` +
                            `<div class="text-center"><input class="text-center border-0 bg-white ms-2 fs-6" type="text" name="ppmp[` +
                            i + `][total]" id="totalPrice" value="0" readonly></div>` +
                            `</td>` +
                            `</tr>`;

                        // Append the new row to the tbody
                        $('.addTBRow').append(newRow);
                    }


                    $('$item_id').change(function() {
                        var selectedValue = $(this).val();
                    })
       
                    function updateItemDetails(selectItem) {
                        var selectedItemId = $(selectItem).val();
                        var selectedItem = $('option[value="' + selectedItemId + '"]');
                        var description = selectedItem.attr('data-description');
                        var unitprice = selectedItem.attr('data-unitprice');
                        $(selectItem).closest('tr').find('#item_d').val(description);
                        $(selectItem).closest('tr').find('#price').val(unitprice);
                    }


                    // Remove Row
                    function removeRow(button) {
                        var row = $(button).closest("tr");
                        var total = $("#total").val();
                        var price = row.find("#totalPrice").val();
                        total -= price;

                        $("#total").val(total);
                        row.remove();
                    }

                    function autoCal() {
                        var total = 0;

                        $(".addTBRow tr").each(function() {
                            var quant = $(this).find("#quantItem").val();
                            var price = $(this).find("#price").val();
                            var totalPrice = quant * price;
                            $(this).find("#totalPrice").val(totalPrice);
                            total += totalPrice;
                        });

                        $("#total").val(total);
                    }

                    $(document).ready(function() {
                        // Trigger autoCal function on input change of #quantItem or #price, or when item selection changes
                        $(".addTBRow").on("change", "#quantItem, #price, .itemSelect", function() {
                            autoCal();
                        });

                        // Reload the page every 5 seconds
                        setInterval(function() {
                            location.reload();
                        }, 1000); // 5000 milliseconds = 5 seconds
                    });
                </script>

                </script>


                @include('components.footer');
