<?php 
    $id= "406-8552175-7565926";
    $customer_id 				= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
    //$order_number               = $orderDetail[0]['order_number'];
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
    <?php if(!empty($orderDetail)){ ?>
    <div class="kalles-section cart_page_section container my-5">
        <div class="cart_header">
            <div class="row al_center">
                <div class="col-6">Product</div>
                <div class="col-3">Description</div>
                <div class="col-3 tc">Action</div>
            </div>
        </div>
        <div class="cart_items js_cat_items">
            <?php  if(!empty($orderDetail)){
                $service = array();
                foreach($orderDetail as $row){
                    $order_id                       = $row['order_id'];
                    $product_id                     = $row['product_id'];
                    $product_name                   = $row['product_name'];
                    $quantity                       = $row['quantity'];
                    $mrp_price                      = $row['mrp_price'];
                    $net_price                      = $row['net_price'];
                    $total_amt                      = $row['total_amt'];
                    $discount_amt                   = $row['discount_amt'];
                    $return_or_replace              = $row['return_or_replace'];
                    $return_replace_validity        = $row['return_replace_validity'];
                    $order_date                     = date('d-m-Y',strtotime($row['order_date']));
                    $today                          = date('d-m-Y');
                    $validitydate                   = date('d-m-Y', strtotime($order_date. ' + '.$return_replace_validity.' days'));
                    $cover_img                      = $row['cover_img'];
                    $vendor_name                    = $row['vendor_name'];
                    $deliver_date                   = $row['deliver_date'];
                    if($return_or_replace != "" && $return_or_replace != null && !empty($return_or_replace)){
                        $service = explode(',',$return_or_replace);
                    }
                    $elements_attributes    =  json_decode($row['elements_attributes'],true);
                    $popover_content = '<div><span>MRP<small>('.$quantity.'Items)</small></span><span class='."float-right".'>₹ '.$mrp_price.'</span></div>
                    <div><span>Selling Price</span><span class='."float-right".'>₹ '.$net_price.'</span></div>
                    <div><span>Discount</span><span class='."float-right".'>₹ '.$discount_amt.'</span></div>
                    <div class='."pb-3".'><span>Shipping</span><span class='."float-right".'>₹ 00</span></div>
                    <div class='."border".'></div>
                    <div class='."py-3".'><strong><span>Total Amount</span><span class='."float-right".'>₹ '.$total_amt.'</span></strong></div>';


                    $cond['order_id'] 		= $order_id;
                    $cond['product_id'] 	= $product_id;
                    $cond['customer_id'] 	= $customer_id;                
                    $res1 					= $this->Master_m->where('return_request',$cond);
                    
                    $rating = "";
                    if(array_search($product_id , array_column($product_review, 'product_id')) !== false) {                        
                       foreach($product_review as $rate){
                            $pid = $rate['product_id'];
                            if($pid == $product_id)
                            $rating = $rate['star_rate'];
                       }
                    } 
                                       
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
                                    <span class="cart_selling_plan mb-0"><strong>Quantity:</strong> <?php echo $quantity;?></span> |
                                    <span class="cart_selling_plan mb-0"><strong>Seller:</strong> <?php echo $vendor_name;?></span>
                                    <h5 class="m-0 p-0">Total : <i class="fa fa-inr"></i> <?php echo $total_amt;?>
                                        <a tabindex="0" class="btn" role="button" data-toggle="popover"
                                            title="Price Detail" data-content="<?php echo $popover_content;?>"><i
                                                class="fa fa-question-circle-o" aria-hidden="true"></i></a>
                                    </h5>
                                    <?php if(array_search($product_id , array_column($product_review, 'product_id')) !== false) {
                                    ?>
                                    <div class="kalles-rating-result">
                                        <span class="kalles-rating-result__pipe">
                                            <span class="kalles-rating-result__start kalles-rating-result__start--big <?php echo $class = ($rating == 1) ? "active" : "" ?>"></span>
                                            <span class="kalles-rating-result__start kalles-rating-result__start--big <?php echo $class = ($rating == 2) ? "active" : "" ?>"></span>
                                            <span class="kalles-rating-result__start kalles-rating-result__start--big <?php echo $class = ($rating == 3) ? "active" : "" ?>"></span>
                                            <span class="kalles-rating-result__start kalles-rating-result__start--big <?php echo $class = ($rating == 4) ? "active" : "" ?>"></span>
                                            <span class="kalles-rating-result__start kalles-rating-result__start--big <?php echo $class = ($rating == 5) ? "active" : "" ?>"></span>
                                        </span>
                                    </div>
                                    <?php  }else{ ?>
                                            
                                            <a class="btn btnwriteReview ttip_nt tooltip_right fs__14 p-0 m-0" role="button" data-productid="<?php echo $product_id;?>">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                <span class="tt_txt">Write a review</span>
                                            </a>
                                           
                                   <?php  } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="mini_cart_body">
                            <?php if(!empty($elements_attributes)){
                                        foreach($elements_attributes as $key=>$val){ ?>
                            <p class="cart_selling_plan mb-0"><?php echo $key; ?> : <?php echo $val;?></p>
                            <?php } }?>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-3 col-lg-3 tc mini_cart_actions">
                    <?php if(!empty($res1)){ ?>                    
                        <h3 class="title cd fs__14 mg__0 mb__5 text-success"><?php echo $res1[0]['status']?></h3>    
                    <?php } else if($deliver_date != null){ ?>                    
                        <?php if (strtotime($today) < strtotime($validitydate)){
                                if(!empty($service)){
                                foreach($service as $row1){                                     
                            ?>
                        <button type="button"
                            class="single_add_to_cart_button button truncate js_frm_cart mb-2 btn-return-replace"
                            data-btnname="<?php echo $row1;?>" data-orderid="<?php echo $order_id;?>"
                            data-productid="<?php echo $product_id;?>">
                            <span class="txt_add"><?php echo $row1;?></span>
                        </button>
                        <?php } } } else{?>
                        <button type="button" class="single_add_to_cart_button button truncate js_frm_cart mb-2">
                            <span class="txt_add">N/A</span>
                        </button>
                        <?php } ?>                   
                    <?php } ?>
                    <a class="btn ttip_nt tooltip_top generate-invoice"  data-productid="<?php echo $product_id;?>" data-orderid="<?php echo $order_id;?>">
                        <i class="fa fa-download" aria-hidden="true"></i>
                        <span class="tt_txt">Invoice</span>
                    </a>
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
            <div class="col-12 col-md-4">
                <div class="lt-block-reviews mt-5">
                    <div class="r--desktop r--tablet w__100">
                        <div id="r--masonry-theme" class="r--show-part-preview">
                            <div class="r--masonry-theme">
                                <div class="r--grid  m-0">
                                    <div class="r--grid-item mb-5 ml-0 mr-0">
                                        <div class="r--author r--text-limit">
                                            <div class="r--avatar-default text-center text-white">P</div>
                                            <span class="r--author-review">Payment Detail</span>
                                        </div>
                                        <div class="r--item-body mt-2">
                                            <p class="p-0 m-0">Payment Date : <?php echo date('d-M-Y'); ?></p>
                                            <p class="p-0 m-0">Payment Mode : COD</p>
                                            <p class="p-0 m-0">Amount : 1000</p>
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
    <?php } else{ ?>

    <div class="kalles-section nt_mini_cart  container mt__60">
        <div class="empty tc mt__40 fs__20">
            <i class="las la-shopping-bag pr mb__10">
            </i>
            <p>
               No Order Found !!
            </p>
        </div>
    </div>
    <?php } ?>
</div>

<!-- Modal : RETURN REQUEST -->
<div class="modal fade" id="returnRequestModal" tabindex="-1" role="dialog" aria-labelledby="returnRequestModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-capitalize" id="requestTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="" id="return-replace-request-form" class="py-3 return-replace-request-form">
                    <input type="hidden" id="txt_product_id" name="txt_product_id">
                    <input type="hidden" id="txt_order_id" name="txt_order_id">
                    <div class="form-row mb-3">
                        <div class="col-12">
                            <label for="fname">
                                Reasons
                            </label>
                            <select class="form-control mb-3" id="txt_reason" name="txt_reason" required>
                                <option value="">Select Reason</option>
                                <?php 
											$allreasons  = $this->config->item('return_replace_reason_array');
											if(!empty($allreasons)){
												foreach($allreasons as $key=>$val)
												{ ?>
                                <option value="<?php echo $key ?>"> <?php echo $val ?> </option>
                                <?php }
											} ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="fname">
                                Comments
                            </label>
                            <input type="text" class="form-control form-control-sm valid" name="txtcoment"
                                id="txtcoment" value="">
                        </div>
                    </div>
                    <div id="refund_div" class="form-row mb-3">
                        <div class="col-12">
                            <label>Refund Amount : &nbsp;&nbsp;&nbsp;
                                <span class="product-price cr"></span>
                            </label>
                        </div>
                        <div class="col-12">
                            <h6>Bank Detail</h6>
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="fname">
                                IFSC Code
                            </label>
                            <input type="text" class="form-control form-control-sm valid" name="txt_ifsc" id="txt_ifsc">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="fname">
                                Account No
                            </label>
                            <input type="text" class="form-control form-control-sm valid" name="txt_acc_no"
                                id="txt_acc_no">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="fname">
                                Account Holder Name
                            </label>
                            <input type="text" class="form-control form-control-sm valid" name="txt_account_name"
                                id="txt_account_name">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="fname">
                                Phone No
                            </label>
                            <input type="text" class="form-control form-control-sm valid" name="txt_phone_no"
                                id="txt_phone_no">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-12">
                            <h6>Pickup Address</h6>
                            <p class="dilivered-address"></p>
                        </div>
                    </div>

                    <div class="form-row my-3">
                        <div class="col-sm-12 col-md-12">
                            <div class="variations_button in_flex column w__100">
                                <div class="flex al_center column">
                                    <button type="submit"
                                        class="single_add_to_cart_button button truncate js_frm_cart w__100">
                                        <span class="txt_add ">
                                            Submit
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>