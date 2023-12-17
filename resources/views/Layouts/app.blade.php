@include('Layouts.head')
<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
<!-- **************************************** -->

@include('Layouts.header')
@include('Layouts.left_sidebar')

    @yield('content')

@include('Layouts.footer')

<!-- **************************************** -->
    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    
    <!-- Theme Settings Start -->
    @include('Layouts.theme_setting')
    <!-- Theme Settings End -->

     <!-- JAVASCRIPTS Links Here -->
   @include('Layouts.js_scripts_links')
</body>

</html>