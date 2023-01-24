<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Evara - eCommerce HTML Template</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo UI_ASSETS ?>imgs/theme/favicon.svg">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo UI_ASSETS ?>css/main.css?v=3.4">
</head>

<body>
    <main class="main page-404">
        <div class="container">
            <div class="row align-items-center height-100vh text-center">
                <div class="col-lg-8 m-auto">
                    <p class="mb-50"><img src="<?php echo UI_ASSETS ?>imgs/theme/404.png" alt="" class="hover-up"></p>
                    <h2 class="mb-30">Page Not Found</h2>
                    <p class="font-lg text-grey-700 mb-30">
                        The link you clicked may be broken or the page may have been removed.<br> visit the <a href="<?php echo base_url('home')?>"> <span> Homepage</span></a> or <a href="page-contact.html"><span>Contact us</span></a> about the problem
                    </p>
                    <form class="contact-form-style text-center" id="contact-form" action="#" method="post">
                        
                        <a class="btn btn-default submit-auto-width font-xs hover-up" href="<?php echo base_url('home')?>">Back To Home Page</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <h5 class="mb-5">Now Loading</h5>
                    <div class="loader">
                        <div class="bar bar1"></div>
                        <div class="bar bar2"></div>
                        <div class="bar bar3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
    <script src="<?php echo UI_ASSETS ?>js/vendor/jquery-3.6.0.min.js"></script>    
    <!-- Template  JS -->
    <script src="<?php echo UI_ASSETS ?>js/main.js?v=3.4"></script>
</body>

</html>