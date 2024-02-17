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
                    @if (session('success'))
                        @include('components.notification')
                    @endif
                    <div class="container-fluid  flex-grow-1 container-p-y">


                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">Project Procurement Management Plan Create</h5>

                                    </div>

                                    <hr class="my-0">
                                    <!-- Account -->
                                    <div class="card-body px-5">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <form action="{{ route('ppmp.create') }}" method="POST">
                                                    @csrf

                                                    <div class="row mb-3">
                                                        <div class="col-md-4 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">PPMP Code
                                                            </label>
                                                            <input type="text" class="form-control" name="ppmp_code"
                                                                id="poCode" readonly>
                                                            <script>
                                                                // Function to generate a random PO code
                                                                function generatePOCode() {
                                                                    var length = 8; // Length of the PO code
                                                                    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                                                                    var result = '';

                                                                    for (var i = 0; i < length; i++) {
                                                                        result += characters.charAt(Math.floor(Math.random() * characters.length));
                                                                    }

                                                                    // Display the generated PO code in the input field
                                                                    document.getElementById('poCode').value = result;
                                                                }

                                                                // Generate the PO code automatically when the page loads
                                                                generatePOCode();
                                                            </script>

                                                        </div>
                                                        <div class="col-md-4 mb-md-0 mb-3 ">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">year</label>
                                                            <input type="text" class="form-control" name="year"
                                                                value="" id="yearInput" required>
                                                            <script>
                                                                // Get the current year
                                                                var currentYear = new Date().getFullYear();

                                                                // Calculate the next year
                                                                var nextYear = currentYear + 1;

                                                                // Set the value of the input field to the next year
                                                                document.getElementById('yearInput').value = nextYear;
                                                            </script>
                                                        </div>
                                                        <div class="col-md-4 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Department</label>
                                                            <select class="form-select" name="department"
                                                                aria-label="Default select example" value=""
                                                                required>
                                                                <option value="Department of Health">Department of
                                                                    Health</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-4 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Program Title</label>
                                                            {{-- <input type="text" class="form-control"
                                                                name="programtitle" value=""> --}}
                                                            <select class="form-select"
                                                                aria-label="Default select example" name="programtitle"
                                                                id="">
                                                                @if (isset($program))
                                                                    @foreach ($program as $programs)
                                                                        <option value="{{ $programs->name }}">
                                                                            {{ $programs->name }}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <style>
                                                            .form-control:focus {
                                                                border-color: #ff80ff;
                                                                box-shadow: none;
                                                            }

                                                            .form-select:focus {
                                                                box-shadow: none;
                                                            }
                                                        </style>
                                                        <div class="col-md-4 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Project Title</label>
                                                            <input type="text" class="form-control"
                                                                name="projecttitle" value="" required>
                                                        </div>
                                                        <div class="col-md-4 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Type of Contract</label>
                                                            <select class="form-select" name="typeofcontract" required
                                                                aria-label="Default select example" value="">
                                                                <option selected>Select Contract</option>
                                                                <option value="Goods">Goods</option>
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
                                                                name="accounttitle" value="" required>

                                                        </div>
                                                        <div class="col-md-4 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Schedule</label>
                                                            <input type="text" class="form-control" name="schedule"
                                                                value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered"
                                                            id="myTable">
                                                            <colgroup>
                                                                <col width="5%">
                                                                <col width="20%">
                                                                <col width="30%">
                                                                <col width="5%">
                                                                <col width="5%">
                                                                <col width="15%">
                                                                <col width="15%">
                                                            </colgroup>
                                                            <thead>
                                                                <tr class="bg-navy disabled">
                                                                    <th class="px-1 py-1 text-center"></th>
                                                                    <th class="px-1 py-1 text-center">Item</th>
                                                                    <th class="px-1 py-1 text-center">Description</th>
                                                                    <th class="px-1 py-1 text-center">Unit</th>
                                                                    <th class="px-1 py-1 text-center">Quantity
                                                                    </th>
                                                                    <th class="px-1 py-1 text-center">Price</th>
                                                                    <th class="px-1 py-1 text-center">Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="addTBRow">
                                                                <tr>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-danger py-0"
                                                                            onclick="removeRow(this)">X</button>
                                                                    </td>
                                                                    <td class="align-middle p-0 text-center">
                                                                        <select
                                                                            class="form-select text-center bg-transparent border-0 "
                                                                            name="ppmp[0][itemname]" id="item_id"
                                                                            aria-label="Default select example"
                                                                            onchange="updateItemDetails(this)">
                                                                            <option>Select Item</option>
                                                                            @if (@isset($item))
                                                                                @foreach ($item as $items)
                                                                                    <option value="{{ $items->id }}"
                                                                                        data-description="{{ $items->item_description }}"
                                                                                        data-unitprice="{{ $items->item_price }}">
                                                                                        {{ $items->item_name }}
                                                                                    </option>
                                                                                @endforeach
                                                                            @endif

                                                                        </select>
                                                                    </td>

                                                                    <td
                                                                        class="align-middle p-0 text-center text-wrap ">

                                                                        <textarea type="text" id="item_d" class="form-control text-start text-wrap text-break border-0"
                                                                            name="ppmp[0][description]" value="" cols="30" rows="2"></textarea>
                                                                    </td>
                                                                    <td
                                                                        class="align-middle
                                                                        p-0 text-center">
                                                                        <input type="text"
                                                                            class="form-control text-center border-0 bg-transparent"
                                                                            name="ppmp[0][unit]" value=""
                                                                            required>
                                                                    </td>
                                                                    <td class="align-middle p-0 text-center">
                                                                        <input type="text"
                                                                            class="form-control text-center bg-transparent border-0"
                                                                            id="quantItem" name="ppmp[0][quantity]"
                                                                            onkeyup="autoCal()" value=""
                                                                            required>
                                                                    </td>

                                                                    <td class="align-middle p-0 text-center"
                                                                        id="descriptionColumn">
                                                                        <input onkeyup="autoCal()" type="text"
                                                                            class="form-control text-center bg-transparent border-0"
                                                                            name="ppmp[0][unitprice]" id="price"
                                                                            value="" required>
                                                                    </td>


                                                                    {{-- <script>
                                                                        document.getElementById('item_id').addEventListener('change', function() {
                                                                            var selectedItemId = this.value;


                                                                            var selectedItem = document.querySelector('option[value="' + selectedItemId + '"]');
                                                                            var description = selectedItem.getAttribute('data-description');
                                                                            var unitprice = selectedItem.getAttribute('data-unitprice');


                                                                            document.getElementById('item_d').value = description;
                                                                            document.getElementById('price').value = unitprice;
                                                                        });
                                                                    </script> --}}
                                                                    <td>
                                                                        <div class="float-start">
                                                                            <span class="fw-bold ">₱</span>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <input
                                                                                class="text-center border-0 bg-white ms-2 fs-6 bg-transparent"
                                                                                type="text" name="ppmp[0][total]"
                                                                                id="totalPrice" value=""
                                                                                readonly required>
                                                                            {{-- <span id="totalPrice">0</span> --}}
                                                                        </div>
                                                                    </td>
                                                                </tr>
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
                                                                                id="total" value="" readonly
                                                                                required>
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
                                                            <textarea class="form-control" style="height: 100px" name="note" required></textarea>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">Status</label>
                                                            <select class="form-select" name="status"
                                                                aria-label="Default select example" required>
                                                                <option selected>Select Status</option>
                                                                <option value="1">Approved</option>
                                                                <option value="2">Disapproved</option>
                                                                <option value="3">Pending</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <button type="submit" class="btn btn-primary">Save</button>
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
                            `<td class="align-middle p-0 text-center">` +
                            `<select class="form-select text-center border-0" name="ppmp[` + i +
                            `][itemname]" aria-label="Default select example" onchange="updateItemDetails(this)">` +
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
                            `<td class="align-middle p-0 text-center"><textarea class="form-control text-start border-0" name="ppmp[` +
                            i + `][description]" id="item_d"></textarea> </td>` +
                            `<td class="align-middle p-0 text-center"><input type="text" class="form-control text-center border-0" name="ppmp[` +
                            i + `][unit]"></td>` +
                            `<td class="align-middle p-0 text-center"><input type="text" class="form-control text-center border-0" name="ppmp[` +
                            i + `][quantity]" id="quantItem" onkeyup="autoCal()"></td>` +
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
                    // function displaySelectedValue() {
                    //     // Get the selected value from the <select> tag
                    //     var selectedValue = document.getElementById('item_id').value;

                    //     // Set the selected value to the input field
                    //     document.getElementById('item_d').value = selectedValue;
                    // }

                    // Function to update item details based on the selected option
                    // function updateItemDetails(selectElement) {
                    //     var selectedOption = selectElement.options[selectElement.selectedIndex];
                    //     var description = selectedOption.getAttribute('data-description');
                    //     var unitprice = selectedOption.getAttribute('data-unitprice');

                    //     // Find the corresponding input fields and update their values
                    //     var descriptionInput = selectElement.closest('tr').querySelector('input[name="alloprog_descript"]');
                    //     var priceInput = selectElement.closest('tr').querySelector('input[name="alloprog_price"]');

                    //     descriptionInput.value = description;
                    //     priceInput.value = unitprice;
                    // }

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





                @include('components.footer');
