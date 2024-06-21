<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: black">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{ asset('images/logo.png') }}" alt="AdminLTE Logo" class="brand-image  elevation-3"
             style="padding-left:26px "><br></br>
        <span class="brand-text font-weight-light" style="padding-left:20px ">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <span style="padding-left: 12px; font-weight: bold;">
            <div class="info">
                <a href="#" class="d-block" style="color: rgb(183, 176, 94); letter-spacing: 2px">{{ auth()->user()->getFullname() }}</a>
            </div>
            </span>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview" >
                    <a href="{{route('home')}}" class="nav-link" style="font-weight: bold; letter-spacing: 2px ;color: rgb(153, 211, 247); font-size: 16px" >
                        <i class="nav-icon fas fa-tachometer-alt" ></i>
                        <p>{{ __('dashboard.title') }}</p>
                    </a>
                </li>
                <li class="nav-item has-treeview" >
                    <a href="{{ route('products.index') }}" class="nav-link {{ activeSegment('products') }}" style="padding-top: 18px; font-weight: bold; font-size: 16px; letter-spacing: 2px; color: rgb(240, 213, 187)">
                        <i class="nav-icon fas fa-solid fa-box-open"></i>
                        <p>{{ __('product.title') }}</p>
                    </a>
                </li>
                <li class="nav-item has-treeview" >
                    <a href="{{ route('cart.index') }}" class="nav-link {{ activeSegment('cart') }}" style="padding-top: 18px; font-weight: bold; letter-spacing: 2px; font-size: 16px;color: white">
                        <i class="nav-icon fas fa-cart-shopping"></i>
                        <p>{{ __('cart.title') }}</p>
                    </a>
                </li>
                <li class="nav-item has-treeview" >
                    <a href="{{ route('orders.index') }}" class="nav-link {{ activeSegment('orders') }}"  style="padding-top: 18px; font-size: 16px;font-weight: bold; letter-spacing: 2px; color: rgb(241, 204, 204)">
                        <i class="nav-icon fas fa-bag-shopping"></i>
                        <p>{{ __('order.title') }}</p>
                    </a>
                </li>
                <li class="nav-item has-treeview" >
                    <a href="{{ route('customers.index') }}" class="nav-link {{ activeSegment('customers') }}" style="padding-top: 18px; font-size: 16px;font-weight: bold; letter-spacing: 2px; color: rgb(132, 220, 204)">
                        <i class="nav-icon fas fa-users"></i>
                        <p>{{ __('customer.title') }}</p>
                    </a>
                </li>
                <li class="nav-item has-treeview" >
                    <a href="{{ route('settings.index') }}" class="nav-link {{ activeSegment('settings') }}" style="padding-top: 18px; font-weight: bold; font-size: 16px;letter-spacing: 2px; color: rgb(204, 197, 227)">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>{{ __('settings.title') }}</p>
                    </a>
                </li>
                <li class="nav-item" >
                    <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()" style="padding-top: 18px; font-weight: bold;font-size: 16px; letter-spacing: 2px; color: rgb(198, 187, 241)">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>{{ __('common.Logout') }}</p>
                        <form action="{{route('logout')}}" method="POST" id="logout-form">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
</aside>
