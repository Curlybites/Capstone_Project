<nav class="layout-navbar container-fluid  navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme sticky-top"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center " id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
                {{-- <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                    aria-label="Search..." /> --}}
                <h5 class="fw-bold py-3 mt-3"><span class="text-muted fw-light"></span>{{ Request::is('Admin/Dashboard') ? 'Dashboard' : '' }} </h5>

                <h5 class="fw-bold py-3 mt-3"><span class="text-muted fw-light">{{ Request::is('Admin/Health_Center_List') ? 'Health Center /' : '' }}</span>{{ Request::is('Admin/Health_Center_List') ? ' List of Health Center' : '' }} </h5>

                <h5 class="fw-bold py-3 mt-3"><span class="text-muted fw-light">{{ Request::is('Admin/Barangay_List') ? 'Health Center /' : '' }}</span>{{ Request::is('Admin/Barangay_List') ? ' List of Barangay' : '' }} </h5>

                <h5 class="fw-bold py-3 mt-3"><span class="text-muted fw-light">{{ Request::is('Admin/District_List') ? 'District /' : '' }}</span>{{ Request::is('Admin/District_List') ? ' List of District' : '' }} </h5>

                <h5 class="fw-bold py-3 mt-3"><span class="text-muted fw-light">{{ Request::is('Admin/Program_List') ? 'Programs /' : '' }}</span>{{ Request::is('Admin/Program_List') ? ' List of Programs' : '' }} </h5>

                <h5 class="fw-bold py-3 mt-3"><span class="text-muted fw-light">{{ Request::is('Admin/Role_List') ? 'Roles /' : '' }}</span>{{ Request::is('Admin/Role_List') ? ' List of Roles' : '' }} </h5>

                <h5 class="fw-bold py-3 mt-3"><span class="text-muted fw-light">{{ Request::is('Admin/Account_Profile') ? 'Account /' : '' }}</span>{{ Request::is('Admin/Account_Profile') ? ' Profile' : '' }} </h5>

                <h5 class="fw-bold py-3 mt-3"><span class="text-muted fw-light">{{ Request::is('Admin/Account_Change_Password') ? 'Account /' : '' }}</span>{{ Request::is('Admin/Account_Change_Password') ? ' Change Password' : '' }} </h5>

                <h5 class="fw-bold py-3 mt-3"><span class="text-muted fw-light">{{ Request::is('Admin/User_List') ? 'Users /' : '' }}</span>{{ Request::is('Admin/User_List') ? ' List of Users' : '' }} </h5>

                <h5 class="fw-bold py-3 mt-3"><span class="text-muted fw-light">{{ Request::is('Supplier/Account_Change_Password') ? 'Account /' : '' }}</span>{{ Request::is('Supplier/Account_Change_Password') ? ' Change Password' : '' }} </h5>


                {{-- Supplier navbar --}}
                <h5 class="fw-bold py-3 mt-3"><span class="text-muted fw-light"></span>{{ Request::is('Supplier/Dashboard') ? 'Dashboard' : '' }} </h5>

                <h5 class="fw-bold py-3 mt-3"><span class="text-muted fw-light">{{ Request::is('Supplier/Item_List') ? 'Item /' : '' }}</span>{{ Request::is('Supplier/Item_List') ? ' List of Items' : '' }} </h5>

                <h5 class="fw-bold py-3 mt-3"><span class="text-muted fw-light">{{ Request::is('Supplier/PPMP_List') ? 'PPMP /' : '' }}</span>{{ Request::is('Supplier/PPMP_List') ? ' List of PPMP' : '' }} </h5>

                <h5 class="fw-bold py-3 mt-3"><span class="text-muted fw-light">{{ Request::is('Supplier/Account_Profile') ? 'Account /' : '' }}</span>{{ Request::is('Supplier/Account_Profile') ? ' Profile' : '' }} </h5>

                {{-- Supplier/Account_Profile --}}


            </div>
        </div>
        <!-- /Search -->

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Place this tag where you want the button to render. -->
            <li class="nav-item lh-1 me-3">
                <a href="#"><i class='bx bxs-bell'></i></a>
            </li>

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="../assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">{{ $user->firstname }}
                                        {{ $user->lastname }}</span>
                                    <small class="text-muted"> @switch($user->role)
                                            @case(1)
                                                Admin
                                            @break

                                            @case(2)
                                                Program Manager
                                            @break

                                            @case(3)
                                                Health Department Staff
                                            @break

                                            @case(4)
                                                District Staff
                                            @break

                                            @case(5)
                                                Brgy. Health Center Staff 
                                            @case(6)
                                                Supplier
                                            @break

                                            @default
                                        @endswitch


                                    </small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{'/Admin/Account_Profile'}}">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">My Profile</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a class="dropdown-item" href="#">
                            <i class="bx bx-cog me-2"></i>
                            <span class="align-middle">Settings</span>
                        </a>
                    </li> --}}

                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <form action="/Logout" method="POST">
                            @csrf
                            <button class="dropdown-item">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </button>
                        </form>

                        {{-- <a class="dropdown-item" href="../logout.php">
                <i class="bx bx-power-off me-2"></i>
                <span class="align-middle">Log Out</span>
              </a> --}}
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>

<!-- / Navbar -->
