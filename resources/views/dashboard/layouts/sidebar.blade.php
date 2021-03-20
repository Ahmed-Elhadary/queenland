<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button"
                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboard</li>
                <li>
                    <a href="" {{ route('dashboard') }}class="mm-active">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Dashboard
                    </a>
                </li>
                <li class="app-sidebar__heading">Components</li>

                <li class="{{ (request()->is('*dashboard/maincategory*') ||
                    request()->is('*dashboard/products*')) ? 'mm-active' : '' }}">
                    <a href="">
                        <i class="metismenu-icon pe-7s-box1"></i>
                        Products
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ (request()->is('*dashboard/maincategory*')) ? 'mm-active' : '' }}" href="{{ route('maincategory.index') }}">
                                <i class="metismenu-icon"></i>
                                Main Category
                            </a>
                        </li>
                        <li>
                            <a class="{{ (request()->is('*dashboard/products*')) ? 'mm-active' : '' }}" href="{{ route('products.index') }}">
                                <i class="metismenu-icon"></i>
                                Product
                            </a>
                        </li>
                    </ul>
                </li>
                <li  class="{{ (request()->is('*dashboard/positions*') ||
                    request()->is('*dashboard/people*')) ? 'mm-active' : '' }}">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-car"></i>
                        Teams
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ (request()->is('*dashboard/positions*')) ? 'mm-active' : '' }}" href="{{ route('positions.index') }}">
                                <i class="metismenu-icon">
                                </i>Position
                            </a>
                        </li>
                        <li>
                            <a class="{{ (request()->is('*dashboard/people*')) ? 'mm-active' : '' }}" href="{{ route('people.index') }}">
                                <i class="metismenu-icon">
                                </i>people
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{ (request()->is('*dashboard/company_date*') ||
                    request()->is('*dashboard/aboutcompany*')) ? 'mm-active' : '' }}">
                    <a href="#">
                        <i class="metismenu-icon pe-7s-info"></i>
                        About
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li >
                            <a class="{{ (request()->is('*dashboard/company_date*')) ? 'mm-active' : '' }}" href="{{ route('company_date.index') }}">
                                <i class="metismenu-icon pe-7s-stopwatch">
                                </i>Company Date
                            </a>
                        </li>
                        <li>
                            <a class="{{ (request()->is('*dashboard/aboutcompany*')) ? 'mm-active' : '' }}" href="{{ route('aboutcompany.index') }}">
                                <i class="metismenu-icon">
                                </i>About Company
                            </a>
                        </li>
                    </ul>
                </li>

                <li >
                    <a class="{{ (request()->is('*dashboard/contactus*')) ? 'mm-active' : '' }}" href="{{ route('contactus.index') }}">
                        <i class="metismenu-icon pe-7s-call"></i>
                       ContactUs
                    </a>
                </li>

                <li>
                    <a class="{{ (request()->is('*dashboard/questions*')) ? 'mm-active' : '' }}"  href="{{ route('questions.index') }}">
                        <i class="metismenu-icon pe-7s-help1"></i>
                       Questions
                    </a>
                </li>
                <li>
                    <a class="{{ (request()->is('*dashboard/services*')) ? 'mm-active' : '' }}" href="{{ route('services.index') }}">
                        <i class="metismenu-icon   pe-7s-tools"></i>
                       Services
                    </a>
                </li>
                <li class="app-sidebar__heading">Setting</li>
                <li>
                    <a href="dashboard-boxes.html">
                        <i class="metismenu-icon pe-7s-add-user"></i>
                        Add Admin
                    </a>
                </li>
                <li>
                    <a href="dashboard-boxes.html">
                        <i class="metismenu-icon pe-7s-user"></i>
                        Profile
                    </a>
                </li>



            </ul>
        </div>
    </div>
</div>

<div class="app-main__outer">
