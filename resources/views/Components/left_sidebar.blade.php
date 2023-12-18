<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{url('home')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{asset('assets/images')}}/logo-sm.png" alt="" height="40" />
                
            </span>
            <span class="logo-lg">
                
                <img src="{{asset('assets/images')}}/logo-dark.png" alt="" height="60" />
            </span>

        </a>
        <!-- Light Logo-->
        <a href="{{url('home')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{asset('assets/images')}}/logo-sm.png" alt="" height="40" />
            </span>
            <span class="logo-lg">
                <img src="{{asset('assets/images')}}/logo-light.png" alt="" height="60" />
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                
                <!-- Dashboard Menu -->
                @include('Components.Left_nav.dashboard_nav')
                @include('Components.Left_nav.ecommerce_nav')
                @include('Components.Left_nav.auth_nav')
                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>