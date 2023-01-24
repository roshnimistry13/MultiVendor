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
    <link href="<?php echo ADMIN_ASSETS ?>js/pnotify/css/jquery.pnotify.css" media="screen" rel="stylesheet"
        type="text/css">
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
                                                            Account
                                                        </span>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form class="form-horizontal" id="login-form"
                                                    action="<?php echo base_url().'login-check' ?>" role="form"
                                                    method="post">
                                                    <div class="edit-profile__body">
                                                        <div class="form-group mb-20">
                                                            <label for="username">
                                                                Email Address Or Mobile
                                                            </label>
                                                            <input type="text" class="form-control" id="email_username"
                                                                name="email_username"
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
                                                        <div class="form-group mb-15">
                                                            <label for="radio_user_type">
                                                                User Type
                                                            </label>
                                                            <div class="position-relative">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radio_user_type" id="admin-radio"
                                                                        value="admin" required>
                                                                    <label class="form-check-label"
                                                                        for="admin-radio">Admin</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radio_user_type" id="vendor_radio"
                                                                        value="vendor" required>
                                                                    <label class="form-check-label"
                                                                        for="vendor_radio">Vendor</label>
                                                                </div>
                                                                <!-- <div class="radio-horizontal-list d-flex">
                                                                    <div class="radio-theme-default custom-radio ">
                                                                        <input class="radio" type="radio"
                                                                            name="radio_user_type" value="admin" id="radio-vl1" required>
                                                                        <label for="radio-vl1">
                                                                            <span class="radio-text">Admin</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio-theme-default custom-radio ">
                                                                        <input class="radio" type="radio"
                                                                            name="radio_user_type" value="vendor" id="radio-vl2" required>
                                                                        <label for="radio-vl2">
                                                                            <span class="radio-text">Vendor</span>
                                                                        </label>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="signUp-condition signIn-condition">
                                                            <!-- <div class="checkbox-theme-default custom-checkbox ">
                                                                <input class="checkbox" type="checkbox" id="check-1">
                                                                <label for="check-1">
                                                                    <span class="checkbox-text">
                                                                        Keep me logged in
                                                                    </span>
                                                                </label>
                                                            </div> -->
                                                            <a href="<?php echo base_url().'forget-password'; ?>">
                                                                forget password
                                                            </a>
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
    <script type="text/javascript" src="<?php echo ADMIN_ASSETS ?>js/pnotify/js/jquery.pnotify.min.js"></script>
    <script src="<?php echo ADMIN_ASSETS ?>js/application/script.js"></script>
    <script type="text/javascript" src="<?php echo ADMIN_ASSETS ?>js/application/Login.js"></script>

    <?php
	if($this->session->flashdata('success')){?>
    <script type="text/javascript">
    setTimeout(function() {
        notification("topright", "success", "fa fa-check-circle vd_green", "MultiVendor",
            "<?php echo $this->session->flashdata('success') ?> ");
    }, 300);
    </script>
    <?php
	} 
?>
    <?php
	if($this->session->flashdata('error')) {?>
    <script type="text/javascript">
    setTimeout(function() {
        notification("topright", "error", "fa fa-exclamation-circle vd_red", "MultiVendor",
            "<?php echo $this->session->flashdata('error') ?> ");
    }, 300);
    </script>
    <?php } 
?>
    <!-- endinject-->
</body>

</html>