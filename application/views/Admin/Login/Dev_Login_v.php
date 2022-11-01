<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Login | Multivendor
    </title>

    <link href="<?php echo ADMIN_ASSETS ?>css/css2.css?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->

    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS ?>css/plugin.min.css">

    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS ?>css/style.css">
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS ?>css/application/custom.css">

    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ADMIN_ASSETS ?>img/favicon.png">
</head>

<body>
    <main class="main-content">

        <div class="signUP-admin">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                        <div class="signUP-admin-left signIn-admin-left position-relative">
                            <div class="signUP-overlay">
                                <!--<img class="svg signupTop" src="<?php echo ADMIN_ASSETS ?>img/svg/signuptop.svg" alt="img">
									<img class="svg signupBottom" src="<?php echo ADMIN_ASSETS ?>img/svg/signupbottom.svg" alt="img">-->
                            </div><!-- End: .signUP-overlay  -->
                            <div class="signUP-admin-left__content">
                                <div
                                    class="text-capitalize mb-md-30 mb-15 d-flex align-items-center justify-content-md-start justify-content-center">
                                    <a class="wh-36 bg-primary text-white radius-md mr-10 content-center"
                                        href="index.html">
                                        M
                                    </a>
                                    <span class="text-dark">
                                        Multivendor
                                    </span>
                                </div>

                            </div><!-- End: .signUP-admin-left__content  -->
                            <div class="signUP-admin-left__img">
                                <img class="img-fluid svg"
                                    src="<?php echo ADMIN_ASSETS ?>img/svg/signupIllustration.svg" alt="img">
                            </div><!-- End: .signUP-admin-left__img  -->
                        </div><!-- End: .signUP-admin-left  -->
                    </div><!-- End: .col-xl-4  -->
                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-8">
                        <div class="signUp-admin-right signIn-admin-right  p-md-40 p-10">
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-8 col-md-12">
                                    <div class="edit-profile mt-md-25 mt-0">
                                        <div class="card border-0">
                                            <div class="card-header border-0  pb-md-15 pb-10 pt-md-20 pt-10 ">
                                                <div class="edit-profile__title">
                                                    <h6>
                                                        Login to
                                                        <span class="color-primary">
                                                            Developer Account
                                                        </span>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form class="form-horizontal" id="devlogin-form"
                                                    action="<?php echo base_url().'devlogin' ?>" role="form"
                                                    method="post">
                                                    <div class="edit-profile__body">
                                                        <div class="form-group mb-20">
                                                            <label for="username">
                                                                Email Address Or Mobile
                                                            </label>
                                                            <input type="text" class="form-control" id="email"
                                                                name="email"
                                                                placeholder="Email Address Or Mobile" required>
                                                        </div>
                                                        <div class="form-group mb-15">
                                                            <label for="password-field">
                                                                Password
                                                            </label>
                                                            <div class="position-relative">
                                                                <input id="password-field" type="password"
                                                                    class="form-control" id="password" name="password"
                                                                    value="" required>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                            <button
                                                                class="btn btn-primary btn-default btn-squared mr-15 text-capitalize lh-normal px-50 py-15 signIn-createBtn"
                                                                type="submit">
                                                                sign in
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div><!-- End: .card-body -->
                                        </div><!-- End: .card -->
                                    </div><!-- End: .edit-profile -->
                                </div><!-- End: .col-xl-5 -->
                            </div>
                        </div><!-- End: .signUp-admin-right  -->
                    </div><!-- End: .col-xl-8  -->
                </div>
            </div>
        </div><!-- End: .signUP-admin  -->

    </main>
    <!-- inject:js-->
    <script type="text/javascript" src="<?php echo ADMIN_ASSETS ?>js/jquery/jquery.js"></script>
    <script src="<?php echo ADMIN_ASSETS ?>js/plugins.min.js"></script>

    <script src="<?php echo ADMIN_ASSETS ?>js/script.min.js"></script>

    <script type="text/javascript" src="<?php echo ADMIN_ASSETS ?>js/jquery/jquery.validate.min.js"></script>

    <script type="text/javascript" src="<?php echo ADMIN_ASSETS ?>js/application/Login.js"></script>
    <!-- endinject-->
</body>

</html>