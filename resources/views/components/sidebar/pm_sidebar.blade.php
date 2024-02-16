<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand d-flex align-items-center justify-content-center p-3">
        <a href={{ '/Program_Manager/Dashboard' }} class="app-brand-link ">
            <img src="../assets/img/download.png" width="100$" class="">
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('Program_Manager/Dashboard') ? 'active' : '' }}">
            <a href="{{ '/Program_Manager/Dashboard' }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>

        <li class="menu-item {{ Request::is('Program_Manager/PPMPlist') || Request::is('Program_Manager/pmPPMPcreate') ? 'active open' : '' }}">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-book-content"></i>
                <div data-i18n="Extended UI">PPMP</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('Program_Manager/PPMPlist') || Request::is('Program_Manager/pmPPMPView') ? 'active' : '' }}">
                    <a href="{{ '/Program_Manager/PPMPlist' }}" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">PPMP List</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('Program_Manager/pmPPMPcreate') || Request::is('Program_Manager/pmPPMPcreate') ? 'active' : '' }}">
                    <a href="{{ '/Program_Manager/pmPPMPcreate' }}" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">PPMP Create</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ Request::is('Program_Manager/Allocationlist') || Request::is('Program_Manager/pmAllocationlist') ? 'active open' : '' }}">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-sitemap"></i>
                <div data-i18n="Extended UI">Allocation</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('Program_Manager/Allocationlist') || Request::is('Program_Manager/pmAllocationlist') ? 'active' : '' }}">
                    <a href="{{ '/Program_Manager/Allocationlist' }}" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Allocation List</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item {{ Request::is('Program_Manager/Reportlist') || Request::is('Program_Manager/Reportlist') ? 'active open' : '' }}">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                <div data-i18n="Extended UI">Report</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('Program_Manager/Reportlist') || Request::is('Program_Manager/Reportlist') ? 'active' : '' }}">
                    <a href="{{ '/Program_Manager/Reportlist' }}" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Report List</div>
                    </a>
                </li>
            </ul>
        </li>


        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Profile</span></li>
        <!-- Forms -->
        <li
            class="menu-item {{ Request::is('Program_Manager/Profile') || Request::is('Program_Manager/Profile_Change') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="User interface">Account</div>
            </a>
            <ul class="menu-sub">
                <li
                    class="menu-item {{ Request::is('Program_Manager/Profile') || Request::is('Program_Manager/Profile_Change') ? 'active' : '' }}">
                    <a href={{ '/Program_Manager/Profile' }} class="menu-link">
                        <div data-i18n="Accordion">Profile</div>
                    </a>
                </li>
            </ul>
        </li>


</aside>
