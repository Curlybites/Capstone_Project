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
                                                <form action="{{ route('allocate') }}" method="POST">
                                                    @csrf
                                                    <div class="row mb-5">
                                                        <div class="col-md-4 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Program</label>
                                                            <select class="form-select" id="program_title"
                                                                name="program" aria-label="Default select example">
                                                                <option selected>Select Program</option>
                                                                @if (isset($hdInventory))
                                                                    @foreach ($hdInventory as $hdInventories)
                                                                        <option
                                                                            value="{{ $hdInventories->program_title }}">
                                                                            {{ $hdInventories->program_title }}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">PO
                                                                #</label>
                                                            <input type="text" class="form-control" id="po_code"
                                                                name="POnum" readonly>
                                                        </div>

                                                        <div class="col-md-4 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Item Type</label>
                                                            <input type="text" class="form-control" name="itemType">
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
                                                                    <th class="px-1 py-1 text-center">Description</th>
                                                                    <th class="px-1 py-1 text-center">Price</th>
                                                                    <th class="px-1 py-1 text-center">Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="addTBRow">
                                                                {{-- @foreach ($hdInventory as $hdInventories) --}}
                                                                <tr>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger py-0"
                                                                            onclick="removeRow(this)">X</button>
                                                                    </td>
                                                                    <td class="align-middle p-0 text-center">
                                                                        <input type="text"
                                                                            class="form-control text-center border-0"
                                                                            id="quantItem"
                                                                            name="alloprog[0][alloprog_quan]"
                                                                            onkeyup="autoCal()">
                                                                        {{-- value="{{ $hdInventories->item_quan }}"> --}}
                                                                    </td>
                                                                    <td
                                                                        class="align-middle
                                                                            p-0 text-center">
                                                                        <input type="text" id="item_unit"
                                                                            class="form-control text-center border-0"
                                                                            name="alloprog[0][alloprog_unit]">
                                                                        {{-- value="{{ $hdInventories->item_unit }}"> --}}
                                                                    </td>
                                                                    <td class="align-middle p-0 text-center">
                                                                        {{-- <select
                                                                                class="form-select text-center border-0"
                                                                                id="item_name"
                                                                                name="alloprog[0][alloprog_item]"
                                                                                aria-label="Default select example">
                                                                                <option selected>Select Item</option>
                                                                            </select> --}}
                                                                        <input type="text" id="item_unit"
                                                                            class="form-control text-center border-0"
                                                                            name="alloprog[0][alloprog_item]">
                                                                        {{-- value="{{ $hdInventories->item_name }}"> --}}
                                                                    </td>
                                                                    <td class="align-middle p-0 text-center">
                                                                        <input type="text" id="item_description"
                                                                            class="form-control text-center border-0"
                                                                            name="alloprog[0][alloprog_descript]">
                                                                        {{-- value="{{ $hdInventories->item_description }}"> --}}
                                                                    </td>
                                                                    <td class="align-middle p-0 text-center">
                                                                        <input type="text"
                                                                            class="form-control text-center border-0 bg-transparent"
                                                                            id="item_price"
                                                                            name="alloprog[0][alloprog_price]"
                                                                            onkeyup="autoCal()">
                                                                        {{-- value="{{ $hdInventories->item_price }}"> --}}
                                                                    </td>
                                                                    <td>
                                                                        <div class="float-start">
                                                                            <span class="fw-bold ">₱</span>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <input
                                                                                class="text-center border-0 bg-white ms-2 fs-6 bg-transparent"
                                                                                id="item_total" type="text"
                                                                                name="alloprog[0][alloprog_pricetotal]"
                                                                                {{-- value="{{ $hdInventories->item_total }}" --}} readonly>
                                                                            {{-- <span id="totalPrice">0</span> --}}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                {{-- @endforeach --}}
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th colspan="6" class="text-end">
                                                                        <div class="btn btn-primary me-2"
                                                                            style="font-size: 10px" onclick="addRow()">
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
                                                                                id="total" value="0"
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
                                                            <textarea class="form-control" style="height: 100px" name="notes"></textarea>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">Status</label>
                                                            <select class="form-select" name="item_status"
                                                                aria-label="Default select example">
                                                                <option selected>Select Status</option>
                                                                <option>Approved</option>
                                                                <option">Declined</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <button type="submit" class="btn btn-primary"
                                                            onclick="save()">Save</button>
                                                        <div class="btn btn-danger">Cancel</div>
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
                            `<td class="align-middle p-0 text-center"><input type="text" id="item_unit" class="form-control text-center border-0" name="alloprog[` +
                            i + `][alloprog_unit]"></td>` +
                            `<td class="align-middle p-0 text-center">` +
                            `<select class="form-select text-center border-0" id="item_name" name="alloprog[` + i +
                            `][alloprog_item]" aria-label="Default select example">` +
                            `<option selected>Select Item</option>` +
                            `</select>` +
                            `</td>` +
                            `<td class="align-middle p-0 text-center"><input type="text" id="item_description" class="form-control text-center border-0" name="alloprog[` +
                            i + `][alloprog_descript]"></td>` +
                            `<td class="align-middle p-0 text-center"><input type="text"  id="item_price" class="form-control text-center border-0 bg-transparent" name="alloprog[` +
                            i + `][alloprog_price]" onkeyup="autoCal()"></td>` +
                            `<td>` +
                            `<div class="float-start"><span class="fw-bold">₱</span></div>` +
                            `<div class="text-center"><input  id="item_total" class="text-center border-0 bg-white ms-2 fs-6 bg-transparent" type="text" name="alloprog[` +
                            i + `][alloprog_pricetotal]" value="0" readonly></div>` +
                            `</td>` +
                            `</tr>`;

                        // Append the new row to the tbody
                        $('.addTBRow').append(newRow);
                        setupRowEvents(newRow);
                    }

                    // Remove Row
                    function removeRow(button) {
                        var row = $(button).closest("tr");
                        var total = $("#total").val();
                        var price = row.find("#item_total").val();
                        total -= price;

                        $("#total").val(total);
                        row.remove();
                    }


                    function autoCal() {
                        var total = 0;

                        $(".addTBRow tr").each(function() {
                            var quant = $(this).find("#quantItem").val();
                            var price = $(this).find("#item_price").val();
                            var totalPrice = quant * price;
                            $(this).find("#item_total").val(totalPrice);
                            total += totalPrice;
                        });

                        // $("#subtotal").text(subtotal.toLocaleString());
                        $("#total").val(total);
                    }
                </script>

                {{-- wag burahinto itong sa baba --}}
                {{-- <script>
                    $(document).ready(function() {
                        var hdInventory = {!! json_encode($hdInventory) !!}; // Pass hdInventory from PHP to JavaScript

                        $('#program_title').change(function() {
                            var selectedProgram = $(this).val();
                            $('#item_name').empty();
                            // Loop through hdInventory array
                            hdInventory.forEach(function(item) {
                                if (item.program_title === selectedProgram) {
                                    $('#po_code').val(item.po_code);
                                    $('#quantItem').val(item.item_quan)
                                    $('#item_unit').val(item.item_unit)
                                    $('#item_name').append($('<option>', {
                                        value: item.item_name,
                                        text: item.item_name,
                                        selected: true
                                    }));
                                    $('#item_description').val(item
                                        .item_description); // Set item description initially
                                    $('#item_price').val(item.item_price);
                                    $('#item_total').val(item
                                        .item_total);
                                }
                            });
                        });

                        // Event listener for change in item name dropdown
                        $('#item_name').change(function() {
                            var selectedItem = $(this).val();

                            // Find the selected item in hdInventory
                            var selectedItemData = hdInventory.find(function(item) {
                                return item.item_name === selectedItem;
                            });
                            $('#quantItem').val(selectedItemData.item_quan)
                            $('#item_unit').val(selectedItemData.item_unit)
                            // Update the description with the corresponding item description
                            $('#item_description').val(selectedItemData.item_description);
                            $('#item_price').val(selectedItemData.item_price);
                            $('#item_total').val(selectedItemData
                                .item_total);
                        });
                    });
                </script> --}}

                <script>
                    document.getElementById('program_title').addEventListener('change', function() {
                        var selectedProgram = this.value;
                        var tableBody = document.querySelector('.addTBRow');
                        tableBody.innerHTML = ''; // Clear previous rows

                        // Assuming $hdInventory is available in JavaScript as an array of objects
                        var hdInventory = <?php echo json_encode($hdInventory); ?>;

                        // Filter items based on selected program title
                        var filteredItems = hdInventory.filter(function(item) {
                            return item.program_title === selectedProgram;
                        });

                        // Update PO code
                        var poCodeInput = document.getElementById('po_code');
                        var poCode = ''; // Initializing poCode variable
                        if (filteredItems.length > 0) {
                            poCode = filteredItems[0].po_code; // Selecting the first PO code from filtered items
                        }
                        poCodeInput.value = poCode;

                        // Generate rows for filtered items
                        filteredItems.forEach(function(item, index) {
                            var row =
                                `<tr>
                <td>
                    <button class="btn btn-sm btn-danger py-0" onclick="removeRow(this)">X</button>
                </td>
                <td class="align-middle p-0 text-center">
                    <input type="text" class="form-control text-center border-0" id="quantItem" name="alloprog[${index}][alloprog_quan]" onchange="autoCal()" value="${item.item_quan}">
                </td>
                <td class="align-middle p-0 text-center">
                    <input type="text" id="item_unit" class="form-control text-center border-0" name="alloprog[${index}][alloprog_unit]" value="${item.item_unit}">
                </td>
                <td class="align-middle p-0 text-center">
                    <input type="text" id="item_unit" class="form-control text-center border-0" name="alloprog[${index}][alloprog_item]" value="${item.item_name}">
                </td>
                <td class="align-middle p-0 text-center">
                    <input type="text" id="item_description" class="form-control text-center border-0" name="alloprog[${index}][alloprog_descript]" value="${item.item_description}">
                </td>
                <td class="align-middle p-0 text-center">
                    <input type="text" class="form-control text-center border-0 bg-transparent" id="item_price" name="alloprog[${index}][alloprog_price]" onchange="autoCal()" value="${item.item_price}">
                </td>
                <td>
                    <div class="float-start">
                        <span class="fw-bold">₱</span>
                    </div>
                    <div class="text-center">
                        <input class="text-center border-0 bg-white ms-2 fs-6 bg-transparent" id="item_total" type="text" name="alloprog[${index}][alloprog_pricetotal]" value="${item.item_total}" readonly>
                    </div>
                </td>
            </tr>`;
                            tableBody.innerHTML += row;
                        });
                        autoCal();
                    });
                </script>


                @include('components.footer');
