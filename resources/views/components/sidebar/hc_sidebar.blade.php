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
        <li class="menu-item {{ Request::is('Health_Center/Dashboard') ? 'active' : '' }}">
            <a href="{{ '/Health_Center/Dashboard' }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>

        <li class="menu-item {{ Request::is('Health_Center/Item_List') ? 'active open' : '' }}">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-list-ul"></i>
                <div data-i18n="Extended UI">Inventory</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('Health_Center/Item_List') ? 'active' : '' }}">
                    <a href="{{ '/Health_Center/Item_List' }}" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Item List</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ Request::is('Health_Center/Patient_List') ? 'active open' : '' }} {{ Request::is('Health_Center/Send_Items') ? 'active open' : '' }} {{ Request::is('Health_Center/Patient_Sent_Item{id}') ? 'active open' : '' }}">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Extended UI">Patient</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('Health_Center/Patient_List') ? 'active' : '' }}">
                    <a href="{{ '/Health_Center/Patient_List' }}" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Patient List</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('Health_Center/Send_Items') ? 'active' : '' }}">
                    <a href="{{ '/Health_Center/Send_Items' }}" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Send Items</div>
                    </a>
                </li>
            </ul>
         
        
      
        </li>

        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Profile</span></li>
        <!-- Forms -->
        <li
            class="menu-item {{ Request::is('Health_Center/Profile') || Request::is('Health_Center/Profile_Change') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-building"></i>
                <div data-i18n="User interface">Account</div>
            </a>
            <ul class="menu-sub">
                <li
                    class="menu-item {{ Request::is('Health_Center/Profile') || Request::is('Health_Center/Profile_Change') ? 'active' : '' }}">
                    <a href={{ '/Health_Center/Profile' }} class="menu-link">
                        <div data-i18n="Accordion">Profile</div>
                    </a>
                </li>
            </ul>
            
        </li>


</aside>
