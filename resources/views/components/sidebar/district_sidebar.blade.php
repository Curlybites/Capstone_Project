<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand d-flex align-items-center justify-content-center p-3">
        <a href={{ '/District/Dashboard' }} class="app-brand-link ">
            <img src="../assets/img/download.png" width="100$" class="">

        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>


    <div class="menu-inner-shadow"></div>

    <ul  class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('District/Dashboard') ? 'active' : '' }}">
            <a href={{ '/District/Dashboard' }} class="menu-link">
                <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>

        {{-- Inventory Page --}}
        <li class="menu-item {{ Request::is('District/Inventory') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                <div data-i18n="User interface">Inventory</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('District/Inventory') ? 'active' : '' }}">
                    <a href={{ '/District/Inventory' }} class="menu-link">
                        <div data-i18n="Accordion">Item List</div>
                    </a>
                </li>
            </ul>
        </li>

        {{-- Allocation Pages --}}
        <li class="menu-item {{ Request::is('District/Allocation_List') || Request::is('District/Allocation_Create') ? 'active open' : '' }}">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-sitemap"></i>
              <div data-i18n="User interface">Allocation</div>
          </a>
          <ul class="menu-sub">
              <li class="menu-item {{ Request::is('District/Allocation_List') ? 'active' : '' }}">
                  <a href={{ '/District/Allocation_List' }} class="menu-link">
                      <div data-i18n="Accordion">Allocation List</div>
                  </a>
              </li>
          </ul>
          <ul class="menu-sub">
            <li class="menu-item {{ Request::is('District/Allocation_Create') ? 'active' : '' }}">
                <a href={{ '/District/Allocation_Create' }} class="menu-link">
                    <div data-i18n="Accordion">Allocation Create</div>
                </a>
            </li>
        </ul>
      </li>



    <!-- Components -->
    {{-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li> --}}

    <!-- User interface -->
    {{-- <li class="menu-item {{ Request::is('District/District_List') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-building"></i>
                <div data-i18n="User interface">Districts</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('District/District_List') ? 'active' : '' }}">
                    <a href={{ '/District/District_List' }} class="menu-link">
                        <div data-i18n="Accordion">District List</div>
                    </a>
                </li>
            </ul>
        </li> --}}

    <!-- Extended components -->
    {{-- <li class="menu-item {{ Request::is('District/Barangay_List') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-institution"></i>
                <div data-i18n="Extended UI">Barangays</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('District/Barangay_List') ? 'active' : '' }}">
                    <a href={{ '/District/Barangay_List' }} class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Barangay List</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu-item {{ Request::is('District/Health_Center_List') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-capsule"></i>
                <div data-i18n="Extended UI">Health Center</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('District/Health_Center_List') ? 'active' : '' }}">
                    <a href="Barangay_list.php" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">List of Health Centers</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu-item {{ Request::is('District/Program_List') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-customize"></i>
                <div data-i18n="Extended UI">Programs</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('District/Program_List') ? 'active' : '' }}">
                    <a href="Programs_list.php" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Program List</div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="menu-item {{ Request::is('District/User_List') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Extended UI">Users</div>
            </a>
            <ul class="menu-sub">

                <li class="menu-item {{ Request::is('District/User_List') ? 'active' : '' }}">
                    <a href={{ '/District/User_List' }} class="menu-link">
                        <div data-i18n="Perfect Scrollbar">List of User</div>
                    </a>
                </li>

            </ul>
        </li> --}}



    <!-- Forms & Tables -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Profile</span></li>
    <!-- Forms -->
    <li
        class="menu-item {{ Request::is('District/Account_Profile') || Request::is('District/Account_Change_Password') ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-user-circle"></i>
            <div data-i18n="Form Elements">Account</div>
        </a>
        <ul class="menu-sub">

            <li
                class="menu-item {{ Request::is('District/Account_Profile') || Request::is('District/Account_Change_Password') ? 'active' : '' }}">
                <a href={{ '/District/Account_Profile' }} class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Profile</div>
                </a>
            </li>

        </ul>
    </li>

    </li>


</aside>
<!-- / Menu -->
