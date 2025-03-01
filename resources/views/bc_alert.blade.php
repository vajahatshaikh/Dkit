@extends('layouts.master-layout')

@section('main')
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row mb-3">
            <div class="col-md-8">
                <h3>Alerts</h3>
                <p class="lead">Provide contextual feedback messages for typical user actions with the handful of available
                    and flexible alert messages.</p>
                <p class="f-w-500">Check out <a
                        href="http://html.phoenixcoded.net/nextro-new/docs/index-bc-package.html#page-alert" target="_blank"
                        class="badge bg-light-primary">Documentation</a></p>
            </div>
        </div>
        <div class="row">
            <!-- [ basic-alert ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Alerts</h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary" role="alert">
                            A simple primary alert—check it out!
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            A simple secondary alert—check it out!
                        </div>
                        <div class="alert alert-success" role="alert">
                            A simple success alert—check it out!
                        </div>
                        <div class="alert alert-danger" role="alert">
                            A simple danger alert—check it out!
                        </div>
                        <div class="alert alert-warning" role="alert">
                            A simple warning alert—check it out!
                        </div>
                        <div class="alert alert-info" role="alert">
                            A simple info alert—check it out!
                        </div>
                        <div class="alert alert-light" role="alert">
                            A simple light alert—check it out!
                        </div>
                        <div class="alert alert-dark" role="alert">
                            A simple dark alert—check it out!
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ basic-alert ] end -->
            <!-- [ link-alert ] start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Link Alerts</h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary" role="alert">
                            A simple primary alert with <a href="#!" class="alert-link">an example link</a>. Give it a
                            click if you like.
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            A simple secondary alert with <a href="#!" class="alert-link">an example link</a>. Give it
                            a click if you like.
                        </div>
                        <div class="alert alert-success" role="alert">
                            A simple success alert with <a href="#!" class="alert-link">an example link</a>. Give it a
                            click if you like.
                        </div>
                        <div class="alert alert-danger" role="alert">
                            A simple danger alert with <a href="#!" class="alert-link">an example link</a>. Give it a
                            click if you like.
                        </div>
                        <div class="alert alert-warning" role="alert">
                            A simple warning alert with <a href="#!" class="alert-link">an example link</a>. Give it a
                            click if you like.
                        </div>
                        <div class="alert alert-info" role="alert">
                            A simple info alert with <a href="#!" class="alert-link">an example link</a>. Give it a
                            click if you like.
                        </div>
                        <div class="alert alert-light" role="alert">
                            A simple light alert with <a href="#!" class="alert-link">an example link</a>. Give it a
                            click if you like.
                        </div>
                        <div class="alert alert-dark" role="alert">
                            A simple dark alert with <a href="#!" class="alert-link">an example link</a>. Give it a
                            click if you like.
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ link-alert ] end -->
            <!-- [ dismiss-alert ] start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Dismissing</h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-light alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ dismiss-alert ] end -->
            <!-- [ additional-alert ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Additional Content</h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Well done!</h4>
                            <p>Aww yeah, you successfully read this important alert message. This example text is going to
                                run a bit longer so that you can see how spacing within an alert works with this kind of
                                content.</p>
                            <hr>
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and
                                tidy.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ additional-alert ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
@endsection

@section('script')
    <script></script>
@endsection
