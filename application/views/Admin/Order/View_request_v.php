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
                                            </ul>


                                            <div class="tab-content">
                                                <!-- ORDER SUMMARY -->

                                                <?php 
                                                    if(!empty($product)){
                                                        $vendor_id              = $product[0]['vendor_id'];
                                                        $product_name           = $product[0]['product_name'];
                                                        $product_id             = $product[0]['product_id'];
                                                        $quantity               = $product[0]['quantity'];
                                                        $mrp_price              = $product[0]['mrp_price'];
                                                        $net_price              = $product[0]['net_price'];
                                                        $total_amt              = $product[0]['total_amt'];
                                                        $discount               = $product[0]['discount'];
                                                        $gst                    = $product[0]['gst'];
                                                        $elements_attributes    = json_decode($product[0]['elements_attributes'],true); ;
                                                        $discount_amt           = $product[0]['discount_amt'];
                                                        $vendor_name            = $this->Master_m->getVendorName($vendor_id); 
                                                        
                                                    }

                                                    if(!empty($reqest_data)){
                                                        $order_no                       = $reqest_data[0]['order_no'];
                                                        $order_date                     = $reqest_data[0]['order_date'];
                                                        $return_request_date            = $reqest_data[0]['return_request_date'];
                                                        $return_reason                  = $reqest_data[0]['return_reason'];
                                                        $status                         = $reqest_data[0]['status'];
                                                        $comments                       = $reqest_data[0]['comments'];
                                                        $pickup_address                 = $reqest_data[0]['pickup_address'];
                                                        
                                                        $customer_name                  = $reqest_data[0]['customer_name'];
                                                        $mobile                         = $reqest_data[0]['mobile'];
                                                        $email                          = $reqest_data[0]['email'];
                                                        $request_type                   = $reqest_data[0]['request_type']; 
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
                                                                                Request Type :
                                                                                <span><?php echo ucwords($request_type);?></span>
                                                                            </div>
                                                                            <div class="shipping">
                                                                                Status :
                                                                                <span
                                                                                    class="badge badge-round badge-success badge-lg"><?php echo $status;?></span>
                                                                            </div>
                                                                            <div class="subtotalTotal">
                                                                                Total Quantity :
                                                                                <span><?php echo $quantity; ?></span>
                                                                            </div>
                                                                            <div class="subtotalTotal">
                                                                                Selling Price :
                                                                                <span><?php echo moneyFormatIndia_admin($net_price)?></span>
                                                                            </div>
                                                                            <div class="shipping">
                                                                                Shipping charge :
                                                                                <span>0.0</span>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="total-money d-flex justify-content-between">
                                                                            <h6>Total Amount :</h6>
                                                                            <h5><?php echo moneyFormatIndia_admin($total_amt);?>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- ends: card -->

                                                            <!-- BANK DETAIL -->
                                                            <?php if($request_type == "return"){
                                                                $bank_detail    = json_decode($reqest_data[0]['bank_detail'],true);
                                                                $ifsc           = $bank_detail['ifsc_code'];
                                                                $account_no     = $bank_detail['account_no'];
                                                                $account_name   = $bank_detail['account_name'];
                                                                $phone_no       = $bank_detail['phone_no'];
                                                                
                                                            ?>
                                                            <div class="bg-white radius-xl pt-25 pb-50 px-25">
                                                                <div class="card order-summery  bg-normal p-sm-25 p-15">
                                                                    <div
                                                                        class="card-header bg-white border-bottom-0 p-0 pb-25">
                                                                        <h5 class="fw-500">Bank Detail</h5>
                                                                    </div>
                                                                    <div class="card-body bg-white">
                                                                        <div class="total">
                                                                            <div class="shipping">
                                                                                IFSC CODE :
                                                                                <span><?php echo $ifsc;?></span>
                                                                            </div>
                                                                            <div class="subtotalTotal">
                                                                                Account No :
                                                                                <span><?php echo $account_no; ?></span>
                                                                            </div>
                                                                            <div class="subtotalTotal">
                                                                                Acc Holder Name :
                                                                                <span><?php echo ucwords($account_name); ?></span>
                                                                            </div>
                                                                            <div class="shipping">
                                                                                Mobile No :
                                                                                <span><?php echo $phone_no; ?></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
                                                            <!-- ends: card -->
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
                                                                                <span><?php echo $customer_name;?></span>
                                                                            </div>
                                                                            <div class="">
                                                                                Phone:
                                                                                <span><?php echo $mobile; ?></span>
                                                                            </div>
                                                                            <div class="text-lowercase">
                                                                                Email:
                                                                                <span><?php echo $email;?></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body bg-white mt-2">
                                                                        <h6>Pickup Address </h6>
                                                                        <div class="mt-3">
                                                                            <div><?php echo $pickup_address ;?></div>

                                                                        </div>
                                                                    </div>
                                                                </div><!-- ends: card -->

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <?php } ?>

                                                <!-- ORDER PRODUCT DETAIL -->
                                                <?php if(!empty($product)){?>
                                                <div class="tab-pane fade" id="tab-content-product" role="tabpanel"
                                                    aria-labelledby="tab-2">
                                                    <div class="row">                                                        
                                                        <div class="col-12">
                                                            <div class="card border-0">
                                                                <div class="card-body p-0">
                                                                    <div class="table-responsive">
                                                                        <table
                                                                            class="table table--default product-detail w-100">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Product</th>
                                                                                    <th>Qty</th>
                                                                                    <th>MRP</th>
                                                                                    <th>Selling Price</th>
                                                                                    <th>Discount(%)</th>
                                                                                    <th>GST(%)</th>
                                                                                    <th>Amount</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a
                                                                                            href="<?php echo base_url('edit-product/').$product_id;?>"><?php echo $product_name;?></a>
                                                                                        <div
                                                                                            class="sub-title text-capitalize">
                                                                                            <small>Vendor Name :
                                                                                                <?php echo $vendor_name;?></small>
                                                                                        </div>
                                                                                        <?php if(!empty($elements_attributes)){
                                                                                            foreach($elements_attributes as $key=>$val){ ?>
                                                                                        <div class="sub-title">
                                                                                            <small><?php echo $key; ?> :
                                                                                                <?php echo $val;?></small>
                                                                                        </div>
                                                                                        <?php } }?>

                                                                                    </td>
                                                                                    <td><?php echo $quantity; ?>
                                                                                    </td>
                                                                                    <td><?php echo moneyFormatIndia_admin($mrp_price);?>
                                                                                    </td>
                                                                                    <td><?php echo moneyFormatIndia_admin($net_price);?>
                                                                                    </td>
                                                                                    <td><?php echo $discount?>
                                                                                    </td>
                                                                                    <td><?php echo $gst;?></td>
                                                                                    <td><?php echo moneyFormatIndia_admin($total_amt);?>
                                                                                    </td>
                                                                                </tr>

                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th colspan="6" class="text-right">
                                                                                        Total Amount</th>
                                                                                    <th class="text-right pr-3">
                                                                                        <?php echo moneyFormatIndia_admin($total_amt); ?>
                                                                                    </th>
                                                                                </tr>
                                                                            </tfoot>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-12">
                                                            <div class="text-small mb-0">
                                                                <strong> Request Reason :</strong>
                                                                <span><?php echo $return_reason;?></span>
                                                            </div>
                                                            <div class="text-small mb-0">
                                                                <strong>Comment :</strong>
                                                                <span><?php echo $comments;?></span>
                                                            </div>
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