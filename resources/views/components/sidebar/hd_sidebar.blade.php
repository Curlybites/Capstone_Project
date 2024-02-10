<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand d-flex align-items-center justify-content-center p-3">
        <a href={{ '/Health_Department/Dashboard' }} class="app-brand-link ">
            <img src="../assets/img/download.png" width="100$" class="">
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('Health_Department/Dashboard') ? 'active' : '' }}">
            <a href="{{ '/Health_Department/Dashboard' }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
        <li
            class="menu-item {{ Request::is('Health_Department/Purchase_Order_List') || Request::is('Health_Department/Purchase_Order_View') ? 'active open' : '' }}">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-receipt"></i>
                <div data-i18n="Extended UI">Purchase Order</div>
            </a>
            <ul class="menu-sub">
                <li
                    class="menu-item {{ Request::is('Health_Department/Purchase_Order_List') || Request::is('Health_Department/Purchase_Order_View') ? 'active' : '' }}">
                    <a href="{{ '/Health_Department/Purchase_Order_List' }}" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">PO List</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ Request::is('Health_Department/Item_List') ? 'active open' : '' }}">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-box"></i>
                <div data-i18n="Extended UI">Inventory</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('Health_Department/Item_List') ? 'active' : '' }}">
                    <a href="{{ '/Health_Department/Item_List' }}" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Item List</div>
                    </a>
                </li>
            </ul>
        </li>

        <li
            class="menu-item {{ Request::is('Health_Department/Allocation_List') || Request::is('Health_Department/Allocation_Process') || (isset($allotoprogview) && Request::is('Health_Department/Allocation_View_' . $allotoprogview->id)) || (isset($allotoprogedit) && Request::is('Health_Department/Allocation_Edit_' . $allotoprogedit->id)) ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bxs-right-arrow-square'></i>
                <div data-i18n="Extended UI">Allocation</div>
            </a>
            <ul class="menu-sub">
                <li
                    class="menu-item {{ Request::is('Health_Department/Allocation_List') || (isset($allotoprogview) && Request::is('Health_Department/Allocation_View_' . $allotoprogview->id)) || (isset($allotoprogedit) && Request::is('Health_Department/Allocation_Edit_' . $allotoprogedit->id)) ? 'active open' : '' }}">
                    <a href="{{ '/Health_Department/Allocation_List' }}" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Allocation List</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('Health_Department/Allocation_Process') ? 'active' : '' }}">
                    <a href="{{ '/Health_Department/Allocation_Process' }}" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Create Allocation</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Profile</span></li>
        <!-- Forms -->
        <li
            class="menu-item {{ Request::is('Health_Department/Profile') || Request::is('Health_Department/Profile_Change') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-user-account"></i>
                <div data-i18n="User interface">Account</div>
            </a>
            <ul class="menu-sub">
                <li
                    class="menu-item {{ Request::is('Health_Department/Profile') || Request::is('Health_Department/Profile_Change') ? 'active' : '' }}">
                    <a href={{ '/Health_Department/Profile' }} class="menu-link">
                        <div data-i18n="Accordion">Profile</div>
                    </a>
                </li>
            </ul>
        </li>


</aside>
