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
    $required                   = "required";
    
    if(!empty($result))
    {
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
        $is_active                  = $result[0]['is_active'];
        $required                   = "";
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
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-horizontal card-default card-md mb-4">
                                <div class="card-header">
                                    <h6>
                                        Add Vendor
                                    </h6>
                                </div>
                                <div class="card-body py-md-30">
                                    <div class="horizontal-form">
                                        <form method="post" class="form-horizontal"
                                            action="<?php echo base_url().'submit-vendor' ?>" id="vendor-form"
                                            name="user-form" enctype="multipart/form-data">
                                            <input type="hidden" id="text_vendor_id" name="text_vendor_id"
                                                value="<?php echo $vendor_id; ?>">
                                            <div class="row">
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Vendor
                                                            Name</label>
                                                        <input type="text"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                                            id="text_name" name="text_name" placeholder="Name"
                                                            required="" value="<?php echo $name; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Email</label>
                                                        <input type="text"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                                            id="text_email" name="text_email" placeholder="Email ID"
                                                            value="<?php echo $email; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Password</label>
                                                        <input type="password"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                                            id="text_password" name="text_password" placeholder="Password"
                                                            value="" <?php echo $required; ?>>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center"> Contact
                                                            No</label>
                                                        <input type="text"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                                            id="text_contact_no" name="text_contact_no"
                                                            placeholder="Contact No" required=""
                                                            value="<?php echo $phone; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Company</label>
                                                        <input type="text"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                                            id="text_company" name="text_company" placeholder="Company"
                                                            value="<?php echo $company; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">GSTIN
                                                            No</label>
                                                        <input type="text"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                                            id="text_gstin_no" name="text_gstin_no" placeholder="GSTIN"
                                                            required="" value="<?php echo $gst; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">PAN No</label>
                                                        <input type="text"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                                            id="text_pan_no" name="text_pan_no" placeholder="PAN"
                                                            value="<?php echo $pan; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Address</label>
                                                        <input type="text"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                                            id="text_street" name="text_street" placeholder="Street"
                                                            required="" value="<?php echo $street; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">City</label>
                                                        <input type="text"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                                            id="text_city" name="text_city" placeholder="City"
                                                            value="<?php echo $city; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">State</label>
                                                        <input type="text"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                                            id="text_state" name="text_state" placeholder="State"
                                                            required="" value="<?php echo $state; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Pincode</label>
                                                        <input type="text"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                                            id="text_pincode" name="text_pincode" placeholder="Pincode"
                                                            value="<?php echo $pincode; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Country</label>
                                                        <select id="text_country" name="text_country"
                                                            class="form-control" required="">
                                                            <option value="">Select</option>
                                                            <?php
                                                                    $country_array  = $this->config->item('country_array');
                                                                    if(!empty($country_array)){
                                                                        foreach($country_array as $key=>$val)
                                                                        {
                                                                    ?>
                                                                                    <option <?php echo ($key == $country) ? 'selected' : ''; ?>
                                                                                        value="<?php echo $key ?>">
                                                                                        <?php echo $val ?>
                                                                                    </option>
                                                                                    <?php
                                                                        }
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
    </div>

</div>