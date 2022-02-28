<!-- Header -->
<div class="header d-print-none">

    <div class="header-container">

        <div class="header-left">
            <ul class="navbar-nav">
                <li class="nav-item navigation-toggler">
                    <a href="#" class="nav-link">
                        <i class="ti-menu"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="header-search-form">
                        <form class="d-flex">
                            <button class="btn">
                                <i class="ti-search"></i>
                            </button>
                            <input type="text" class="form-control" placeholder="Search">
                        </form>
                    </div>
                </li>
            </ul>
        </div>

        <div class="header-right">
            <ul class="navbar-nav">
                <li class="nav-item btn-mobile-search">
                    <a href="#" title="Search" class="nav-link">
                        <i data-feather="search"></i>
                    </a>
                </li>

                <li class="nav-item dropdown d-sm-inline d-none">
                    <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                        <i class="maximize" data-feather="maximize"></i>
                        <i class="minimize" data-feather="minimize"></i>
                    </a>
                </li>

                {{-- <li class="nav-item dropdown">
                    <a href="#" class="nav-link" title="Notifications" data-toggle="dropdown">
                        <span class="badge badge-danger nav-link-notify">1</span>
                        <i data-feather="bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                        <div class="bg-primary px-3 py-3 text-center d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Notifications</h6>
                            <small class="opacity-7">1 unread notifications</small>
                        </div>
                        <div class="dropdown-scroll">
                            <ul class="list-group list-group-flush">
                                <li>
                                    <a href="#"
                                        class="list-group-item px-3 d-flex align-items-center hide-show-toggler">
                                        <div>
                                            <figure class="avatar mr-2">
                                                <span
                                                    class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="ti-file"></i>
                                                </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Your report is prepared
                                                <i title="Mark as unread" data-toggle="tooltip"
                                                    class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                            </p>
                                            <span class="text-muted small">20 min ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="list-group-item bg-primary-bright px-3 d-flex align-items-center hide-show-toggler">
                                        <div>
                                            <figure class="avatar mr-2">
                                                <span
                                                    class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                New customer registered
                                                <i title="Mark as read" data-toggle="tooltip"
                                                    class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                            </p>
                                            <span class="text-muted small">20 min ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="list-group-item px-3 d-flex align-items-center hide-show-toggler">
                                        <div>
                                            <figure class="avatar mr-2">
                                                <span
                                                    class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                    <i class="ti-package"></i>
                                                </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                New Order Recieved
                                                <i title="Mark as unread" data-toggle="tooltip"
                                                    class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                            </p>
                                            <span class="text-muted small">45 sec ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="list-group-item px-3 d-flex align-items-center hide-show-toggler">
                                        <div>
                                            <figure class="avatar mr-2">
                                                <span class="avatar-title bg-danger-bright text-danger rounded-circle">
                                                    <i class="ti-server"></i>
                                                </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Server Limit Reached!
                                                <i title="Mark as unread" data-toggle="tooltip"
                                                    class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                            </p>
                                            <span class="text-muted small">55 sec ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="list-group-item px-3 d-flex align-items-center hide-show-toggler">
                                        <div>
                                            <figure class="avatar mr-2">
                                                <span class="avatar-title bg-info-bright text-info rounded-circle">
                                                    <i class="ti-layers"></i>
                                                </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Apps are ready for update
                                                <i title="" data-toggle="tooltip"
                                                    class="hide-show-toggler-item fa fa-check font-size-11"
                                                    data-original-title="Mark as unread"></i>
                                            </p>
                                            <span class="text-muted small">Yesterday</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="px-3 py-2 text-right border-top">
                            <ul class="list-inline small">
                                <li class="list-inline-item mb-0">
                                    <a href="#">Mark All Read</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="chat.html" title="Chat" class="nav-link">
                        <span class="badge badge-danger nav-link-notify">4</span>
                        <i data-feather="message-circle"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" title="Cart" class="nav-link" data-toggle="dropdown">
                        <i data-feather="shopping-bag"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                        <div class="bg-primary px-3 py-3 text-center d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Cart</h6>
                            <small class="opacity-7">4 products</small>
                        </div>
                        <div class="dropdown-scroll">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item px-3 d-flex">
                                    <div>
                                        <figure class="avatar mr-3">
                                            <img src="https://baston.laborasyon.com/assets/media/image/products/product6.png"
                                                class="rounded" alt="Flowerpot">
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            Flowerpot
                                            <i title="Close" data-toggle="tooltip"
                                                class="hide-show-toggler-item ti-close"></i>
                                        </p>
                                        <span class="text-muted small">X $1,200</span>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item px-3 d-flex">
                                    <div>
                                        <figure class="avatar mr-3">
                                            <img src="https://baston.laborasyon.com/assets/media/image/products/product3.png"
                                                class="rounded" alt="Plate">
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            Plate
                                            <i title="Close" data-toggle="tooltip"
                                                class="hide-show-toggler-item ti-close"></i>
                                        </p>
                                        <span class="text-muted small">X $250</span>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item px-3 d-flex">
                                    <div>
                                        <figure class="avatar mr-3">
                                            <img src="https://baston.laborasyon.com/assets/media/image/products/product7.png"
                                                class="rounded" alt="Wall Clock">
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            Wall Clock
                                            <i title="Close" data-toggle="tooltip"
                                                class="hide-show-toggler-item ti-close"></i>
                                        </p>
                                        <span class="text-muted small">X $100</span>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item px-3 d-flex">
                                    <div>
                                        <figure class="avatar mr-3">
                                            <img src="https://baston.laborasyon.com/assets/media/image/products/product1.png"
                                                class="rounded" alt="Vase">
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            Vase
                                            <i title="Close" data-toggle="tooltip"
                                                class="hide-show-toggler-item ti-close"></i>
                                        </p>
                                        <span class="text-muted small">X $1,200</span>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item px-3 d-flex">
                                    <div>
                                        <figure class="avatar mr-3">
                                            <img src="https://baston.laborasyon.com/assets/media/image/products/product2.png"
                                                class="rounded" alt="Glasses">
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            Glasses
                                            <i title="Close" data-toggle="tooltip"
                                                class="hide-show-toggler-item ti-close"></i>
                                        </p>
                                        <span class="text-muted small">X $200</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="px-3 py-2 border-top text-right">
                            <p class="d-flex justify-content-between align-items-center mb-1 small">
                                <span>Sub Total</span>
                                <span>$1,650</span>
                            </p>
                            <p class="d-flex justify-content-between align-items-center mb-1 small">
                                <span>Taxes</span>
                                <span>$15</span>
                            </p>
                            <p class="d-flex justify-content-between align-items-center mb-1 small font-weight-bold">
                                <span>Total</span>
                                <span>$1,675</span>
                            </p>
                            <button class="btn btn-primary btn-block mt-2">
                                Order and Payment <i class="ti-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </div>
                </li> --}}

                {{-- <li class="nav-item dropdown">
                    <a href="#" class="nav-link" title="Settings" data-sidebar-target="#settings">
                        <i data-feather="settings"></i>
                    </a>
                </li> --}}

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
                        <span class="mr-2 d-sm-inline d-none">
                            Hi! <strong>{{ auth()->user()->full_name }}</strong>
                        </span>
                        
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                        <div class="text-center py-4">
                            
                            <h5 class="mb-0">{{ auth()->user()->full_name }}</h5>
                        </div>
                        <div class="list-group list-group-flush">
                            
                            <a href="{{route('user.setting')}}" class="list-group-item">Settings</a>
                            <a href="{{ route('auth.logout') }}" class="list-group-item text-danger">Sign Out!</a>
                        </div>
                        
                    </div>
                </li>
            </ul>
        </div>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item header-toggler">
                <a href="#" class="nav-link">
                    <i class="ti-arrow-down"></i>
                </a>
            </li>
        </ul>

    </div>

</div>
<!-- ./ Header -->
