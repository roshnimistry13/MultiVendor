<?php
			
	$coupon_id            	= "";
	$coupon_title           = "";
	$coupon_code          	= "";
	$start_date          	= "";
	$expiry_date          	= "";
	$coupon_amount          = "";
	$purchase_amount        = "";
	$description            = "";
	$is_active              = "checked";
	if(!empty($result))
	{
		$coupon_id       	= $result[0]['coupon_id'];
		$coupon_title      	= $result[0]['coupon_title'];
		$coupon_code      	= $result[0]['coupon_code'];
		$coupon_amount      = $result[0]['coupon_amount'];
		$purchase_amount    = $result[0]['purchase_amount'];
		$description      	= $result[0]['description'];
		$start_date      	= date('d F Y',strtotime($result[0]['start_date']));
		$expiry_date      	= date('d F Y',strtotime($result[0]['expiry_date']));
		$is_active          = $result[0]['is_active'];
		
		if($is_active == "0")
			$is_active = "";
		else
			$is_active = "checked";	
    }

?>
<div class="contents">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <!-- <h4 class="text-capitalize breadcrumb-title">
						Add Product
					</h4> -->
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
                            <a href="<?php echo base_url().'coupon' ?>">
                                Coupon
                            </a>
                            <span class="breadcrumb__seperator">
                                <span class="la la-slash">
                                </span>
                            </span>
                        </li>
                        <li class="atbd-breadcrumb__item">
                            <span>
                                Add Coupon
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="form-element">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-horizontal card-default card-md mb-4">
                                <div class="card-header">
                                    <h6>
                                        Add Coupon
                                    </h6>
                                </div>
                                <div class="card-body py-md-30">
                                    <div class="horizontal-form">
                                        <form method="post" class="form-horizontal"
                                            action="<?php echo base_url().'submit-coupon' ?>" id="coupon-form"
                                            name="coupon-form" enctype="multipart/form-data">
                                            <input type="hidden" id="text_coupon_id" name="text_coupon_id"
                                                value="<?php echo $coupon_id; ?>">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Coupon Title
                                                        </label>
                                                        <input type="text"
                                                            class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                            name="text_coupon_title" placeholder="i.e,  Rs. 100 off on minimum purchase of Rs. 599 ."
                                                            required="" value="<?php echo $coupon_title; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Coupon Code
                                                        </label>
                                                        <input type="text"
                                                            class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                            name="text_coupon_code" placeholder="Coupon Code"
                                                            required="" value="<?php echo $coupon_code; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="atbd-date-picker">
                                                        <div class="form-group mb-0 form-group-calender">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            From
                                                        </label>
                                                            <div class="position-relative">
                                                                <input type="text"
                                                                    class="form-control ih-small form-control-default datepicker"
                                                                    id="from_date" name="from_date" placeholder="Start Date" required value="<?php echo $start_date?>">
                                                                <a href="#"><span data-feather="calendar"></span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="atbd-date-picker">
                                                        <div class="form-group mb-0 form-group-calender">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            To
                                                        </label>
                                                            <div class="position-relative">
                                                                <input type="text"
                                                                    class="form-control ih-small form-control-default datepicker"
                                                                    id="to_date" name="to_date" placeholder="Expiry Date" required value="<?php echo $expiry_date; ?>">
                                                                <a href="#"><span data-feather="calendar"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Coupon Discount
                                                        </label>
                                                        <input type="number"
                                                            class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                            name="text_coupon_amt" placeholder="Coupon Discount(Rs.)"
                                                            required="" value="<?php echo $coupon_amount; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Purchase Amount
                                                        </label>
                                                        <input type="number"
                                                            class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                            name="text_purchase_amt" placeholder="Purchase Amount"
                                                            required="" value="<?php echo $purchase_amount; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Description
                                                        </label>                                                        
                                                        <textarea class="form-control ip-gray radius-xs b-light px-15" name="text_coupon_desc" placeholder="Description"><?php echo $description; ?></textarea>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <?php if(!empty($coupon_id)){ ?>
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <div class="checkbox-theme-default custom-checkbox ">
                                                            <input class="checkbox" type="checkbox"
                                                                name="text_is_active" id="text_is_active" value="1"
                                                                <?php echo $is_active; ?>>
                                                            <label for="text_is_active">
                                                                <span class="checkbox-text">
                                                                    Is Active
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <div class="col-sm-12 d-flex aling-items-center">
                                                    <button type="submit" class="btn btn-success  btn-xs px-30"
                                                        href="javascript:void(0)">
                                                        Submit
                                                    </button>
                                                    <a class="btn btn-light btn-xs px-30 ml-2"
                                                        href="<?php echo base_url('coupon')?>">
                                                        Cancel
                                                    </a>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- ends: .card -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>