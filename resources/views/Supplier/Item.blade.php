@include('components.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('components.sidebar.supplier_sidebar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('components.navbar.navbar')
                <!-- / Navbar -->


                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-fluid  flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Item /</span> List of Items
                        </h4>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">Item List</h5>
                                        <button class="btn-success mx-4 px-4 py-1 border-0" data-bs-toggle="modal"
                                            data-bs-target="#createItem"> <i class='bx bxs-add-to-queue'></i> Create
                                            New</button>

                                        {{-- Create Item --}}
                                        <div class="modal fade" id="createItem" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                <div class="modal-content ">
                                                    <div class="modal-header ">
                                                        <h1 class="modal-title fs-3" id="exampleModalLabel">Create Item
                                                        </h1>

                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('products.store') }}" method="POST"
                                                        id="createForm" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-floating">
                                                                <input type="text" class="item-name form-control"
                                                                    id="floatingInput" placeholder="Item Name"
                                                                    name="item_name"
                                                                    aria-describedby="floatingInputHelp" />
                                                                <label for="floatingInput">Name</label>
                                                            </div>
                                                            @error('item_name')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror

                                                            <div class="form-floating">
                                                                <textarea class="form-control mt-2" placeholder="Leave a description here" id="floatingTextarea"
                                                                    name="item_description"></textarea>
                                                                <label for="floatingTextarea">Description</label>
                                                            </div>

                                                            <div class="form-floating mt-2">
                                                                <input type="number" class="form-control "
                                                                    id="floatingInput" name="item_price"
                                                                    placeholder="Item Price"
                                                                    aria-describedby="floatingInputHelp" />
                                                                <label for="floatingInput">Price</label>
                                                            </div>

                                                            <div class="form-floating mt-2">
                                                                <input type="date" class="form-control "
                                                                    id="floatingInput" name="date_creation"
                                                                    placeholder="Date Creation"
                                                                    aria-describedby="floatingInputHelp" />
                                                                <label for="floatingInput">Date creation</label>
                                                            </div>

                                                            <div class="form-floating mt-2">
                                                                <input type="date" class="form-control "
                                                                    id="floatingInput" name="date_expiration"
                                                                    placeholder="Date Expiration"
                                                                    aria-describedby="floatingInputHelp" />
                                                                <label for="floatingInput">Date Expiration</label>
                                                            </div>

                                                            <div class="form-floating mt-2">
                                                                <select class="form-select" id="floatingSelect"
                                                                    name="status"
                                                                    aria-label="Floating label select example">

                                                                    <option value="1">Active</option>
                                                                    <option value="2">Inactive</option>
                                                                </select>
                                                                <label for="floatingSelect">Status</label>
                                                            </div>

                                                            <div>
                                                                <label for="formFileLg" class="form-label mt-3">Input
                                                                    image here</label>
                                                                <input class="form-control form-control-lg"
                                                                    id="formFileLg" name="item_image" type="file">
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer border-1">
                                                            <button type="button" class="btn btn-secondary mt-3"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary mt-3"
                                                                onclick="submitCreate()">Create</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                        {{-- Scropt for Modal Create --}}
                                        <script></script>
                                    </div>



                                    <hr class="my-0">
                                    <!-- Account -->
                                    <div class="card-body p-5 ">
                                        <div class="table-responsive text-nowrap ">
                                            <table id="dataTable" class="datatables-basic table border-top "
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Description</th>
                                                        <th>Price</th>
                                                        <th>Date Created</th>
                                                        <th>Date Expiration</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($item as $items)
                                                        <tr>
                                                            <td>{{ $items->id }}</td>

                                                            <td>
                                                                @if ($items->item_image)
                                                                    <div class="avatar m-auto">
                                                                        <img src="{{ asset('storage/images/' . $items->item_image) }}"
                                                                            alt="Uploaded Image"
                                                                            class="w-px-40 rounded-circle">
                                                                    </div>
                                                                @else
                                                                    <span>No image found!</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                {{ $items->item_name }}
                                                            </td>
                                                            <td>
                                                                {{ $items->item_description }}
                                                            </td>

                                                            <td>
                                                                ₱ {{ $items->item_price }}

                                                            </td>
                                                            <td>
                                                                {{ $items->date_creation }}
                                                            </td>
                                                            <td>
                                                                {{ $items->date_expiration }}

                                                            </td>

                                                            @switch($items -> status)
                                                                @case(1)
                                                                    <td><span class="badge bg-label-success me-1">Active</span>
                                                                    </td>
                                                                @break

                                                                @case(2)
                                                                    <td><span
                                                                            class="badge bg-label-danger me-1">Inactive</span>
                                                                    </td>
                                                                @break

                                                                @default
                                                            @endswitch



                                                            <td>
                                                                <div class="dropdown">
                                                                    <button type="button"
                                                                        class="btn p-0 dropdown-toggle hide-arrow"
                                                                        data-bs-toggle="dropdown"><i
                                                                            class="bx bx-dots-vertical-rounded"></i></button>
                                                                    <div class="dropdown-menu">
                                                                        <button class="dropdown-item"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#viewItem{{ $items->id }}"><i
                                                                                class="bi bi-eye-fill me-1"></i>View</button>
                                                                        <button class="dropdown-item"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#editItem{{ $items->id }}">
                                                                            <i
                                                                                class="bi bi-pencil-square me-1"></i>Edit
                                                                        </button>
                                                                        <form
                                                                            action="{{ route('products.delete', $items->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                class="dropdown-item">
                                                                                <i
                                                                                    class="bi bi-trash-fill me-1"></i>Delete
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        {{-- View Modal --}}
                                                        <div class="modal fade" id="viewItem{{ $items->id }}"
                                                            tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLabel">
                                                                            Item Details</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-floating">
                                                                            <input type="text" class="form-control"
                                                                                id="floatingInput"
                                                                                placeholder="Item Name"
                                                                                aria-describedby="floatingInputHelp"
                                                                                name="item_name"
                                                                                value="{{ $items->item_name }}"
                                                                                disabled />
                                                                            <label for="floatingInput">Name</label>
                                                                        </div>
                                                                        <div class="form-floating">
                                                                            <textarea class="form-control mt-2" placeholder="Leave a description here" id="floatingTextarea"
                                                                                name="item_description" disabled>{{ $items->item_description }}</textarea>
                                                                            <label
                                                                                for="floatingTextarea">Description</label>
                                                                        </div>
                                                                        <div class="form-floating mt-2">
                                                                            <input type="number"
                                                                                class="form-control "
                                                                                id="floatingInput" name="item_price"
                                                                                placeholder="Item Price"
                                                                                aria-describedby="floatingInputHelp"
                                                                                value="{{ $items->item_price }}"
                                                                                disabled />
                                                                            <label for="floatingInput">Price</label>
                                                                        </div>
                                                                        <div class="form-floating mt-2">
                                                                            <input type="date"
                                                                                class="form-control "
                                                                                id="floatingInput"
                                                                                name="date_creation"
                                                                                placeholder="Date Creation"
                                                                                aria-describedby="floatingInputHelp"
                                                                                value="{{ $items->date_creation }}"
                                                                                disabled />
                                                                            <label for="floatingInput">Date
                                                                                creation</label>
                                                                        </div>

                                                                        <div class="form-floating mt-2">
                                                                            <input type="date"
                                                                                class="form-control "
                                                                                id="floatingInput"
                                                                                name="date_expiration"
                                                                                placeholder="Date Expiration"
                                                                                aria-describedby="floatingInputHelp"
                                                                                value="{{ $items->date_expiration }}"
                                                                                disabled />
                                                                            <label for="floatingInput">Date
                                                                                Expiration</label>
                                                                        </div>

                                                                        <div class="form-floating mt-2">
                                                                            <select class="form-select"
                                                                                id="floatingSelect" name="status"
                                                                                aria-label="Floating label select example"
                                                                                value="{{ $items->status }}" disabled>

                                                                                <option value="1">Active
                                                                                </option>
                                                                                <option value="2">Inactive
                                                                                </option>
                                                                            </select>
                                                                            <label for="floatingSelect">Status</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="button"
                                                                            class="btn btn-primary">Save
                                                                            changes</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        {{-- Update Modal --}}
                                                        <div class="modal fade" id="editItem{{ $items->id }}"
                                                            tabindex="-1"
                                                            aria-labelledby="editItemLabel{{ $items->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="editItemLabel{{ $items->id }}">Edit
                                                                            Item</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <!-- Your edit form goes here -->
                                                                        <!-- Example form fields -->
                                                                        <form id="editForm{{ $items->id }}"
                                                                            action="{{ route('products.update', $items->id) }}"
                                                                            method="POST"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="form-floating">
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    id="floatingInput"
                                                                                    placeholder="Item Name"
                                                                                    aria-describedby="floatingInputHelp"
                                                                                    name="item_name"
                                                                                    value="{{ $items->item_name }}" />
                                                                                <label for="floatingInput">Name</label>
                                                                            </div>
                                                                            <div class="form-floating">
                                                                                <textarea class="form-control mt-2" placeholder="Leave a description here" id="floatingTextarea"
                                                                                    name="item_description">{{ $items->item_description }}</textarea>
                                                                                <label
                                                                                    for="floatingTextarea">Description</label>
                                                                            </div>
                                                                            <div class="form-floating mt-2">
                                                                                <input type="number"
                                                                                    class="form-control "
                                                                                    id="floatingInput"
                                                                                    name="item_price"
                                                                                    placeholder="Item Price"
                                                                                    aria-describedby="floatingInputHelp"
                                                                                    value="{{ $items->item_price }}" />
                                                                                <label
                                                                                    for="floatingInput">Price</label>
                                                                            </div>
                                                                            <div class="form-floating mt-2">
                                                                                <input type="date"
                                                                                    class="form-control "
                                                                                    id="floatingInput"
                                                                                    name="date_creation"
                                                                                    placeholder="Date Creation"
                                                                                    aria-describedby="floatingInputHelp"
                                                                                    value="{{ $items->date_creation }}" />
                                                                                <label for="floatingInput">Date
                                                                                    creation</label>
                                                                            </div>

                                                                            <div class="form-floating mt-2">
                                                                                <input type="date"
                                                                                    class="form-control "
                                                                                    id="floatingInput"
                                                                                    name="date_expiration"
                                                                                    placeholder="Date Expiration"
                                                                                    aria-describedby="floatingInputHelp"
                                                                                    value="{{ $items->date_expiration }}" />
                                                                                <label for="floatingInput">Date
                                                                                    Expiration</label>
                                                                            </div>

                                                                            <div class="form-floating mt-2">
                                                                                <select class="form-select"
                                                                                    id="floatingSelect" name="status"
                                                                                    aria-label="Floating label select example"
                                                                                    value="{{ $items->status }}">

                                                                                    <option value="1">Active
                                                                                    </option>
                                                                                    <option value="2">Inactive
                                                                                    </option>
                                                                                </select>
                                                                                <label
                                                                                    for="floatingSelect">Status</label>
                                                                            </div>
                                                                            <div>
                                                                                <label for="formFileLg"
                                                                                    class="form-label mt-3">Input
                                                                                    image here</label>
                                                                                <input
                                                                                    class="form-control form-control-lg"
                                                                                    id="formFileLg" name="item_image"
                                                                                    type="file" multiple
                                                                                    enctype="multipart/form-data">

                                                                        </form>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            form="editForm{{ $items->id }}"
                                                                            class="btn btn-primary">Save
                                                                            changes</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach


                                                </tbody>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    <div class="card-body">
                                        <form id="formAccountSettings" method="POST" onsubmit="return false">

                                        </form>
                                    </div>
                                    <!-- /Account -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- / Content -->
                <!--footer-->



                @include('components.footer');
