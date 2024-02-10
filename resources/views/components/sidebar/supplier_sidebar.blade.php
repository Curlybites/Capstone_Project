<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme border border-top-0 border-bottom-0 border-start-0">
    <div class="app-brand d-flex align-items-center justify-content-center p-3">
        <a href={{ '/Supplier/Dashboard' }} class="app-brand-link ">
            <img src="../assets/img/download.png" width="100" class="">

        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>


    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('Supplier/Dashboard') ? 'active' : '' }}">
            <a href={{ '/Supplier/Dashboard' }} class="menu-link">
                <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Pages</span></li>

        <!-- User interface -->
        <li class="menu-item {{ Request::is('Supplier/Item_List') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class='menu-icon  bx bxs-package'></i>
                {{-- <i class="menu-icon tf-icons bx bx-building"></i> --}}
                <div data-i18n="User interface">Item</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('Supplier/Item_List') ? 'active' : '' }}">
                    <a href={{ '/Supplier/Item_List' }} class="menu-link">
                        <div data-i18n="Accordion">Item List</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Extended components -->
        <li class="menu-item {{ Request::is('Supplier/PPMP_List') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                {{-- <i class='menu-icon bx bx-purchase-tag-alt'></i> --}}
                <i class='menu-icon bx bx-note'></i>
                <div data-i18n="Extended UI">PPMP</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('Supplier/PPMP_List') ? 'active' : '' }}">
                    <a href={{ '/Supplier/PPMP_List' }} class="menu-link">
                        <div data-i18n="Perfect Scrollbar">PPMP List</div>
                    </a>
                </li>

            </ul>
        </li>
        {{--
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
   
        <li class="menu-item">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-user"></i>
            <div data-i18n="Extended UI">Users</div>
          </a>
          <ul class="menu-sub">
         
            <li class="menu-item">
              <a href={{ '/Admin/User_List' }} class="menu-link">
                <div data-i18n="Perfect Scrollbar">List of User</div>
              </a>
            </li>
   
          </ul>
        </li> --}}



        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Profile</span></li>
        <!-- Forms -->
        <li
            class="menu-item {{ Request::is('Supplier/Account_Profile') || Request::is('Supplier/Account_Change_Password') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Form Elements">Account</div>
            </a>
            <ul class="menu-sub">
                <li
                    class="menu-item {{ Request::is('Supplier/Account_Profile') || Request::is('Supplier/Account_Change_Password') ? 'active' : '' }}">
                    <a href={{ '/Supplier/Account_Profile' }} class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Profile</div>
                    </a>
                </li>

            </ul>
        </li>


</aside>
<!-- / Menu -->
