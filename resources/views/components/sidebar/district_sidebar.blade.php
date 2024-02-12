<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand d-flex align-items-center justify-content-center p-3">
        <a href={{ '/Health_Center/Dashboard' }} class="app-brand-link ">
            <img src="../assets/img/download.png" width="100$" class="">
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('District/Dashboard') ? 'active' : '' }}">
            <a href="{{ '/District/Dashboard' }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>

        <li class="menu-item {{ Request::is('District/District_Receive') ? 'active open' : '' }}">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-list-ul"></i>
                <div data-i18n="Extended UI">Receive</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('District/District_Receive') ? 'active' : '' }}">
                    <a href="{{ '/District/District_Receive' }}" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Receive Item List</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ Request::is('District/District_InventoryList') ? 'active open' : '' }}">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Extended UI">Inventory</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('District/District_InventoryList') ? 'active' : '' }}">
                    <a href="{{ '/District/District_InventoryList' }}" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Inventory List</div>
                    </a>
                </li>
            </ul>
            
        </li>

        <li class="menu-item {{ Request::is('District/District_Allocation') ? 'active open' : '' }}">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Extended UI">Allocation</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('District/District_Allocation') ? 'active' : '' }}">
                    <a href="{{ '/District/District_Allocation' }}" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Allocation List</div>
                    </a>
                </li>
            </ul>
            
        </li>

        <li class="menu-item {{ Request::is('District/District_Report') ? 'active open' : '' }}">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-notepad"></i>
                <div data-i18n="Extended UI">Reports</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('District/District_Report') ? 'active' : '' }}">
                    <a href="{{ '/District/District_Report' }}" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Report List</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Profile</span></li>
        <!-- Forms -->
        <li
            class="menu-item {{ Request::is('District/District_Account') || Request::is('District/District_Change_Account') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-building"></i>
                <div data-i18n="User interface">Account</div>
            </a>
            <ul class="menu-sub">
                <li
                    class="menu-item {{ Request::is('District/District_Account') || Request::is('District/District_Change_Account') ? 'active' : '' }}">
                    <a href={{ '/District/District_Account' }} class="menu-link">
                        <div data-i18n="Accordion">Profile</div>
                    </a>
                </li>
            </ul>
        </li>


</aside>
