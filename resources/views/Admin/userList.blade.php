
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
              <i class="menu-icon tf-icons bx bx-building"></i>
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
            <i class="menu-icon tf-icons bx bx-capsule"></i>
              <div data-i18n="Extended UI">Health Center</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="Barangay_list.php" class="menu-link">
                  <div data-i18n="Perfect Scrollbar">List of Health Centers</div>
                </a>
              </li>

            </ul>
          </li>

            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-customize"></i>
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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users /</span> List of Users</h4>

            <div class="row">
              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="title d-flex align-items-center justify-content-between border-top border-success">
                    <h5 class="card-header">User List</h5>
                    <button class="btn-success mx-4 px-4 py-1 border-0" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class='bx bxs-add-to-queue'></i> Create
                      New</button>
                     
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content ">
                          <div class="modal-header ">
                            <h1 class="modal-title fs-3" id="exampleModalLabel">Create User</h1>       
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
                          </div>
                      <form action="/Admin/Store" method="POST" >
                        @csrf
                          <div class="modal-body">

                            <div class="row">
                              
                              <h5>Personal Details</h5>
                              <div class="col">
                                <p>First Name</p>
                                <div class="input-group mb-3"> 
                                  <input type="text" class="form-control" aria-label="Sizing e xample input"  
                                    aria-describedby="inputGroup-sizing-default" name="firstname" required>
                                </div>
                              </div>
                              
                              <div class="col">
                                <p>Middle Name</p>
                                <div class="input-group mb-3"> 
                                  <input type="text" class="form-control" aria-label="Sizing example input"  
                                    aria-describedby="inputGroup-sizing-default" name="middlename" required>
                                </div>
                              </div>
                          
                              <div class="col">
                                <p>Last Name</p>
                                <div class="input-group mb-3"> 
                                  <input type="text" class="form-control" aria-label="Sizing example input"  
                                    aria-describedby="inputGroup-sizing-default" name="lastname" required>
                                </div>
                              </div>
                            </div>

                            <div class="row pb-4">

                              <div class="col">
                                <p>Sex</p>
                                <div class="input-group mb-3"> 
                                  <select class="form-select" aria-label="Default select example" name="sex">
                                    <option value="male">Male</option>
                                    <option value="Female">Female</option>
                                  </select>
                                </div>
                              </div>

                              <div class="col">
                                <p>Birthdate</p>
                                <div class="input-group mb-3"> 
                                  <input type="date" class="form-control" aria-label="Sizing example input"  
                                    aria-describedby="inputGroup-sizing-default" name="birthdate" required>
                                </div>
                              </div>

                              <div class="col">
                                <p>Address</p>
                                <div class="input-group mb-3"> 
                                  <input type="text" class="form-control" aria-label="Sizing example input"  
                                    aria-describedby="inputGroup-sizing-default" name="address" required>
                                </div>
                              </div>

                              <div class="col">
                                <p>Contact Number</p>
                                <div class="input-group mb-3"> 
                                  <input type="number" class="form-control" aria-label="Sizing example input"  
                                    aria-describedby="inputGroup-sizing-default" name="contact" required>
                                </div>
                              </div>

                            </div>

                            <div class="row border-top pt-4 pb-4">
                                <h5 class="">Account Setup</h5>

                                <div class="col">
                                  <p>Email</p>
                                  <div class="input-group mb-3"> 
                                    <input type="email" class="form-control" aria-label="Sizing example input"  
                                      aria-describedby="inputGroup-sizing-default" name="email" required>
                                  </div>
                                </div>

                                <div class="col">
                                  <p>Password</p>
                                  <div class="input-group mb-3"> 
                                    <input type="password" class="form-control" aria-label="Sizing example input"  
                                      aria-describedby="inputGroup-sizing-default" name="password" required>
                                  </div>
                                </div>

                                <div class="col">
                                  <p>Confirm Password</p>
                                  <div class="input-group mb-3"> 
                                    <input type="password" class="form-control" aria-label="Sizing example input"  
                                      aria-describedby="inputGroup-sizing-default" name="password_confirmation" required>
                                  </div>
                                </div>

                                <div class="col">
                                  <p>User Image</p>
                                  <div class="input-group mb-3"> 
                                    <input type="file" class="form-control" aria-label="Sizing example input"  
                                      aria-describedby="inputGroup-sizing-default" name="image">
                                  </div>
                                </div>

                            </div>

                            <div class="row border-top pt-4">
                              <h5  >Designation / Role Setup</h5>

                              <div class="col">
                                <p>Select Role Type</p>
                                <div class="input-group mb-3"> 
                                  <select class="form-select" aria-label="Default select example" name="role">
                                    <option value="1">Admin</option>
                                    <option value="2">Program Manager</option>
                                    <option value="3">District Staff</option>
                                    <option value="4">Health Department Staff</option>
                                    <option value="5">Brgy. Health Center Staff</option>
                                  </select>
                                </div>
                              </div>


                            </div>
                     
                          </div>
                          <div class="modal-footer border-1">                        
                            <button type="button" class="btn btn-secondary mt-3" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary mt-3">Save</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  </div>
               
                  <hr class="my-0">
                  <!-- Account -->
                  <div class="card-body p-5 ">
                    <div class="table-responsive text-nowrap overflow-visible">
                      <table id="dataTable" class="datatables-basic table   border-top "
                        style="width:100%">
                        <thead >
                          <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Sex</th>
                            <th>Contact</th>
                            <th>Date Created</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($users as $user)
                          <tr>
                            <td>{{ $user->id }}</td>
                           
                            <td>{{ $user->lastname }}, {{ $user->firstname }} @if(isset($user->middlename) && !empty($user->middlename))
                              {{ strtoupper(substr($user->middlename, 0, 1)) }}.</>
                          @else
                             No middlename provided
                          @endif </td>
                            <td>{{ $user->email }}</td>
                            <td>@switch($user->role)
                              @case(1)
                                  Admin
                                @break
                              @case(2)
                                   Program Manager
                                 @break
                              @case(3)
                                  District Staff
                                 @break
                              @case(4)
                                  Health Department Staff
                                  @break
                              @case(5)
                                  Brgy. Health Center Staff
                                 @break

                              @default
                                
                            @endswitch
                          </td>
                          <td>{{ $user->sex }}</td>
                            <td>{{ $user->contact }}</td>
                            <td>{{ $user->created_at }}</td>
                          
                            <td class="d-flex justify-content-center align-items-center">
                        
            
                             
                                  <a type="button" href={{"/Admin/User_List/$user->id"}} class="text-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                    <i class="bi bi-eye-fill"></i>
                                  </a>

                                  <a type="button" href={{"/Admin/User_List/$user->id"}} class="text-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                    <i class="bi bi-pencil-square"></i>
                                  </a>
                         
                                  
                               
                       
                                {{-- <div class="dropdown">
                                  <a class="btn btn-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                  </a>
          
                                  <ul class="dropdown-menu">
                                    <li>
                                      <a class="dropdown-item" href="#">View</a>
                                    </li>
                                    <li>
                                      <a class="dropdown-item text-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Edit</a>
                                    </li> --}}
                                    {{-- <li>
                                      <button type="button" class="dropdown-item" href="/Admin/User_List/{{ $user->id }}">Edit</button>
                                    </li> --}}
                                    {{-- <li><a class="dropdown-item" href="#">Delete</a></li>
                                  </ul>
                                </div> --}}
                            </td>
                          </tr>
                          @endforeach
                          <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  MOdal 1
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  MODAL 2
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>

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