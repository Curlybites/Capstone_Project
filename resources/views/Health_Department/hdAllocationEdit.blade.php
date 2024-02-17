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
                        {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Allocation /</span>
                            Create Allocation
                        </h4> --}}

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">Item Allocation</h5>

                                    </div>

                                    <hr class="my-0">
                                    <!-- Account -->
                                    <div class="card-body px-5">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="{{ route('updateallocation', $allotoprogedit->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row mb-5">
                                                        <div class="col-md-4 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Program</label>
                                                            <select class="form-select" name="program"
                                                                aria-label="Default select example"
                                                                value="{{ $allotoprogedit->program }}">
                                                                <option selected>Select Program</option>
                                                                <option value="One">One</option>
                                                                <option value="Two">Two</option>
                                                                <option value="Three">Three</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">PO
                                                                #</label>
                                                            <input type="text" class="form-control" name="POnum"
                                                                value="{{ $allotoprogedit->POnum }}">
                                                        </div>
                                                        <div class="col-md-4 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Item Type</label>
                                                            <input type="text" class="form-control" name="itemType"
                                                                value="{{ $allotoprogedit->itemType }}">
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
                                                                @foreach ($joinedData as $key => $joinedDatas)
                                                                    <tr>
                                                                        <td>
                                                                            <button class="btn btn-sm btn-danger py-0"
                                                                                onclick="removeRow(this)">X</button>
                                                                        </td>
                                                                        <td class="align-middle p-0 text-center">
                                                                            <input type="text"
                                                                                class="form-control text-center border-0"
                                                                                id="quantItem" name="alloprog_quan[]"
                                                                                onkeyup="autoCal()"
                                                                                value="{{ $joinedDatas->alloprog_quan }}">
                                                                        </td>
                                                                        <td
                                                                            class="align-middle
                                                                            p-0 text-center">
                                                                            <input type="text"
                                                                                class="form-control text-center border-0"
                                                                                name="alloprog_unit[]"
                                                                                value="{{ $joinedDatas->alloprog_unit }}">
                                                                        </td>
                                                                        <td class="align-middle p-0 text-center">
                                                                            <select
                                                                                class="form-select text-center border-0"
                                                                                name="alloprog_item[]"
                                                                                aria-label="Default select example">
                                                                                <option selected>Select Item
                                                                                </option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="align-middle p-0 text-center">
                                                                            <input type="text"
                                                                                class="form-control text-center border-0"
                                                                                name="alloprog_descript[]"
                                                                                value="{{ $joinedDatas->alloprog_descript }}">
                                                                        </td>
                                                                        <td class="align-middle p-0 text-center">
                                                                            <input type="text"
                                                                                class="form-control text-center border-0"
                                                                                name="alloprog_price[]" id="price"
                                                                                onkeyup="autoCal()"
                                                                                value="{{ $joinedDatas->alloprog_price }}">
                                                                        </td>
                                                                        <td class="d-flex align-items-center ">
                                                                            <div class="float-start">
                                                                                <span class="fw-bold ">₱</span>
                                                                            </div>
                                                                            <div class="text-center">
                                                                                <input
                                                                                    class="text-center border-0 bg-white ms-2 fs-6"
                                                                                    type="text"
                                                                                    name="alloprog_pricetotal[]"
                                                                                    id="totalPrice"
                                                                                    value="{{ $joinedDatas->alloprog_pricetotal }}"
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
                                                                            Row</div>

                                                                        <span>Total</span>
                                                                    </th>
                                                                    <th class="">
                                                                        <div class="float-start">
                                                                            <span class="fw-bold fs-6">₱</span>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <input
                                                                                class="text-center border-0 bg-white ms-2 fs-6"
                                                                                type="text" name="items_total"
                                                                                id="total"
                                                                                value="{{ $allotoprogedit->items_total }}"
                                                                                readonly>
                                                                        </div>
                                                                    </th>
                                                                </tr>
                                                            </tfoot>
                                                            {{-- <input type="number" name="items_total" id="total"> --}}
                                                        </table>
                                                    </div>
                                                    <div
                                                        class="row
                                                                        my-5">
                                                        <div class="col-md-6 mb-md-0 mb-3">
                                                            <label for="">Notes</label>
                                                            <textarea class="form-control" style="height: 100px" name="notes">{{ $allotoprogedit->notes }}</textarea>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">Status</label>
                                                            <p class="text-success">
                                                                {{ $allotoprogedit->item_status }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                        <a class="btn btn-danger"
                                                            href="{{ '/Health_Department/Allocation_List' }}">Cancel
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

                <script>
                    var i = 0;

                    function addRow() {
                        // Clone the first row
                        ++i;
                        var newRow = `<tr>` +
                            `<td><button class="btn btn-sm btn-danger py-0" onclick="removeRow(this)">X</button></td>` +
                            `<td class="align-middle p-0 text-center"><input type="text" class="form-control text-center border-0" name="alloprog[` +
                            i + `][alloprog_quan]" id="quantItem" onkeyup="autoCal()"></td>` +
                            `<td class="align-middle p-0 text-center"><input type="text" class="form-control text-center border-0" name="alloprog[` +
                            i + `][alloprog_unit]"></td>` +
                            `<td class="align-middle p-0 text-center">` +
                            `<select class="form-select text-center border-0" name="alloprog[` + i +
                            `][alloprog_item]" aria-label="Default select example">` +
                            `<option selected>Select Item</option>` +
                            `<option value="One">One</option>` +
                            `<option value="Two">Two</option>` +
                            `<option value="Three">Three</option>` +
                            `</select>` +
                            `</td>` +
                            `<td class="align-middle p-0 text-center"><input type="text" class="form-control text-center border-0" name="alloprog[` +
                            i + `][alloprog_descript]"></td>` +
                            `<td class="align-middle p-0 text-center"><input type="text" class="form-control text-center border-0" name="alloprog[` +
                            i + `][alloprog_price]" id="price" onkeyup="autoCal()"></td>` +
                            `<td>` +
                            `<div class="float-start"><span class="fw-bold">₱</span></div>` +
                            `<div class="text-center"><input class="text-center border-0 bg-white ms-2 fs-6" type="text" name="alloprog[` +
                            i + `][alloprog_pricetotal]" id="totalPrice" value="0" readonly></div>` +
                            `</td>` +
                            `</tr>`;

                        // Append the new row to the tbody
                        $('.addTBRow').append(newRow);
                    }

                    // // Remove Row
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

                        // $("#subtotal").text(subtotal.toLocaleString());
                        $("#total").val(total);
                    }
                </script>

                @include('components.footer');
