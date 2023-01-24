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
        $return_replace_validity = "";
        if(!empty($categoryData) && ($categoryData[0]['return_or_replace'] != "" || $categoryData[0]['return_or_replace'] != null)){
            $return_replace                     = $categoryData[0]['return_or_replace'];
            $return_replace_validity            = $categoryData[0]['return_replace_validity'];
        }
            
    }
?>
<main class="main product_detail_page" data-pid="<?php echo $product_id;?>">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <?php if(!empty($breadcrumbs)){?>
                <?php echo $breadcrumbs; ?>
                <?php }?>
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <input type="hidden" id="txt_variant_code" name="txt_variant_code" value="<?php echo $variant_code;?>">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">
                    <div class="product-detail accordion-detail">
                        <div class="row mb-50">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="detail-gallery">
                                    <!-- MAIN SLIDES -->
                                    <div class="product-image-slider">
                                        <?php if(!empty($image)){
                                            foreach($image as $img) { ?>
                                        <figure class="border-radius-10">
                                            <img class="w-100"
                                                src="<?php echo base_url().PRODUCT_IMAGE_PATH.$product_id.'/'.$img ?>"
                                                alt="product image">
                                        </figure>
                                        <?php } }?>

                                    </div>
                                    <!-- THUMBNAILS -->
                                    <div class="slider-nav-thumbnails pl-15 pr-15">
                                        <?php if(!empty($image)){
                                            foreach($image as $img) { ?>
                                        <div>
                                            <img src="<?php echo base_url().PRODUCT_IMAGE_PATH.$product_id.'/'.$img ?>"
                                                alt="product image">
                                        </div>
                                        <?php } }?>
                                    </div>
                                </div>
                                <!-- End Gallery -->
                                <div class="social-icons single-share">
                                    <ul class="text-grey-5 d-inline-block">
                                        <li><strong class="mr-10">Share this:</strong></li>
                                        <li class="social-facebook"><a href="#"><img
                                                    src="<?php echo UI_ASSETS ?>imgs/theme/icons/icon-facebook.svg"
                                                    alt=""></a></li>
                                        <li class="social-twitter"> <a href="#"><img
                                                    src="<?php echo UI_ASSETS ?>imgs/theme/icons/icon-twitter.svg"
                                                    alt=""></a></li>
                                        <li class="social-instagram"><a href="#"><img
                                                    src="<?php echo UI_ASSETS ?>imgs/theme/icons/icon-instagram.svg"
                                                    alt=""></a></li>
                                        <li class="social-linkedin"><a href="#"><img
                                                    src="<?php echo UI_ASSETS ?>imgs/theme/icons/icon-pinterest.svg"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <div class="detail-info">
                                    <h3 class="title-detail"><?php echo ucwords($product_name); ?></h3>
                                    <div class="product-detail-rating">
                                        <div class="pro-details-brand">
                                            <span>Seller : <?php echo $vendor_name; ?></span>
                                        </div>
                                        <?php if(!empty($product_review_list)) {
                                            $totalReviewcount = count($product_review_list);
                                            $total_rate     = 0;
                                            $avg_rate       = 0;
                                            $avg_rate_star  = 0;
                                            $star_width     = "";
                                            foreach($product_review_list as $row2){
                                                $total_rate += $row2['star_rate'];
                                            }
                                             if($total_rate > 0){
                                                $avg_rate           = $total_rate / $totalReviewcount;
                                                $avg_rate_star      =  round($avg_rate);
                                             }
                                             if($avg_rate_star == 1){
                                                $star_width = "width:20%";
                                             }
                                            
                                        ?>
                                        <div class="product-rate-cover text-end">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="<?php echo $star_width;?>">
                                                </div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (<?php echo $totalReviewcount; ?>
                                                reviews)</span>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="clearfix product-price-cover">
                                        <div class="product-price primary-color float-left">
                                            <ins><span
                                                    class="text-brand">₹<?php echo moneyFormatIndia_ui($net_price); ?></span></ins>
                                            <?php if($discount !="" && $discount != null && !empty($discount)) {?>
                                            <ins><span
                                                    class="old-price font-md ml-15">₹<?php echo moneyFormatIndia_ui($mrp_price); ?></span></ins>
                                            <span class="save-price  font-md color3 ml-15"><?php echo $discount;?>%
                                                Off</span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                    <div class="short-desc mb-20">
                                        <p><?php echo $short_description; ?></p>
                                    </div>
                                    <div class="product_sort_info font-xs mb-30">
                                        <ul>
                                            <li class="mb-10"><i class="fi-rs-refresh mr-5"></i>
                                                <?php echo $return_replace_validity;?> Day Return Policy
                                            </li>
                                            <li><i class="fi-rs-credit-card mr-5"></i> Cash on Delivery available</li>
                                        </ul>
                                    </div>
                                    <?php if(!empty($elearr)){
                                        foreach($elearr as $key => $val){
                                            $elementVal = $val; 
                                            $key_name = getElementNameByID($key);                                            
                                            $filter_class = "size-filter";
                                            if(strtolower($key_name) == "color"){
                                                $filter_class = "color-filter";
                                            }
                                    ?>
                                    <div class="attr-detail mb-15 product-variants" data-elements="<?php echo $key?>">
                                        <p><strong class="mr-10"><?php echo getElementNameByID($key)?></strong></p>
                                        <ul class="list-filter <?php echo $filter_class;?>">
                                            <?php 
                                            foreach($elementVal as $key1 => $val1){                                                            
                                            // $attributes = explode(',',$val1);
                                            $attributes = $val1;
                                            $i      = 0;
                                            $count  = count($attributes);
                                            
                                            if(!empty($val1))
                                            {       
                                                $ele_id         = $val1['element_id'];
                                                $atr_id         = $val1['attr_id'];
                                                $attr_code      = $val1['attr_code'];
                                                $is_selected    = $val1['is_selected'];
                                        ?>
                                            <li class="<?php echo $is_selected; ?> product-varient"
                                                data-escape="<?php echo $key1;?>" data-attrid="<?php echo $atr_id; ?>"
                                                data-eleid="<?php echo $ele_id; ?>">
                                                <?php if(strtolower($key_name) == "color"){?>
                                                <a href="#" data-color="<?php echo $key1;?>">
                                                    <span class=""
                                                        style="background-color:<?php echo $attr_code; ?>"></span>
                                                </a>
                                                <?php } else{?>
                                                <a href="#" data-color="<?php echo $key1;?>"><?php echo $key1;?></a>
                                                <?php }?>
                                            </li>
                                            <?php } } ?>
                                        </ul>

                                    </div>
                                    <?php } 
                                    } ?>

                                    <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                    <div class="detail-extralink">
                                        <div class="product-extra-link2 d-flex flex-wrap">
                                            <?php if($stock > 0 && $stock != "" && $stock != null){ ?>
                                            <button type="submit" class="button button-add-to-cart btnAddToCart "><i
                                                    class="fi-rs-shopping-bag mx-2"></i>Add to cart</button>
                                            <?php } ?>
                                            <?php if(!empty($wish_list_class) && $wish_list_class > 0){?>
                                            <button type="button"
                                                class="btn btn-outline btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white border-radius-5 btn-shadow-brand hover-up wishlist-btn mx-3  wishlist-add">
                                                <i class="fa fa-heart mx-2" aria-hidden="true"></i> Wishlisted</button>
                                            <?php  }else{?>
                                            <button type="button"
                                                class="btn btn-outline btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white border-radius-5 btn-shadow-brand hover-up wishlist-btn mx-3  wishlistadd">
                                                <i class="fi-rs-heart mx-2"></i> Wishlist</button>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <ul class="product-meta font-xs color-grey mt-50">
                                        <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                                        <li>Availability:<span class="in-stock text-success ml-5">
                                                <?php if($stock > 0 && $stock != "" && $stock != null){ ?>
                                                <?php echo $stock;?> Items In Stock
                                                <?php } else { ?> Out of stock<?php } ?>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Detail Info -->
                            </div>
                        </div>
                        <div class="tab-style3">
                            <ul class="nav nav-tabs text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                        href="#Description">Description</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab"
                                        href="#Additional-info">Additional info</a>
                                </li> -->
                                <?php if(!empty($product_review_list)){ ?>
                                <li class="nav-item">
                                    <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews
                                        (<?php echo $totalReviewcount; ?>)</a>
                                </li>
                                <?php } ?>
                            </ul>
                            <div class="tab-content shop_info_tab entry-main-content">
                                <div class="tab-pane fade show active" id="Description">
                                    <div class="">
                                        <p>Uninhibited carnally hired played in whimpered dear gorilla koala depending
                                            and much yikes off far quetzal goodness and from for grimaced goodness
                                            unaccountably and meadowlark near unblushingly crucial scallop
                                            tightly neurotic hungrily some and dear furiously this apart.</p>
                                        <p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much
                                            hello on spoon-fed that alas rethought much decently richly and wow against
                                            the frequent fluidly at formidable acceptably flapped
                                            besides and much circa far over the bucolically hey precarious goldfinch
                                            mastodon goodness gnashed a jellyfish and one however because.
                                        </p>
                                        <ul class="product-more-infor mt-30">
                                            <li><span>Type Of Packing</span> Bottle</li>
                                            <li><span>Color</span> Green, Pink, Powder Blue, Purple</li>
                                            <li><span>Quantity Per Case</span> 100ml</li>
                                            <li><span>Ethyl Alcohol</span> 70%</li>
                                            <li><span>Piece In One</span> Carton</li>
                                        </ul>
                                        <hr class="wp-block-separator is-style-dots">

                                    </div>
                                </div>
                                <?php if(!empty($product_review_list)) {?>
                                <div class="tab-pane fade " id="Reviews">
                                    <!--Comments-->
                                    <div class="comments-area">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <h4 class="mb-30">Customer questions &amp; answers</h4>
                                                <div class="comment-list">
                                                    <div class="single-comment justify-content-between d-flex">
                                                        <div class="user justify-content-between d-flex">
                                                            <div class="thumb text-center">
                                                                <img src="<?php echo UI_ASSETS ?>imgs/page/avatar-6.jpg"
                                                                    alt="">
                                                                <h6><a href="#">Jacky Chan</a></h6>
                                                                
                                                            </div>
                                                            <div class="desc">
                                                                <div class="product-rate d-inline-block">
                                                                    <div class="product-rating" style="width:90%">
                                                                    </div>
                                                                </div>
                                                                <p>Thank you very fast shipping from Poland only 3days.
                                                                </p>
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="font-xs mr-30">December 4, 2020</p>
                                                                        <!-- <a href="#" class="text-brand btn-reply">Reply
                                                                            <i class="fi-rs-arrow-right"></i> </a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--single-comment -->
                                                    <div class="single-comment justify-content-between d-flex">
                                                        <div class="user justify-content-between d-flex">
                                                            <div class="thumb text-center">
                                                                <img src="<?php echo UI_ASSETS ?>imgs/page/default_user.png"
                                                                    alt="">
                                                                <h6><a href="#">Ana Rosie</a></h6>
                                                                
                                                            </div>
                                                            <div class="desc">
                                                                <div class="product-rate d-inline-block">
                                                                    <div class="product-rating" style="width:90%">
                                                                    </div>
                                                                </div>
                                                                <p>Great low price and works well.</p>
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="font-xs mr-30">December 4, 2020 </p>
                                                                        <!-- <a href="#" class="text-brand btn-reply">Reply
                                                                            <i class="fi-rs-arrow-right"></i> </a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--single-comment -->
                                                    <div class="single-comment justify-content-between d-flex">
                                                        <div class="user justify-content-between d-flex">
                                                            <div class="thumb text-center">
                                                                <img src="<?php echo UI_ASSETS ?>imgs/page/default_user.png"
                                                                    alt="">
                                                                <h6><a href="#">Steven Keny</a></h6>
                                                                
                                                            </div>
                                                            <div class="desc">
                                                                <div class="product-rate d-inline-block">
                                                                    <div class="product-rating" style="width:90%">
                                                                    </div>
                                                                </div>
                                                                <p>Authentic and Beautiful, Love these way more than
                                                                    ever expected They are Great earphones</p>
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="font-xs mr-30">December 4, 2020</p>
                                                                        <!-- <a href="#" class="text-brand btn-reply">Reply
                                                                            <i class="fi-rs-arrow-right"></i> </a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--single-comment -->
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <h4 class="mb-30">Customer reviews</h4>
                                                <div class="d-flex mb-30">
                                                    <div class="product-rate d-inline-block mr-15">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <h6>4.8 out of 5</h6>
                                                </div>
                                                <div class="progress">
                                                    <span>5 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 50%;"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <span>4 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <span>3 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 45%;"
                                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <span>2 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 65%;"
                                                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%
                                                    </div>
                                                </div>
                                                <div class="progress mb-30">
                                                    <span>1 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 85%;"
                                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%
                                                    </div>
                                                </div>
                                                <a href="#" class="font-xs text-muted">How are ratings calculated?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--comment form-->
                                </div>
                                <?php } ?>

                            </div>
                        </div>
                        <?php if(!empty($similer_products)){?>
                        <div class="row mt-60">
                            <div class="col-12">
                                <div class="row">
                                    <div class=" wow fadeIn animated">
                                        <h3 class="section-title mb-20"><span>Related </span> Products</h3>
                                        <div class="carausel-6-columns-cover position-relative">
                                            <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow"
                                                id="carausel-6-columns-2-arrows">
                                            </div>
                                            <div class="carausel-6-columns carausel-arrow-center"
                                                id="carausel-6-columns-2">
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

                                                <div class="product-cart-wrap small hover-up">
                                                    <div class="product-img-action-wrap">
                                                        <div class="product-img product-img-zoom">
                                                            <a href="#">
                                                                <img class="default-img" src="<?php echo $imgurl; ?>"
                                                                    alt="">
                                                                <img class="hover-img" src="<?php echo $imgurl; ?>"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <!-- <div
                                                            class="product-badges product-badges-position product-badges-mrg">
                                                            <span class="hot">Hot</span>
                                                        </div> -->
                                                    </div>
                                                    <div class="product-content-wrap mt-5">
                                                        <h5 class="truncate"><a
                                                                href="#"><?php echo $product_name; ?></a></h5>
                                                        <div class="rating-result" title="90%">
                                                            <span>
                                                            </span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>₹<?php echo moneyFormatIndia_ui($net_price);?></span>
                                                            <span
                                                                class="old-price">₹<?php echo moneyFormatIndia_ui($mrp_price);?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="banner-img banner-big wow fadeIn f-none animated mt-50">
                            <img class="border-radius-10" src="<?php echo UI_ASSETS ?>imgs/banner/banner-4.png" alt="">
                            <div class="banner-text">
                                <h4 class="mb-15 mt-40">Repair Services</h4>
                                <h2 class="fw-600 mb-20">We're an Apple <br>Authorised Service Provider</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>