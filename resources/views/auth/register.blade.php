<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from mannatthemes.com/metrica/default/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Aug 2021 17:27:21 GMT -->

<head>
    <!-- <meta charset="utf-8" />
    <title> | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    App favicon
    <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

    <meta charset="utf-8" />
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">



    <!-- App css -->
    <link href="{{ URL::asset('assets/software_assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/software_assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/software_assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body id="body" class="auth-page" style="background-image: url('assets/software_assets/images/p-1.png'); background-size: cover; background-position: center center;">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <!-- Log In page -->
    <div class="container-md">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="assets/images/logo-sm.png" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Let's Get Started Metrica</h4>
                                        <p class="text-muted  mb-0">Sign up to continue to Metrica.</p>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <form class="my-4" method="post" action="{{url('register_user')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                                        </div>
                                        <!--end form-group-->

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="useremail">Email</label>
                                            <input type="email" class="form-control" id="useremail" name="email" placeholder="Enter email">
                                        </div>
                                        <!--end form-group-->

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                                        </div>
                                        <!--end form-group-->

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="Confirmpassword">ConfirmPassword</label>
                                            <input type="password" class="form-control" name="cpassword" id="Confirmpassword" placeholder="Enter Confirm password">
                                        </div>
                                        <!--end form-group-->

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="mobileNo">Mobile Number</label>
                                            <input type="text" class="form-control" id="mobileNo" name="number" placeholder="Enter Mobile Number">
                                        </div>
                                        <!--end form-group-->

                                        <div class="form-group row mt-3">
                                            <div class="col-12">
                                                <div class="form-check form-switch form-switch-success">
                                                    <input class="form-check-input" type="checkbox" id="customSwitchSuccess">
                                                    <label class="form-check-label" for="customSwitchSuccess">By registering you agree to the Metrica <a href="#" class="text-primary">Terms of Use</a></label>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end form-group-->

                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" type="submit">Register <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end form-group-->
                                    </form>
                                    <!--end form-->
                                    <div class="m-3 text-center text-muted">
                                        <p class="mb-0">Already have an account ? <a href="auth-login.html" class="text-primary ms-2">Log in</a></p>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-body-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

    <!-- App js -->
    <script src="{{ URL::asset('assets/software_assets/js/app.js') }}"></script>

</body>


<!-- Mirrored from mannatthemes.com/metrica/default/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Aug 2021 17:27:21 GMT -->

</html>