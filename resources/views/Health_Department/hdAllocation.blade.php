@include('components.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('components.sidebar.hd_sidebar')

            <!-- Notification success created -->
            @include('components.insertnotification')

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
                            Allocation List
                        </h4> --}}

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div
                                        class="title d-flex align-items-center justify-content-between border-top border-success">
                                        <h5 class="card-header">Allocation List</h5>
                                    </div>

                                    <hr class="my-0">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card mb-4">
                                                <!-- Account -->
                                                <div class="card-body px-5">

                                                    <div class="table-responsive text-nowrap overflow-visible">
                                                        <table id="dataTable" class="datatables-basic table border-top "
                                                            style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>PO#</th>
                                                                    <th>Date Created</th>
                                                                    <th>Program</th>
                                                                    {{-- <th>Program Manager</th> --}}
                                                                    <th>Type</th>
                                                                    {{-- <th>Total Items</th> --}}
                                                                    {{-- <th>Image</th> --}}
                                                                    <th>Total Price</th>
                                                                    <th>Status</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($allotoprog as $allotoprogs)
                                                                    <tr>
                                                                        <td>{{ $allotoprogs->POnum }}</td>
                                                                        <td>{{ $allotoprogs->created_at }}</td>
                                                                        <td>{{ $allotoprogs->program }}</td>
                                                                        {{-- <td>John Smith</td> --}}
                                                                        <td>{{ $allotoprogs->itemType }}</td>
                                                                        {{-- <td>12</td> --}}
                                                                        {{-- <td>
                                                                        <ul
                                                                            class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                                            <li data-bs-toggle="tooltip"
                                                                                data-popup="tooltip-custom"
                                                                                data-bs-placement="top"
                                                                                class="avatar avatar-xs pull-up"
                                                                                title="Lilian Fuller">
                                                                                <img src="../assets/img/avatars/5.png"
                                                                                    alt="Avatar"
                                                                                    class="rounded-circle">
                                                                            </li>
                                                                            <li data-bs-toggle="tooltip"
                                                                                data-popup="tooltip-custom"
                                                                                data-bs-placement="top"
                                                                                class="avatar avatar-xs pull-up"
                                                                                title="Sophia Wilkerson">
                                                                                <img src="../assets/img/avatars/6.png"
                                                                                    alt="Avatar"
                                                                                    class="rounded-circle">
                                                                            </li>
                                                                            <li data-bs-toggle="tooltip"
                                                                                data-popup="tooltip-custom"
                                                                                data-bs-placement="top"
                                                                                class="avatar avatar-xs pull-up"
                                                                                title="Christina Parker">
                                                                                <img src="../assets/img/avatars/7.png"
                                                                                    alt="Avatar"
                                                                                    class="rounded-circle">
                                                                            </li>
                                                                        </ul>
                                                                    </td> --}}
                                                                        <td>₱ {{ $allotoprogs->items_total }}</td>
                                                                        <td class="text-success">
                                                                            {{ $allotoprogs->item_status }}</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <button
                                                                                    class="btn p-0 dropdown-toggle hide-arrow"
                                                                                    type="button"
                                                                                    id="dropdownMenuButton1"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false">
                                                                                    <i
                                                                                        class="bx bx-dots-vertical-rounded"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu"
                                                                                    aria-labelledby="dropdownMenuButton1">
                                                                                    <li><a class="dropdown-item"
                                                                                            href="{{ "/Health_Department/Allocation_View_{$allotoprogs->id}" }}"><i
                                                                                                class="bi bi-eye-fill fs-5 text-primary"></i>
                                                                                            View</a>
                                                                                    </li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="{{ "/Health_Department/Allocation_Edit_{$allotoprogs->id}" }}"><i
                                                                                                class="bi bi-pen-fill fs-5 text-info"></i>
                                                                                            Edit</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <form
                                                                                            action="{{ route('deleteallocation', $allotoprogs->id) }}"
                                                                                            method="POST">
                                                                                            @csrf
                                                                                            @method('DELETE')
                                                                                            <button type="submit"
                                                                                                class="dropdown-item"><i
                                                                                                    class="bi bi-trash-fill fs-5 text-danger"></i>
                                                                                                Delete</button>

                                                                                            {{-- <a class="dropdown-item"
                                                                                            href="/Health_Department/Allocation_List{$allotoprogs->id}"><i
                                                                                                class="bi bi-trash-fill fs-5 text-danger"></i>
                                                                                            Delete</a> --}}
                                                                                        </form>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                                <hr class="my-0">
                                                <div class="card-body">
                                                    <form id="formAccountSettings" method="POST"
                                                        onsubmit="return false">

                                                    </form>
                                                </div>
                                                <!-- /Account -->
                                            </div>

                                        </div>
                                    </div>
                                </div> <!--footer-->

                                @include('components.footer');
