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
                <li>
                    <a href="#" data-menu-target="#settings">
                        <span class="menu-tab-icon">
                            <i data-feather="gift"></i>
                        </span>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#" data-menu-target="#pages">
                        <span class="menu-tab-icon">
                            <i data-feather="copy"></i>
                        </span>
                        <span>Pages</span>
                    </a>
                </li>
                <li>
                    <a href="#" data-menu-target="#other">
                        <span class="menu-tab-icon">
                            <i data-feather="arrow-up-right"></i>
                        </span>
                        <span>Other</span>
                    </a>
                </li>
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
            <ul id="settings">
                <li class="navigation-divider">Plugins</li>
                <li>
                    <a href="sweet-alert.html">
                        <span class="nav-link-icon" data-feather="alert-triangle"></span>
                        <span>Sweet Alert</span>
                    </a>
                </li>
                <li>
                    <a href="lightbox.html">
                        <span class="nav-link-icon" data-feather="crop"></span>
                        <span>Lightbox</span>
                    </a>
                </li>
                <li>
                    <a href="toast.html">
                        <span class="nav-link-icon" data-feather="clipboard"></span>
                        <span>Toast</span>
                    </a>
                </li>
                <li>
                    <a href="tour.html">
                        <span class="nav-link-icon" data-feather="sliders"></span>
                        <span>Tour</span>
                    </a>
                </li>
                <li>
                    <a href="slick-slide.html">
                        <span class="nav-link-icon" data-feather="layers"></span>
                        <span>Slick Slide</span>
                    </a>
                </li>
                <li>
                    <a href="nestable.html">
                        <span class="nav-link-icon" data-feather="align-right"></span>
                        <span>Nestable</span>
                    </a>
                </li>
                <li>
                    <a href="file-upload.html">
                        <span class="nav-link-icon" data-feather="upload-cloud"></span>
                        <span>File Upload</span>
                    </a>
                </li>
                <li>
                    <a href="datepicker.html">
                        <span class="nav-link-icon" data-feather="calendar"></span>
                        <span>Datepicker</span>
                    </a>
                </li>
                <li>
                    <a href="timepicker.html">
                        <span class="nav-link-icon" data-feather="clock"></span>
                        <span>Timepicker</span>
                    </a>
                </li>
                <li>
                    <a href="colorpicker.html">
                        <span class="nav-link-icon" data-feather="eye"></span>
                        <span>Colorpicker</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon" data-feather="activity"></span>
                        <span>Charts</span>
                    </a>
                    <ul>
                        <li>
                            <a href="apexchart.html">Apex Chart</a>
                        </li>
                        <li>
                            <a href="justgage.html">Justgage</a>
                        </li>
                        <li>
                            <a href="peity.html">Peity</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i data-feather="map-pin"></i>
                        </span>
                        <span>Maps</span>
                    </a>
                    <ul>
                        <li>
                            <a href="google-map.html">Google Map</a>
                        </li>
                        <li>
                            <a href="vector-map.html">Vector Map</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul id="pages">
                <li class="navigation-divider">Pages</li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon" data-feather="users"></span>
                        <span>User Pages</span>
                    </a>
                    <ul>
                        <li>
                            <a href="profile.html">Profile</a>
                        </li>
                        <li>
                            <a href="user-list.html">User List</a>
                        </li>
                        <li>
                            <a href="user-edit.html">User Edit</a>
                        </li>
                        <li><a href="login.html" target="_blank">Login</a></li>
                        <li><a href="register.html" target="_blank">Register</a></li>
                        <li><a href="recovery-password.html" target="_blank">Recovery Password</a>
                        </li>
                        <li><a href="lock-screen.html" target="_blank">Lock Screen</a></li>
                    </ul>
                </li>
                <li>
                    <a href="timeline.html">
                        <span class="nav-link-icon" data-feather="hash"></span>
                        <span>Timeline</span>
                    </a>
                </li>
                <li>
                    <a href="pricing-table.html">
                        <span class="nav-link-icon" data-feather="dollar-sign"></span>
                        <span>Pricing Table</span>
                    </a>
                </li>
                <li>
                    <a href="pricing-table-2.html">
                        <span class="nav-link-icon" data-feather="dollar-sign"></span>
                        <span>Pricing Table</span>
                        2</a>
                </li>
                <li>
                    <a href="search-result.html">
                        <span class="nav-link-icon" data-feather="search"></span>
                        <span>Search Result</span>
                    </a>
                </li>
                <li>
                    <a href="blank-page.html">
                        <span class="nav-link-icon" data-feather="layout"></span>
                        <span>Blank Page</span>

                    </a>
                </li>
                <li>
                    <a href="404.html" target="_blank">
                        <span class="nav-link-icon" data-feather="frown"></span>
                        <span>404</span>
                    </a>
                </li>
                <li>
                    <a href="503.html" target="_blank">
                        <span class="nav-link-icon" data-feather="frown"></span>
                        <span>503</span>
                    </a>
                </li>
                <li>
                    <a href="mean-at-work.html" target="_blank">
                        <span class="nav-link-icon" data-feather="tool"></span>
                        <span>Mean at Work</span>
                    </a>
                </li>
            </ul>
            <ul id="other">
                <li class="navigation-divider">Other</li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i data-feather="mail"></i>
                        </span>
                        <span>Email Templates</span>
                    </a>
                    <ul>
                        <li><a target="_blank" href="email-template-basic.html">Basic</a></li>
                        <li><a target="_blank" href="email-template-alert.html">Alert</a></li>
                        <li><a target="_blank" href="email-template-billing.html">Billing</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i data-feather="menu"></i>
                        </span>
                        <span>Menu Level</span>
                    </a>
                    <ul>
                        <li>
                            <a href="#">Menu Level</a>
                            <ul>
                                <li>
                                    <a href="#">Menu Level </a>
                                </li>
                            </ul>
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
