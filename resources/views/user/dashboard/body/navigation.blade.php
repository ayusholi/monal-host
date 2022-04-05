<!-- Navigation -->
<div class="navigation">

    <!-- Logo -->
    <div class="navigation-header">
        <a class="navigation-logo" href="{{ route('home') }}">
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
    <div class="navigation-menu-wrapper">
        <!-- Menu tab -->
        <div class="navigation-menu-tab">
            <ul>
                <li>
                    <a href="#" data-menu-target="#dashboards" class="{{ (str_contains(url()->current(), 'dashboard') || str_contains(url()->current(), 'support')) ? 'active' : ''}}">
                        <span class="menu-tab-icon">
                            <i data-feather="pie-chart"></i>
                        </span>
                        <span>Dashboards</span>
                    </a>
                </li>
                <li>
                    <a href="#" data-menu-target="#services" class="{{ (str_contains(url()->current(), 'my-services') || str_contains(url()->current(), 'new-services')) ? 'active' : ''}}">
                        <span class="menu-tab-icon">
                            <i data-feather="globe"></i>
                        </span>
                        <span>Services</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- ./ Menu tab -->

        <!-- Menu body -->
        <div class="navigation-menu-body">
            <ul id="dashboards">
                <li class="navigation-divider">Dashboards</li>
                <li>
                    <a class="{{ str_contains(url()->current(), 'dashboard') ? 'active' : ''}}"
                        href="ecommerce-dashboard.html">
                        <span class="nav-link-icon" data-feather="shopping-cart"></span>
                        <span>Analytics</span>
                    </a>
                </li>
                <li>
                    <a  href="analytics-dashboard.html">
                        <span class="nav-link-icon" data-feather="bar-chart-2"></span>
                        <span>Analytics</span>
                        <span class="badge badge-success">New</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('new.services') }}">
                        <span class="nav-link-icon" data-feather="life-buoy"></span>
                        <span>New Services</span>
                    </a>
                </li>
                <li class="navigation-divider">Other</li>
                <li>
                    <a href="{{ route('support.index') }}" class="{{ str_contains(url()->current(), 'support') ? 'active' : ''}}">
                        <span class="nav-link-icon" data-feather="box"></span>
                        <span>Support</span>
                    </a>
                </li>
            </ul>
            <ul id="services">
                <a  href="#">
                <li class="navigation-divider" >Services</li>
                </a>
                <li>
                    <a  href="{{ route('my.services') }}" class="{{ str_contains(url()->current(), 'my-services') ? 'active' : ''}}">
                        <span class="nav-link-icon" data-feather="message-circle"></span>
                        <span>My Services</span>
                    </a>
                </li>
                <li>
                    <a  href="{{ route('new.services') }}" class="{{ str_contains(url()->current(), 'new-services') ? 'active' : ''}}">
                        <span class="nav-link-icon" data-feather="message-circle"></span>
                        <span>New Services</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- ./ Menu body -->
    </div>
    <!-- ./ Menu wrapper -->

</div>
<!-- ./ Navigation -->
