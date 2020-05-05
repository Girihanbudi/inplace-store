<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="/admin/home" class="waves-effect">
                        <i class="fas fa-home"></i>
                        <span> {{__('Main')}} </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-list-ul"></i>
                        <span> {{__('Orders')}} </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin/orders"> {{__('Transactions')}} </a></li>
                        <li><a href="/admin/orders/billing"> {{__('Manage Billing')}} </a></li>
                        <li><a href="/admin/orders/acception"> {{__('Manage Order')}} </a></li>
                        <li><a href="/admin/orders/finish"> {{__('Finish Order')}} </a></li>
                        {{-- <li><a href="/admin/order/add"> {{__('Add Order')}} </a></li> --}}
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-boxes"></i>
                        <span> {{__('Products')}} </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin/products"> {{__('Manage Products')}} </a></li>
                        <li><a href="/admin/product/add"> {{__('Add Product')}} </a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-address-book"></i>
                        <span> {{__('Users')}} </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin/users"> {{__('Manage Users')}} </a></li>
                        <li><a href="/admin/user/add"> {{__('Add User')}} </a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-file-signature"></i>
                        <span> {{__('Reports')}} </span>
                    </a>
                    {{-- <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#"> {{__('Transactions')}} </a></li>
                        <li><a href="#"> {{__('Item Sales')}} </a></li>
                        <li><a href="#"> {{__('Item Ranks')}} </a></li>
                        <li><a href="#"> {{__('Trafics')}} </a></li>
                        <li><a href="#"> {{__('Provits')}} </a></li>
                        <li><a href="#"> {{__('Socials')}} </a></li>
                    </ul> --}}
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->