<?php
$user_type                      = $this->session->userdata[ADMIN_SESSION]['user_type'];
$parent_name                    = "";	
$parent_product_id              = "";	
$read_only = "";

if(strtolower($user_type) == "vendor")
{
	$vendor_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
}

if(!empty($parent_data)){
	
	$parent_name                    = $parent_data[0]['parent_name'];	
	$parent_product_id              = $parent_data[0]['parent_product_listing_id'];	
    $read_only                      = "readonly";
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
                            <a href="<?php echo base_url() ?>">
                                Product
                            </a>
                            <span class="breadcrumb__seperator">
                                <span class="la la-slash">
                                </span>
                            </span>
                        </li>
                        <li class="atbd-breadcrumb__item">
                            <span>
                                Add Parent Product
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
                            <?php if(strtolower($user_type) != "admin"){?>
                            <div class="horizontal-form">
                                <form method="post" class="form-horizontal"
                                    action="<?php echo base_url().'submit-parent-product' ?>" id="parent-product-form"
                                    name="parent-product-form" enctype="multipart/form-data">
                                    <input type="hidden" id="text_parent_product_id" name="text_parent_product_id"
                                        value="<?php echo $parent_product_id;?>">
                                    <div class="card card-horizontal card-default card-md mb-4 border">
                                        <div class="card-header border-0 bg-normal">
                                            <h6 class="color-primary">
                                                Parent Product Detail
                                            </h6>
                                        </div>
                                        <div class="card-body border-top">
                                            <div class="row">
                                                <div class="col-md-8 mb-10">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Parent Name
                                                        </label>
                                                        <input type="text"
                                                            class="form-control ih-small ip-gray radius-xs b-light px-15 text-capitalize"
                                                            id="text_parent_product_name"
                                                            name="text_parent_product_name"
                                                            placeholder="Parent Product Name" required=""
                                                            value="<?php echo $parent_name;?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-10">
                                                    <div class="form-group row mt-3">
                                                        <div class="col-sm-12 d-flex aling-items-center">
                                                            <button type="submit" class="btn btn-success  btn-xs px-30">
                                                                Submit
                                                            </button>
                                                            <a class="btn btn-light btn-xs px-30 ml-2"
                                                                href="<?php echo base_url('parent-product')?>">
                                                                Cancel
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <?php  } ?>
                            <?php if(!empty($parent_product_id) && $parent_product_id != "" && $parent_product_id > 0){?>
                            <div class="horizontal-form product-variant-form">                                
                                    <div class="card card-horizontal card-default card-md mb-4 border">
                                        <div class="card-header border-0 bg-normal">
                                            <h6 class="color-primary">
                                                Product Variants
                                            </h6>
                                        </div>
                                        <div class="card-body border-top">
                                            <div class="row">
                                            <?php if(strtolower($user_type) != "admin"){?>
                                                <div class="col-md-8 mb-10">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Product List
                                                        </label>
                                                        <select id="all_product_list" name="all_product_list"
                                                            class="form-control select2" required="">
                                                            <option value="">
                                                                Select Product
                                                            </option>
                                                            <?php 
                                                                    if(!empty($product_list)){
                                                                    foreach($product_list as $row1){
                                                                        $whr['product_id'] 			= $row1['product_id'];
                                                                        $eleattr 					= $this->Master_m->where('product_elements_attributes',$whr);
                                                                        $elediv 					= '';
                                                                        foreach($eleattr as $ele){
                                                                            $ele_id 			= $ele['element_id'];
                                                                            $ele_name 			= $this->Master_m->getElementNameByID($ele_id);
                                                                            $arrt_id 			= $ele['attributes_id'];
                                                                            $arrt_name 			= getAttributeNameByID($arrt_id);
                                                                            $elediv .='<span class="sub-title text-primary"><small>'.$ele_name.' : '.$arrt_name.'</small></span>&nbsp;';
                                                                        }?>
                                                            <option value="<?php echo $row1['product_id']?>">
                                                                <?php echo $row1['product_name'].' ('.$elediv.')'?></option>
                                                            <?php } }?>
                                                        </select>
                                                    </div>
                                                </div>
                                            <?php  } ?>
                                                <div class="col-md-12 mb-10">
                                                    <div class="userDatatable global-shadow border-0 bg-white w-100">
                                                        <div class="table-responsive">
                                                            <?php echo $varientlist;?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                               
                            </div>
                            <?php } ?>
                            <!-- </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>