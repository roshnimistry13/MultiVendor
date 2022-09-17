<div class="contents view-order-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <ul class="atbd-breadcrumb nav">
                        <li class="atbd-breadcrumb__item">
                            <a href="<?php echo base_url().'dashboard' ?>">
                                <span class="la la-home">
                                </span>
                            </a>
                            <span class="breadcrumb__seperator">
                                <span class="la la-slash">
                                </span>
                            </span>
                        </li>
                        <li class="atbd-breadcrumb__item">
                            <a href="<?php echo base_url().'order' ?>">
                                Order
                            </a>
                            <span class="breadcrumb__seperator">
                                <span class="la la-slash">
                                </span>
                            </span>
                        </li>
                        <li class="atbd-breadcrumb__item">
                            <span>
                                View Order
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="atbd-nav-controller nav-controller-slide">
                            <div class="nav-controller-content tab-content">
                                <div class="tab-pane fade active show" id="control1" role="tabpanel"
                                    aria-labelledby="control1-tab">
                                    <div class="tab-slide-content">
                                        <div class="atbd-tab tab-horizontal">
                                            <ul class="nav nav-tabs vertical-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="tab-1" data-toggle="tab"
                                                        href="#tab-content-order" role="tab"
                                                        aria-controls="tab-content-order" aria-selected="false">Order
                                                        Summary</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-2" data-toggle="tab"
                                                        href="#tab-content-product" role="tab"
                                                        aria-controls="tab-content-product"
                                                        aria-selected="false">Product Detail</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-3" data-toggle="tab"
                                                        href="#tab-content-payment" role="tab"
                                                        aria-controls="tab-content-payment"
                                                        aria-selected="false">Payment </a>
                                                </li>
                                            </ul>


                                            <div class="tab-content">
                                                <!-- ORDER SUMMARY -->

                                                <?php if(!empty($orderSummary)){
                                                    $order_no           = $orderSummary[0]['order_number'];
                                                    $total_quantity     = $orderSummary[0]['total_quantity'];
                                                    $total_item         = $orderSummary[0]['total_item'];
                                                    $discount_amt       = $orderSummary[0]['discount_amt'];
                                                    $gst_amount         = $orderSummary[0]['gst_amount'];
                                                    $ship_amount        = $orderSummary[0]['ship_amount'];
                                                    $order_date         = date('d-M-Y',strtotime($orderSummary[0]['order_date']));
                                                    $delivery_status    = $orderSummary[0]['delivery_status'];
                                                    $total_amount       = $orderSummary[0]['total_amount'];
                                                    $total_mrp          = $orderSummary[0]['total_mrp'];
                                                    
                                                    $cust_name       = $orderSummary[0]['cust_name'];
                                                    $cust_phone       = $orderSummary[0]['cust_phone'];
                                                    $cust_email       = $orderSummary[0]['cust_email'];                                                    
                                                    $shipping_address       = $orderSummary[0]['shipping_address'];

                                                ?>
                                                <div class="tab-pane fade show active" id="tab-content-order"
                                                    role="tabpanel" aria-labelledby="tab-1">
                                                    <div class="row">
                                                        <div class="col-xxl-4 col-lg-6">
                                                            <div class="bg-white radius-xl pt-25 pb-50 px-25">
                                                                <div class="card order-summery  bg-normal p-sm-25 p-15">
                                                                    <div
                                                                        class="card-header bg-white border-bottom-0 p-0 pb-25">
                                                                        <h5 class="fw-500">Order Summary</h5>
                                                                        <h6 class="fw-500">#<?php echo $order_no;?></h6>
                                                                    </div>
                                                                    <div class="card-body bg-white">
                                                                        <div class="total">
                                                                            <div class="shipping">
                                                                                Status :
                                                                                <span
                                                                                    class="badge badge-round badge-success badge-lg"><?php echo $delivery_status;?></span>
                                                                            </div>
                                                                            <div class="subtotalTotal">
                                                                                Total Quantity :
                                                                                <span><?php echo $total_quantity; ?></span>
                                                                            </div>
                                                                            <div class="subtotalTotal">
                                                                                Total MRP :
                                                                                <span><?php echo moneyFormatIndia_admin($total_mrp)?></span>
                                                                            </div>
                                                                            <div class="taxes">
                                                                                Discount :
                                                                                <span>-
                                                                                    <?php echo moneyFormatIndia_admin($discount_amt);?></span>
                                                                            </div>
                                                                            <div class="shipping">
                                                                                Shipping charge :
                                                                                <span>0.0</span>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="total-money d-flex justify-content-between">
                                                                            <h6>Total Amount :</h6>
                                                                            <h5><?php echo moneyFormatIndia_admin($total_amount);?>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- ends: card -->
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-lg-6">
                                                            <div class="bg-white radius-xl pt-25 pb-50 px-25">
                                                                <div class="card order-summery  bg-normal p-sm-25 p-15">
                                                                    <div
                                                                        class="card-header bg-white border-bottom-0 p-0 pb-25">
                                                                        <h5 class="fw-500">Customer Detail</h5>
                                                                    </div>
                                                                    <div class="card-body bg-white">
                                                                        <div class="total">
                                                                            <div class="">
                                                                                Name:
                                                                                <span><?php echo $cust_name;?></span>
                                                                            </div>
                                                                            <div class="">
                                                                                Phone:
                                                                                <span><?php echo $cust_phone; ?></span>
                                                                            </div>
                                                                            <div class="text-lowercase">
                                                                                Email:
                                                                                <span><?php echo $cust_email;?></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body bg-white mt-2">
                                                                        <h6>Shipping Address </h6>
                                                                        <div class="mt-3">
                                                                            <div><?php echo $shipping_address ;?></div>

                                                                        </div>
                                                                    </div>
                                                                </div><!-- ends: card -->

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <?php } ?>

                                                <!-- ORDER PRODUCT DETAIL -->
                                                <?php if(!empty($productdata)){?>
                                                <div class="tab-pane fade" id="tab-content-product" role="tabpanel"
                                                    aria-labelledby="tab-2">
                                                    <div class="row">
                                                        <div class="col-12 mt-30">
                                                            <div class="card border-0">
                                                                <div class="card-header">
                                                                    <h6>Products Detail</h6>
                                                                </div>
                                                                <div class="card-body p-0">
                                                                    <div class="table-responsive">
                                                                        <table
                                                                            class="table table--default product-detail w-100">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Product</th>
                                                                                    <th>Qty</th>
                                                                                    <th>MRP(rs)</th>
                                                                                    <th>Selling Price</th>
                                                                                    <th>Discount(%)</th>
                                                                                    <th>GST(%)</th>
                                                                                    <th>Amount</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php 
                                                                                        $total = 0;
                                                                                        foreach($productdata as $row){ 
                                                                                        $total = $total + $row['total_amt'];
                                                                                    ?>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="<?php echo base_url('edit-product/').$row['product_id'];?>"><?php echo $row['product_name'];?></a>
                                                                                    </td>
                                                                                    <td><?php echo $row['quantity']; ?>
                                                                                    </td>
                                                                                    <td><?php echo moneyFormatIndia_admin($row['mrp_price']);?>
                                                                                    </td>
                                                                                    <td><?php echo moneyFormatIndia_admin($row['net_price']);?>
                                                                                    </td>
                                                                                    <td><?php echo $row['discount']?>
                                                                                    </td>
                                                                                    <td><?php echo $row['gst']?></td>
                                                                                    <td><?php echo moneyFormatIndia_admin($row['total_amt']);?>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php } ?>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th colspan="6" class="text-right">
                                                                                        Total Amount</th>
                                                                                    <th class="text-right pr-3">
                                                                                        <?php echo moneyFormatIndia_admin($total); ?>
                                                                                    </th>
                                                                                </tr>
                                                                            </tfoot>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                                <!-- ORDER PAYMENT DETAIL -->
                                                <?php if(!empty($paymentdata)){ ?>
                                                <div class="tab-pane fade" id="tab-content-payment" role="tabpanel"
                                                    aria-labelledby="tab-3">
                                                    <div class="col-xxl-4 col-lg-6">
                                                            <div class="bg-white radius-xl pt-25 pb-50 px-25">
                                                                <div class="card order-summery  bg-normal p-sm-25 p-15">
                                                                    <div
                                                                        class="card-header bg-white border-bottom-0 p-0 pb-25">
                                                                        <h5 class="fw-500">Payment Summary</h5>                                                                       
                                                                    </div>
                                                                    <div class="card-body bg-white">
                                                                        <div class="total">
                                                                            <div class="shipping">
                                                                                Payment Date :
                                                                                <span><?php echo date('d-M-Y',strtotime($paymentdata[0]['payment_date']));?></span>
                                                                            </div>
                                                                            <div class="shipping">
                                                                                Status :
                                                                                <span class="badge badge-round badge-success badge-lg"><?php echo $paymentdata[0]['pay_status'];?></span>
                                                                            </div>
                                                                            <div class="shipping">
                                                                                Payment Mode :
                                                                                <span class="badge badge-round badge-success badge-lg"><?php echo $paymentdata[0]['payment_mode'];?></span>
                                                                            </div>
                                                                            <div class="subtotalTotal">
                                                                                Paid Amonut :
                                                                                <span><?php echo moneyFormatIndia_admin($paymentdata[0]['total_pay_amount'])?></span>
                                                                            </div>                                                                            
                                                                        </div>                                                                        
                                                                    </div>
                                                                </div><!-- ends: card -->
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

