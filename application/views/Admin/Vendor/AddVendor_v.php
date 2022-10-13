<?php
			
    $is_active              	= "checked";
    $vendor_id              	= "";
    $name              	        = "";
    $email              	    = "";
    $phone              	    = "";
    $company              	    = "";
    $gst              	        = "";
    $pan              	        = "";
    $street              	    = "";
    $city              	        = "";
    $state              	    = "";
    $pincode              	    = "";
    $country              	    = "";
    $bank_name              	= "";
    $branch_code              	= "";
    $ifsc_code              	= "";
    $accountno              	= "";
    $acc_holder_name            = "";
    $required                   = "required";
    $disable                    = "";
    if(!empty($result))
    {
        $user_type 	                = $this->session->userdata[ADMIN_SESSION]['user_type'];	
        $vendor_id              	= $result[0]['vendor_id'];
        $name              	        = $result[0]['name'];
        $email              	    = $result[0]['email'];
        $phone              	    = $result[0]['phone'];
        $company              	    = $result[0]['company'];
        $gst              	        = $result[0]['gstin_no'];
        $pan              	        = $result[0]['pan_no'];
        $street              	    = $result[0]['address'];
        $city              	        = $result[0]['city'];
        $state              	    = $result[0]['state'];
        $pincode              	    = $result[0]['pin_code'];
        $country              	    = $result[0]['country'];
        $bank_name              	= $result[0]['bank_name'];
        $branch_code              	= $result[0]['branch_code'];
        $ifsc_code              	= $result[0]['ifsc_code'];
        $accountno              	= $result[0]['accountno'];
        $acc_holder_name            = $result[0]['acc_holder_name'];
        $is_active                  = $result[0]['is_active'];
        $required                   = "";
        if($is_active == "0")
            $is_active = "";
        else
            $is_active = "checked";
        
        $disable = "disabled";
        if(strtolower($user_type) != "admin"){
            $disable = "";
        }
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
                            <a href="<?php echo base_url().'vendor' ?>">
                                Vendor
                            </a>
                            <span class="breadcrumb__seperator">
                                <span class="la la-slash">
                                </span>
                            </span>
                        </li>
                        <li class="atbd-breadcrumb__item">
                            <span>
                                Add Vendor
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="form-element">
            <div class="row">
                <div class="col-12">
                    <div class="card card-horizontal card-default card-md mb-4">
                        <div class="card-header">
                            <h6>
                                Add Vendor
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="horizontal-form">
                                <form method="post" class="form-horizontal"
                                    action="<?php echo base_url().'submit-vendor' ?>" id="vendor-form" name="user-form"
                                    enctype="multipart/form-data">
                                    <input type="hidden" id="text_vendor_id" name="text_vendor_id"
                                        value="<?php echo $vendor_id; ?>">

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card card-default card-md mb-4">
                                                <div class="card-body pb-10 pl-0">
                                                    <div class="atbd-collapse atbd-collapse-custom">
                                                        <div class="atbd-collapse-item">
                                                            <div class="atbd-collapse-item__header">
                                                                <a href="#" class="item-link collapsed"
                                                                    data-toggle="collapse"
                                                                    data-target="#collapse-body-profile-detail"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapse-body-profile-detail">

                                                                    <i class="la la-angle-right"></i>

                                                                    <h6>Profile Detail</h6>
                                                                </a>
                                                            </div>
                                                            <div id="collapse-body-profile-detail"
                                                                class="atbd-collapse-item__body collapse pt-5 show"
                                                                style="">
                                                                <div class="collapse-body-text">
                                                                    <div class="row">
                                                                        <div class="col-md-3 mb-25">
                                                                            <div class="form-group">
                                                                                <label for="formGroupExampleInput"
                                                                                    class="color-dark fs-14 fw-500 align-center">Vendor
                                                                                    Name</label>
                                                                                <input type="text"
                                                                                    class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                                                    id="text_name" name="text_name"
                                                                                    placeholder="Name" required=""
                                                                                    value="<?php echo $name; ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 mb-25">
                                                                            <div class="form-group">
                                                                                <label for="formGroupExampleInput"
                                                                                    class="color-dark fs-14 fw-500 align-center">Email</label>
                                                                                <input type="text"
                                                                                    class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                                                    id="text_email" name="text_email"
                                                                                    placeholder="Email ID"
                                                                                    value="<?php echo $email; ?>"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 mb-25">
                                                                            <div class="form-group">
                                                                                <label for="formGroupExampleInput"
                                                                                    class="color-dark fs-14 fw-500 align-center">Password</label>
                                                                                <input type="password"
                                                                                    class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                                                    id="text_password"
                                                                                    name="text_password"
                                                                                    placeholder="Password" value=""
                                                                                    <?php echo $required; ?>>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 mb-25">
                                                                            <div class="form-group">
                                                                                <label for="formGroupExampleInput"
                                                                                    class="color-dark fs-14 fw-500 align-center">
                                                                                    Contact
                                                                                    No</label>
                                                                                <input type="text"
                                                                                    class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                                                    id="text_contact_no"
                                                                                    name="text_contact_no"
                                                                                    placeholder="Contact No" required=""
                                                                                    value="<?php echo $phone; ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 mb-25">
                                                                            <div class="form-group">
                                                                                <label for="formGroupExampleInput"
                                                                                    class="color-dark fs-14 fw-500 align-center">Company</label>
                                                                                <input type="text"
                                                                                    class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                                                    id="text_company"
                                                                                    name="text_company"
                                                                                    placeholder="Company"
                                                                                    value="<?php echo $company; ?>"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 mb-25">
                                                                            <div class="form-group">
                                                                                <label for="formGroupExampleInput"
                                                                                    class="color-dark fs-14 fw-500 align-center">GSTIN
                                                                                    No</label>
                                                                                <input type="text"
                                                                                    class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                                                    id="text_gstin_no"
                                                                                    name="text_gstin_no"
                                                                                    placeholder="GSTIN" required=""
                                                                                    value="<?php echo $gst; ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 mb-25">
                                                                            <div class="form-group">
                                                                                <label for="formGroupExampleInput"
                                                                                    class="color-dark fs-14 fw-500 align-center">PAN
                                                                                    No</label>
                                                                                <input type="text"
                                                                                    class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                                                    id="text_pan_no" name="text_pan_no"
                                                                                    placeholder="PAN"
                                                                                    value="<?php echo $pan; ?>"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 mb-25">
                                                                            <div class="form-group">
                                                                                <label for="formGroupExampleInput"
                                                                                    class="color-dark fs-14 fw-500 align-center">Address</label>
                                                                                <input type="text"
                                                                                    class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                                                    id="text_street" name="text_street"
                                                                                    placeholder="Street" required=""
                                                                                    value="<?php echo $street; ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 mb-25">
                                                                            <div class="form-group">
                                                                                <label for="formGroupExampleInput"
                                                                                    class="color-dark fs-14 fw-500 align-center">City</label>
                                                                                <input type="text"
                                                                                    class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                                                    id="text_city" name="text_city"
                                                                                    placeholder="City"
                                                                                    value="<?php echo $city; ?>"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 mb-25">
                                                                            <div class="form-group">
                                                                                <label for="formGroupExampleInput"
                                                                                    class="color-dark fs-14 fw-500 align-center">State</label>
                                                                                <input type="text"
                                                                                    class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                                                    id="text_state" name="text_state"
                                                                                    placeholder="State" required=""
                                                                                    value="<?php echo $state; ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 mb-25">
                                                                            <div class="form-group">
                                                                                <label for="formGroupExampleInput"
                                                                                    class="color-dark fs-14 fw-500 align-center">Pincode</label>
                                                                                <input type="number"
                                                                                    class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                                                    id="text_pincode"
                                                                                    name="text_pincode"
                                                                                    placeholder="Pincode"
                                                                                    value="<?php echo $pincode; ?>"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 mb-25">
                                                                            <div class="form-group">
                                                                                <label for="formGroupExampleInput"
                                                                                    class="color-dark fs-14 fw-500 align-center">Country</label>
                                                                                <select id="text_country"
                                                                                    name="text_country"
                                                                                    class="form-control" required="">
                                                                                    <option value="">Select</option>
                                                                                    <?php
                                                                                        $country_array  = $this->config->item('country_array');
                                                                                        if(!empty($country_array)){
                                                                                            foreach($country_array as $key=>$val) { ?>
                                                                                                <option
                                                                                                    <?php echo ($key == $country) ? 'selected' : ''; ?>
                                                                                                    value="<?php echo $key ?>">
                                                                                                    <?php echo $val ?>
                                                                                                </option>
                                                                                        <?php }
                                                                                        }
                                                                                        ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <?php if(!empty($vendor_id)){ ?>
                                                                        <div class=" form-group">
                                                                            <div class="col-md-12">
                                                                                <div
                                                                                    class="checkbox-theme-default custom-checkbox ">
                                                                                    <input class="checkbox"
                                                                                        type="checkbox"
                                                                                        name="text_is_active"
                                                                                        id="text_is_active" value="1"
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="atbd-collapse-item">
                                                            <div class="atbd-collapse-item__header">
                                                                <a href="#" class="item-link collapsed"
                                                                    data-toggle="collapse"
                                                                    data-target="#collapse-body-bank-detail"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapse-body-bank-detail">
                                                                    <i class="la la-angle-right"></i>
                                                                    <h6>Bank Detail</h6>
                                                                </a>
                                                            </div>
                                                            <div id="collapse-body-bank-detail"
                                                                class="atbd-collapse-item__body collapse pt-5" style="">
                                                                <div class="collapse-body-text">
                                                                    <div class="row">
                                                                        <div class="col-md-4 ">
                                                                            <div class="form-group">
                                                                                <label for="formGroupExampleInput"
                                                                                    class="color-dark fs-14 fw-500 align-center">Bank Name</label>
                                                                                <input type="text"
                                                                                    class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                                                    id="text_bank_name" name="text_bank_name"
                                                                                    placeholder="Bank Name"
                                                                                    value="<?php echo $bank_name; ?>"
                                                                                    required <?php echo $disable;?>>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 ">
                                                                            <div class="form-group">
                                                                                <label for="formGroupExampleInput"
                                                                                    class="color-dark fs-14 fw-500 align-center">Branch Code</label>
                                                                                <input type="text"
                                                                                    class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                                                    id="text_branch_code" name="text_branch_code"
                                                                                    placeholder="Branch Code"
                                                                                    value="<?php echo $branch_code; ?>"
                                                                                    required <?php echo $disable;?>>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 ">
                                                                            <div class="form-group">
                                                                                <label for="formGroupExampleInput"
                                                                                    class="color-dark fs-14 fw-500 align-center">IFSC Code</label>
                                                                                <input type="text"
                                                                                    class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                                                    id="text_ifsc_code" name="text_ifsc_code"
                                                                                    placeholder="IFSC Code"
                                                                                    value="<?php echo $ifsc_code; ?>"
                                                                                    required <?php echo $disable;?>>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 ">
                                                                            <div class="form-group">
                                                                                <label for="formGroupExampleInput"
                                                                                    class="color-dark fs-14 fw-500 align-center">Account Number</label>
                                                                                <input type="text"
                                                                                    class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                                                    id="text_accountno" name="text_accountno"
                                                                                    placeholder="Account No"
                                                                                    value="<?php echo $accountno; ?>"
                                                                                    required <?php echo $disable;?>>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 ">
                                                                            <div class="form-group">
                                                                                <label for="formGroupExampleInput"
                                                                                    class="color-dark fs-14 fw-500 align-center">Account Holder Name</label>
                                                                                <input type="text"
                                                                                    class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                                                    id="text_card_holdername" name="text_card_holdername"
                                                                                    placeholder="Name"
                                                                                    value="<?php echo $acc_holder_name; ?>"
                                                                                    required <?php echo $disable;?>>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ends: .card -->

                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <div class="col-sm-12 d-flex aling-items-center">
                                            <button type="submit" class="btn btn-success  btn-xs px-30"
                                                href="javascript:void(0)">
                                                Submit
                                            </button>
                                            <a class="btn btn-light btn-xs px-30 ml-2"
                                                href="<?php echo base_url('vendor')?>">
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