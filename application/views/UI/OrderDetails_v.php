<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span></span> Shop
                <span></span> Your Cart
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table shopping-summery text-center clean">
                            <thead>
                                <tr class="main-heading">
                                    <th scope="col">Product</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  
                                $customer_id 				= $this->session->userdata[CUSTOMER_SESSION]['customer_id'];
                                if(!empty($orderDetail)){
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
                                        $star_width = "";
                                        if(array_search($product_id , array_column($product_review, 'product_id')) !== false) {                        
                                            foreach($product_review as $rate){
                                                    $pid = $rate['product_id'];
                                                    if($pid == $product_id)
                                                    $rating = $rate['star_rate'];
                                            }
                                            if($rating == 1)
                                            $star_width = "width:20%";
                                            else if($rating == 2)
                                            $star_width = "width:40%";
                                            else if($rating == 3)
                                            $star_width = "width:60%";
                                            else if($rating == 4)
                                            $star_width = "width:80%";
                                            else if($rating == 5)
                                            $star_width = "width:100%";
                                        } 
                                                        
                                    ?>
                                <tr>
                                    <td class="image product-thumbnail">
                                        <div class="d-flex mt-5">
                                            <img src="<?php echo base_url().PRODUCT_IMAGE_PATH.'/'.$product_id.'/'.$cover_img;?>"
                                                alt="#">
                                            <div class="ml-10 text-start">
                                                <h5 class="product-name">
                                                    <a href="javascript:void(0)"><?php echo $product_name;?></a>
                                                </h5>
                                                <span class="font-xs">Quantity : <?php echo $quantity;?></span> |
                                                <span class="font-xs">Seller : <?php echo $vendor_name;?></span>
                                                <h6 class="mt-5 mb-5">Total : ₹<?php echo $total_amt;?></h6>
                                                <?php if(array_search($product_id , array_column($product_review, 'product_id')) !== false) { ?>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="<?php echo $star_width;?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php }else{ ?>
                                                <a href="javascript:void(0)" class="mx-1 btnwriteReview"
                                                    data-productid="<?php echo $product_id;?>">
                                                    <i class="fi fi-rs-edit"></i>
                                                </a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-des product-name align-top">
                                        <?php if(!empty($elements_attributes)){
                                        foreach($elements_attributes as $key=>$val){ ?>
                                        <p class="font-xs"><?php echo $key; ?> : <?php echo $val;?></p>
                                        <?php } }?>
                                    </td>
                                    <td class="text-right align-top">
                                        <button type="button" class="btn btn-sm generate-invoice"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Invoice"
                                            data-productid="<?php echo $product_id;?>"
                                            data-orderid="<?php echo $order_id;?>">
                                            <i class="fi fi-rs-download "></i>
                                        </button>
                                        <!-- <button type="button" class="btn btn-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Replace">
                                            <i class="fi fi-rs-shuffle "></i>
                                        </button> -->
                                        <?php if(empty($res1) && strtotime($today) < strtotime($validitydate)){
                                            if(!empty($return_or_replace) || $return_or_replace != "" || $return_or_replace != null){ ?>
                                        <button type="button" class="btn btn-sm btn-return-replace"
                                            data-orderid="<?php echo $order_id;?>"
                                            data-productid="<?php echo $product_id;?>">
                                            <i class="fi fi-rs-undo "></i>
                                        </button>
                                        <?php } }?>
                                    </td>
                                </tr>
                                <?php } }?>
                            </tbody>
                            <tfoot class="text-start">
                                <tr class="main-heading">
                                    <th><h6>Delivery Address</h6></th>
                                    <th>&nbsp;</th>
                                    <th><h6>Payment Detail</h6></th>
                                </tr>
                                <tr>
                                    <td scope="col"><?php echo $orderDetail[0]['shipping_address']?></td>
                                    <td scope="col">&nbsp;</td>
                                    <td class="col align-top">
                                        <span>Payment Date : <?php echo date('d-M-Y'); ?></span><br>
                                        <span>Payment Mode : COD</span><br>
                                        <span>Amount : 1000</span><br>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>


<!-- Modal : RETURN REQUEST -->
<div class="modal fade" id="returnRequestModal" tabindex="-1" role="dialog" aria-labelledby="returnRequestModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-capitalize" id="requestTitle">Add Request</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('submit-return-replace')?>"
                    id="return-replace-request-form" class="py-3 return-replace-request-form">
                    <input type="hidden" id="txt_product_id" name="txt_product_id">
                    <input type="hidden" id="txt_order_id" name="txt_order_id">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-style mb-20">
                                <select class="form-select" aria-label="Default select example" id="request_type"
                                    name="request_type" required>
                                    <option value="">Request</option>
                                    <option value="return">Return</option>
                                    <option value="replace">Replace</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-style mb-20">
                                <select class="form-select" aria-label="Default select example" name="txt_reason"
                                    required>
                                    <option value="">Reasons</option>
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
                        </div>
                        <div class="col-md-12">
                            <div class="input-style mb-20">
                                <input name="txtcoment" id="txtcoment" value="" placeholder="Comments" type="text">
                            </div>
                        </div>
                    </div>
                    <div id="refund_div" class="d-none">
                        <div class="row">
                            <div class="col-sm-12 text-danger">
                                <label>Refund Amount : &nbsp;&nbsp;&nbsp;
                                    <span class="product-price"></span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-style mb-20">
                                    <input name="txt_ifsc" id="txt_ifsc" value="" placeholder="IFSC Code" type="text"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-style mb-20">
                                    <input name="txt_acc_no" id="txt_acc_no" value="" placeholder="Account No"
                                        type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-style mb-20">
                                    <input name="txt_account_name" id="txt_account_name" value=""
                                        placeholder="Account Holder Name" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-style mb-20">
                                    <input name="txt_phone_no" id="txt_phone_no" value="" placeholder="Phone No"
                                        type="text" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-fill-out submit" name="submit">Add Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>