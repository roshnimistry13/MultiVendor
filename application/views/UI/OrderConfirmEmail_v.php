<?php 
    if(!empty($orderdata)){
        $order_number       = $orderdata[0]['order_number'];
        $total_amount       = $orderdata[0]['total_amount'];
        $discount_amt       = $orderdata[0]['discount_amt'];
        $ship_amount        = $orderdata[0]['ship_amount'];
        $total_mrp          = $orderdata[0]['total_mrp'];
        $order_date         = $orderdata[0]['order_date'];
        $shipping_address   = $orderdata[0]['shipping_address'];
        $customer_name      = $orderdata[0]['customer_name'];
    }
?>
<div style="padding:5% 0%" align="center">
    <table style="font-family:sans-serif;background-color:#ffffff;border:1px solid #dedede;border-radius:3px"
        width="600" cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td valign="top" align="center" colspan="3">
                    <table style="background-color:#eee;color:#000;font-family:sans-serif; border-radius:3px 3px 0 0"
                        width="100%">
                        <tbody>
                            <tr>
                                <td style="padding:20px 20px; display:block">
                                    <h2 style="font-size:30px;font-weight:700;line-height:100%;margin:0;text-align:left;color:#000"">
                                    MultiVendor
									<small style=" font-size: 14px; display: block; letter-spacing: 1px; color: #868686; font-weight: normal;">
                                    Thank you For Your Order</small></h2>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="padding:20px 20px 0px 20px;" colspan="3">
                    <div
                        style="font-size: 14px; display: block; letter-spacing: 1px; color: #868686; font-weight: normal;">
                        <h3>Hi <?php echo ucwords($customer_name); ?>,</h3>
                    </div>
                    <div
                        style="font-size: 14px; display: block; letter-spacing: 1px; color: #868686; font-weight: normal;padding-bottom:10px;">
                        Your order has been successfully placed!</div>
                    <div
                        style="font-size: 14px; display: block; letter-spacing: 1px; color: #868686; font-weight: normal">
                        Delivery is on track and we will keep you updated as your order is being packed,shipped and
                        delivered. Meanwhile, you can check the status of your order on Multivendor.com
                    </div>
                    <div
                        style="font-size: 14px; display: block; letter-spacing: 1px; color: #868686; font-weight: normal padding-bottom:20px;">
                        <h3> Please find below, the summary of your order #<?php echo $order_number; ?></h3>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding:0px 15px; border-bottom: 1px solid #ddd;">
                    <h3>Item</h3>
                </td>
                <td style="padding:0px 15px; border-bottom: 1px solid #ddd;">
                    <h3>Qty</h3>
                </td>
                <td style="padding:0px 15px; border-bottom: 1px solid #ddd;">
                    <h3>Price</h3>
                </td>
            </tr>
            <?php if(!empty($productdata)){
                foreach($productdata as $item){
            ?>
            <tr>
                <td style="padding:5px 15px;font-size: 14px; letter-spacing: 1px; color: #868686; font-weight: normal;"><?php echo $item['product_name']; ?></td>
                <td style="padding:5px 15px;font-size: 14px; letter-spacing: 1px; color: #868686; font-weight: normal;"><?php echo $item['quantity'];?></td>
                <td style="padding:5px 15px;font-size: 14px; letter-spacing: 1px; color: #868686; font-weight: normal;">Rs. <?php echo $item['net_price']?></td>
            </tr>  
            <?php } } ?>          
        </tbody>
        <tfoot style="border-top: 1px solid #ddd;">
            <tr style="">
                <th colspan="2" style="padding:5px 15px; border-top: 1px solid #ddd;border-bottom: 1px solid #ddd; text-align:right">
                    Subtotal : </th>
                <th style="padding:5px 15px;  border-top: 1px solid #ddd;border-bottom: 1px solid #ddd; text-align:left">
                    Rs. <?php echo $total_amount; ?>
                </th>
            </tr>
            <!-- <tr style="">
                <th colspan="2" style="padding:5px 15px; border-bottom: 1px solid #ddd; text-align:right"> Discount :
                </th>
                <th style="padding:5px 15px; border-bottom: 1px solid #ddd; text-align:left"><?php echo $discount_amt; ?> </th>
            </tr> -->
            <tr style="">
                <th colspan="2" style="padding:5px 15px; border-bottom: 1px solid #ddd; text-align:right"> Shipping :
                </th>
                <th style="padding:5px 15px; border-bottom: 1px solid #ddd; text-align:left">Rs. <?php echo $ship_amount; ?> </th>
            </tr>
            <tr style="">
                <th colspan="2" style="padding:5px 15px; border-bottom: 1px solid #ddd; text-align:right"> Total : </th>
                <th style="padding:5px 15px; border-bottom: 1px solid #ddd; text-align:left">Rs. <?php echo $total_amount + $ship_amount; ?></th>
            </tr>
            <tr>
                <td colspan="2" style="padding:5px 15px; border-bottom: 1px solid #ddd;">
                    <div
                        style="padding-bottom:20px;font-size: 14px; display: block; letter-spacing: 1px; color: #868686; font-weight: normal;text-align:left">
                        <h3>Delivery Address</h3>
                        <?php echo $shipping_address; ?>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
</div>