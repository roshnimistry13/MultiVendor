<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span></span> Shop
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="shop-product-fillter">
                        <div class="totall-product">
                            <p> We found <strong class="text-brand result_count"><span></span></strong> items for you!
                            </p>
                            <a href="javascript:void(0)" class="text-muted clear-filter clear-all-filter d-none"> <i
                                    class="fi-rs-cross-small"></i> Clear All</a>

                        </div>
                        <div class="sort-by-product-area">

                            <div class="sort-by-cover">
                                <div class="sort-by-product-wrap">
                                    <div class="sort-by">
                                        <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                    </div>
                                    <div class="sort-by-dropdown-wrap sortby-text">
                                        <span><i class="fi-rs-angle-small-down"></i></span>
                                    </div>
                                </div>
                                <div class="sort-by-dropdown">
                                    <ul>
                                        <li>
                                            <a class="filterSortBy"
                                                href="javascript:void(0)"  data-value="featured">
                                                Featured
                                            </a>
                                        </li>
                                        <li>
                                            <a class="filterSortBy " href="javascript:void(0)"
                                                 data-value="bestselling">
                                                Best selling
                                            </a>
                                        </li>
                                        <li>
                                            <a class="filterSortBy " href="javascript:void(0)"
                                                 data-value="atoz">
                                                Alphabetically, A-Z
                                            </a>
                                        </li>
                                        <li>
                                            <a class="filterSortBy " href="javascript:void(0)"
                                                data-value="ztoa">
                                                Alphabetically, Z-A
                                            </a>
                                        </li>
                                        <li>
                                            <a class="filterSortBy " href="javascript:void(0)"
                                                data-value="lowtohigh">
                                                Price, low to high
                                            </a>
                                        </li>
                                        <li>
                                            <a class="filterSortBy truncate" href="javascript:void(0)"
                                               data-value="hightolow">
                                                Price, high to low
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row product-grid-3 product_grid_list">
                    </div>
                    <!--pagination-->
                    <div class="pagination-area mt-15 mb-sm-5 mb-lg-0" id="pagination">

                    </div>
                </div>
                <div class="col-lg-3 primary-sidebar sticky-sidebar">

                    <div class="widget-category mb-30">
                        <h5 class="section-title style-1 mb-10 wow fadeIn animated">Category</h5>
                        <ul class="categories">
                            <?php 
                                foreach($category_total_product as $key1=>$val1){ 
                                    $sub_cat_list = array();
                                    if(isset($val1['sub_cat'])){
                                        $sub_cat_list = $val1['sub_cat'];   
                                    }  
                                    if(!empty($sub_cat_list)){
                                        foreach($sub_cat_list as $subkey1=>$subval1){                                                                                                                                
                                                                                                                                              
                            ?>
                            <li><a href="javascript:void(0)" onclick="subcategory_filter(<?php echo  $subkey1; ?>)"
                                    id="filter_category_<?php echo  $key1 ?>">
                                    <?php echo ucwords(getCateforyNameByID($subkey1)); ?><span
                                        class="cat_count d-inline-block">(<?php echo $subval1; ?>)</span>
                                </a></li>
                            <?php } } }?>
                        </ul>
                    </div>
                    <!-- Fillter By Price -->
                    <div class="sidebar-widget price_range range mb-30">
                        <div class="widget-header position-relative mb-20 pb-10">
                            <h5 class="widget-title mb-10">Fill by price</h5>
                            <div class="bt-1 border-color-1"></div>
                        </div>
                        <div class="price-filter">
                            <div class="price-filter-inner">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <div class="label-input">
                                        <span>Range:</span><input type="text" id="amount" name="price"
                                            placeholder="Add Your Price">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fillter By color -->
                    <div class="sidebar-widget price_range range mb-30">
                        <div class="widget-header position-relative mb-20 pb-10">
                            <h5 class="widget-title mb-10">Fill by Color</h5>
                            <div class="bt-1 border-color-1"></div>
                        </div>
                        <ul class="list-filter color-filter">
                            <?php if(!empty($color_list)){
                                foreach($color_list as $key=>$val){ ?>

                            <li>
                                <a href="javascript:void(0)" onclick="color_filter(<?php echo $key; ?>)"
                                    data-color="<?php echo $val['name'];?>"><span
                                        style="background-color :<?php echo $val['code'];?>"></span></a>
                            </li>
                            <?php } }?>
                        </ul>

                    </div>
                    <input type="hidden" id="filterCategoryId" value="<?php echo $category_id?>" />
                    <input type="hidden" id="filterSubCategoryId" value="" />
                    <input type="hidden" id="filterColorId" />
                    <input type="hidden" id="filterBrandId" />
                    <input type="hidden" id="filtersortby" />
                    <input type="hidden" name="min_price" id="min_price">
                    <input type="hidden" name="max_price" id="max_price">
                </div>
            </div>
        </div>
    </section>
</main>