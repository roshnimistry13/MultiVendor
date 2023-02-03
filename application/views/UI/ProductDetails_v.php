<?php 
    if(!empty($product_detail)){
        $product_id             = $product_detail['product_id'];
        $product_name           = $product_detail['product_name'];
        $net_price              = $product_detail['net_price'];
        $mrp_price              = $product_detail['mrp_price'];
        $discount               = $product_detail['discount'];
        $discount_amt           = $product_detail['discount_amt'];
        $image                  = explode('|',$product_detail['image']);
        $short_description      = $product_detail['short_description'];
        $description            = $product_detail['description'];
        $brand_name             = $product_detail['brand_name'];
        $category_name          = $product_detail['category_name'];
        $vendor_name            = $product_detail['vendor_name'];
        $quantity               = $product_detail['qty'];
        $stock                  = $product_detail['stock'];
    }
?>
<div id="nt_content" class="product_detail_page" data-pid="<?php echo $product_id;?>">
    <div class="sp-single sp-single-1 des_pr_layout_1 mb__60">
        <div class="bgbl pt__5 pb__5 lh__1">
            <div class="container">
                <div class="row al_center">
                    <div class="col">
                        <nav class="sp-breadcrumb">
                            <?php if(!empty($breadcrumbs)){?>
                            <?php echo $breadcrumbs; ?>
                            <?php }?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container container_cat cat_default">
            <input type="hidden" id="txt_variant_code" name="txt_variant_code" value="<?php echo $variant_code;?>">
            <div class="row product mt__40">
                <div class="col-md-12 col-12 thumb_left">
                    <div class="row  pr_sticky_content">
                        <div
                            class="col-md-6 col-12 pr product-images img_action_zoom pr_sticky_img kalles_product_thumnb_slide">
                            <div class="row theiaStickySidebar">
                                <div class="col-12 col-lg col_thumb">
                                    <div class="p-thumb p-thumb_ppr images sp-pr-gallery equal_nt nt_contain ratio_imgtrue position_8 nt_slider pr_carousel"
                                        data-flickity='{"initialIndex": ".media_id_001","fade":true,"draggable":">1","cellAlign": "center","wrapAround": true,"autoPlay": false,"prevNextButtons":true,"adaptiveHeight": true,"imagesLoaded": false, "lazyLoad": 0,"dragThreshold" : 6,"pageDots": false,"rightToLeft": false }'>
                                        <?php if(!empty($image)){
                                            foreach($image as $img) { ?>
                                        <div class="img_ptw p_ptw p-item sp-pr-gallery__img w__100 nt_bg_lz lazyload padding-top__127_66 media_id_001"
                                            data-mdid="001" data-height="1200" data-width="1128"
                                            data-ratio="0.7833333333333333" data-mdtype="image"
                                            data-bgset="<?php echo base_url().PRODUCT_IMAGE_PATH.$product_id.'/'.$img ?>"
                                            data-cap="">
                                        </div>
                                        <?php } } ?>
                                    </div>
                                    <div class="p_group_btns pa flex">
                                        <button
                                            class="br__40 tc flex al_center fl_center show_btn_pr_gallery ttip_nt tooltip_top_left">
                                            <i class="las la-expand-arrows-alt"></i><span class="tt_txt">Click to
                                                enlarge</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-auto col_nav nav_medium t4_show">
                                    <div class="p-nav ratio_imgtrue row equal_nt nt_cover position_8 nt_slider pr_carousel"
                                        data-flickityjs='{"initialIndex": ".media_id_001","cellSelector": ".n-item:not(.is_varhide)","cellAlign": "left","asNavFor": ".p-thumb","wrapAround": true,"draggable": ">1","autoPlay": 0,"prevNextButtons": 0,"percentPosition": 1,"imagesLoaded": 0,"pageDots": 0,"groupCells": 3,"rightToLeft": false,"contain":  1,"freeScroll": 0}'>
                                    </div>
                                    <button type="button" aria-label="Previous" class="btn_pnav_prev pe_none">
                                        <i class="las la-angle-up"></i>
                                    </button>
                                    <button type="button" aria-label="Next" class="btn_pnav_next pe_none">
                                        <i class="las la-angle-down"></i>
                                    </button>
                                </div>
                                <div class="dt_img_zoom pa t__0 r__0 dib"></div>
                            </div>
                        </div>


                        <div class="col-md-6 col-12 product-infors pr_sticky_su">
                            <div class="theiaStickySidebar">
                                <div class="kalles-section-pr_summary kalles-section summary entry-summary mt__30">
                                    <span
                                        class="product_title entry-title fs__16"><?php echo ucwords($brand_name); ?></span>
                                    <h1 class="product_title entry-title fs__16"><?php echo ucwords($product_name); ?>
                                    </h1>
                                    <div class="flex wrap fl_between al_center price-review">
                                        <p class="price_range" id="price_ppr">
                                            <span class="price dib mb__5">
                                                <i
                                                    class="fa fa-inr cr fs__14"></i><ins><?php echo moneyFormatIndia_ui($net_price); ?></ins>
                                                &nbsp;
                                                <?php if($discount !="" && $discount != null && !empty($discount)) {?>
                                                <i class="fa fa-inr fs__14"></i>
                                                <small><del><?php echo moneyFormatIndia_ui($mrp_price); ?></del></small>
                                                <small>(<?php echo $discount;?>% Off)</small>
                                                <?php } ?>
                                            </span>
                                        </p>
                                        <?php if(!empty($product_review_list)) {
                                            $totalReviewcount = count($product_review_list);
                                            $total_rate     = 0;
                                            $avg_rate       = 0;
                                            $avg_rate_star  = 0;
                                            foreach($product_review_list as $row2){
                                                $total_rate += $row2['star_rate'];
                                            }
                                             if($total_rate > 0){
                                                $avg_rate           = $total_rate / $totalReviewcount;
                                                $avg_rate_star      =  round($avg_rate);
                                             }
                                            
                                        ?>
                                        <a href="#tab_reviews_product" class="rating_sp_kl dib">
                                            <div class="kalles-rating-result">
                                                <span class="kalles-rating-result__pipe">
                                                    <span
                                                        class="kalles-rating-result__start kalles-rating-result__start--big <?php echo $class = ($avg_rate_star >0 && $avg_rate_star == 1) ? "active" : "" ?>"></span>
                                                    <span
                                                        class="kalles-rating-result__start kalles-rating-result__start--big <?php echo $class = ($avg_rate_star >0 && $avg_rate_star == 2) ? "active" : "" ?>"></span>
                                                    <span
                                                        class="kalles-rating-result__start kalles-rating-result__start--big <?php echo $class = ($avg_rate_star >0 && $avg_rate_star == 3) ? "active" : "" ?>"></span>
                                                    <span
                                                        class="kalles-rating-result__start kalles-rating-result__start--big <?php echo $class = ($avg_rate_star >0 && $avg_rate_star == 4) ? "active" : "" ?>"></span>
                                                    <span
                                                        class="kalles-rating-result__start kalles-rating-result__start--big <?php echo $class = ($avg_rate_star >0 && $avg_rate_star == 5) ? "active" : "" ?>"></span>
                                                </span>
                                                <span
                                                    class="kalles-rating-result__number">(<?php echo $totalReviewcount; ?>
                                                    reviews)</span>
                                            </div>
                                        </a>
                                        <?php } ?>
                                    </div>
                                    <div class="pr_short_des">
                                        <p class="mg__0"><?php echo $short_description; ?></p>
                                    </div>
                                    <div class="swatch__title">
                                        <span>Seller : <?php echo $vendor_name; ?></span>
                                    </div>
                                    <div class="btn-atc atc-slide btn_des_1 btn_txt_3">
                                        <div id="callBackVariant_ppr">
                                            <?php if($stock > 0 && $stock <= 10){ ?>
                                            <span class="cr"><?php echo $stock;?> left</span>
                                            <?php } ?>
                                            <div class="variations mb__40 style__rectangle size_medium">
                                                <?php if(!empty($elearr)){
                                                    foreach($elearr as $key => $val){
                                                        $elementVal = $val;                                                           
                                                    ?>
                                                <div class="swatch is-label kalles_swatch_js product-variants"
                                                    data-elename="<?php echo getElementNameByID($key)?>"
                                                    data-elements="<?php echo $key?>">
                                                    <h4 class="swatch__title"><?php echo getElementNameByID($key);?>:
                                                        <span class="nt_name_current user_choose_js"></span>
                                                    </h4>
                                                    <ul class="swatches-select swatch__list_pr d-flex">
                                                        <?php
                                                        foreach($elementVal as $key1 => $val1){                                                            
                                                            // $attributes = explode(',',$val1);
                                                            $attributes = $val1;
                                                            $i      = 0;
                                                            $count  = count($attributes);
                                                            
                                                            if(!empty($val1))
                                                            {                        
                                                                $ele_id = $val1['element_id'];
                                                                $atr_id = $val1['attr_id'];
                                                                $is_selected = $val1['is_selected'];
                                                            ?>
                                                        <li class="nt-swatch swatch_pr_item pr <?php echo $is_selected; ?> product-varient"
                                                            data-escape="<?php echo $key1;?>"
                                                            data-attrid="<?php echo $atr_id; ?>"
                                                            data-eleid="<?php echo $ele_id; ?>">
                                                            <span class="swatch__value_pr"><?php echo $key1;?></span>
                                                        </li>
                                                        <?php } } ?>
                                                    </ul>
                                                </div>
                                                <?php } }?>
                                            </div>
                                            <div class="nt_cart_form variations_form variations_form_ppr">
                                                <div class="variations_button in_flex column w__100 buy_qv_false">
                                                    <div class="flex wrap">
                                                        <div
                                                            class="nt_add_w ts__03 pa order-3 <?php echo $wish_list_class;?>">
                                                            <a href="#"
                                                                class="wishlistadd cb chp ttip_nt tooltip_top_left"
                                                                data-pid="<?php echo $product_id;?>">
                                                                <span class="tt_txt">Add to Wishlist</span><i
                                                                    class="facl facl-heart-o"></i>
                                                            </a>
                                                        </div>
                                                        <?php if($stock > 0 && $stock != "" && $stock != null){ ?>
                                                        <button type="submit" data-time="6000" data-ani="shake"
                                                            class="single_add_to_cart_button button truncate w__100 mt__20 order-4 d-inline-block animated btnAddToCart">
                                                            <span class="txt_add ">ADD TO BAG</span>
                                                        </button>
                                                        <?php }else{?>
                                                        <a href="javascript:void(0)"
                                                            class="truncate out_stock button pe_none text-danger">Out of
                                                            stock</a>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-3">
                                                <h4 class="swatch__title">Available offers</h4>
                                                <div class="d-flex">
                                                    <span class="mr-2">
                                                        <img src="<?php echo UI_ASSETS ?>images/tag.png"></span>
                                                    <span>Bank Offer10% off on Citi Credit Card and EMI Transactions, up
                                                        to ₹1,500. On orders of ₹5,000 and above <a class="tc_offers"
                                                            href="#">T&C</a> </span>
                                                </div>
                                                <div class="d-flex">
                                                    <span class="mr-2">
                                                        <img src="<?php echo UI_ASSETS ?>images/tag.png">
                                                    </span>
                                                    <span>Bank Offer10% off on Citi Credit Card and EMI Transactions, up
                                                        to ₹1,500. On orders of ₹5,000 and above
                                                        <a class="tc_offers" href="#">T&C</a>
                                                    </span>
                                                </div>
                                                <div class="d-flex">
                                                    <span class="mr-2">
                                                        <img src="<?php echo UI_ASSETS ?>images/tag.png">
                                                    </span>
                                                    <span>
                                                        Bank Offer10% off on ICICI Bank Credit Card Transactions, up
                                                        to ₹1250. On orders of ₹5000 and above
                                                        <a class="tc_offers" href="#">T&C</a>
                                                    </span>
                                                </div>
                                                <div class="d-flex">
                                                    <span class="mr-2"> <img
                                                            src="<?php echo UI_ASSETS ?>images/tag.png"></span>
                                                    <span>Bank Offer10% off on ICICI Bank Credit Card EMI Transactions,
                                                        up to ₹1250. On orders of ₹5000 and above
                                                        <a class="tc_offers" href="#">T&C</a>
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="extra-link mt__35 fwsb">
                                        <h5>Best Offer : </h5>
                                    </div> -->

                                    <!-- <div class="product_meta">
                                        <p>Best Price : <span class=" cr"><i class="fa fa-inr cr fs__14"></i>
                                                <?php echo moneyFormatIndia_ui($net_price); ?></span></p>
                                        <ul>
                                            <li>
                                                Coupon Discount: 15% off (Your total saving: Rs. 210)
                                            </li>
                                            <li>
                                                Applicable on: Orders above Rs. 999
                                            </li>
                                            <li>
                                                Coupon code: STEAL15
                                            </li>
                                        </ul>
                                    </div> -->
                                    <div class="social-share tc dn">
                                        <div
                                            class="at-share-btn-elements kalles-social-media d-block text-left fs__0 lh__1">
                                            <a href="https://www.facebook.com/"
                                                class="at-icon-wrapper at-share-btn at-svc-facebook bg-white kalles-social-media__btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                                    class="at-icon at-icon-facebook">
                                                    <g>
                                                        <path
                                                            d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z"
                                                            fill-rule="evenodd"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="https://twitter.com/"
                                                class="at-icon-wrapper at-share-btn at-svc-twitter bg-white kalles-social-media__btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                                    class="at-icon at-icon-twitter">
                                                    <g>
                                                        <path
                                                            d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336"
                                                            fill-rule="evenodd"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="https://www.google.com/gmail/about"
                                                class="at-icon-wrapper at-share-btn at-svc-email bg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                                    class="at-icon at-icon-email kalles-social-media__btn">
                                                    <g>
                                                        <g fill-rule="evenodd"></g>
                                                        <path
                                                            d="M27 22.757c0 1.24-.988 2.243-2.19 2.243H7.19C5.98 25 5 23.994 5 22.757V13.67c0-.556.39-.773.855-.496l8.78 5.238c.782.467 1.95.467 2.73 0l8.78-5.238c.472-.28.855-.063.855.495v9.087z">
                                                        </path>
                                                        <path
                                                            d="M27 9.243C27 8.006 26.02 7 24.81 7H7.19C5.988 7 5 8.004 5 9.243v.465c0 .554.385 1.232.857 1.514l9.61 5.733c.267.16.8.16 1.067 0l9.61-5.733c.473-.283.856-.96.856-1.514v-.465z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="https://www.pinterest.com/"
                                                class="at-icon-wrapper at-share-btn at-svc-pinterest_share bg-white kalles-social-media__btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                                    class="at-icon at-icon-pinterest_share">
                                                    <g>
                                                        <path
                                                            d="M7 13.252c0 1.81.772 4.45 2.895 5.045.074.014.178.04.252.04.49 0 .772-1.27.772-1.63 0-.428-1.174-1.34-1.174-3.123 0-3.705 3.028-6.33 6.947-6.33 3.37 0 5.863 1.782 5.863 5.058 0 2.446-1.054 7.035-4.468 7.035-1.232 0-2.286-.83-2.286-2.018 0-1.742 1.307-3.43 1.307-5.225 0-1.092-.67-1.977-1.916-1.977-1.692 0-2.732 1.77-2.732 3.165 0 .774.104 1.63.476 2.336-.683 2.736-2.08 6.814-2.08 9.633 0 .87.135 1.728.224 2.6l.134.137.207-.07c2.494-3.178 2.405-3.8 3.533-7.96.61 1.077 2.182 1.658 3.43 1.658 5.254 0 7.614-4.77 7.614-9.067C26 7.987 21.755 5 17.094 5 12.017 5 7 8.15 7 13.252z"
                                                            fill-rule="evenodd"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="https://www.messenger.com/"
                                                class="at-icon-wrapper at-share-btn at-svc-messenger bg-white kalles-social-media__btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                                    class="at-icon at-icon-messenger">
                                                    <g>
                                                        <path
                                                            d="M16 6C9.925 6 5 10.56 5 16.185c0 3.205 1.6 6.065 4.1 7.932V28l3.745-2.056c1 .277 2.058.426 3.155.426 6.075 0 11-4.56 11-10.185C27 10.56 22.075 6 16 6zm1.093 13.716l-2.8-2.988-5.467 2.988 6.013-6.383 2.868 2.988 5.398-2.987-6.013 6.383z"
                                                            fill-rule="evenodd"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="wrap_des_pr">
            <div class="container container_des">
                <div class="kalles-section-pr_description kalles-section kalles-tabs sp-tabs nt_section">
                    <ul class="ul_none ul_tabs is-flex fl_center fs__16 des_mb_2 des_style_1">
                        <li class="tab_title_block active">
                            <a class="db cg truncate pr" href="#tab_product_description">Product Detail</a>
                        </li>
                        <?php if(!empty($categoryData) && ($categoryData[0]['return_or_replace'] != "" || $categoryData[0]['return_or_replace'] != null)){?>
                        <li class="tab_title_block ">
                            <a class="db cg truncate pr" href="#tab_shipping_return">Shipping & Return</a>
                        </li>
                        <?php } ?>
                        <li class="tab_title_block">
                            <a class="db cg truncate pr" href="#tab_warranty_and_shipping">Warranty Detail</a>
                        </li>
                        <?php if(!empty($product_review_list)) {?>
                        <li class="tab_title_block">
                            <a class="db cg truncate pr" href="#tab_reviews_product">Reviews</a>
                        </li>
                        <?php } ?>
                    </ul>

                    <div class="panel entry-content sp-tab des_mb_2 des_style_1 active" id="tab_product_description"
                        style="display: block;">
                        <div class="js_ck_view"></div>
                        <div class="heading bgbl dn">
                            <a class="tab-heading flex al_center fl_between pr cd chp fwm"
                                href="#tab_product_description"></a>
                        </div>
                        <div class="sp-tab-content">
                            <?php echo $description; ?>
                        </div>
                    </div>

                    <?php if(!empty($categoryData) && ($categoryData[0]['return_or_replace'] != "" || $categoryData[0]['return_or_replace'] != null)){
                        $return_replace                     = $categoryData[0]['return_or_replace'];
                        $return_replace_validity            = $categoryData[0]['return_replace_validity'];
                        $return_replace_text                = ""; 
                        if($return_replace != "" || $return_replace != null){
                            if(strtolower($return_replace) == "replace")
                                $return_replace_text = $return_replace_validity. " DAYS EXCHANGE";
                            else if(strtolower($return_replace) == "return")
                                $return_replace_text = $return_replace_validity. " DAYS RETURN";
                            else $return_replace_text = $return_replace_validity. " DAYS RETURN & EXCHANGE";
                        }
                    ?>
                    <div class="panel entry-content sp-tab des_mb_2 des_style_1 dn" id="tab_shipping_return"
                        style="display: none;">
                        <div class="js_ck_view"></div>
                        <div class="heading bgbl dn">
                            <a class="tab-heading flex al_center fl_between pr cd chp fwm"
                                href="#tab_shipping_return"></a>
                        </div>
                        <div class="sp-tab-content">
                            <div class="kalles-section nt_section type_shipping py-3">
                                <div class="container">
                                    <div class="row fl_wrap fl_wrap_md oah use_border_false">
                                        <div class="col-12 col-md-6 col-lg-3 mb__25 bl_1581530479619-0">
                                            <div class="nt_shipping nt_icon_deafult tl row no-gutters al_center_">
                                                <div class="col-auto icon medium csi">
                                                    <i class="pegk pe-7s-car"></i>
                                                </div>
                                                <div class="col content">
                                                    <h3 class="title cd fs__14 mg__0 mb__5">DELIVERY BY</h3>
                                                    <p class="mg__0">21 Nov, Monday
                                                    <p class="mg__0">Free shipping on order above $100
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-3 mb__25 bl_1581530479619-1">
                                            <div class="nt_shipping nt_icon_deafult tl row no-gutters al_center_">
                                                <div class="col-auto icon medium csi">
                                                    <i class="pegk pe-7s-credit"></i>
                                                </div>
                                                <div class="col content">
                                                    <h3 class="title cd fs__14 mg__0 mb__5">SUPPORT 24/7</h3>
                                                    <p class="mg__0">Pay on delivery available</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-3 mb__25 bl_1581530479619-2">
                                            <div class="nt_shipping nt_icon_deafult tl row no-gutters al_center_">
                                                <div class="col-auto icon medium csi">
                                                    <i class="pegk pe-7s-refresh"></i>
                                                </div>
                                                <div class="col content">
                                                    <h3 class="title cd fs__14 mg__0 mb__5">
                                                        <?php echo $return_replace_text; ?>
                                                    </h3>
                                                    <p class="mg__0">Simply return it within
                                                        <?php echo $return_replace_validity; ?> days for an exchange.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-3 mb__25 bl_1581530479619-3">
                                            <div class="nt_shipping nt_icon_deafult tl row no-gutters al_center_">
                                                <div class="col-auto icon medium csi">
                                                    <i class="pegk pe-7s-door-lock"></i>
                                                </div>
                                                <div class="col content">
                                                    <h3 class="title cd fs__14 mg__0 mb__5">100% PAYMENT SECURE</h3>
                                                    <p class="mg__0">We ensure secure payment with PEV</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="panel entry-content sp-tab des_mb_2 des_style_1 dn" id="tab_warranty_and_shipping"
                        style="display: none;">
                        <div class="js_ck_view"></div>
                        <div class="heading bgbl dn">
                            <a class="tab-heading flex al_center fl_between pr cd chp fwm"
                                href="#tab_warranty_and_shipping"></a>
                        </div>
                        <div class="sp-tab-content">

                        </div>
                    </div>
                    <?php if(!empty($product_review_list)) {?>
                    <div class="panel entry-content sp-tab des_mb_2 des_style_1 dn" id="tab_reviews_product"
                        style="display: none;">
                        <div class="js_ck_view"></div>
                        <div class="heading bgbl dn">
                            <a class="tab-heading flex al_center fl_between pr cd chp fwm"
                                href="#tab_reviews_product"><span class="txt_h_tab">Reviews</span><span
                                    class="nav_link_icon ml__5"></span></a>
                        </div>
                        <div class="sp-tab-content">
                            <div class="lt-block-reviews">
                                <div class="r--desktop r--tablet w__100">
                                    <div id="r--masonry-theme" class="r--show-part-preview">
                                        <div class="r--masonry-theme">
                                            <div class="header-v1 masonry-header">
                                                <div class="r--header">
                                                    <div class="r--overview">
                                                        <div class="r--overview-left">
                                                            <div class="r--star-block r--star-850">
                                                                <span class="r--title-average">Average</span>
                                                                <span
                                                                    class="r--stars_average"><?php echo ($avg_rate >0) ?  round($avg_rate,1) : "" ?></span>
                                                                <div class="r--stars cpl">
                                                                    <div class="kalles-rating-result">
                                                                        <span class="kalles-rating-result__pipe">
                                                                            <span
                                                                                class="kalles-rating-result__start kalles-rating-result__start--big <?php echo $class = ($avg_rate_star >0 && $avg_rate_star == 1) ? "active" : "" ?>"></span>
                                                                            <span
                                                                                class="kalles-rating-result__start kalles-rating-result__start--big <?php echo $class = ($avg_rate_star >0 && $avg_rate_star == 2) ? "active" : "" ?>"></span>
                                                                            <span
                                                                                class="kalles-rating-result__start kalles-rating-result__start--big <?php echo $class = ($avg_rate_star >0 && $avg_rate_star == 3) ? "active" : "" ?>"></span>
                                                                            <span
                                                                                class="kalles-rating-result__start kalles-rating-result__start--big <?php echo $class = ($avg_rate_star >0 && $avg_rate_star == 4) ? "active" : "" ?>"></span>
                                                                            <span
                                                                                class="kalles-rating-result__start kalles-rating-result__start--big <?php echo $class = ($avg_rate_star >0 && $avg_rate_star == 5) ? "active" : "" ?>"></span>
                                                                        </span>
                                                                    </div>
                                                                    <span
                                                                        class="r--total-view"><?php echo $totalReviewcount; ?>
                                                                        <span>reviews</span></span>
                                                                </div>
                                                            </div>
                                                            <table class="r--rateList r--rate-850">
                                                                <tbody>
                                                                    <tr class="">
                                                                        <td class="r--rate-name">
                                                                            <div>5</div>
                                                                        </td>
                                                                        <td class="r--rate-numeral">
                                                                            <span class="r--total-bar-default">
                                                                                <span class="r--bar_bak_gray width__93">
                                                                                    <span class="r--bar-active">
                                                                                        <span
                                                                                            class="r--rate-percent-default">12
                                                                                            <span
                                                                                                class="r--rate-after"></span>
                                                                                            <span
                                                                                                class="r--rate-before"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="r--disable">
                                                                        <td class="r--rate-name">
                                                                            <div>4</div>
                                                                        </td>
                                                                        <td class="r--rate-numeral">
                                                                            <span class="r--total-bar-default">
                                                                                <span class="r--bar_bak_gray">
                                                                                    <span
                                                                                        class="r--bar-active r--noneBack">
                                                                                        <span
                                                                                            class="r--rate-percent-default">0
                                                                                            <span
                                                                                                class="r--rate-after"></span>
                                                                                            <span
                                                                                                class="r--rate-before"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="">
                                                                        <td class="r--rate-name">
                                                                            <div>3</div>
                                                                        </td>
                                                                        <td class="r--rate-numeral">
                                                                            <span class="r--total-bar-default">
                                                                                <span class="r--bar_bak_gray width__7">
                                                                                    <span class="r--bar-active">
                                                                                        <span
                                                                                            class="r--rate-percent-default">1
                                                                                            <span
                                                                                                class="r--rate-after"></span>
                                                                                            <span
                                                                                                class="r--rate-before"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="r--disable">
                                                                        <td class="r--rate-name">
                                                                            <div>2</div>
                                                                        </td>
                                                                        <td class="r--rate-numeral">
                                                                            <span class="r--total-bar-default">
                                                                                <span class="r--bar_bak_gray">
                                                                                    <span
                                                                                        class="r--bar-active r--noneBack">
                                                                                        <span
                                                                                            class="r--rate-percent-default">0
                                                                                            <span
                                                                                                class="r--rate-after"></span>
                                                                                            <span
                                                                                                class="r--rate-before"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="r--disable">
                                                                        <td class="r--rate-name">
                                                                            <div>1</div>
                                                                        </td>
                                                                        <td class="r--rate-numeral">
                                                                            <span class="r--total-bar-default">
                                                                                <span class="r--bar_bak_gray">
                                                                                    <span
                                                                                        class="r--bar-active r--noneBack">
                                                                                        <span
                                                                                            class="r--rate-percent-default">0
                                                                                            <span
                                                                                                class="r--rate-after"></span>
                                                                                            <span
                                                                                                class="r--rate-before"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </span>
                                                                            </span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="r--grid">
                                                <?php foreach($product_review_list as $review){
                                                    $rating         = $review['star_rate'];                                                                                                    

                                                    $today 	= new DateTime(date('d-M-Y'));;
                                                    $e_date 	= new DateTime(date('d-M-Y',strtotime($review['review_date'])));
                                                    $days_diff 	= $today->diff($e_date);
                                                    if($days_diff->d > 0){
                                                        $days = $days_diff->d.' days ago';
                                                    }else{
                                                        $days = 'Today';
                                                    }
                                                ?>
                                                <div class="r--grid-item">
                                                    <div class="r--author r--text-limit">
                                                        <div class="r--avatar-default text-center text-white">
                                                            <?php echo substr($review['customer_name'],0,1);?>
                                                        </div>
                                                        <span
                                                            class="r--author-review"><?php echo $review['customer_name']?></span>
                                                    </div>
                                                    <div class="r--item-body">
                                                        <div class="r--item-body-top">
                                                            <div
                                                                class="r--stars-author r--star-head r--body-item r--flex-center">
                                                                <div class="kalles-rating-result">
                                                                    <span class="kalles-rating-result__pipe">
                                                                        <span
                                                                            class="kalles-rating-result__start kalles-rating-result__start--big <?php echo $class = ($rating == 1) ? "active" : "" ?>"></span>
                                                                        <span
                                                                            class="kalles-rating-result__start kalles-rating-result__start--big <?php echo $class = ($rating == 2) ? "active" : "" ?>"></span>
                                                                        <span
                                                                            class="kalles-rating-result__start kalles-rating-result__start--big <?php echo $class = ($rating == 3) ? "active" : "" ?>"></span>
                                                                        <span
                                                                            class="kalles-rating-result__start kalles-rating-result__start--big <?php echo $class = ($rating == 4) ? "active" : "" ?>"></span>
                                                                        <span
                                                                            class="kalles-rating-result__start kalles-rating-result__start--big <?php echo $class = ($rating == 5) ? "active" : "" ?>"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="r--title-review r--body-item">
                                                            <?php echo $review['review_title']?>
                                                        </p>
                                                        <p class="r--content-review r--body-item">
                                                            <?php echo $review['review_content']?>
                                                        </p>
                                                        <time datetime="2020-01-28T17:29:54Z"
                                                            class="r--date-review r--top r--text-limit"><?php echo $days; ?>
                                                        </time>
                                                    </div>
                                                </div>
                                                <?php } ?>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <!-- SIMILAR PRODUCTS LIST -->

        <?php if(!empty($similer_products)){?>
        <div class="kalles-section tp_se_cdt">
            <div class="related product-extra mt__20 lazyload">
                <div class="container">
                    <div class="wrap_title  des_title_2">
                        <h3 class="section-title tc pr flex fl_center al_center fs__24 title_2">
                            <span class="mr__10 ml__10">
                                Similar Products
                            </span>
                        </h3>
                        <span class="dn tt_divider">
                            <span>
                            </span>
                            <i class="dn clprfalse title_2 la-gem">
                            </i>
                            <span>
                            </span>
                        </span>
                        <span class="section-subtitle db tc sub-title">
                            Top sale in this week
                        </span>
                    </div>
                    <div class="products nt_products_holder nt_slider row row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1 is-draggable"
                        data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": false,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>
                        <?php foreach($similer_products as $row){
                            $product_id         = $row['product_id'];
                            $product_name       = $row['product_name'];
                            $short_code         = $row['short_code'];
                            $net_price          = $row['net_price'];
                            $mrp_price          = $row['mrp_price'];
                            $cover_img          = $row['cover_img'];
                            $discount           = $row['discount'];
                            $variants           = $row['variants'];
                            $imgurl             = base_url().PRODUCT_IMAGE_PATH.$product_id.'/'.$cover_img;
                            $detailurl          = base_url('product-detail/').$short_code;                            
                        ?>
                        <div
                            class="col-lg-2 col-md-3 pr_animated col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <!-- <span class="tc nt_labels pa pe_none cw"><span
                                            class="onsale nt_label"><span>-40%</span></span></span> -->
                                    <a class="d-block" href="product-detail-layout-01.html">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                            data-bgset="<?php echo $imgurl; ?>"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                            data-bgset="<?php echo $imgurl; ?>"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="javascript:void(0)" class="wishlistadd cb chp ttip_nt tooltip_right"
                                            data-pid="<?php echo $product_id; ?>"
                                            onclick="additemToWishlost(<?php echo $product_id; ?>)">
                                            <span class="tt_txt">Add to Wishlist</span>
                                            <i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <?php if(!empty($variants)){?>
                                    <div class="product-attr pa ts__03 cw op__0 tc">
                                        <?php foreach($variants as $key=>$val){?>
                                        <p class="truncate mg__0 w__100 fs__10"><?php echo $val; ?></p>
                                        <?php } ?>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title truncate pr fs__14 mg__0 fwm">
                                        <a class="cd chp"
                                            href="<?php echo $detailurl; ?>"><?php echo $product_name; ?></a>
                                    </h3>
                                    <span class="price dib mb__5">
                                        <i
                                            class="fa fa-inr cr"></i><ins><?php echo moneyFormatIndia_ui($net_price);?></ins>
                                        <i
                                            class="fa fa-inr"></i><del><?php echo moneyFormatIndia_ui($mrp_price);?></del>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php  } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php  } ?>

        <!-- SIMILAR PRODUCTS LIST -->

        <!-- RECENT VIEWED PRODUCTS LIST -->

        <?php if(!empty($recent_product_list)){?>
        <div class="kalles-section tp_se_cdt" id="wrap_des_pr">
            <div class="related product-extra mt__60 lazyload">
                <div class="container py-5">
                    <div class="wrap_title  des_title_2">
                        <h3 class="section-title tc pr flex fl_center al_center fs__24 title_2">
                            <span class="mr__10 ml__10">
                                Recenlty Viewed
                            </span>
                        </h3>
                        <span class="dn tt_divider">
                            <span>
                            </span>
                            <i class="dn clprfalse title_2 la-gem">
                            </i>
                            <span>
                            </span>
                        </span>
                        <span class="section-subtitle db tc sub-title">
                            Top sale in this week
                        </span>
                    </div>
                    <div class="products nt_products_holder nt_slider row row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1 is-draggable"
                        data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": false,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>
                        <?php foreach($recent_product_list as $row){
                            $product_id         = $row['product_id'];
                            $product_name       = $row['product_name'];
                            $short_code         = $row['short_code'];
                            $net_price          = $row['net_price'];
                            $mrp_price          = $row['mrp_price'];
                            $cover_img          = $row['cover_img'];
                            $discount           = $row['discount'];
                            //$variants           = $row['variants'];
                            $imgurl             = base_url().PRODUCT_IMAGE_PATH.$product_id.'/'.$cover_img;
                            $detailurl          = base_url('product-detail/').$short_code;                            
                        ?>
                        <div
                            class="col-lg-2 col-md-3 pr_animated col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <!-- <span class="tc nt_labels pa pe_none cw"><span
                                            class="onsale nt_label"><span>-40%</span></span></span> -->
                                    <a class="d-block" href="product-detail-layout-01.html">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                            data-bgset="<?php echo $imgurl; ?>"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                            data-bgset="<?php echo $imgurl; ?>"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="javascript:void(0)" class="wishlistadd cb chp ttip_nt tooltip_right"
                                            data-pid="<?php echo $product_id; ?>"
                                            onclick="additemToWishlost(<?php echo $product_id; ?>)">
                                            <span class="tt_txt">Add to Wishlist</span>
                                            <i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <!-- <?php if(!empty($variants)){?>                                    
                                    <div class="product-attr pa ts__03 cw op__0 tc">
                                        <?php foreach($variants as $key=>$val){?>
                                            <p class="truncate mg__0 w__100 fs__10"><?php echo $val; ?></p>
                                        <?php } ?>
                                    </div>
                                    <?php } ?> -->
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title truncate pr fs__14 mg__0 fwm">
                                        <a class="cd chp"
                                            href="<?php echo $detailurl; ?>"><?php echo $product_name; ?></a>
                                    </h3>
                                    <span class="price dib mb__5">
                                        <i
                                            class="fa fa-inr cr"></i><ins><?php echo moneyFormatIndia_ui($net_price);?></ins>
                                        <i
                                            class="fa fa-inr"></i><del><?php echo moneyFormatIndia_ui($mrp_price);?></del>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php  } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php  } ?>

        <!-- RECENT VIEWED PRODUCTS LIST -->

    </div>
</div>