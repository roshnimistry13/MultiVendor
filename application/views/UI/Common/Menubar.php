<!--Top bar pink color section-->
<div id="kalles-section-header_banner" class="kalles-section-header_banner">
    <div class="h__banner bgp pt__10 pb__10 fs__14 flex fl_center al_center pr oh show_icon_false">
        <div class="container">
            <div class="row al_center">
                <div class="col-auto op__0">
                    <a href="#" class="h_banner_close pr pl__10 cw z_index">
                        close
                    </a>
                </div>
                <a href="<?php echo base_url('product')?>" class="pa t__0 l__0 r__0 b__0 z_100">
                </a>
                <div class="col h_banner_wrap tc cw">
                    Today deal sale off
                    <strong>
                        70%
                    </strong>. End in
                    <strong class="js_kl__countdown" data-date="2021/12/19">
                    </strong>. Hurry Up
                    <i class="las la-arrow-right">
                    </i>
                </div>
                <div class="col-auto">
                    <a href="#" class="h_banner_close pr pl__10 cw z_100">
                        close
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="nt_wrapper">
    <!-- Start Header -->
    <header id="ntheader" class="ntheader header_3 h_icon_iccl ">
        <div class="kalles-header__wrapper ntheader_wrapper pr z_200">
            <div id="kalles-section-header_top">
                <div class="h__top bgbl pt__10 pb__10 fs__12 flex fl_center al_center">
                    <div class="container">
                        <div class="row al_center">
                            <div class="col-lg-4 col-12 tc tl_lg col-md-12 ">
                                <div class="header-text">
                                    <i class="pegk pe-7s-call">
                                    </i> 099247 03447
                                    <i class="pegk pe-7s-mail ml__15">
                                    </i>
                                    <a class="cg" href="javascript:void(0)">
                                        <span class="__cf_email__" data-cfemail="">
                                            mail@proactii.com
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 tc col-md-12 ">
                                <div class="header-text">
                                    Summer sale discount off
                                    <span class="cr">
                                        50%
                                    </span>!
                                    <a href="<?php echo base_url('product')?>">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                            <?php if(!empty($this->session->userdata[CUSTOMER_SESSION])){?>
                            <div class="col-lg-4 col-12 tc col-md-12 tr_lg ">
                                <h4>
                                    <a href="<?php echo base_url('logout')?>">
                                        Logout
                                    </a>
                                </h4>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sp_header_mid">
                <div class="header__mid">
                    <div class="container">
                        <div class="row al_center css_h_se">
                            <div class="col-md-4 col-3 dn_lg">
                                <a href="#" data-id="#nt_menu_canvas"
                                    class="push_side push-menu-btn  lh__1 flex al_center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                                        <rect width="30" height="1.5"></rect>
                                        <rect y="7" width="20" height="1.5"></rect>
                                        <rect y="14" width="30" height="1.5"></rect>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6 tc tl_lg">
                                <div class=" branding ts__05 lh__1">
                                    <a class="dib" href="<?php echo base_url() ?>">
                                        <img class="w-100 logo_normal dn db_lg"
                                            src="<?php echo UI_ASSETS ?>images/mv-logo.png" alt="">
                                        <img class="w-100 logo_sticky dn"
                                            src="<?php echo UI_ASSETS ?>images/mv-logo.png" alt="">
                                        <img class="w-100 logo_mobile dn_lg"
                                            src="<?php echo UI_ASSETS ?>images/mv-logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col dn db_lg">
                                <nav class="nt_navigation kl_navigation tc hover_side_up nav_arrow_false">
                                    <ul id="nt_menu_id" class="nt_menu in_flex wrap al_center">
                                        <li
                                            class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
                                            <a class="lh__1 flex al_center pr" href="<?php echo base_url('home');?>">
                                                Home
                                            </a>
                                        </li>
                                        <li
                                            class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
                                            <a class="lh__1 flex al_center pr"
                                                href="<?php echo base_url('about-us');?>">
                                                About
                                            </a>
                                        </li>
                                        <li
                                            class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
                                            <a class="lh__1 flex al_center pr" href="<?php echo base_url('product');?>">
                                                Products
                                                <!-- <span class="lbc_nav kalles-lbl-new__header">
												New
											</span> -->
                                            </a>
                                            <div class="cus sub-menu">
                                                <div class="container megamenu-content-950px">
                                                    <div class="row lazy_menu lazyload"
                                                        data-jspackery='{ "itemSelector": ".sub-column-item","gutter": 0,"percentPosition": true,"originLeft": true }'>
                                                        <div class="type_mn_link menu-item sub-column-item col-2">
                                                            <a href="#">
                                                                Brand
                                                            </a>
                                                            <ul class="sub-column not_tt_mn">
                                                                <li class="menu-item">
                                                                    <a href="#">
                                                                        Grid Layout
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="#">
                                                                        Packery
                                                                        Layout
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="#">
                                                                        Masonry
                                                                        Layout
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="#">
                                                                        Full Width
                                                                        Layout
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="#">
                                                                        1600px
                                                                        Layout
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="type_mn_link menu-item sub-column-item col-2">
                                                            <a href="#">
                                                                Category
                                                            </a>
                                                            <ul class="sub-column not_tt_mn">
                                                                <li class="menu-item">
                                                                    <a href="<?php echo base_url('product')?>>
                                                                        Filter
                                                                        options
                                                                        <span class=" lbc_nav lb_menu_hot ml__5">
                                                                        hot
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="<?php echo base_url('product')?>>
                                                                        Filters area
                                                                    </a>
                                                                </li>
                                                                <li class=" menu-item">
                                                                        <a href="#">
                                                                            Filters
                                                                            sidebar
                                                                        </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="#">
                                                                        Load more
                                                                        button
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="#">
                                                                        Infinite
                                                                        scrolling
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div
                                                            class="type_mn_pr menu-item sub-column-item col-4 equal_nt hoverz_true cat_design_1">
                                                            <div class="cat_grid_item cat_space_item">
                                                                <div class="cat_grid_item__content pr oh">
                                                                    <a href="#" class="db cat_grid_item__link">
                                                                        <div class="cat_grid_item__overlay item__position nt_bg_lz lazyload padding-top__127_586"
                                                                            data-bgset="<?php echo UI_ASSETS ?>images/megamenu/bn-01.jpg">
                                                                        </div>
                                                                    </a>
                                                                    <div class="cat_grid_item__wrapper pe_none">
                                                                        <div class="cat_grid_item__title">
                                                                            Women
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="type_mn_pr menu-item sub-column-item col-4 equal_nt hoverz_true cat_design_1">
                                                            <div class="cat_grid_item cat_space_item">
                                                                <div class="cat_grid_item__content pr oh">
                                                                    <a href="#" class="db cat_grid_item__link">
                                                                        <div class="cat_grid_item__overlay item__position nt_bg_lz lazyload padding-top__127_586"
                                                                            data-bgset="<?php echo UI_ASSETS ?>images/megamenu/bn-02.jpg">
                                                                        </div>
                                                                    </a>
                                                                    <div class="cat_grid_item__wrapper pe_none">
                                                                        <div class="cat_grid_item__title">
                                                                            Men
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="d-none type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
                                            <a class="lh__1 flex al_center pr" href="<?php echo base_url('product')?>">
                                                Product
                                            </a>
                                            <div class="cus sub-menu">
                                                <div class="container megamenu-content-1050px">
                                                    <div class="row lazy_menu lazyload"
                                                        data-jspackery='{ "itemSelector": ".sub-column-item","gutter": 0,"percentPosition": true,"originLeft": true }'>
                                                        <div class="type_mn_link menu-item sub-column-item col-3">
                                                            <a href="<?php echo base_url('product-detail/1')?>">
                                                                PRODUCT
                                                                LAYOUT
                                                            </a>
                                                            <ul class="sub-column not_tt_mn">
                                                                <li class="menu-item">
                                                                    <a href="<?php echo base_url('product-detail/1')?>">
                                                                        Product
                                                                        Detail Layout 1
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="<?php echo base_url('product-detail/1')?>">
                                                                        Product
                                                                        Detail Layout 2
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="type_mn_link menu-item sub-column-item col-3">
                                                            <a href="<?php echo base_url('product-detail/1')?>">
                                                                PRODUCT
                                                                DETAIL
                                                            </a>
                                                            <ul class="sub-column not_tt_mn">
                                                                <li class="menu-item">
                                                                    <a href="<?php echo base_url('product-detail/1')?>">
                                                                        External/Affiliate
                                                                        Product
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="<?php echo base_url('product-detail/1')?>">
                                                                        Simple
                                                                        product
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="type_mn_link menu-item sub-column-item col-3">
                                                            <a href="<?php echo base_url('product-detail/1')?>">
                                                                PRODUCT
                                                                SWATCH
                                                            </a>
                                                            <ul class="sub-column not_tt_mn">
                                                                <li class="menu-item">
                                                                    <a href="<?php echo base_url('product-detail/1')?>">
                                                                        Product
                                                                        Color Swatch
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="<?php echo base_url('product-detail/1')?>">
                                                                        Product
                                                                        Gallery Swatch
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="type_mn_link menu-item sub-column-item col-3">
                                                            <a href="<?php echo base_url('product-detail/1')?>">
                                                                PRODUCT
                                                                FEATURES
                                                            </a>
                                                            <ul class="sub-column not_tt_mn">
                                                                <li class="menu-item">
                                                                    <a href="<?php echo base_url('product-detail/1')?>">
                                                                        Frequently
                                                                        Bought Together
                                                                        <span class="lbc_nav lb_menu_hot ml__5">
                                                                            Hot
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="<?php echo base_url('product-detail/1')?>">
                                                                        Product
                                                                        pre-orders
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- <li
                                            class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
                                            <a class="lh__1 flex al_center pr kalles-lbl__nav-sale"
                                                href="javascript:void(0)">
                                                Vendor
                                                <span class="lbc_nav">
                                                    Sale
                                                </span>
                                            </a>
                                            <div class="cus sub-menu">
                                                <div class="container megamenu-content-1200px">
                                                    <div class="row lazy_menu lazyload"
                                                        data-jspackery='{ "itemSelector": ".sub-column-item","gutter": 0,"percentPosition": true,"originLeft": true }'>
                                                        <div class="type_mn_link2 menu-item sub-column-item col-2">
                                                            <a href="javascript:void(0)">
                                                                Accessories
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                Footwear
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                Women
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                T-Shirt
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                Shoes
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                Denim
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                Dress
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                Men
                                                            </a>
                                                        </div>
                                                        <div class="type_mn_pr menu-item sub-column-item col-10">
                                                            <div class="prs_nav js_carousel nt_slider products nt_products_holder row al_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 flickity-enabled is-draggable"
                                                                data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": 1,"prevNextButtons": 1,"percentPosition": 1,"pageDots": 0, "autoPlay" : 0, "pauseAutoPlayOnHover" : 1, "rightToLeft": false }'>
                                                                <div
                                                                    class="col-lg-3 col-md-12 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                                                                    <div class="product-inner pr">
                                                                        <div class="product-image pr oh lazyload">
                                                                            <span class="tc nt_labels pa pe_none cw">
                                                                                <span class="nt_label new">
                                                                                    New
                                                                                </span>
                                                                            </span>
                                                                            <a class="d-block"
                                                                                href="<?php echo base_url('product-detail/1')?>">
                                                                                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/megamenu/pr-01.jpg">
                                                                                </div>
                                                                            </a>
                                                                            <div
                                                                                class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                                                                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/megamenu/pr-02.jpg">
                                                                                </div>
                                                                            </div>
                                                                            <div class="nt_add_w ts__03 pa ">
                                                                                <a href="#"
                                                                                    class="wishlistadd cb chp ttip_nt tooltip_right">
                                                                                    <span class="tt_txt">
                                                                                        Add to
                                                                                        Wishlist
                                                                                    </span>
                                                                                    <i class="facl facl-heart-o">
                                                                                    </i>
                                                                                </a>
                                                                            </div>
                                                                            <div
                                                                                class="hover_button op__0 tc pa flex column ts__03">
                                                                                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                                                                    href="#">
                                                                                    <span class="tt_txt">
                                                                                        Quick
                                                                                        view
                                                                                    </span>
                                                                                    <i class="iccl iccl-eye">
                                                                                    </i>
                                                                                    <span>
                                                                                        Quick view
                                                                                    </span>
                                                                                </a>
                                                                                <a href="#"
                                                                                    class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left">
                                                                                    <span class="tt_txt">
                                                                                        Quick
                                                                                        Shop
                                                                                    </span>
                                                                                    <i class="iccl iccl-cart">
                                                                                    </i>
                                                                                    <span>
                                                                                        Quick Shop
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                            <div
                                                                                class="product-attr pa ts__03 cw op__0 tc">
                                                                                <p class="truncate mg__0 w__100">
                                                                                    XS,
                                                                                    S, M, L, XL
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-info mt__15">
                                                                            <h3
                                                                                class="product-title pr fs__14 mg__0 fwm">
                                                                                <a class="cd chp"
                                                                                    href="<?php echo base_url('product-detail/1')?>">
                                                                                    Analogue
                                                                                    Resin Strap
                                                                                </a>
                                                                            </h3>
                                                                            <span class="price dib mb__5">
                                                                                $30.00
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-lg-3 col-md-12 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                                                                    <div class="product-inner pr">
                                                                        <div class="product-image pr oh lazyload">
                                                                            <a class="d-block"
                                                                                href="<?php echo base_url('product-detail/1')?>">
                                                                                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/megamenu/pr-03.jpg">
                                                                                </div>
                                                                            </a>
                                                                            <div
                                                                                class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                                                                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/megamenu/pr-04.jpg">
                                                                                </div>
                                                                            </div>
                                                                            <div class="nt_add_w ts__03 pa ">
                                                                                <a href="#"
                                                                                    class="wishlistadd cb chp ttip_nt tooltip_right">
                                                                                    <span class="tt_txt">
                                                                                        Add to
                                                                                        Wishlist
                                                                                    </span>
                                                                                    <i class="facl facl-heart-o">
                                                                                    </i>
                                                                                </a>
                                                                            </div>
                                                                            <div
                                                                                class="hover_button op__0 tc pa flex column ts__03">
                                                                                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                                                                    href="#">
                                                                                    <span class="tt_txt">
                                                                                        Quick
                                                                                        view
                                                                                    </span>
                                                                                    <i class="iccl iccl-eye">
                                                                                    </i>
                                                                                    <span>
                                                                                        Quick view
                                                                                    </span>
                                                                                </a>
                                                                                <a href="#"
                                                                                    class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left">
                                                                                    <span class="tt_txt">
                                                                                        Quick
                                                                                        Shop
                                                                                    </span>
                                                                                    <i class="iccl iccl-cart">
                                                                                    </i>
                                                                                    <span>
                                                                                        Quick Shop
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                            <div
                                                                                class="product-attr pa ts__03 cw op__0 tc">
                                                                                <p class="truncate mg__0 w__100">
                                                                                    S,
                                                                                    M, L
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-info mt__15">
                                                                            <h3
                                                                                class="product-title pr fs__14 mg__0 fwm">
                                                                                <a class="cd chp"
                                                                                    href="<?php echo base_url('product-detail/1')?>">
                                                                                    Ridley
                                                                                    High Waist
                                                                                </a>
                                                                            </h3>
                                                                            <span class="price dib mb__5">
                                                                                $36.00
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-lg-3 col-md-12 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                                                                    <div class="product-inner pr">
                                                                        <div class="product-image pr oh lazyload">
                                                                            <a class="d-block"
                                                                                href="<?php echo base_url('product-detail/1')?>">
                                                                                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/megamenu/pr-05.jpg">
                                                                                </div>
                                                                            </a>
                                                                            <div
                                                                                class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                                                                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/megamenu/pr-06.jpg">
                                                                                </div>
                                                                            </div>
                                                                            <div class="nt_add_w ts__03 pa ">
                                                                                <a href="#"
                                                                                    class="wishlistadd cb chp ttip_nt tooltip_right">
                                                                                    <span class="tt_txt">
                                                                                        Add to
                                                                                        Wishlist
                                                                                    </span>
                                                                                    <i class="facl facl-heart-o">
                                                                                    </i>
                                                                                </a>
                                                                            </div>
                                                                            <div
                                                                                class="hover_button op__0 tc pa flex column ts__03">
                                                                                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                                                                    href="#">
                                                                                    <span class="tt_txt">
                                                                                        Quick
                                                                                        view
                                                                                    </span>
                                                                                    <i class="iccl iccl-eye">
                                                                                    </i>
                                                                                    <span>
                                                                                        Quick view
                                                                                    </span>
                                                                                </a>
                                                                                <a href="#"
                                                                                    class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left">
                                                                                    <span class="tt_txt">
                                                                                        Quick
                                                                                        Shop
                                                                                    </span>
                                                                                    <i class="iccl iccl-cart">
                                                                                    </i>
                                                                                    <span>
                                                                                        Quick Shop
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                            <div
                                                                                class="product-attr pa ts__03 cw op__0 tc">
                                                                                <p class="truncate mg__0 w__100">
                                                                                    S,
                                                                                    M, L
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-info mt__15">
                                                                            <h3
                                                                                class="product-title pr fs__14 mg__0 fwm">
                                                                                <a class="cd chp"
                                                                                    href="<?php echo base_url('product-detail/1')?>">
                                                                                    Blush
                                                                                    Beanie
                                                                                </a>
                                                                            </h3>
                                                                            <span class="price dib mb__5">
                                                                                $15.00
                                                                            </span>
                                                                            <div
                                                                                class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                                                                <span
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/products/pr-05.jpg"
                                                                                    class="lazyload nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right">
                                                                                    <span class="tt_txt">
                                                                                        Grey
                                                                                    </span>
                                                                                    <span
                                                                                        class="swatch__value bg_color_grey">
                                                                                    </span>
                                                                                </span>
                                                                                <span
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/products/pr-31.jpg"
                                                                                    class="lazyload nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right">
                                                                                    <span class="tt_txt">
                                                                                        Pink
                                                                                    </span>
                                                                                    <span
                                                                                        class="swatch__value bg_color_pink">
                                                                                    </span>
                                                                                </span>
                                                                                <span
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/products/pr-32.jpg"
                                                                                    class="lazyload nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right">
                                                                                    <span class="tt_txt">
                                                                                        Black
                                                                                    </span>
                                                                                    <span
                                                                                        class="swatch__value bg_color_black">
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-lg-3 col-md-12 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                                                                    <div class="product-inner pr">
                                                                        <div class="product-image pr oh lazyload">
                                                                            <span class="tc nt_labels pa pe_none cw">
                                                                                <span class="onsale nt_label">
                                                                                    <span>
                                                                                        -25%
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                            <a class="d-block"
                                                                                href="<?php echo base_url('product-detail/1')?>">
                                                                                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/megamenu/pr-07.jpg">
                                                                                </div>
                                                                            </a>
                                                                            <div
                                                                                class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                                                                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/megamenu/pr-08.jpg">
                                                                                </div>
                                                                            </div>
                                                                            <div class="nt_add_w ts__03 pa ">
                                                                                <a href="#"
                                                                                    class="wishlistadd cb chp ttip_nt tooltip_right">
                                                                                    <span class="tt_txt">
                                                                                        Add to
                                                                                        Wishlist
                                                                                    </span>
                                                                                    <i class="facl facl-heart-o">
                                                                                    </i>
                                                                                </a>
                                                                            </div>
                                                                            <div
                                                                                class="hover_button op__0 tc pa flex column ts__03">
                                                                                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                                                                    href="#">
                                                                                    <span class="tt_txt">
                                                                                        Quick
                                                                                        view
                                                                                    </span>
                                                                                    <i class="iccl iccl-eye">
                                                                                    </i>
                                                                                    <span>
                                                                                        Quick view
                                                                                    </span>
                                                                                </a>
                                                                                <a href="#"
                                                                                    class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left">
                                                                                    <span class="tt_txt">
                                                                                        Quick
                                                                                        Shop
                                                                                    </span>
                                                                                    <i class="iccl iccl-cart">
                                                                                    </i>
                                                                                    <span>
                                                                                        Quick Shop
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                            <div
                                                                                class="product-attr pa ts__03 cw op__0 tc">
                                                                                <p class="truncate mg__0 w__100">
                                                                                    XS,
                                                                                    S, M
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-info mt__15">
                                                                            <h3
                                                                                class="product-title pr fs__14 mg__0 fwm">
                                                                                <a class="cd chp"
                                                                                    href="<?php echo base_url('product-detail/1')?>">
                                                                                    Cluse
                                                                                    La Boheme Rose Gold
                                                                                </a>
                                                                            </h3>
                                                                            <span class="price dib mb__5">
                                                                                <del>
                                                                                    $60.00
                                                                                </del>
                                                                                <ins>
                                                                                    $45.00
                                                                                </ins>
                                                                            </span>
                                                                            <div
                                                                                class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                                                                <span
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/products/pr-07.jpg"
                                                                                    class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right">
                                                                                    <span class="tt_txt">
                                                                                        Green
                                                                                    </span>
                                                                                    <span
                                                                                        class="swatch__value bg_color_green">
                                                                                    </span>
                                                                                </span>
                                                                                <span
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/products/pr-08.jpg"
                                                                                    class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right">
                                                                                    <span class="tt_txt">
                                                                                        Grey
                                                                                    </span>
                                                                                    <span
                                                                                        class="swatch__value bg_color_grey">
                                                                                    </span>
                                                                                </span>
                                                                                <span
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/products/pr-06.jpg"
                                                                                    class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right">
                                                                                    <span class="tt_txt">
                                                                                        Blue
                                                                                    </span>
                                                                                    <span
                                                                                        class="swatch__value bg_color_blue">
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-lg-3 col-md-12 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                                                                    <div class="product-inner pr">
                                                                        <div
                                                                            class="product-image position-relative oh lazyload">
                                                                            <a class="d-block"
                                                                                href="<?php echo base_url('product-detail/1')?>">
                                                                                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/megamenu/pr-09.jpg">
                                                                                </div>
                                                                            </a>
                                                                            <div
                                                                                class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                                                                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/megamenu/pr-10.jpg">
                                                                                </div>
                                                                            </div>
                                                                            <div class="nt_add_w ts__03 pa ">
                                                                                <a href="#"
                                                                                    class="wishlistadd cb chp ttip_nt tooltip_right">
                                                                                    <span class="tt_txt">
                                                                                        Add to
                                                                                        Wishlist
                                                                                    </span>
                                                                                    <i class="facl facl-heart-o">
                                                                                    </i>
                                                                                </a>
                                                                            </div>
                                                                            <div
                                                                                class="hover_button op__0 tc pa flex column ts__03">
                                                                                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                                                                    href="#">
                                                                                    <span class="tt_txt">
                                                                                        Quick
                                                                                        view
                                                                                    </span>
                                                                                    <i class="iccl iccl-eye">
                                                                                    </i>
                                                                                    <span>
                                                                                        Quick view
                                                                                    </span>
                                                                                </a>
                                                                                <a href="#"
                                                                                    class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left">
                                                                                    <span class="tt_txt">
                                                                                        Quick
                                                                                        Shop
                                                                                    </span>
                                                                                    <i class="iccl iccl-cart">
                                                                                    </i>
                                                                                    <span>
                                                                                        Quick Shop
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                            <div
                                                                                class="product-attr pa ts__03 cw op__0 tc">
                                                                                <p class="truncate mg__0 w__100">
                                                                                    S,
                                                                                    M
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-info mt__15">
                                                                            <h3
                                                                                class="product-title position-relative fs__14 mg__0 fwm">
                                                                                <a class="cd chp"
                                                                                    href="<?php echo base_url('product-detail/1')?>">
                                                                                    Mercury
                                                                                    Tee
                                                                                </a>
                                                                            </h3>
                                                                            <span class="price dib mb__5">
                                                                                $68.00
                                                                            </span>
                                                                            <div
                                                                                class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                                                                <span
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/products/pr-15.jpg"
                                                                                    class="nt_swatch_on_bg swatch__list--item position-relative ttip_nt tooltip_top_right">
                                                                                    <span class="tt_txt">
                                                                                        White
                                                                                        Cream
                                                                                    </span>
                                                                                    <span
                                                                                        class="swatch__value bg_color_white-cream lazyload"
                                                                                        data-bgset="<?php echo UI_ASSETS ?>images/products/dot-01.jpg">
                                                                                    </span>
                                                                                </span>
                                                                                <span
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/products/pr-14.jpg"
                                                                                    class="nt_swatch_on_bg swatch__list--item position-relative ttip_nt tooltip_top_right">
                                                                                    <span class="tt_txt">
                                                                                        Heart
                                                                                        Dotted
                                                                                    </span>
                                                                                    <span
                                                                                        class="swatch__value bg_color_heart-dotted lazyload"
                                                                                        data-bgset="<?php echo UI_ASSETS ?>images/products/dot-02.jpg">
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-lg-3 col-md-12 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                                                                    <div class="product-inner pr">
                                                                        <div
                                                                            class="product-image position-relative oh lazyload">
                                                                            <span class="tc nt_labels pa pe_none cw">
                                                                                <span class="onsale nt_label">
                                                                                    <span>
                                                                                        -34%
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                            <a class="d-block"
                                                                                href="<?php echo base_url('product-detail/1')?>">
                                                                                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/megamenu/pr-11.jpg">
                                                                                </div>
                                                                            </a>
                                                                            <div
                                                                                class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                                                                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/megamenu/pr-12.jpg">
                                                                                </div>
                                                                            </div>
                                                                            <div class="nt_add_w ts__03 pa ">
                                                                                <a href="#"
                                                                                    class="wishlistadd cb chp ttip_nt tooltip_right">
                                                                                    <span class="tt_txt">
                                                                                        Add to
                                                                                        Wishlist
                                                                                    </span>
                                                                                    <i class="facl facl-heart-o">
                                                                                    </i>
                                                                                </a>
                                                                            </div>
                                                                            <div
                                                                                class="hover_button op__0 tc pa flex column ts__03">
                                                                                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                                                                    href="#">
                                                                                    <span class="tt_txt">
                                                                                        Quick
                                                                                        view
                                                                                    </span>
                                                                                    <i class="iccl iccl-eye">
                                                                                    </i>
                                                                                    <span>
                                                                                        Quick view
                                                                                    </span>
                                                                                </a>
                                                                                <a href="#"
                                                                                    class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left">
                                                                                    <span class="tt_txt">
                                                                                        Quick
                                                                                        Shop
                                                                                    </span>
                                                                                    <i class="iccl iccl-cart">
                                                                                    </i>
                                                                                    <span>
                                                                                        Quick Shop
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-info mt__15">
                                                                            <h3
                                                                                class="product-title position-relative fs__14 mg__0 fwm">
                                                                                <a class="cd chp"
                                                                                    href="<?php echo base_url('product-detail/1')?>">
                                                                                    La
                                                                                    Bohème Rose Gold
                                                                                </a>
                                                                            </h3>
                                                                            <span class="price dib mb__5">
                                                                                <del>
                                                                                    $60.00
                                                                                </del>
                                                                                <ins>
                                                                                    $40.00
                                                                                </ins>
                                                                            </span>
                                                                            <div
                                                                                class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                                                                <span
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/products/pr-27.jpg"
                                                                                    class="nt_swatch_on_bg swatch__list--item position-relative ttip_nt tooltip_top_right">
                                                                                    <span class="tt_txt">
                                                                                        Pink
                                                                                    </span>
                                                                                    <span
                                                                                        class="swatch__value bg_color_pink lazyload">
                                                                                    </span>
                                                                                </span>
                                                                                <span
                                                                                    data-bgset="<?php echo UI_ASSETS ?>images/products/pr-35.jpg"
                                                                                    class="nt_swatch_on_bg swatch__list--item position-relative ttip_nt tooltip_top_right">
                                                                                    <span class="tt_txt">
                                                                                        Black
                                                                                    </span>
                                                                                    <span
                                                                                        class="swatch__value bg_color_black lazyload">
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> -->
                                        <li
                                            class="type_dropdown menu-item has-children menu_has_offsets menu_right pos_right">
                                            <a class="lh__1 flex al_center pr" href="<?php echo base_url('blog')?>">
                                                Blog
                                            </a>
                                        </li>
                                        <li
                                            class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
                                            <a class="lh__1 flex al_center pr"
                                                href="<?php echo base_url('contact-us');?>">
                                                Contact
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-auto col-md-4 col-3 tr col_group_btns">
                                <div class="nt_action in_flex al_center cart_des_1">
                                    <a class="icon_search push_side cb chp" data-id="#nt_search_canvas" href="#">
                                        <i class="iccl iccl-search">
                                        </i>
                                    </a>
                                    <?php if(empty($this->session->userdata[CUSTOMER_SESSION])){ ?>
                                        <div class="my-account ts__05 position-relative dn db_md">
                                            <a class="cb chp db push_side" href="#" data-id="#nt_login_canvas">
                                                <i class="iccl iccl-user">
                                                </i>
                                            </a>
                                        </div>
                                    <?php }else{ ?>
                                        <div class="my-account ts__05 position-relative dn db_md">
                                            <a class="cb chp db push_side" href="#" data-id="#nt_login_canvas">
                                                <i class="iccl iccl-user">
                                                </i>
                                            </a>
                                        </div>
                                   <?php } ?>

                                    <a class="icon_like cb chp position-relative dn db_md js_link_wis"
                                        href="<?php echo base_url('whishlist')?>">
                                        <i class="iccl iccl-heart pr">
                                        <?php  if(!empty($this->session->userdata[CUSTOMER_SESSION])){ ?>
                                            <span class="op__0 ts_op pa tcount bgb br__50 cw tc total-whishlist">
                                                3
                                            </span>
                                        <?php } ?>
                                        </i>
                                    </a>
                                    <div class="icon_cart pr">
                                        <a class="push_side position-relative cb chp db" href="#"
                                            data-id="#nt_cart_canvas">
                                            <i class="iccl iccl-cart pr">
                                                <?php  if(!empty($this->session->userdata[CUSTOMER_SESSION])){ 
                                                   $customer_id =  $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
                                                   $totalCart   =   $this->Master_m->getTotalCountCartProdut($customer_id);
                                                ?>
                                                <span class="op__0 ts_op pa tcount bgb br__50 cw tc">
                                                   <?php echo $totalCart; ?>
                                                </span>
                                                <?php } ?>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header  -->