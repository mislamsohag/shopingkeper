<html>
@include('Layouts.head')
    <body>
        <div class="auth-page-wrapper pt-5">
            <!-- auth page bg -->
            <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
                <div class="bg-overlay"></div>

                <div class="shape">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 1440 120">
                        <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                    </svg>
                </div>
            </div>

            <!-- auth page content -->
            <div class="auth-page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center mt-sm-5 mb-4 text-white-50">
                                <div>
                                    <a href="{{url('home')}}" class="d-inline-block auth-logo">
                                        <img src="{{asset('assets')}}/images/logo-light.png" alt="" height="20">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card mt-4">

                                <div class="card-body p-4">
                                    <div class="text-center mt-2">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                    </div>
                                    
                                    <div class="p-2 mt-4">

                                        <!-- Form Here -->
                                        <form method="POST" action="{{route('login.post')}}" enctype="multipart/form-data">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                
                                                <!-- Email Input -->
                                                <input name="email" type="text" class="form-control"  placeholder="Enter username">
                                            </div>

                                            <div class="mb-3">
                                                <div class="float-end">
                                                    <a href="{{url('auth-pass-reset-basic.html')}}" class="text-muted">Forgot
                                                        password?
                                                    </a>
                                                </div>

                                                <label class="form-label" for="password-input">Password</label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    
                                                    <!-- Password Input -->
                                                    <input name="password" type="password" class="form-control pe-5 password-input" placeholder="Enter password">                                                    
                                                </div>
                                            </div>

                                            <div class="mt-5">
                                                <button type="submit" class="btn btn-success w-100" type="submit">Sign In</button>
                                            </div>

                                            <div class="mt-4 text-center">
                                                <div class="signin-other-title">
                                                    <h5 class="fs-13 mb-4 title">Sign In with</h5>
                                                </div>
                                                <div>
                                                    <button type="button"
                                                        class="btn btn-primary btn-icon waves-effect waves-light"><i
                                                            class="ri-facebook-fill fs-16"></i></button>
                                                    <button type="button"
                                                        class="btn btn-danger btn-icon waves-effect waves-light"><i
                                                            class="ri-google-fill fs-16"></i></button>
                                                    <button type="button"
                                                        class="btn btn-dark btn-icon waves-effect waves-light"><i
                                                            class="ri-github-fill fs-16"></i></button>
                                                    <button type="button"
                                                        class="btn btn-info btn-icon waves-effect waves-light"><i
                                                            class="ri-twitter-fill fs-16"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="mt-4 text-center">
                                <p class="mb-0">Don't have an account ? <a href="{{route('sign-up')}}"
                                        class="fw-semibold text-primary text-decoration-underline"> Signup </a> </p>
                            </div>

                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end auth page content -->

            @include('Layouts.footer')
        </div>
        <!-- JAVASCRIPT -->
        @include('Layouts.js_scripts_links')
    </body>
</html>