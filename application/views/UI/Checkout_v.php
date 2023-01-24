<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span></span> Shop
                <span></span> Checkout
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-25">
                        <h4>Billing Details</h4>
                    </div>
                    <div class="order_review">
                        <?php if(!empty($address)) {
                            $i = 0;
                            foreach($address as $add){
                                if(isset($add['set_default']) && $address[0]['set_default'] > 0){ ?>
                        <div class="">
                            <h5>Deliverd To :
                                <span><strong><?php echo $address[0]['first_name'].' '.$address[0]['last_name']?></strong></span><span
                                    class="badge bg-2 mx-2 text-dark"><?php echo ucwords($address[0]['address_type']);?></span>
                            </h5>
                        </div>
                        <div>
                            <span>
                                <?php echo $add['address'].' , '.$add['city'].' ,';?><br>
                                <?php echo $add['state'].','.$add['country'].' - '.$add['pincode'];?>
                            </span>
                            <div>
                                <lable>Contact No : <?php echo $add['mobile']?></lable>
                            </div>
                        </div>
                        <a href="javascript:void(0)"
                            class="btn btn-outline btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white  border-radius-5 btn-shadow-brand hover-up mt-10 fs__14 btn-chnage-address">
                            Change Address</a>
                        <?php } else{ if($i == 0){ ?>
                        <div class="row">
                            <a href="javascript:void(0)"
                                class="btn btn-outline  btn-brand-outline font-weight-bold text-brand bg-white text-hover-white  border-radius-5 btn-shadow-brand hover-up fs__14  btn-chnage-address">
                                Select Address</a>
                        </div>
                        <?php } $i++; } } }else{?>
                        <a href="javascript:void(0)"
                            class="btn btn-outline btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white  border-radius-5 btn-shadow-brand hover-up fs__14 btn_add_address"><i
                                class="fi fi-rs-add mr-10"></i> Add New Address</a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="order_review">
                        <div class="mb-20">
                            <h4>Your Orders</h4>
                        </div>
                        <div class="table-responsive order_table text-center">
                            <?php 
                                $final_price = 0;
                                $subtotal = 0;
                                $shipping_charge = 0;
                                $total_mrp_price = 0;
                                $total_discount = 0;
                                if(!empty($cart)){
                                    $total_item = count($cart);
                                    foreach($cart as $item){                                            
                                    $product_name   = $item['product_name'];                                            
                                    $net_price      = $item['net_price'];
                                    $discount_amt   = $item['discount_amt'];
                                    $gst_amt        = $item['gst_amt'];
                                    $quantity       = $item['quantity'];
                                    $mrp_price      = $item['mrp_price'] * $quantity;
                                    $final_price    = $net_price * $quantity;
                                    $subtotal       =  $final_price + $subtotal;
                                    $total_mrp_price   =  $total_mrp_price  + ($mrp_price);                                            
                                    $total_discount     =  $total_discount + ($discount_amt * $quantity);                                            
                            ?>
                            <?php } }?>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>
                                            <h6>SubTotal</h6>
                                        </th>
                                        <td class="product-subtotal" colspan="2">₹<?php echo $subtotal;?></td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <h6>Shipping</h6>
                                        </th>
                                        <td colspan="2"><em>Free Shipping</em></td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <h6>Total</h6>
                                        </th>
                                        <td colspan="2" class="product-subtotal">
                                            <span class="font-xl text-brand fw-900">₹<?php echo $subtotal;?></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                        <div class="payment_method">
                            <div class="mb-25">
                                <h5>Payment</h5>
                            </div>
                            <div class="payment_option">
                                <div class="custome-radio">
                                    <input class="form-check-input" required="" type="radio" name="payment_type"
                                        id="exampleRadios4" checked="" value="cod">
                                    <label class="form-check-label" for="exampleRadios4" 
                                    aria-controls="checkPayment">COD</label>
                                </div>
                                <div class="custome-radio">
                                    <input class="form-check-input" required="" type="radio" name="payment_type"
                                        id="exampleRadios5" value="other">
                                    <label class="form-check-label" for="exampleRadios5" aria-controls="paypal">Other Payment</label>
                                </div>                                
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="btn btn-fill-out btn-block mt-30 btn-place-order">Place Order</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>