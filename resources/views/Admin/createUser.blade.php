
@include('components.header');

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand d-flex align-items-center justify-content-center p-3">
          <a href={{ '/Admin/Dashboard' }} class="app-brand-link ">
            <img src="../assets/img/download.png" width="100$" class="">

          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item">
            <a href={{ '/Admin/Dashboard' }}  class="menu-link">
              <i class="menu-icon tf-icons bx bxs-dashboard"></i>
              <div data-i18n="Analytics">Dashboard</div>
            </a>
          </li>

            {{-- <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cart-alt"></i>
                <div data-i18n="Account Settings">Purchase Order</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="Purchase_order_list.php" class="menu-link">
                    <div data-i18n="Account">Purchase Order List</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div data-i18n="Notifications">Add Purchase Order</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-exit"></i>
                <div data-i18n="Authentications">Receive</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="Receive_order_list.php" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Receive Order List</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div data-i18n="Misc">Back Order</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="Back_order_list.php" class="menu-link">
                    <div data-i18n="Error">Back Order List</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="Misc">Stocks</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="Stocks_list.php" class="menu-link">
                    <div data-i18n="Error">List of Stocks</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bxs-truck"></i>
                <div data-i18n="Misc">Distribution</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="Distribution_list.php" class="menu-link">
                    <div data-i18n="Error">Distribution List</div>
                  </a>
                   <a href="Add_distribution_list.php" class="menu-link">
                    <div data-i18n="Error">Add Distribution</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-notepad"></i>
                <div data-i18n="Misc">Request Order</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="pages-misc-error.html" class="menu-link">
                    <div data-i18n="Error">Request List</div>
                  </a>
                </li>
              </ul>
            </li> --}}

            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
            
            <!-- User interface -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bxs-building-house"></i>
                <div data-i18n="User interface">Districts</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="District_List.php" class="menu-link">
                    <div data-i18n="Accordion">District List</div>
                  </a>
                </li>
              </ul>
            </li>

          <!-- Extended components -->
          <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bxs-institution"></i>
              <div data-i18n="Extended UI">Barangays</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="Barangay_list.php" class="menu-link">
                  <div data-i18n="Perfect Scrollbar">Barangay List</div>
                </a>
              </li>

            </ul>
          </li>

            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-folder-plus"></i>
                <div data-i18n="Extended UI">Programs</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="Programs_list.php" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Program List</div>
                  </a>
                </li>
    
              </ul>
            </li>

            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-pin"></i>
                <div data-i18n="Extended UI">Suppliers</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="Supplier_list.php" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">List of Supplier</div>
                  </a>
                </li>
    
              </ul>
            </li>

            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bxs-package"></i>
                <div data-i18n="Extended UI">Items</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="Item_list.php" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">List of Items</div>
                  </a>
                </li>
    
              </ul>
            </li>

            <li class="menu-item active open">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Extended UI">Users</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item active">
                    <a href={{ '/Admin/Add_User' }} class="menu-link">
                      <div data-i18n="Perfect Scrollbar">Add User</div>
                    </a>
                  </li>
                <li class="menu-item">
                  <a href={{ '/Admin/User_List' }} class="menu-link">
                    <div data-i18n="Perfect Scrollbar">List of User</div>
                  </a>
                </li>
    
              </ul>
            </li>



            <!-- Forms & Tables -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Profile</span></li>
            <!-- Forms -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Form Elements">Account</div>
              </a>
             
            </li>
            
            
        </aside>
        <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-fluid  navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
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
                            <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">John Doe</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-cog me-2"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>
                  
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="../logout.php">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-fluid  flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users /</span>Add User</h4>

            <div class="row">
              <div class="col-md-12">
                <div class="card mb-4"> 
                  <div class="card-body">
                    
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