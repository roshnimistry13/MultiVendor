<div id="nt_content" id="cart_page">

    <div class="kalles-section page_section_heading">
        <div class="page-head tc pr oh page_bg_img page_head_cart_heading">
            <div class="parallax-inner nt_parallax_false nt_bg_lz pa t__0 l__0 r__0 b__0 lazyload"
                data-bgset="<?php echo UI_ASSETS ?>images/shopping-cart/shopping-cart-head.jpg">
            </div>
            <div class="container pr z_100">
                <h1 class="tu mb__10 cw">Shopping cart</h1>
            </div>
        </div>
    </div>
    <?php  if(!empty($cart)){?> 
    <div class="kalles-section cart_page_section container mt__60">
        <div
            class="frm_cart_ajax_true frm_cart_page nt_js_cart pr oh ">
            <div class="cart_header">
                <div class="row al_center">
                    <div class="col-4">Product</div>
                    <div class="col-2 tc">Quantity</div>
                    <div class="col-2 tc">Price</div>
                    <div class="col-2 tc tr_md">Total</div>
                    <div class="col-2 tc tr_md">Action</div>
                </div>
            </div>
            <?php 
            $total_amt = 0;
            $subtotal = 0;
            
           ?>
            <div class="cart_items js_cat_items">
                <?php
                    foreach($cart as $item){ 
                        $product_id             =  $item['product_id'];
                        $short_code             =  $item['short_code'];
                        $quantity               =  $item['quantity'];
                        $stock                  =  $item['stock'];
                        $net_price              =  $item['net_price'];
                        $elements_attributes    =  json_decode($item['elements_attributes'],true);
                        $final_price            =  $quantity  * $net_price;
                        $subtotal               =  $final_price + $subtotal;?>
                    <div class="cart_item js_cart_item cart_item_<?php echo $item['product_id'];?>">
                        <div class="ld_cart_bar"></div>
                        <div class="row al_center">
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="page_cart_info flex al_center">
                                    <a href="javascript:void(0)">
                                        <img class="lazyload w__100 lz_op_ef"
                                            src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E"
                                            data-src="<?php echo base_url().PRODUCT_IMAGE_PATH.$item['product_id'].'/'.$item['cover_img']?>" alt="">
                                    </a>
                                    <div class="mini_cart_body ml__15">
                                        <h5 class="mini_cart_title mg__0 mb__5"><a
                                                href="<?php echo base_url('product-detail/').$short_code.'/?pid='.$product_id?>"><?php echo $item['product_name'];?></a></h5>
                                        <div class="mini_cart_meta">
                                            <p class="cart_selling_plan mb-1">Seller : <?php echo $item['vendor_name'];?></p>
                                            <?php if(!empty($elements_attributes)){
                                                foreach($elements_attributes as $key=>$val){ ?>
                                                    <p class="cart_selling_plan mb-0"><?php echo getElementNameByID($key); ?> : <?php echo getAttributeNameByID($val);?></p>
                                            <?php } }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-2 col-lg-2 tc mini_cart_actions">
                                <input type="hidden" id="txt_stock_<?php echo $item['product_id'];?>" value="<?php echo $stock;?>">
                                <div class="quantity pr mr__10 qty__true">
                                    <input type="number" class="input-text qty text tc qty_cart_js" id="item_<?php echo $item['product_id'];?>" name="updates" data-pid="<?php echo $item['product_id']; ?>"
                                        value="<?php echo (!empty($item['quantity']) && $item['quantity'] != null) ? $item['quantity'] : '1' ?>" min="1" readonly>
                                    <div class="qty tc fs__14 update-qty">
                                        <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0" onclick="plusItemQty(<?php echo $item['product_id'];?>)">
                                            <i class="facl facl-plus"></i></button>
                                        <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0 qty_1" onclick="minusItemQty(<?php echo $item['product_id'];?>)">
                                            <i class="facl facl-minus"></i></button>
                                    </div>
                                    <?php if($stock > 0 && $stock <= 10){ ?>
                                                <span class="cr"><?php echo $stock;?> left</span> 
                                    <?php } ?>  
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-2 tc__ tc_lg">
                                <div class="cart_meta_prices price">
                                    <div class="cart_price">
                                    <i class="fa fa-inr cr"></i><ins><?php echo moneyFormatIndia_ui($item['net_price']); ?></ins><br>
                                    <i class="fa fa-inr"></i><del> <?php echo moneyFormatIndia_ui($item['mrp_price']); ?></del><br>
                                        <small>(<?php echo $item['discount']; ?> % off)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-2 tc__ tr_lg">
                            <i class="fa fa-inr"></i><span class="cart-item-price fwm cd js_tt_price_it"> <?php echo moneyFormatIndia_ui($final_price); ?></span>
                            </div>
                            <div class="col-12 col-md-2 col-lg-2 tc__ tr_lg">
                                <div class="mini_cart_tool mt__10">
                                    <a href="javascript:void(0)" class="cart_ac_remove js_cart_rem ttip_nt tooltip_top_left" data-pid="<?php echo $item['product_id']; ?>"><span
                                            class="tt_txt">Remove this item</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php  } ?>
            </div>
            <div class="cart__footer mt__60">
                <div class="row">
                    <!-- <div class="col-12 col-md-6 cart_actions tl_md tc order-md-2 order-2 mb__50">                        
                            <label for="couponcode"
                            class="cart-couponcode__label db cd mt__20 mb__10">Coupon:</label>
                        <p>Coupon code will work on checkout page</p>
                        <input type="text" name="discount" id="couponcode" value placeholder="Coupon code">
                    </div> -->
                    <div class="col-12 tr_md tc order-md-4 order-4 col-md-12">
                        <div class="total row in_flex fl_between al_center cd fs__18 tu">
                            <div class="col-auto"><strong>Subtotal:</strong></div>
                            <div class="col-auto tr js_cat_ttprice fs__20 fwm">
                                <div class="cart_tot_price"><i class="fa fa-inr"></i> <?php echo moneyFormatIndia_ui($subtotal); ?></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <p class="db txt_tax_ship mb__5">Taxes, shipping and discounts codes calculated at checkout</p>                        
                        <div class="clearfix"></div>
                        <!-- <button type="submit" name="update"
                            class="button btn_update mt__10 mb__10 js_add_ld w__100">Update Cart</button> -->
                        <a  data-confirm="ck_lumise" name="checkout" href="<?php echo base_url('checkout');?>"
                            class="btn_checkout button button_primary tu mt__10 mb__10 js_add_ld w__100">Check
                            Out</a>
                        <div class="clearfix"></div>                        
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <?php } else{?>
        <div class="kalles-section nt_mini_cart  container mt__60">
            <div class="empty tc mt__40 fs__20">
                <i class="las la-shopping-bag pr mb__10">
                </i>
                <p>
                    Your cart is empty.
                </p>
            </div>
        </div>
    <?php }?>


    <div class="kalles-section tp_se_cdt">
        <div class="related product-extra mt__70">
            <div class="container">
                <div class="wrap_title des_title_1 mb__20">
                    <h3 class="section-title tc pr flex fl_center al_center fs__24 title_1">
                        <span class="mr__10 ml__10">You may also like</span>
                    </h3>
                </div>
                <div class="products nt_products_holder nt_slider row row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1 is-draggable"
                    data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": false,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="d-block" href="">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-01.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-02.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa ">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span
                                            class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                        href="#"><span class="tt_txt">Quick view</span><i
                                            class="iccl iccl-eye"></i><span>Quick view</span></a>
                                    <a href="#"
                                        class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span
                                            class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick
                                            Shop</span></a>
                                </div>
                                <div class="product-attr pa ts__03 cw op__0 tc">
                                    <p class="truncate mg__0 w__100">S, M, L</p>
                                </div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Ridley High Waist</a>
                                </h3>
                                <span class="price dib mb__5">$36.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <span class="tc nt_labels pa pe_none cw"><span
                                        class="onsale nt_label"><span>-40%</span></span></span>
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-10.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-11.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa ">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span
                                            class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                        href="#"><span class="tt_txt">Quick view</span><i
                                            class="iccl iccl-eye"></i><span>Quick view</span></a>
                                    <a href="#"
                                        class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span
                                            class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick
                                            Shop</span></a>
                                </div>
                                <div class="product-attr pa ts__03 cw op__0 tc">
                                    <p class="truncate mg__0 w__100">S, M</p>
                                </div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Skin Sweatpans</a>
                                </h3>
                                <span class="price dib mb__5"><del>$75.00</del><ins>$45.00</ins></span>
                                <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                    <span data-bgset="<?php echo UI_ASSETS ?>images/products/pr-12.jpg"
                                        class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right js__pink"><span
                                            class="tt_txt">Pink</span><span
                                            class="swatch__value bg_color_pink lazyload"></span></span>
                                    <span data-bgset="<?php echo UI_ASSETS ?>images/products/pr14.jpg"
                                        class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right js__cyan"><span
                                            class="tt_txt">Cyan</span><span
                                            class="swatch__value bg_color_cyan lazyload"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-21.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-22.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa ">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span
                                            class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                        href="#"><span class="tt_txt">Quick view</span><i
                                            class="iccl iccl-eye"></i><span>Quick view</span></a>
                                    <a href="#"
                                        class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left"><span
                                            class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                                            cart</span></a>
                                </div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Black mountain hat</a>
                                </h3>
                                <span class="price dib mb__5">$50.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-27.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-28.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa ">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span
                                            class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                        href="#"><span class="tt_txt">Quick view</span><i
                                            class="iccl iccl-eye"></i><span>Quick view</span></a>
                                    <a href="#"
                                        class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span
                                            class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick
                                            Shop</span></a>
                                </div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Men pants</a>
                                </h3>
                                <span class="price dib mb__5">$49.00 – $56.00</span>
                                <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                    <span data-bgset="<?php echo UI_ASSETS ?>images/products/pr-34.jpg"
                                        class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right lazyload"><span
                                            class="tt_txt">Blue</span><span
                                            class="swatch__value bg_color_blue"></span></span>
                                    <span data-bgset="<?php echo UI_ASSETS ?>images/products/pr-33.jpg"
                                        class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right lazyload"><span
                                            class="tt_txt">Black</span><span
                                            class="swatch__value bg_color_black"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-19.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-20.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa ">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span
                                            class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                        href="#"><span class="tt_txt">Quick view</span><i
                                            class="iccl iccl-eye"></i><span>Quick view</span></a>
                                    <a href="#"
                                        class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left"><span
                                            class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                                            cart</span></a>
                                </div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Cream women pants</a>
                                </h3>
                                <span class="price dib mb__5">$35.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-36.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-37.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa ">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span
                                            class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                        href="#"><span class="tt_txt">Quick view</span><i
                                            class="iccl iccl-eye"></i><span>Quick view</span></a>
                                    <a href="#"
                                        class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left"><span
                                            class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                                            cart</span></a>
                                </div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Sunny Life</a>
                                </h3>
                                <span class="price dib mb__5">$68.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kalles-section tp_se_cdt">
        <div class="related product-extra mt__70 mb__80">
            <div class="container">
                <div class="wrap_title des_title_1 mb__30">
                    <h3 class="section-title tc pr flex fl_center al_center fs__24 title_1">
                        <span class="mr__10 ml__10">Recently viewed products</span>
                    </h3>
                </div>
                <div class="sortby_3 products nt_products_holder nt_slider row row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1 is-draggable"
                    data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": false,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-01.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-02.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa ">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span
                                            class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                        href="#"><span class="tt_txt">Quick view</span><i
                                            class="iccl iccl-eye"></i><span>Quick view</span></a>
                                    <a href="#"
                                        class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span
                                            class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick
                                            Shop</span></a>
                                </div>
                                <div class="product-attr pa ts__03 cw op__0 tc">
                                    <p class="truncate mg__0 w__100">S, M, L</p>
                                </div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Ridley High Waist</a>
                                </h3>
                                <span class="price dib mb__5">$36.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <span class="tc nt_labels pa pe_none cw"><span
                                        class="onsale nt_label"><span>-40%</span></span></span>
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-10.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-11.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa ">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span
                                            class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                        href="#"><span class="tt_txt">Quick view</span><i
                                            class="iccl iccl-eye"></i><span>Quick view</span></a>
                                    <a href="#"
                                        class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span
                                            class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick
                                            Shop</span></a>
                                </div>
                                <div class="product-attr pa ts__03 cw op__0 tc">
                                    <p class="truncate mg__0 w__100">S, M</p>
                                </div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Skin Sweatpans</a>
                                </h3>
                                <span class="price dib mb__5"><del>$75.00</del><ins>$45.00</ins></span>
                                <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                    <span data-bgset="<?php echo UI_ASSETS ?>images/products/pr-12.jpg"
                                        class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right js__pink"><span
                                            class="tt_txt">Pink</span><span
                                            class="swatch__value bg_color_pink lazyload"></span></span>
                                    <span data-bgset="<?php echo UI_ASSETS ?>images/products/pr14.jpg"
                                        class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right js__cyan"><span
                                            class="tt_txt">Cyan</span><span
                                            class="swatch__value bg_color_cyan lazyload"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-21.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-22.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa ">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span
                                            class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                        href="#"><span class="tt_txt">Quick view</span><i
                                            class="iccl iccl-eye"></i><span>Quick view</span></a>
                                    <a href="#"
                                        class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left"><span
                                            class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                                            cart</span></a>
                                </div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Black mountain hat</a>
                                </h3>
                                <span class="price dib mb__5">$50.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-27.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-28.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa ">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span
                                            class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                        href="#"><span class="tt_txt">Quick view</span><i
                                            class="iccl iccl-eye"></i><span>Quick view</span></a>
                                    <a href="#"
                                        class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span
                                            class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick
                                            Shop</span></a>
                                </div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Men pants</a>
                                </h3>
                                <span class="price dib mb__5">$49.00 – $56.00</span>
                                <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                    <span data-bgset="<?php echo UI_ASSETS ?>images/products/pr-34.jpg"
                                        class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right lazyload"><span
                                            class="tt_txt">Blue</span><span
                                            class="swatch__value bg_color_blue"></span></span>
                                    <span data-bgset="<?php echo UI_ASSETS ?>images/products/pr-33.jpg"
                                        class="nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right lazyload"><span
                                            class="tt_txt">Black</span><span
                                            class="swatch__value bg_color_black"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-19.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-20.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa ">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span
                                            class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                        href="#"><span class="tt_txt">Quick view</span><i
                                            class="iccl iccl-eye"></i><span>Quick view</span></a>
                                    <a href="#"
                                        class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left"><span
                                            class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                                            cart</span></a>
                                </div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Cream women pants</a>
                                </h3>
                                <span class="price dib mb__5">$35.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                        <div class="product-inner pr">
                            <div class="product-image pr oh lazyload">
                                <a class="d-block" href="product-detail-layout-01.html">
                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-36.jpg"></div>
                                </a>
                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                        data-bgset="<?php echo UI_ASSETS ?>images/products/pr-37.jpg"></div>
                                </div>
                                <div class="nt_add_w ts__03 pa ">
                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span
                                            class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                </div>
                                <div class="hover_button op__0 tc pa flex column ts__03">
                                    <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                        href="#"><span class="tt_txt">Quick view</span><i
                                            class="iccl iccl-eye"></i><span>Quick view</span></a>
                                    <a href="#"
                                        class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left"><span
                                            class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                                            cart</span></a>
                                </div>
                            </div>
                            <div class="product-info mt__15">
                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                    <a class="cd chp" href="product-detail-layout-01.html">Sunny Life</a>
                                </h3>
                                <span class="price dib mb__5">$68.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>