<!-- Navigation -->
<div class="navigation">

    <!-- Logo -->
    <div class="navigation-header">
        <a class="navigation-logo" href="{{ route('admin.dashboard') }}">
            <h2>Monalhost</h2>
            {{-- <img class="logo" src="https://baston.laborasyon.com/assets/media/image/logo/logo.png" alt="logo"> --}}
            {{-- <img class="dark-logo" src="https://baston.laborasyon.com/assets/media/image/logo/dark-logo.png" alt="dark logo"> --}}
            {{-- <img class="small-logo" src="https://baston.laborasyon.com/assets/media/image/logo/small-logo.png" alt="small logo"> --}}
            {{-- <img class="small-dark-logo" src="https://baston.laborasyon.com/assets/media/image/logo/small-dark-logo.png" alt="small dark logo"> --}}
        </a>
        <a href="#" class="small-navigation-toggler"></a>
        <a href="#" class="btn btn-danger mobile-navigation-toggler">
            <i class="ti-close"></i>
        </a>
    </div>
    <!-- ./ Logo -->

    <!-- Menu wrapper -->
    <div class="navigation-menu-wrapper" >
        <!-- Menu tab -->
        <div class="navigation-menu-tab" style="background: #0d6efd">
            <ul>
                <li>
                    <a href="#" data-menu-target="#dashboards" class="{{ Request::is('admin/dashboard') ? 'active' : '' }} ">
                        <span class="menu-tab-icon">
                            <i data-feather="pie-chart"></i>
                        </span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" data-menu-target="#customer" class="{{ Request::is('admin/customers') ? 'active' : '' }}">
                        <span class="menu-tab-icon">
                            <i data-feather="globe"></i>
                        </span>
                        <span>Customer</span>
                    </a>
                </li>
                <li>
                    <a href="#" data-menu-target="#services"
                        class="{{ Request::is('admin/services') ? 'active' : '' }} || {{ Request::is('admin/services/create') ? 'active' : '' }} ||
                    {{ Request::is('admin/storages') ? 'active' : '' }} || {{ Request::is('admin/storages/create') ? 'active' : '' }} ||
                    {{ Request::is('admin/regions') ? 'active' : '' }} || {{ Request::is('admin/regions/create') ? 'active' : '' }} ||
                    {{ Request::is('admin/operating-systems') ? 'active' : '' }} || {{ Request::is('admin/operating-systems/create') ? 'active' : '' }}
                    ">
                        <span class="menu-tab-icon">
                            <i data-feather="layers"></i>
                        </span>
                        <span>Services</span>
                    </a>
                </li>
                <li>
                    <a href="#" data-menu-target="#cms" class="  {{ Request::is('admin/faqs') ? 'active' : '' }} || {{ Request::is('admin/faqs/create') ? 'active' : '' }}">
                        <span class="menu-tab-icon">
                            <i data-feather="mouse-pointer"></i>
                        </span>
                        <span>CMS</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="#" data-menu-target="#settings">
                        <span class="menu-tab-icon">
                            <i data-feather="gift"></i>
                        </span>
                        <span>Settings</span>
                    </a>
                </li> --}}
            </ul>
        </div>
        <!-- ./ Menu tab -->

        <!-- Menu body -->
        <div class="navigation-menu-body">
            <ul id="dashboards">
                <li class="navigation-divider">Dashboard</li>
                <li>
                    <a class="active" href="#">
                        <span class="nav-link-icon" data-feather="shopping-cart"></span>
                        <span>Orders</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon" data-feather="bar-chart-2"></span>
                        <span>Updates</span>
                        <span class="badge badge-success">New</span>
                    </a>
                </li>
            </ul>
            <ul id="customer">
                <li class="navigation-divider">Customer</li>
                <li>
                    <a href="{{ route('admin.customers.list') }}">
                        <span class="nav-link-icon" data-feather="message-circle"></span>
                        <span>New Customers</span>
                        <span class="badge badge-danger">5</span>
                    </a>
                </li>
                <li>
                    <a href="mail.html">
                        <span class="nav-link-icon" data-feather="mail"></span>
                        <span>Support</span>
                    </a>
                </li>
            </ul>
            <ul id="services">
                <li class="navigation-divider">Services</li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i data-feather="square"></i>
                        </span>
                        <span>Vps Services</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.vps-services.index') }}">List VPS Services </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.vps-services.create') }}">Create VPS Service </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i data-feather="square"></i>
                        </span>
                        <span>Email Services</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.email-services.index') }}">List Email Services </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.email-services.create') }}">Create Email Service </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i data-feather="square"></i>
                        </span>
                        <span>Storages</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.storages.index') }}">List Storages </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.storages.create') }}">Create Storage </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i data-feather="square"></i>
                        </span>
                        <span>Regions</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.regions.index') }}">List Regions </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.regions.index') }}">Create Region </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i data-feather="square"></i>
                        </span>
                        <span>Operating System</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.operating-systems.index') }}">List Operating Systems </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.operating-systems.create') }}">Create Operaging System </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul id="cms">
                <li class="navigation-divider">CMS</li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i data-feather="square"></i>
                        </span>
                        <span>FAQs</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.faqs.index') }}">List Faqs</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.faqs.create') }}">Create Faq</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i data-feather="square"></i>
                        </span>
                        <span>CMS</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.cms.index') }}">List Cms</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.cms.create') }}">Create Cms</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- ./ Menu body -->
    </div>
    <!-- ./ Menu wrapper -->

</div>
<!-- ./ Navigation -->
