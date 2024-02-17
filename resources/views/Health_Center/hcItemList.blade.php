@include('components.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('components.sidebar.hc_sidebar')

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
                                        <h5 class="card-header">Patient Item Order</h5>

                                    </div>

                                    <hr class="my-0">
                                    <!-- Account -->
                                    <div class="card-body px-5">
                                        <div class="row">
                                            <form action="{{ url('/Health_Center/Patient_Sent_Item') }}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <div class="col-md-12">
                                                    <div class="row mb-2">
                                                        @if ($patientid)
                                                            <div class="col-md-6 mb-md-0 mb-3  	d-none">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">ID</label>
                                                                <input class="form-control" type="text"
                                                                    value="{{ $patientid->id }} "
                                                                    aria-label="Disabled input example"
                                                                    name="patient_ID">
                                                            </div>
                                                            <div class="col-md-6 mb-md-0 mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Name</label>
                                                                <input class="form-control" type="text"
                                                                    value="{{ $patientid->fname }} {{ $patientid->mname }}. {{ $patientid->lname }}"
                                                                    aria-label="Disabled input example" name="fname"
                                                                    disabled>

                                                                <input type="hidden" name="patient_ID"
                                                                    value="{{ $patientid->id }}">

                                                            </div>
                                                        @endif
                                                        @if ($itemid)
                                                            <div class="col-md-6 mb-md-0 mb-3  	d-none">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">ID</label>
                                                                <input class="form-control" type="text"
                                                                    value="{{ $itemid->id }} "
                                                                    aria-label="Disabled input example" name="items_id">
                                                            </div>
                                                        @endif

                                                        <div class="col-md-6 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Program</label>
                                                            <input class="form-control" type="text"
                                                                value="{{ $patientid->program }}"
                                                                aria-label="Disabled input example" name="program"
                                                                disabled>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-5">
                                                        <div class="col-md-6 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Barangay Health Center</label>
                                                            <input class="form-control" type="text"
                                                                value="{{ $patientid->healthcenter }}"
                                                                aria-label="Disabled input example" name="healthcenter"
                                                                disabled>

                                                        </div>
                                                        <div class="col-md-6 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">District</label>
                                                            <input class="form-control" type="text"
                                                                value="{{ $patientid->district }}"
                                                                aria-label="Disabled input example" name="district"
                                                                disabled>
                                                        </div>
                                                    </div>

                                                    <div class="table-responsive mb-5">
                                                        <table class="table table-striped table-bordered"
                                                            id="myTable">
                                                            <colgroup>
                                                                <col width="7%">
                                                                <col width="5%">
                                                                <col width="10%">
                                                                <col width="20%">
                                                                <col width="30%">
                                                            </colgroup>
                                                            <thead>
                                                                <tr class="bg-navy disabled">
                                                                    <th class="px-1 py-1 text-center"></th>
                                                                    <th class="px-1 py-1 text-center">Qty</th>
                                                                    <th class="px-1 py-1 text-center">Unit</th>
                                                                    <th class="px-1 py-1 text-center">Item</th>
                                                                    <th class="px-1 py-1 text-center">Description</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="addTBRow">

                                                                <tr>
                                                                    <td>
                                                                        <button
                                                                            class="btn btn-sm btn-danger py-0 text-start"
                                                                            onclick="removeRow(this)">X</button>
                                                                    </td>

                                                                    <td class="align-middle p-0 text-center">
                                                                        <input type="text"
                                                                            class="form-control text-center border-0"
                                                                            value="" name="stp[0][quantity]"
                                                                            required>
                                                                    </td>
                                                                    <td class="align-middle p-0 text-center">
                                                                        <input type="text"
                                                                            class="form-control text-center border-0"
                                                                            name="stp[0][unit]" required>
                                                                    </td>
                                                                    <td class="align-middle p-0 text-center">
                                                                        <input type="text"
                                                                            class="form-control text-center border-0"
                                                                            name="stp[0][item]" required>
                                                                    </td>
                                                                    <td class="align-middle p-0 text-center">
                                                                        <input type="text"
                                                                            class="form-control text-center border-0"
                                                                            name="stp[0][description]" required>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th colspan="6" class="text-start">
                                                                        <div class="btn btn-primary"
                                                                            style="font-size: 10px"
                                                                            onclick="addRow()">
                                                                            Add
                                                                            Row</div>
                                                                    </th>

                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    <div class="col-4">
                                                        <button class="btn btn-primary" type="submit">Save</button>
                                                        <a class="btn btn-danger"
                                                            href="{{ '/Health_Center/Patient_List' }}">Cancel</a>
                                                    </div>
                                                </div>
                                            </form>
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

                        ++i

                        var newRow = `<tr>` +
                            `<td><button class="btn btn-sm btn-danger py-0 text-start"onclick="removeRow(this)">X</button></td>` +
                            `<td class="align-middle p-0 text-center"><input type="text" class="form-control text-center border-0" name="stp[` +
                            i + `][quantity]" required></td>` +
                            `<td class="align-middle p-0 text-center"><input type="text" class="form-control text-center border-0" name="stp[` +
                            i + `][unit]" required></td>` +
                            `<td class="align-middle p-0 text-center"><input type="text" class="form-control text-center border-0" name="stp[` +
                            i + `][item]" required></td>` +
                            `<td class="align-middle p-0 text-center"><input type="text" class="form-control text-center border-0" name="stp[` +
                            i + `][description]" required></td>` +
                            `</tr>`;

                        $('.addTBRow').append(newRow);
                    }

                    function removeRow(button) {
                        const row = button.parentNode.parentNode;
                        row.parentNode.removeChild(row);
                    }
                </script>

                @include('components.footer');



                <!-- items send for patients -->
                <!--<div class="row mb-5">
                                                        <div class="col-md-6 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Items</label>
                                                            <input class="form-control" type="text"
                                                                
                                                                aria-label="Disabled input example" name="items_id"  >

                                                        </div>
                                                        {{-- <div class="col-md-6 mb-md-0 mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Quantity</label>
                                                            <input class="form-control" type="text"
                                                                
                                                                aria-label="Disabled input example" name="quantity"  >
                                                        </div> --}}
                                                    </div>-->



                {{-- <div class="row my-5">
                                                        <div class="col-md-6 mb-md-0 mb-3">
                                                            <label for="">Notes</label>
                                                            <textarea class="form-control" style="height: 100px"></textarea>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">Status</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example">
                                                                <option selected>Open this select menu</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                    </div> --}}
