<div id="nt_content">
    <div class="kalles-section page_section_heading">
        <div class="page-head tc pr oh cat_bg_img page_head_">
            <div class="parallax-inner nt_parallax_false lazyload nt_bg_lz pa t__0 l__0 r__0 b__0"
                data-bgset="<?php echo UI_ASSETS ?>images/shop/shop-banner.jpg"></div>
            <div class="container pr z_100">
                <h1 class="mb__5 cw">Product</h1>
                <p class="mg__0">Shop through our latest selection .</p>
            </div>
        </div>
    </div>
    <div class="container container_cat pop_default cat_default mb__20">
        <div class="cat_toolbar row fl_center al_center mt__30">
            <div class="cat_filter col op__0 pe_none">
                <a href="#" data-opennt="#kalles-section-nt_filter" data-pos="left" data-remove="true"
                    data-class="popup_filter" data-bg="hide_btn" class="has_icon btn_filter mgr"><i
                        class="iccl fwb iccl-filter fwb mr__5"></i>Filter</a>
                <a href="#" data-id="#kalles-section-nt_filter" class="btn_filter js_filter dn mgr"><i
                        class="iccl fwb iccl-filter fwb mr__5"></i>Filter</a>
            </div>
            <div class="cat_sortby cat_sortby_js col tr kalles_dropdown kalles_dropdown_container">
                <a class="in_flex fl_between al_center sortby_pick kalles_dropDown_label" href="#">
                    <span class="lbl-title sr_txt dn">Featured</span>
                    <span class="lbl-title sr_txt_mb">Sort by</span>
                    <i class="ml__5 mr__5 facl facl-angle-down"></i>
                </a>
                <div class="nt_sortby dn">
                    <svg class="ic_triangle_svg" viewBox="0 0 20 9" role="presentation">
                        <path
                            d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z"
                            fill="#ffffff"></path>
                    </svg>
                    <div class="h3 mg__0 tc cd tu ls__2 dn_lg db">Sort by<i class="pegk pe-7s-close fs__50 ml__5"></i>
                    </div>
                    <div class="nt_ajaxsortby wrap_sortby kalles_dropdown_options">
                        <a data-label="Featured" class="kalles_dropdown_option truncate selected" href="#">Featured</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="js_sidebar sidebar sidebar_nt col-lg-3 col-12 space_30 hidden_false lazyload">
                <div id="kalles-section-sidebar_shop"
                    class="kalles-section nt_ajaxFilter section_sidebar_shop type_instagram">
                    <div class="h3 mg__0 tu bgb cw visible-sm fs__16 pr">Sidebar<i
                            class="close_pp pegk pe-7s-close fs__40 ml__5"></i>
                    </div>
                    <div class="cat_shop_wrap">
                    <input type="hidden" id="filterCategoryId"/>
                        <div class="cat_fixcl-scroll">
                            <div class="cat_fixcl-scroll-content css_ntbar">
                                <div class="row no-gutters wrap_filter">
                                    <div class="col-12 col-md-12 widget widget_product_categories cat_count_false">
                                        <h5 class="widget-title">Product Categories</h5>
                                        <?php if(!empty($category_total_product)){ ?>
                                        <ul class="product-categories">
                                            <?php 
                                                foreach($category_total_product as $category){ ?>
                                            <li class="cat-item">
                                                <a href="javascript:void(0)" onclick="category_filter(<?php echo $category['category_id'] ?>)" id="filter_category_<?php echo $category['category_id'] ?>">
                                                    <?php echo ucwords($category['category_name']); ?><span
                                                        class="cat_count">(<?php echo $category['category_total_product']; ?>)</span></a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                        <?php } ?>
                                    </div>
                                    <div class="col-12 col-md-12 widget">
                                        <h5 class="widget-title">Filter by price</h5>
                                        <div class="loke_scroll progress-price">
                                            <div class="form-group">
                                                <label for="price_range_slider" id="price_range_lbl"></label>
                                                <input type="range" class="form-control-range" id="price_range_slider">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-12">
                <div class="kalles-section tp_se_cdt">
                    <div class="result_clear mt__30 mb__20 dn">                        
                        <!-- <a class="clear_filter dib" href="#">Clear All Filter</a> -->
                        <a href="#" class="clear_filter dib bf_icons" aria-label="Remove tag Size  M">Size M</a>
                        <!-- <a href="#" class="clear_filter dib bf_icons" aria-label="Remove tag Color  Cyan">Color Cyan</a>
                        <a href="#" class="clear_filter dib bf_icons" aria-label="Remove tag Vendor  Kalles">MultiVendor</a> -->
                    </div>

                    <div class="on_list_view_false products nt_products_holder row fl_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 nt_default" id="productList">
                    </div>

                    <div class="product-pagination">
					    <div id='pagination'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>