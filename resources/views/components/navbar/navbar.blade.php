<nav class="layout-navbar container-fluid  navbar navbar-expand-xl navbar-detached align-items-center  border "
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
                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light"></span>{{ Request::is('Admin/Dashboard') ? 'Dashboard' : '' }} </h5>

                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Admin/Health_Center_List') ? 'Health Center /' : '' }}</span>{{ Request::is('Admin/Health_Center_List') ? ' List of Health Center' : '' }}
                </h5>

                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Admin/Barangay_List') ? 'Health Center /' : '' }}</span>{{ Request::is('Admin/Barangay_List') ? ' List of Barangay' : '' }}
                </h5>

                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Admin/District_List') ? 'District /' : '' }}</span>{{ Request::is('Admin/District_List') ? ' List of District' : '' }}
                </h5>

                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Admin/Program_List') ? 'Programs /' : '' }}</span>{{ Request::is('Admin/Program_List') ? ' List of Programs' : '' }}
                </h5>

                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Admin/Role_List') ? 'Roles /' : '' }}</span>{{ Request::is('Admin/Role_List') ? ' List of Roles' : '' }}
                </h5>

                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Admin/Account_Profile') ? 'Account /' : '' }}</span>{{ Request::is('Admin/Account_Profile') ? ' Profile' : '' }}
                </h5>

                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Admin/Account_Change_Password') ? 'Account /' : '' }}</span>{{ Request::is('Admin/Account_Change_Password') ? ' Change Password' : '' }}
                </h5>

                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Admin/User_List') ? 'Users /' : '' }}</span>{{ Request::is('Admin/User_List') ? ' List of Users' : '' }}
                </h5>

                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Supplier/Account_Change_Password') ? 'Account /' : '' }}</span>{{ Request::is('Supplier/Account_Change_Password') ? ' Change Password' : '' }}
                </h5>


                {{-- Supplier navbar --}}
                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light"></span>{{ Request::is('Supplier/Dashboard') ? 'Dashboard' : '' }}
                </h5>

                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Supplier/Item_List') ? 'Item /' : '' }}</span>{{ Request::is('Supplier/Item_List') ? ' List of Items' : '' }}
                </h5>

                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Supplier/PPMP_List') ? 'PPMP /' : '' }}</span>{{ Request::is('Supplier/PPMP_List') ? ' List of PPMP' : '' }}
                </h5>

                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Supplier/Account_Profile') ? 'Account /' : '' }}</span>{{ Request::is('Supplier/Account_Profile') ? ' Profile' : '' }}
                </h5>

                {{-- Health Center --}}
                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light"></span>{{ Request::is('Health_Center/Dashboard') ? 'Dashboard' : '' }}
                </h5>

                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Health_Center/Item_List') ? 'Inventory /' : '' }}</span>{{ Request::is('Health_Center/Item_List') ? ' List of Item ' : '' }}
                </h5>

                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Health_Center/Patient_List') ? 'Patient /' : '' }}</span>{{ Request::is('Health_Center/Patient_List') ? ' List of Patients ' : '' }}
                </h5>

                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Health_Center/Send_Items') ? 'Patient /' : '' }}</span>{{ Request::is('Health_Center/Send_Items') ? ' Send Items' : '' }}
                </h5>

                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Health_Center/Patient_Sent_Item{id}') ? 'Patient /' : '' }}</span>{{ Request::is('Health_Center/Patient_Sent_Item{id}') ? ' Patient List / Patient Item Order' : '' }}
                </h5>

                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Health_Center/Profile') ? 'Account /' : '' }}</span>{{ Request::is('Health_Center/Profile') ? ' Profile' : '' }}
                </h5>

                <h5 class="fw-bold py-3 mt-3"><span
                    class="text-muted fw-light">{{ Request::is('Health_Center/Profile_Change') ? 'Account /' : '' }}</span>{{ Request::is('Health_Center/Profile_Change') ? ' Change Password' : '' }}
            </h5>






                {{-- PROGRAM MANAGER  --}}
                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light"></span>{{ Request::is('Program_Manager/Dashboard') ? 'Dashboard' : '' }}
                </h5>
                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Program_Manager/PPMPlist') ? 'PPMP /' : '' }}</span>{{ Request::is('Program_Manager/PPMPlist') ? ' List of PPMP' : '' }}
                </h5>

                @if (isset($ppmpdatas))
                    <h5 class="fw-bold py-3 mt-3"><span
                            class="text-muted fw-light">{{ Request::is('Program_Manager/pmPPMPView' . $ppmpdatas->id) ? 'PPMP / List of PPMP /' : '' }}</span>{{ Request::is('Program_Manager/pmPPMPView' . $ppmpdatas->id) ? ' Project Procurement Management Plan Details' : '' }}
                    </h5>
                @endif

                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Program_Manager/pmPPMPcreate') ? 'PPMP /' : '' }}</span>{{ Request::is('Program_Manager/pmPPMPcreate') ? ' Create PPMP' : '' }}
                </h5>
                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Program_Manager/Allocationlist') ? 'Allocation /' : '' }}</span>{{ Request::is('Program_Manager/Allocationlist') ? ' Allocation List' : '' }}
                </h5>
                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Program_Manager/Reportlist') ? 'Inventory /' : '' }}</span>{{ Request::is('Program_Manager/Reportlist') ? ' Inventory List' : '' }}
                </h5>

                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Program_Manager/Profile') ? 'Account /' : '' }}</span>{{ Request::is('Program_Manager/Profile') ? ' Profile' : '' }}
                </h5>

                <h5 class="fw-bold py-3 mt-3"><span
                        class="text-muted fw-light">{{ Request::is('Program_Manager/pmPPMPEdit_{id}') ? 'Account /' : '' }}</span>{{ Request::is('Program_Manager/pmPPMPEdit_{id}') ? ' Profile' : '' }}
                </h5>


                <!-- Search -->
                <div class="navbar-nav align-items-center">
                    <div class="nav-item d-flex align-items-center">
                        {{-- <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                    aria-label="Search..." /> --}}
                        <h5 class="fw-bold py-3 mt-3"><span
                                class="text-muted fw-light"></span>{{ Request::is('Health_Department/Dashboard') ? 'Dashboard' : '' }}
                        </h5>

                        <h5 class="fw-bold py-3 mt-3"><span
                                class="text-muted fw-light">{{ Request::is('Health_Department/Purchase_Order_List') ? 'Purchase Orde /' : '' }}</span>{{ Request::is('Health_Department/Purchase_Order_List') ? ' PO List' : '' }}
                        </h5>

                        <h5 class="fw-bold py-3 mt-3"><span
                                class="text-muted fw-light">{{ Request::is('Health_Department/Item_List') ? 'Inventory /' : '' }}</span>{{ Request::is('Health_Department/Item_List') ? ' Item List' : '' }}
                        </h5>


                        @if (isset($allotoprogview))
                            <h5 class="fw-bold py-3 mt-3"><span
                                    class="text-muted fw-light">{{ Request::is('Health_Department/Allocation_View_' . $allotoprogview->id) ? 'Allocation / Allocation List / ' : '' }}</span>{{ Request::is('Health_Department/Allocation_View_' . $allotoprogview->id) ? ' Allocation Details' : '' }}
                            </h5>
                        @endif

                        @if (isset($allotoprogedit))
                            <h5 class="fw-bold py-3 mt-3"><span
                                    class="text-muted fw-light">{{ Request::is('Health_Department/Allocation_Edit_' . $allotoprogedit->id) ? 'Allocation / Allocation List /' : '' }}</span>{{ Request::is('Health_Department/Allocation_Edit_' . $allotoprogedit->id) ? ' Edit Allocation' : '' }}
                            </h5>
                        @endif

                        <h5 class="fw-bold py-3 mt-3"><span
                                class="text-muted fw-light">{{ Request::is('Health_Department/Allocation_Process') ? 'Allocation /' : '' }}</span>{{ Request::is('Health_Department/Allocation_Process') ? ' Create Allocation' : '' }}
                        </h5>

                        <h5 class="fw-bold py-3 mt-3"><span
                                class="text-muted fw-light">{{ Request::is('Health_Department/Profile') ? 'Account /' : '' }}</span>{{ Request::is('Health_Department/Profile') ? ' Profile' : '' }}
                        </h5>

                        <h5 class="fw-bold py-3 mt-3"><span
                                class="text-muted fw-light">{{ Request::is('Health_Department/Profile_Change') ? 'Account /' : '' }}</span>{{ Request::is('Health_Department/Profile_Change') ? ' Change' : '' }}
                        </h5>
                    </div>
                </div>
                <!-- /Search -->
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
                                                District Supervisor
                                            @break

                                            @case(5)
                                                Brgy. Health Center Staff
                                            @break

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
                        <a class="dropdown-item" href="{{ '/Admin/Account_Profile' }}">
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
