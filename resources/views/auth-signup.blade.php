<!DOCTYPE html>
<html lang="en">

<head>

    <title>DashboardKit Bootstrap 5 Admin Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="DashboardKit is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords"
        content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template">
    <meta name="author" content="DashboardKit ">


    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">

    <!-- font css -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">


</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="card-body">
                        <img src="assets/images/logo-dark.svg" alt="" class="img-fluid mb-4">
                        <h4 class="mb-3 f-w-400">Sign up</h4>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i data-feather="user"></i></span>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i data-feather="mail"></i></span>
                            <input type="email" class="form-control" placeholder="Email address">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text"><i data-feather="lock"></i></span>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group text-left mt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                    checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Send me the <a href="#!"> Newsletter</a> weekly.
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block mb-4">Sign up</button>
                        <p class="mb-2">Already have an account? <a href="{{ url('auth-signin') }}"
                                class="f-w-400">Signin</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.min.js') }}"></script>


</body>

</html>
