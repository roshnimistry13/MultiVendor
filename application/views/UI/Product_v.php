<div id="nt_content">
    <div class="kalles-section page_section_heading">
        <div class="page-head tc pr oh cat_bg_img page_head_">
            <div class="parallax-inner nt_parallax_false lazyload nt_bg_lz pa t__0 l__0 r__0 b__0"
                data-bgset="<?php echo UI_ASSETS ?>images/banner/shop-banner.jpg"></div>
            <div class="container pr z_100">
                <h1 class="mb__5 cw">Product</h1>
                <p class="mg__0">Shop through our latest selection .</p>
            </div>
        </div>
    </div>
    <div class="container container_cat pop_default cat_default mb__20">      

        <div class="row mt__30">
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
                                                        class="cat_count d-inline-block">(<?php echo $category['category_total_product']; ?>)</span></a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                        <?php } ?>
                                    </div>
                                    
                                    <!-- <div class="col-12 col-md-12 widget">
                                        <h5 class="widget-title">Filter by price</h5>
                                        <div class="loke_scroll progress-price">
                                            <div class="form-group">
                                                <label for="price_range_slider" id="price_range_lbl"></label>
                                                <input type="range" class="form-control-range" id="price_range_slider">
                                            </div>
                                        </div>
                                    </div> -->
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

                    <div class="on_list_view_false products nt_products_holder row  row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 nt_default" id="productList">
                    </div>

                    <div class="product-pagination">
					    <div id='pagination'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>