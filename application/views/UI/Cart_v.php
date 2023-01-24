<?php 
    $total_amt = 0;
    $subtotal = 0;
?>

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
    <section class="mt-50 mb-50 cart-list-section">
        <div class="container">
            <?php  if(!empty($cart)){?> 
                <div class="row cart-page-list">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table shopping-summery text-center clean cart-table">
                                <thead>
                                    <tr class="main-heading">
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                foreach($cart as $item){ 
                                    $product_id             =  $item['product_id'];
                                    $short_code             =  $item['short_code'];
                                    $quantity               =  $item['quantity'];
                                    $stock                  =  $item['stock'];
                                    $net_price              =  $item['net_price'];
                                    $elements_attributes    =  json_decode($item['elements_attributes'],true);
                                    $final_price            =  $quantity  * $net_price;
                                    $subtotal               =  $final_price + $subtotal;?>
                                    <tr class="cart_item_<?php echo $product_id;?>">
                                    <input type="hidden" id="txt_stock_<?php echo $item['product_id'];?>" value="<?php echo $stock;?>">
                                        <td class="image product-thumbnail"><img
                                                src="<?php echo base_url().PRODUCT_IMAGE_PATH.$item['product_id'].'/'.$item['cover_img']?>"
                                                alt="#"></td>
                                        <td class="product-des product-name text-start">
                                            <h5 class="product-name"><a
                                                    href="shop-product-right.html"><?php echo $item['product_name'];?></a>
                                            </h5>
                                            <p class="font-xs">Seller : <?php echo $item['vendor_name'];?></p>
                                            <?php if(!empty($elements_attributes)){
                                                    foreach($elements_attributes as $key=>$val){ ?>
                                            <p class="font-xs"><?php echo ucwords(getElementNameByID($key)); ?> :
                                                <?php echo strtolower(getAttributeNameByID($val));?></p>
                                            <?php } }?>
                                        </td>
                                        <td class="price" data-title="Price">₹<span class="cart_price ins"><?php echo $net_price;?></span></td>
                                        <td class="text-center" data-title="Stock">
                                            <div class="detail-qty border radius  m-auto">
                                                <a href="javascript:void(0)" class="qty-down" onclick="minusItemQty(<?php echo $item['product_id'];?>)"><i class="fi-rs-angle-small-down"></i></a>
                                                <span id="item_<?php echo $item['product_id'];?>" class="qty-val"><?php echo $quantity;?></span>
                                                <a href="javascript:void(0)" class="qty-up" onclick="plusItemQty(<?php echo $item['product_id'];?>)"><i class="fi-rs-angle-small-up"></i></a>
                                            </div>
                                        </td>
                                        <td class="text-right" data-title="Cart">
                                            <span class="cart-item-price"><i class="fa fa-inr"></i><?php echo $final_price;?></span>
                                        </td>
                                        <td class="action mini_cart_tool" data-title="Remove">
                                            <a href="javascript:void(0)" class="text-muted cart_ac_remove" data-pid="<?php echo $item['product_id']; ?>"><i class="fi-rs-trash"></i></a></td>
                                    </tr>
                                    <?php } ?>
                                    <tr class="cart__footer">
                                        <td colspan="5" class="text-end">
                                           <span class=""><strong> Subtotal :</strong></span>
                                        </td>
                                        <td class="total">
                                            <span class="cart_tot_price"><strong><i class="fa fa-inr"></i><?php echo $subtotal;?></strong></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="text-end">
                                            <a href="javascript:void(0)" class="text-muted clear-all-cart"> <i class="fi-rs-cross-small"></i> Clear Cart</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-action text-end">
                            <a class="btn" href="<?php echo base_url('shop')?>"><i
                                    class="fi-rs-shopping-bag mr-10"></i>Continue Shopping</a>
                            <a class="btn" href="<?php echo base_url('checkout')?>">
                            <i class="fi-rs-shopping-cart-check mr-10"></i>Checkout</a>
                        </div>
                    </div>
                </div>
            <?php }else{ ?>
                <div class="row">
                    <div class='col-12 text-center'><img src="<?php echo UI_ASSETS ?>imgs/no-product-1.png"></div>
                </div>
            <?php } ?>
        </div>
    </section>
</main>