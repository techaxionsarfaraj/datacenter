<?php $session = session(); ?>
<!doctype html>
<html lang="en">
<!-- Mirrored from skote-h-light.codeigniter.themesbrand.com/auth-login by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Mar 2023 03:49:55 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <title>Login | Data Center </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Data Center Login Page" name="description" />
    <meta content="Data Center" name="Sarfaraj Sipai" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico') ?>">

    <!-- Bootstrap Css -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('assets/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('assets/css/app.min.css') ?>" id="app-style" rel="stylesheet" type="text/css" />
</head>
<style>
    .form-group {
        position: relative;
    }

    label.error {
        position: absolute;
        bottom: -21px;
        margin-bottom: 0;
        left: 0;
    }

    input.error {
        border: 1px dotted;
    }
</style>

<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p>Sign in to continue to Skote.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="<?= base_url('assets/images/profile-img.png') ?>" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="auth-logo">
                                <a href="index.html" class="auth-logo-light">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="<?= base_url('assets/images/logo-light.svg') ?>" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>

                                <a href="index.html" class="auth-logo-dark">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="<?= base_url('assets/images/logo.svg') ?>" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <!-- Display logout message if exists -->
                            <?php if (isset($_GET['logout']) && $_GET['logout'] == 'true') : ?>
                                <div class="position-fixed top-0 end-0 p-3 alert" style="z-index: 1005">
                                    <div class="toast fade show align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true" >
                                        <div class="d-flex">
                                            <div class="toast-body">
                                                <?='You have been logged out successfully.'?>
                                            </div>
                                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <!-- Display error message if exists -->
                            <?php if ($session->getFlashdata('message')) : ?>
                                <div class="position-fixed top-0 end-0 p-3 alert" style="z-index: 1005" >
                                    <div class="toast fade show align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true" >
                                        <div class="d-flex">
                                            <div class="toast-body">
                                                <?= $session->getFlashdata('message') ?>
                                            </div>
                                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </div>
                                </div>
                            <?php endif ?>
                            <div class="p-2">
                                <form class="form-horizontal" action="<?php echo base_url(); ?>/login" method="post" id="login">
                                    <?= csrf_field() ?>
                                    <div class="form-group mb-4">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" value="<?= old('username') ?>">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="form-label">Password</label>
                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password" class="form-control" name="password" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                            <button class="btn btn-light" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                    </div>
                                    <div class="form-group form-check d-none">
                                        <label class="form-check-label" for="remember-check">
                                            Remember me
                                        </label>
                                        <input class="form-check-input" type="checkbox" id="remember-check" name="remember">
                                    </div>
                                    <div class="mt-4 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <h5 class="font-size-14 mb-3">Sign in with</h5>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">
                                                    <i class="mdi mdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript::void()" class="social-list-item bg-info text-white border-info">
                                                    <i class="mdi mdi-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                                                    <i class="mdi mdi-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <div>
                            <p>Don't have an account ? <a href="auth-register.html" class="fw-medium text-primary">
                                    Signup now </a> </p>
                            <p>©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end account-pages -->

    <!-- JAVASCRIPT -->
    <script src="<?= base_url('assets/libs/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/metismenu/metisMenu.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/simplebar/simplebar.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/node-waves/waves.min.js') ?>"></script>
    <!-- Jquery .Validate js -->
    <script src="<?= base_url('assets/js/jquery.validate.js') ?> "></script>
    <!-- App js -->
    <script src="<?= base_url('assets/js/app.js') ?>"></script>
    <script>
        $(document).ready(function() {

            setTimeout(function() {
                $('.alert .toast').removeClass('show');                
            }, 3000);
            
            var url = window.location.href;
            // Check if the URL contains '?logout=true'
            if (url.indexOf('?logout=true') !== -1) {
                // Remove '?logout=true' from the URL
                var newUrl = url.replace('?logout=true', '');

                // Remove the trailing '?' or '&' if present
                newUrl = newUrl.replace(/[&?]$/, '');

                // Update the URL in the browser without reloading the page
                history.replaceState(null, null, newUrl);
            }
            // validate the login form when it is submitted		    
            $("#login").validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 4
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    remember: "required"
                },
                messages: {
                    username: {
                        required: "Please enter a username",
                        minlength: "Your username must consist of at least 4 characters"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    remember: "Please select for remember password"
                }
            });
        });
    </script>

</body>

</html>