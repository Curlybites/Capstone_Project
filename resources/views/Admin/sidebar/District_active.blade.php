
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
        <li class="menu-item active open">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-building"></i>
            <div data-i18n="User interface">Districts</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item active">
              <a href={{ '/Admin/District_List' }} class="menu-link">
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
            <a href={{ '/Admin/Barangay_List' }} class="menu-link">
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
            <a href={{ '/Admin/HealthCenter_List' }} class="menu-link">
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
              <a href={{ '/Admin/Program_List' }} class="menu-link">
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
              <a href={{ '/Admin/Supplier_List' }} class="menu-link">
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
            <a href={{ '/Admin/Item_List' }} class="menu-link">
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