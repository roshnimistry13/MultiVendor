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
    <div class=" pt__20  lh__1">
        <div class="container">
            <div class="row al_center">
                <div class="col">
                    <nav class="sp-breadcrumb">
                        <a href="<?php echo base_url('home')?>">Home</a><i class="facl facl-angle-right"></i>
                        <a href="<?php echo base_url('shop')?>">Shop</a>
                       <?php echo $breadcrumbs;?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container container_cat pop_default cat_default mb__20 product-grid-container">

        <div class="row mt__30">
            <div class="js_sidebar sidebar sidebar_nt col-lg-3 col-12 space_30 hidden_false lazyload">
                <div id="kalles-section-sidebar_shop"
                    class="kalles-section nt_ajaxFilter section_sidebar_shop type_instagram">
                    <div class="h3 mg__0 tu bgb cw visible-sm fs__16 pr">Sidebar<i
                            class="close_pp pegk pe-7s-close fs__40 ml__5"></i>
                    </div>
                    <div class="cat_shop_wrap">
                        <input type="hidden" id="filterCategoryId" value="<?php echo $category_id?>"/>
                        <input type="hidden" id="filterColorId" />
                        <input type="hidden" id="filterBrandId" />
                        <input type="hidden" id="filtersortby" />
                        <div class="cat_fixcl-scroll">
                            <div class="cat_fixcl-scroll-content css_ntbar">
                                <div class="row no-gutters wrap_filter">
                                    <!-- <div class="col-12 col-md-12 widget widget_product_categories cat_count_false">
                                        <h5 class="widget-title">Product Categories</h5>
                                        <?php if(!empty($category_total_product)){ ?>
                                        <ul class="product-categories">
                                            <?php 
                                                foreach($category_total_product as $key1=>$val1){ ?>
                                            <li class="cat-item">
                                                <a href="javascript:void(0)"
                                                    onclick="category_filter(<?php echo  $key1; ?>)"
                                                    id="filter_category_<?php echo  $key1 ?>">
                                                    <?php echo ucwords(getCateforyNameByID($key1)); ?><span
                                                        class="cat_count d-inline-block">(<?php echo $val1; ?>)</span></a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                        <?php } ?>
                                    </div> -->

                                    <!-- <div class="col-12 col-md-12 widget">
                                        <h5 class="widget-title">Filter by color</h5>
                                        <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                            <?php if(!empty($color_list)){
                                                    foreach($color_list as $key=>$val){
                                                ?>
                                            <a href="javascript:void(0)" onclick="color_filter(<?php echo $key; ?>)">
                                                <span
                                                    class="lazyload nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right">
                                                    <span class="tt_txt"><?php echo $val;?></span>
                                                    <span class="swatch__value"
                                                        style="background-color :<?php echo $val;?>"></span>
                                                </span>
                                            </a>
                                            <?php } }?>
                                        </div>
                                    </div> -->
                                    <div class="col-12 col-md-12 widget">
                                        <div
                                            class="kalles-section-pr_description kalles-section kalles-tabs sp-tabs nt_section">
                                            <ul class="ul_none ul_tabs is-flex fl_center fs__16 des_mb_2 des_style_2">
                                                <li class="tab_title_block active">
                                                    <a class="db cg truncate pr"
                                                        href="#tab_product_category">Categories</a>
                                                </li>
                                                <li class="tab_title_block">
                                                    <a class="db cg truncate pr" href="#tab_product_brand">Brand</a>
                                                </li>
                                                <li class="tab_title_block">
                                                    <a class="db cg truncate pr" href="#tab_product_price">Price</a>
                                                </li>
                                                <li class="tab_title_block">
                                                    <a class="db cg truncate pr" href="#tab_product_color">Color</a>
                                                </li>
                                            </ul>
                                            <!-- /***** START : PRODUCT CATEGORY LIST */ -->
                                            <div class="panel entry-content sp-tab des_mb_2 des_style_2 clicked_accordion active"
                                                id="tab_product_category">
                                                <div class="js_ck_view"></div>
                                                <div class="heading dn">
                                                    <a class="tab-heading flex al_center fl_between pr cd chp fwm"
                                                        href="#tab_product_category">
                                                        <h5 class="fw__400 m-0">Categories</h5>
                                                        <span class="nav_link_icon ml__5"></span>
                                                    </a>
                                                </div>
                                                <div class="sp-tab-content widget_product_categories cat_count_false">
                                                    <?php if(!empty($category_total_product)){ ?>
                                                    <ul class="product-categories">
                                                        <?php 
                                                        foreach($category_total_product as $key1=>$val1){ ?>
                                                        <li class="cat-item">
                                                            <a href="javascript:void(0)"
                                                                onclick="category_filter(<?php echo  $key1; ?>)"
                                                                id="filter_category_<?php echo  $key1 ?>">
                                                                <?php echo ucwords(getCateforyNameByID($key1)); ?><span
                                                                    class="cat_count d-inline-block">(<?php echo $val1; ?>)</span></a>
                                                        </li>
                                                        <?php } ?>
                                                    </ul>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <!-- /***** END : PRODUCT CATEGORY LIST */ -->

                                            <!-- /***** START : PRODUCT BRAND LIST */ -->
                                            <div class="panel entry-content sp-tab des_mb_2 des_style_2 dn"
                                                id="tab_product_brand">
                                                <div class="js_ck_view"></div>
                                                <div class="heading dn">
                                                    <a class="tab-heading flex al_center fl_between pr cd chp fwm"
                                                        href="#tab_product_brand">
                                                        <h5 class="m-0 fw__400">Filter By Brand</h5>
                                                        <span class="nav_link_icon ml__5"></span>
                                                    </a>
                                                </div>
                                                <div class="sp-tab-content widget_product_categories cat_count_false">
                                                    <?php if(!empty($brnad_total_product)){ ?>
                                                    <ul class="product-categories">
                                                        <?php 
                                                        foreach($brnad_total_product as $key2=>$val2){ ?>
                                                        <li class="cat-item">
                                                            <a href="javascript:void(0)"
                                                                onclick="brand_filter(<?php echo  $key2; ?>)"
                                                                id="filter_brand_<?php echo  $key2 ?>">
                                                                <?php echo ucwords(getBrandNameByID($key2)); ?><span
                                                                    class="cat_count d-inline-block">(<?php echo $val2; ?>)</span></a>
                                                        </li>
                                                        <?php } ?>
                                                    </ul>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <!-- /***** END : PRODUCT BRAND LIST */ -->

                                            <!-- /***** START : PRODUCT PRICE LIST */ -->
                                            <div class="panel entry-content sp-tab des_mb_2 des_style_2 dn"
                                                id="tab_product_price">
                                                <div class="js_ck_view"></div>
                                                <div class="heading dn">
                                                    <a class="tab-heading flex al_center fl_between pr cd chp fwm"
                                                        href="#tab_product_price">
                                                        <h5 class="fw__400 m-0">Filter By Price</h5>
                                                        <span class="nav_link_icon ml__5"></span>
                                                    </a>
                                                </div>
                                                <div class="sp-tab-content">
                                                    <div class="price_slider_wrapper mt__5">

                                                        <div class="price_slider_amount" data-step="1">
                                                            <input type="hidden" class="url_price" name="url_price"
                                                                value="" />
                                                            <input type="hidden" class="min_price" id="min_price"
                                                                name="min_price" value="0" data-min="0"
                                                                placeholder="Min price" />
                                                            <input type="hidden" class="max_price" id="max_price"
                                                                name="max_price" value="50000" data-max="10000"
                                                                placeholder="Max price" />
                                                            <div class="price_steps_slider" id="price_steps_slider">
                                                            </div>

                                                            <div class="price_label">Price: <span class="from"></span> —
                                                                <span class="to"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /***** END : PRODUCT PRICE LIST */ -->

                                            <!-- /***** START : PRODUCT COLOR LIST */ -->
                                            <div class="panel entry-content sp-tab des_mb_2 des_style_2 dn"
                                                id="tab_product_color">
                                                <div class="js_ck_view"></div>
                                                <div class="heading dn">
                                                    <a class="tab-heading flex al_center fl_between pr cd chp fwm"
                                                        href="#tab_product_color">
                                                        <h5 class="fw__400 m-0">Filter By Color</h5>
                                                        <span class="nav_link_icon ml__5"></span>
                                                    </a>
                                                </div>
                                                <div class="sp-tab-content">
                                                    <div class="swatch__list_js swatch__list lh__1 nt_swatches_on_grid">
                                                        <?php if(!empty($color_list)){
                                                    foreach($color_list as $key=>$val){
                                                ?>
                                                        <a href="javascript:void(0)" onclick="color_filter(<?php echo $key; ?>)">
                                                            <span
                                                                class="lazyload nt_swatch_on_bg swatch__list--item pr ttip_nt tooltip_top_right">
                                                                <span class="tt_txt"><?php echo $val;?></span>
                                                                <span class="swatch__value"
                                                                    style="background-color :<?php echo $val;?>"></span>
                                                            </span>
                                                        </a>
                                                        <?php } }?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /***** END : PRODUCT COLOR LIST */ -->
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
                    <div class="result_clear mt__30 ">
                        <div class="sp_result_html dib cb clear_filter result_count"><span class="cp"></span> Products
                            Found</div>
                        <a class="clear_filter clear-all-filter dn" href="javascript:void(0)">Clear All Filter</a>
                    </div>
                    <div class="cat_sortby cat_sortby_js col tr kalles_dropdown kalles_dropdown_container">
                        <a class="in_flex fl_between al_center sortby_pick kalles_dropDown_label"
                            href="javascript:void(0)">
                            <span class="lbl-title sr_txt dn">Sort by</span>
                            <span class="lbl-title sr_txt_mb"></span>
                            <i class="ml__5 mr__5 facl facl-angle-down"></i>
                        </a>
                        <div class="nt_sortby dn">
                            <svg class="ic_triangle_svg" viewBox="0 0 20 9" role="presentation">
                                <path
                                    d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z"
                                    fill="#ffffff"></path>
                            </svg>
                            <div class="h3 mg__0 tc cd tu ls__2 dn_lg db">Sort by<i
                                    class="pegk pe-7s-close fs__50 ml__5"></i>
                            </div>
                            <div class="nt_ajaxsortby wrap_sortby kalles_dropdown_options">
                                <a data-label="Featured" class="kalles_dropdown_option truncate"
                                    href="javascript:void(0)" onclick="filterSortBy('featured')">
                                    Featured
                                </a>
                                <a data-label="Best selling" class="kalles_dropdown_option truncate"
                                    href="javascript:void(0)" onclick="filterSortBy('bestselling')">
                                    Best selling
                                </a>
                                <a data-label="Alphabetically, A-Z" class="kalles_dropdown_option truncate"
                                    href="javascript:void(0)" onclick="filterSortBy('atoz')">
                                    Alphabetically, A-Z
                                </a>
                                <a data-label="Alphabetically, Z-A" class="kalles_dropdown_option truncate"
                                    href="javascript:void(0)" onclick="filterSortBy('ztoa')">
                                    Alphabetically, Z-A
                                </a>
                                <a data-label="Price, low to high" class="kalles_dropdown_option truncate"
                                    href="javascript:void(0)" onclick="filterSortBy('lowtohigh')">
                                    Price, low to high
                                </a>
                                <a data-label="Price, high to low" class="kalles_dropdown_option truncate"
                                    href="javascript:void(0)" onclick="filterSortBy('hightolow')">
                                    Price, high to low
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="on_list_view_false products nt_products_holder row  row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 nt_default"
                        id="productList">
                    </div>

                    <div class="product-pagination">
                        <div id='pagination'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>