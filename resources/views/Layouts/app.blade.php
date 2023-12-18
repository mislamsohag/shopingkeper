@include('Components.head')
<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
<!-- **************************************** -->

@include('Components.header')
@include('Components.left_sidebar')

    @yield('content')

@include('Components.footer')

<!-- **************************************** -->
    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    
    <!-- Theme Settings Start -->
    @include('Components.theme_setting')
    <!-- Theme Settings End -->

     <!-- JAVASCRIPTS Links Here -->
   @include('Components.js_scripts_links')
</body>

</html>