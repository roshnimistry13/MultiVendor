<?php 
    $id= "406-8552175-7565926";
?>

<div id="nt_content" class="myorder-page">

    <div class="kalles-section page_section_heading">
        <div class="page-head tc pr oh cat_bg_img page_head_">
            <div class="parallax-inner nt_parallax_false lazyload nt_bg_lz pa t__0 l__0 r__0 b__0"
                data-bgset="<?php echo UI_ASSETS ?>/images/shop/collection-list/bg-heading.jpg"></div>
            <div class="container pr z_100">
                <h1 class="mb__5 cw">Order Details</h1>
            </div>
        </div>
    </div>
    <div class="kalles-section cart_page_section container my-5">
        <div class="row">
            <div class="col-12">
                <div class="mini_cart_tool mt__10 float-right">
                    <button type="button" class="single_add_to_cart_button button truncate js_frm_cart  mb-2">
                        <i class="fa fa-download" aria-hidden="true"></i>
                        <span class="txt_add ">Download Invoice</span>
                    </button>

                </div>
            </div>
        </div>
        
        <div class="cart_header">
            <div class="row al_center">
                <div class="col-6">Product</div>
                <div class="col-6 tc">Action</div>
            </div>
        </div>
        <div class="cart_items js_cat_items">
            <?php if(!empty($orderDetail)){
                foreach($orderDetail as $row){
                    $order_id       = $row['order_id'];
                    $product_id     = $row['product_id'];
                    $product_name   = $row['product_name'];
                    $quantity       = $row['quantity'];
                    $mrp_price       = $row['mrp_price'] * $quantity;
                    $net_price       = $row['net_price'];
                    $total_amt       = $row['total_amt'];
                    $discount_amt    = $row['discount_amt'] * $quantity;
                    $cover_img       = $row['cover_img'];
                    $popover_content = '<div><span>MRP<small>('.$quantity.'Items)</small></span><span class='."float-right".'>₹ '.$mrp_price.'</span></div>
                    <div><span>Selling Price</span><span class='."float-right".'>₹ '.$net_price.'</span></div>
                    <div><span>Discount</span><span class='."float-right".'>₹ '.$discount_amt.'</span></div>
                    <div><span>Shipping</span><span class='."float-right".'>₹ 00</span></div>';
            ?>
                <div class="cart_item js_cart_item">
                    <div class="ld_cart_bar"></div>
                    <div class="row al_center">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="page_cart_info flex al_center">
                                <a href="javascript:void(0)">
                                    <img class="w__100 lz_op_ef lazyloaded"
                                        src="<?php echo base_url().PRODUCT_IMAGE_PATH.'/'.$product_id.'/'.$cover_img;?>"
                                        data-src="<?php echo base_url().PRODUCT_IMAGE_PATH.'/'.$product_id.'/'.$cover_img;?>"
                                        alt="">
                                </a>
                                <div class="mini_cart_body ml__15">
                                    <h5 class="mini_cart_title mg__0 mb__5">
                                        <a href="javascript:void(0)"><?php echo $product_name;?></a>
                                    </h5>
                                    <div class="mini_cart_meta">
                                        <p class="cart_selling_plan">Quantity : <?php echo $quantity;?></p>
                                        <h5>Total : <i class="fa fa-inr"></i> <?php echo $total_amt;?>
                                        <a tabindex="0" class="btn" role="button" data-toggle="popover"  title="Price Detail" data-content="<?php echo $popover_content;?>"><i class="fa fa-question-circle-o" aria-hidden="true"></i></a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 tc mini_cart_actions">
                            <!-- <button type="button" class="single_add_to_cart_button button truncate js_frm_cart  mb-2" data-orderid="<?php echo $order_id;?>" data-productid="<?php echo $product_id;?>">
                                <span class="txt_add ">Cancle</span>
                            </button> -->
                            <button type="button" class="single_add_to_cart_button button truncate js_frm_cart mb-2" data-orderid="<?php echo $order_id;?>" data-productid="<?php echo $product_id;?>">
                                <span class="txt_add ">Return</span>
                            </button>
                        </div>
                    </div>
                </div>
            <?php } }?>
        </div>
      
        <?php if(!empty($orderDetail)){?>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="lt-block-reviews mt-5">
                        <div class="r--desktop r--tablet w__100">
                            <div id="r--masonry-theme" class="r--show-part-preview">
                                <div class="r--masonry-theme">
                                    <div class="r--grid  m-0">
                                        <div class="r--grid-item mb-5 ml-0 mr-0">
                                            <div class="r--author r--text-limit">
                                                <div class="r--avatar-default text-center text-white">D</div>
                                                <span class="r--author-review">Delivery Address</span>
                                            </div>
                                            <div class="r--item-body mt-2">
                                                <?php echo $orderDetail[0]['shipping_address']?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php  }?>
    </div>
</div>