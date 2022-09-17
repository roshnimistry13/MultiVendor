<?php if(!empty($cart)){?>
    <div id="nt_content">
        <div class="kalles-section page_section_heading">
            <div class="page-head tc pr oh page_bg_img page_head_cart_heading">
                <div class="parallax-inner nt_parallax_false nt_bg_lz pa t__0 l__0 r__0 b__0 lazyload"
                    data-bgset="<?php echo UI_ASSETS ?>images/shopping-cart/shopping-cart-head.jpg">
                </div>
                <div class="container pr z_100">
                    <h1 class="tu mb__10 cw">Checkout</h1>
                </div>
            </div>
        </div>
        <div class="kalles-section cart_page_section container mt__60 mb__60">
            <div class="frm_cart_page check-out_calculator">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-6">
                        <div class="billing-section">
                            <h3 class="checkout-section__title">Billing Details</h3>
                            <?php if(!empty($address)) {
								$i = 0;
								foreach($address as $add){
									if(isset($add['set_default']) && $address[0]['set_default'] > 0){
												
							?>
								<div class="row border">
									<div class="col-12">
										<div><a type="button"
												class="button button_primary btn float-right d-inline my-1 btn-chnage-address">Change
												Address</a></div>
										<div>
											<h5>Deliverd To :
												<span><strong><?php echo $address[0]['first_name'].' '.$address[0]['last_name']?></strong></span><span
													class="badge badge-pill badge-info ml__5"><?php echo ucwords($address[0]['address_type']);?></span>
											</h5>
										</div>
									</div>
									<div class="col-12">
										<span>
											<?php echo $add['address'].' , '.$add['city'].' ,';?><br>
											<?php echo $add['state'].','.$add['country'].' - '.$add['pincode'];?>
										</span>
										<div>
											<lable>Contact No : <?php echo $add['mobile']?></lable>
										</div>
									</div>
								</div>
                            <?php } else{ if($i == 0){?>
								<div class="row">
									<button type="button"
										class="single_add_to_cart_button button truncate js_frm_cart w__100 order-4 btn-chnage-address">
										<span class="txt_add ">Select Address</span>
									</button>
                            	</div>
							<?php } $i++;} } }
							else{ ?>
                            <div class="row">
                                <button type="button"
                                    class="single_add_to_cart_button button truncate js_frm_cart w__100 order-4 btn_add_address">
                                    <span class="txt_add ">Add Address</span>
                                </button>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="patyment-section dn">
                            <h3 class="checkout-section__title">Payment Details</h3>
                            <div class="row">                            
                                <ul class="payment_methods">
                                    <li class="payment_method">
                                        <input id="payment_method_cod" type="radio" class="input-radio"
                                            name="payment_type" value="cod" checked="checked">
                                        <label for="payment_method_cod">Case On Delivery</label>
                                        <div class="payment_box payment_method_bacs">
                                            <p>You can pay via Cash/Card or UPI enabled app at the time of delivery. Ask your delivery executive for these options.</p>
                                        </div>
                                    </li>                                    
                                </ul>                            
                            </div>
                        </div></div>
                        <div class="col-12 col-md-8 col-lg-6 mt__50 mb__80 mt-md-0 mb-md-0">
                            <div class="order-review__wrapper">
                                <h3 class="order-review__title">Price Detail</h3>
                                <div class="checkout-order-review">
                                    <table class="checkout-review-order-table">
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
                                        <tfoot>
                                            <tr class="cart-subtotal cart_item">
                                                <th>Total MRP <small>(<?php echo moneyFormatIndia_ui($total_item)." items"; ?>)</small></th>
                                                <td>
                                                    <span class="cart_price">
                                                        <i class="fa fa-inr"></i><?php echo moneyFormatIndia_ui($total_mrp_price); ?><br>
                                                        <small class="text-success fs__12">(inclusive of all taxes)</small>
                                                    </span></td>
                                            </tr>
                                            <tr class="cart-subtotal cart_item">
                                                <th>Discount on MRP</th>
                                                <td><span class="cart_price"><i
                                                            class="fa fa-inr"></i><del><?php echo moneyFormatIndia_ui($total_discount); ?></del></span></td>
                                            </tr>
                                            <tr class="cart_item">
                                                <th>Shipping</th>
                                                <td><span class="cart_price"><i class="fa fa-inr"></i>0.00</span></td>
                                            </tr>
                                            <tr class="order-total cart_item">
                                                <th>Total Amont</th>
                                                <td><strong><span class="cart_price amount"><i
                                                                class="fa fa-inr"></i><?php echo moneyFormatIndia_ui($subtotal); ?></span></strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="checkout-payment">                                   
                                        
                                        <label class="checkout-payment__confirm-terms-and-conditions">
                                            <input type="checkbox" name="terms" id="terms">
                                            <span>I have read and agree to the website <a href="#"
                                                    class="terms-and-conditions-link">terms and
                                                    conditions</a></span>&nbsp;<span class="required">*</span>
                                        </label>
                                        <button type="button" class="button button_primary btn checkout-payment__btn-place-order w-100 btn-continue">CONTINUE</button>
                                        <button type="button" class="button button_primary btn checkout-payment__btn-place-order w-100 btn-place-order dn">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>


<!-- Modal : ADD ADDRESS -->
<?php 
				$allcountry = getAllCountry();
				
			?>
			<div class="modal fade" id="customerAddressModal" tabindex="-1" role="dialog"
			    aria-labelledby="customerAddressModalTitle" aria-hidden="true">
			    <div class="modal-dialog modal-dialog-centered" role="document">
			        <div class="modal-content">
			            <div class="modal-header">
			                <h5 class="modal-title" id="exampleModalLongTitle">Add Address</h5>
			                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                    <span aria-hidden="true">&times;</span>
			                </button>
			            </div>
			            <div class="modal-body">
			                <form method="post" action="<?php echo base_url('add-cust-address')?>" id="customer_address"
			                    class="py-3 add-customer-address">
			                    <div class="form-row mb-3">
			                        <div class="col-md-6 col-12">
			                            <label for="fname">
			                                First Name
			                                <span class="required">
			                                    *
			                                </span>
			                            </label>
			                            <input type="text" class="form-control form-control-sm valid" name="fname" id="fname"
			                                value="" required>
			                        </div>
			                        <div class="col-md-6 col-12">
			                            <label for="name">
			                                Last Name
			                                <span class="required">
			                                    *
			                                </span>
			                            </label>
			                            <input type="text" class="form-control form-control-sm valid" name="lname" id="lname"
			                                value="" required>
			                        </div>
			                    </div>
			                    <div class="form-row mb-3">
			                        <div class="col-md-6 col-12">
			                            <label for="name">
			                                Mobile No.
			                                <span class="required">
			                                    *
			                                </span>
			                            </label>
			                            <input type="text" class="form-control form-control-sm valid" name="mobile_no"
			                                id="mobile_no" value="" required>
			                        </div>
			                        <div class="col-md-6 col-12">
			                            <label for="email">
			                                Email ID
			                                <span class="required">
			                                    *
			                                </span>
			                            </label>
			                            <input type="text" class="form-control form-control-sm valid" name="email" id="email"
			                                value="" required>
			                        </div>
			                    </div>
			                    <div class="form-row mb-3">
			                        <div class="col-12">
			                            <label for="name">
			                                Address
			                                <span class="required">
			                                    *
			                                </span>
			                            </label>
			                            <textarea class="form-control" name="txtaddress" rows="2" required></textarea>
			                        </div>
			                    </div>
			                    <div class="form-row mb-3">
			                        <div class="col-md-6 col-12">
			                            <label for="name">
			                                City
			                                <span class="required">
			                                    *
			                                </span>
			                            </label>
			                            <input type="text" class="form-control form-control-sm valid" name="txtcity" id="txtcity"
			                                value="" required>
			                        </div>
                                    <div class="col-md-6 col-12">
			                            <label for="name">
			                                Pincode
			                                <span class="required">
			                                    *
			                                </span>
			                            </label>
			                            <input type="text" class="form-control form-control-sm valid" name="pincode" id="pincode"
			                                value="" required>
			                        </div>
									<div class="col-md-6 col-12">
			                            <label for="name">
			                                Country
			                                <span class="required">
			                                    *
			                                </span>
			                            </label>
			                            <select class="form-control select2" id="txtcountry" name="txtcountry" required>
			                                <option value=""></option>
			                                <?php foreach($allcountry as $row1){ 
											?>
												<option value="<?php echo $row1->name; ?>" data-countrycode=<?php echo $row1->iso2; ?>><?php echo $row1->name; ?></option>
											<?php } ?>
			                            </select>
			                        </div>
			                        <div class="col-md-6 col-12">
			                            <label for="name">
			                                State
			                                <span class="required">
			                                    *
			                                </span>
			                            </label>
			                            <select class="form-control select2" id="txtstate" name="txtstate" required>			                                
			                            </select>
			                        </div>		                       
			                        
			                    </div>
			                    <div class="form-row mb-3">
			                        <div class="col-12">
			                            <label for="name">
			                                Address Type
			                                <span class="required">
			                                    *
			                                </span>
			                            </label>
			                            <div class="form-check form-check-inline">
			                                <input class="form-check-input" type="radio" name="txtaddressTyperadio"
			                                    id="txthomeradio" value="home" required>
			                                <label class="form-check-label" for="txthomeradio">Home</label>
			                            </div>
			                            <div class="form-check form-check-inline">
			                                <input class="form-check-input" type="radio" name="txtaddressTyperadio"
			                                    id="txtworkradio" value="work">
			                                <label class="form-check-label" for="txtworkradio">work</label>
			                            </div>
			                        </div>
			                    </div>
			                    <div class="form-row mb-3">
			                        <div class="col-12">
			                            <div class="form-check form-check-inline">
			                                <input class="form-check-input" type="checkbox" name="txtdefaultaddress"
			                                    id="txtdefaultaddress" value="1">
			                                <label class="form-check-label" for="txtdefaultaddress">Make this as my default
			                                    address</label>
			                            </div>
			                        </div>
			                    </div>

			                    <div class="form-row mb-3">
			                        <div class="col-sm-12 col-md-12">
			                            <div class="variations_button in_flex column w__100">
			                                <div class="flex al_center column">
			                                    <button type="submit"
			                                        class="single_add_to_cart_button button truncate js_frm_cart w__100 order-4">
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