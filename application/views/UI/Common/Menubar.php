<!--Top bar pink color section-->
<!-- <div id="kalles-section-header_banner" class="kalles-section-header_banner">
    <div class="h__banner bgp pt__10 pb__10 fs__14 flex fl_center al_center pr oh show_icon_false">
        <div class="container">
            <div class="row al_center">
                <div class="col-auto op__0">
                    <a href="#" class="h_banner_close pr pl__10 cw z_index">
                        close
                    </a>
                </div>
                <a href="<?php echo base_url('shop')?>" class="pa t__0 l__0 r__0 b__0 z_100">
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
</div> -->
<?php $totalCart = ''; $totalWishlist = '';
    if(!empty($this->session->userdata[CUSTOMER_SESSION])){   
        $customer_id        =  $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
        $totalCart          =   $this->Master_m->getTotalCountCartProdut($customer_id);
        $totalWishlist      =   $this->Master_m->getTotalWhishList($customer_id);
    }
    $mensCategory       = $this->Master_m->getChildCategory('men',null);
    $womensCategory     = $this->Master_m->getChildCategory('women',null);
    $kidsCategory       = $this->Master_m->getChildCategory('kids',null);
?>

<div id="nt_wrapper">
    <!-- Start Header -->
    <header id="ntheader" class="ntheader header_3 h_icon_iccl ">
        <div class="kalles-header__wrapper ntheader_wrapper pr z_200">
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
                                            <a class="lh__1 flex al_center pr"
                                                href="<?php echo base_url('shop');?>">
                                                Shop
                                            </a>
                                        </li>
                                        <li
                                            class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
                                            <a class="lh__1 flex al_center pr" href="<?php echo base_url('shop?category=men');?>">
                                                Men
                                            </a>
                                            <div class="sub-menu">
                                                <div class="lazy_menu lazyload">
                                                    <?php if(!empty($mensCategory)){
                                                        foreach($mensCategory as $row){
                                                            $category_name      = $row['category_name'];
                                                            $short_code         = $row['short_code'];
                                                            $category_id        = $row['category_id'];
                                                    ?>
                                                    <div class="menu-item">
                                                        <a
                                                            href="<?php echo base_url('shop?category='.$short_code.'&cid='.$category_id);?>"><?php echo $category_name; ?></a>
                                                    </div>
                                                    <?php } }?>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
                                            <a class="lh__1 flex al_center pr" href="<?php echo base_url('shop?category=women');?>">
                                                Women
                                            </a>
                                            <div class="sub-menu">
                                                <div class="lazy_menu lazyload">
                                                    <?php if(!empty($womensCategory)){
                                                        foreach($womensCategory as $row1){
                                                            $w_category_name      = $row1['category_name'];
                                                            $w_short_code         = $row1['short_code'];
                                                            $w_category_id          = $row1['category_id'];
                                                    ?>
                                                    <div class="menu-item">
                                                        <a
                                                            href="<?php echo base_url('shop?category='.$w_short_code.'&cid='.$w_category_id);?>"><?php echo $w_category_name; ?></a>
                                                    </div>
                                                    <?php } }?>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
                                            <a class="lh__1 flex al_center pr" href="<?php echo base_url('shop?category=kids');?>">
                                                Kids
                                            </a>
                                            <div class="sub-menu">
                                                <div class="lazy_menu lazyload">
                                                    <?php if(!empty($kidsCategory)){
                                                        foreach($kidsCategory as $kids){
                                                            $k_category_name      = $kids['category_name'];
                                                            $k_short_code         = $kids['short_code'];
                                                            $k_category_id        = $kids['category_id'];
                                                    ?>
                                                    <div class="menu-item">
                                                        <a
                                                            href="<?php echo base_url('shop?category='.$k_short_code.'&cid='.$k_category_id);?>"><?php echo $k_category_name; ?></a>
                                                    </div>
                                                    <?php } }?>
                                                </div>
                                            </div>
                                        </li>
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
                                    <?php if(empty($this->session->userdata[CUSTOMER_SESSION])){ ?>
                                    <div class="my-account ts__05 position-relative dn db_md">
                                        <a class="cb chp db push_side" href="#" data-id="#nt_login_canvas">
                                            <i class="iccl iccl-user">
                                            </i>
                                        </a>
                                    </div>
                                    <?php }else{ ?>
                                    <a class="icon_search push_side cb chp" data-id="#nt_search_canvas"
                                        href="<?php echo base_url('logout')?>">
                                        <i class="pegk pe-7s-power">
                                        </i>
                                    </a>
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
                                                <?php echo $totalWishlist;?>
                                            </span>
                                            <?php } ?>
                                        </i>
                                    </a>
                                    <div class="icon_cart pr">
                                        <a class="push_side position-relative cb chp db" href="#"
                                            data-id="#nt_cart_canvas">
                                            <i class="iccl iccl-cart pr">
                                                <?php  if(!empty($this->session->userdata[CUSTOMER_SESSION])){                                                    
                                                   
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