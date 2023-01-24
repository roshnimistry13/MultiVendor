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
    <link rel="stylesheet" href="<?php echo UI_ASSETS ?>css/vendors/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo UI_ASSETS ?>css/main.css?v=3.4">
    <link rel="stylesheet" href="<?php echo UI_ASSETS ?>css/font-awesome.min.css"
        integrity="sha512-i8+QythOYyQke6XbStjt9T4yQHhhM+9Y9yTY1fOxoDQwsQpKMEpIoSQZ8mVomtnVCf9PBvoQDnKl06gGOOD19Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo UI_ASSETS ?>css/toastify.min.css">
    <link rel="stylesheet" href="<?php echo UI_ASSETS ?>css/custom.css?v=<?php echo VERSION; ?>">

</head>

<body>
    <?php $totalCart = 0; $totalWishlist = '';
    if(!empty($this->session->userdata[CUSTOMER_SESSION])){   
        $customer_id        =  $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
        $totalCart          =   $this->Master_m->getTotalCountCartProdut($customer_id);
        $totalWishlist      =   $this->Master_m->getTotalWhishList($customer_id);
    }

    if(!empty($this->session->userdata[CUSTOMER_SESSION])){
        $display_class = "dn";
        $customer_id =  $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
        $where['customer_id'] 		= $customer_id;
        $cart_items 				= $this->Master_m->getCustomerCartItems($customer_id);							
    }else{
        if(isset($_COOKIE["ethnic_temp_cart"])){
            $cart_item 		    = json_decode(stripslashes($_COOKIE["ethnic_temp_cart"]),true); 
            $totalCart 				= count($cart_item); 
            $display_class 			= "dn";
            $cart_data 	 			= array();
            foreach($cart_item as $item){
                $productid 			= $item['product_id'];
                $pqty 				= $item['quantity'];
                $whr['product_id']  = $productid;
                $res 				= $this->Master_m->where('product_details',$whr);
                
                $data['product_id'] 	= $res[0]['product_id'];
                $data['product_name'] 	= $res[0]['product_name'];
                $data['net_price ']		= $res[0]['net_price'];
                $data['mrp_price']		= $res[0]['mrp_price'];
                $data['discount'] 		= $res[0]['discount'];
                $data['cover_img'] 		= $res[0]['cover_img'];
                $data['quantity'] 		= $pqty ;											
                $data['net_price']      =  $res[0]['net_price'];
                $cart_data[] 			= $data;
            }
            $cart_items = $cart_data;
        }
    }
    $display = "d-none";
    if(!empty($cart_items)){
        $display = "";
    }
?>
    <header class="header-area header-style-3 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li><i class="fi-rs-smartphone"></i> <a href="#">(+01) - 2345 - 6789</a></li>
                                <li><i class="fi-rs-marker"></i><a href="page-contact.html">Our location</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>Get great devices up to 50% off <a href="shop-grid-right.html">View details</a>
                                    </li>
                                    <li>Supper Value Deals - Save more with coupons</li>
                                    <li>Trendy 25silver jewelry, save up 35% off today <a
                                            href="shop-grid-right.html">Shop now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            <ul>
                                <?php
                                    if(empty($this->session->userdata[CUSTOMER_SESSION])){ ?>
                                <li><i class="fi-rs-user"></i><a href="<?php echo base_url('login')?>">Log In / Sign
                                        Up</a></li>
                                <?php } else {?>
                                <li><i class="fi-rs-sign-out"></i><a href="<?php echo base_url('logout')?>">Logout</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="<?php echo base_url('about-us')?>"><img
                                src="<?php echo UI_ASSETS ?>imgs/theme/logo.svg" alt="logo"></a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <form action="#">
                                <input type="text" placeholder="Search for items...">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative  main-nav">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="<?php echo base_url('about-us')?>"><img
                                src="<?php echo UI_ASSETS ?>imgs/theme/logo.svg" alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li>
                                        <a class="active" href="<?php echo base_url('home')?>">Home</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('about-us')?>">About</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('shop')?>">Shop</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('contact-us')?>">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-action-right d-none d-lg-block">
                        <div class="header-action-2">
                            <?php if(!empty($this->session->userdata[CUSTOMER_SESSION])){ ?>
                            <div class="header-action-icon-2 px-0">
                                <a href="<?php echo base_url('my-account')?>">
                                    <img alt="Evara" src="<?php echo UI_ASSETS ?>imgs/theme/icons/icon-user.svg">
                                </a>
                            </div>
                            <?php } ?>
                            <div class="header-action-icon-2">
                                <a href="<?php echo base_url('whishlist')?>">
                                    <img alt="Evara" src="<?php echo UI_ASSETS ?>imgs/theme/icons/icon-heart.svg">
                                    <?php if(!empty($totalWishlist) && $totalWishlist > 0){?>
                                    <span class="pro-count white  total-whishlist"><?php echo $totalWishlist;?></span>
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="<?php echo base_url('cart')?>">
                                    <img alt="Evara" src="<?php echo UI_ASSETS ?>imgs/theme/icons/icon-cart.svg">                                    
                                    <span class="pro-count white total-cart <?php echo ($totalCart > 0) ? "" : "d-none" ;?>"><?php echo $totalCart; ?></span>
                                    
                                </a>
                                
                                <div class="cart-dropdown-wrap cart-dropdown cart-dropdown-hm2 cart-item-list <?php echo $display; ?>">
                                <?php if(!empty($cart_items)){ ?>
                                    <ul>
                                        <?php if(!empty($cart_items)){ 
                                            $total_cart_amt = 0;
                                            foreach($cart_items as $row){
                                                $product_id 	= $row['product_id'];
                                                $product_name 	= $row['product_name'];
                                                $net_price 		= $row['net_price'];
                                                $mrp 			= $row['mrp_price'];
                                                $discount 		= $row['discount'];
                                                $image 			= $row['cover_img'];
                                                $quantity 		= $row['quantity'];											
                                                $net_price      =  $row['net_price'];
                                                $final_price    =  $quantity  * $net_price;
                                                $total_cart_amt =  $final_price + $total_cart_amt;
                                            ?>

                                        <li class="cart_item_<?php echo $product_id; ?>">
                                            <div class="d-flex mb-1">
                                                <div class="shopping-cart-img">
                                                    <img alt="Evara"
                                                        src="<?php echo base_url().PRODUCT_IMAGE_PATH.$product_id.'/'.$image ?>">
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h6 class="mb-5"><a
                                                            href="javascript:void(0)"><?php echo $product_name; ?></a>
                                                    </h6>
                                                    <h6 class="mb-1"><span>Quantity : <?php echo $quantity; ?></span>
                                                    </h6>
                                                    <h6 class="cart-item-price"><i class="fa fa-inr"></i> <?php echo $final_price; ?></h6>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="javascript:void(0)" class="cart_ac_remove"
                                                        data-pid="<?php echo $product_id; ?>"><i
                                                            class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </div>
                                        </li>

                                        <?php } ?>
                                    </ul>
                                    <div class="shopping-cart-footer cart__footer">
                                        <div class="shopping-cart-total">
                                            <h4 class="total">Total
                                            <span class="cart_tot_price"><i class="fa fa-inr"></i><?php echo $total_cart_amt; ?></span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="<?php echo base_url('cart')?>">View cart</a>
                                            <a href="<?php echo base_url('checkout')?>">Checkout</a>
                                        </div>
                                    </div>
                                    <?php } }?>
                                </div>
                                
                            </div>
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%
                    </p>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="<?php echo base_url('whishlist')?>">
                                    <img alt="Evara" src="<?php echo UI_ASSETS ?>imgs/theme/icons/icon-heart.svg">
                                    <?php if(!empty($totalWishlist) && $totalWishlist > 0){?>
                                    <span class="pro-count white  total-whishlist"><?php echo $totalWishlist;?></span>
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="<?php echo base_url('cart')?>">
                                    <img alt="Evara" src="<?php echo UI_ASSETS ?>imgs/theme/icons/icon-cart.svg">
                                    <?php if(!empty($totalCart) && $totalCart > 0){?>
                                    <span class="pro-count white total-cart"><?php echo $totalCart; ?></span>
                                    <?php } ?>
                                </a>
                                <?php //if(!empty($this->session->userdata[CUSTOMER_SESSION])){ ?>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2 cart-item-list_">

                                </div>
                                <?php // } ?>
                            </div>
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="<?php echo base_url('about-us')?>"><img src="<?php echo UI_ASSETS ?>imgs/theme/logo.svg"
                            alt="logo"></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children">
                                <span class="menu-expand"></span><a href="<?php echo base_url('home')?>">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <span class="menu-expand"></span><a href="<?php echo base_url('about-us')?>">About</a>
                            </li>
                            <li class="menu-item-has-children">
                                <span class="menu-expand"></span><a href="<?php echo base_url('shop')?>">shop</a>
                            </li>
                            <li class="menu-item-has-children">
                                <span class="menu-expand"></span><a
                                    href="<?php echo base_url('contact-us')?>">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    <div class="single-mobile-header-info mt-30">
                        <a href="page-contact.html"> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="<?php echo base_url('login')?>">Log In / Sign Up </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#">(+01) - 2345 - 6789 </a>
                    </div>
                </div>
                <div class="mobile-social-icon">
                    <h5 class="mb-15 text-grey-4">Follow Us</h5>
                    <a href="#"><img src="<?php echo UI_ASSETS ?>imgs/theme/icons/icon-facebook.svg" alt=""></a>
                    <a href="#"><img src="<?php echo UI_ASSETS ?>imgs/theme/icons/icon-twitter.svg" alt=""></a>
                    <a href="#"><img src="<?php echo UI_ASSETS ?>imgs/theme/icons/icon-instagram.svg" alt=""></a>
                    <a href="#"><img src="<?php echo UI_ASSETS ?>imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                    <a href="#"><img src="<?php echo UI_ASSETS ?>imgs/theme/icons/icon-youtube.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>