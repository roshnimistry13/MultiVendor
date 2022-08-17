<?php
	$user_type 	= $this->session->userdata[ADMIN_SESSION]['user_type'];					
	$product_id         = "";
	$product_name     	= "";
	$product_code       = "";
	$short_description  = "";
	$description        = "";
	$brand_id        	= "";
	$vendor_id        	= "";
	$category_id        = "";
	$group_id      		= "";
	$group_unit_id      = "";
	$reach_in      		= "";
	$mrp_price     		= "";
	$discount      		= "";
	$net_price     		= "";
	$tag      			= "";
	$tax      			= "";
	$image			    = "";
	$is_new         	= "";
	$is_best_seller     = "";
	$meta_title     	= "";
	$meta_description   = "";
	$meta_keyword     	= "";
	$is_active          = "checked";
	$stock 				= "";
	
	$read_only = "";
    if(strtolower($user_type) == "vendor"){
        $vendor_id        	= $this->session->userdata[ADMIN_SESSION]['user_id'];
    }
    
	if(!empty($result))
	{
		$product_id       	= $result[0]['product_id'];
		$product_name 		= $result[0]['product_name'];
		$product_code      	= $result[0]['product_code'];
		$short_description 	= $result[0]['short_description'];
		$description      	= $result[0]['description'];
		$brand_id     		= $result[0]['brand_id'];
		$vendor_id     		= $result[0]['vendor_id'];
		$category_id     	= $result[0]['category_id'];
		$group_id     		= $result[0]['group_id'];
		$group_unit_id     	= $result[0]['group_unit_id'];
		$reach_in      		= $result[0]['reach_in'];
		$mrp_price    		= $result[0]['mrp_price'];
		$discount      		= $result[0]['discount'];
		$net_price     		= $result[0]['net_price'];
		$tag		      	= $result[0]['tag'];
		$tax      			= $result[0]['tax'];
		$image      		= $result[0]['image'];
		$is_new      		= $result[0]['is_new'];
		$is_best_seller     = $result[0]['is_best_seller'];
		$meta_title     	= $result[0]['meta_title'];
		$meta_description   = $result[0]['meta_description'];
		$meta_keyword     	= $result[0]['meta_keyword'];
		$is_active          = $result[0]['is_active'];
		$stock      		= $product_stock;

		if($is_new == 0)
			$is_new = "";
		else
			$is_new = "checked";
		
		if($is_best_seller == 0)
			$is_best_seller = "";
		else
			$is_best_seller = "checked";
		
		if($is_active == "0")
			$is_active = "";
		else
			$is_active = "checked";
			
		$read_only = "readonly";
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
                            <a href="<?php echo base_url().'all-product' ?>">
                                Product
                            </a>
                            <span class="breadcrumb__seperator">
                                <span class="la la-slash">
                                </span>
                            </span>
                        </li>
                        <li class="atbd-breadcrumb__item">
                            <span>
                                Add Product
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
                                        Add Product
                                    </h6>
                                </div>
                                <div class="card-body py-md-30">
                                    <div class="horizontal-form">
                                        <form method="post" class="form-horizontal"
                                            action="<?php echo base_url().'submit-product' ?>" id="product-form"
                                            name="product-form" enctype="multipart/form-data">
                                            <input type="hidden" id="text_product_id" name="text_product_id"
                                                value="<?php echo $product_id; ?>">
                                            <input type="hidden" id="group_unit_id" name="group_unit_id"
                                                value="<?php echo $group_unit_id; ?>">
                                            <div class="row">
                                                <div class="col-md-6 mb-10">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Product
                                                            Name</label>
                                                        <input type="text"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15 text-capitalize"
                                                            id="text_product_name" name="text_product_name"
                                                            placeholder="Product Name" required=""
                                                            value="<?php echo $product_name; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-10">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Product Code</label>
                                                        <input type="text"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                                            id="text_product_code" name="text_product_code"
                                                            placeholder="Product Code" required=""
                                                            value="<?php echo $product_code; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-10">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Short Description</label>
                                                        <textarea class="form-control" id="text_short_description"
                                                            name="text_short_description"
                                                            placeholder="Short Description" rows="2"
                                                            required=""><?php echo $short_description; ?></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12 mb-10">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Description</label>
                                                        <textarea class="form-control" id="text_description"
                                                            name="text_description" placeholder="Description" rows="8"
                                                            required=""><?php echo $description; ?></textarea>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-10">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Vendor</label>
                                                        <select id="text_vendor_id" name="text_vendor_id"
                                                            class="form-control select2">
                                                            <option value="">Select Vendor</option>
                                                            <?php
                                                                if(!empty($vendor)){
                                                                    foreach($vendor as $v_row)
                                                                    {
                                                                ?>
                                                            <option <?php if($v_row['vendor_id'] == $vendor_id) { ?>
                                                                selected="selected" <?php }?>
                                                                value="<?php echo $v_row['vendor_id'] ?>">
                                                                <?php echo $v_row['name'] ?>
                                                            </option>
                                                            <?php
                                                                    }
                                                                }
                                                                ?>
                                                        </select>
                                                    </div>
                                                </div>                                                
                                                <div class="col-md-6 mb-10">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Category</label>
                                                        <select id="text_category_id" name="text_category_id"
                                                            class="form-control select2" required="">
                                                            <option value="">Select Category</option>
                                                            <?php
                                                            if(!empty($category)){
                                                                foreach($category as $row)
                                                                {
                                                            ?>
                                                            <option <?php if($row['category_id'] == $category_id) { ?>
                                                                selected="selected" <?php }?>
                                                                value="<?php echo $row['category_id'] ?>">
                                                                <?php echo $row['category_name'] ?>
                                                            </option>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-10">
                                                <input type="hidden" id="brand_id" value="<?php echo $brand_id; ?>">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Brand</label>
                                                        <select id="text_brand_id" name="text_brand_id"
                                                            class="form-control" required="">                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-10">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Group</label>
                                                        <select id="text_group" name="text_group"
                                                            class="form-control select2" required="">
                                                            <option value="">Select Group</option>
                                                            <?php
                                                            if(!empty($group)){
                                                                foreach($group as $g_row)
                                                                {
                                                            ?>
                                                            <option <?php if($g_row['group_id'] == $group_id) { ?>
                                                                selected="selected" <?php }?>
                                                                value="<?php echo $g_row['group_id'] ?>">
                                                                <?php echo $g_row['group_name'] ?>
                                                            </option>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-10">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Group Unit</label>
                                                        <select id="text_group_unit" name="text_group_unit"
                                                            class="form-control select2" required="">
                                                            <option value="">Select Group Unit</option>
                                                            <?php
                                                            if(!empty($group_unit)){
                                                                foreach($group_unit as $gu_row)
                                                                {
                                                            ?>
                                                            <option
                                                                <?php if($gu_row['group_unit_id'] == $group_unit_id) { ?>
                                                                selected="selected" <?php }?>
                                                                value="<?php echo $gu_row['group_unit_id'] ?>">
                                                                <?php echo $gu_row['unit'] ?>
                                                            </option>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6 mb-10">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            MRP Price</label>
                                                        <input type="text" class="form-control" id="text_mrp_price"
                                                            name="text_mrp_price" placeholder="MRP Price"
                                                            value="<?php echo $mrp_price; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-10">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Discount</label>
                                                        <input type="text" class="form-control" id="text_discount"
                                                            name="text_discount" placeholder="Discount"
                                                            value="<?php echo $discount; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-10">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Net Price</label>
                                                        <input type="text" class="form-control" id="text_net_price"
                                                            name="text_net_price" placeholder="Net Price"
                                                            value="<?php echo $net_price; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-10">
                                                    <div class="form-group">
                                                        <label for="text_tax"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Tax</label>
                                                        <select id="text_tax" name="text_tax"
                                                            class="form-control select2">
                                                            <option <?php if($tax == '0') { ?> selected="selected"
                                                                <?php }?> value="0">
                                                                0% GST</option>
                                                            <option <?php if($tax == '5') { ?> selected="selected"
                                                                <?php }?> value="5">
                                                                5% GST</option>
                                                            <option <?php if($tax == '12') { ?> selected="selected"
                                                                <?php }?> value="12">12% GST</option>
                                                            <option <?php if($tax == '18') { ?> selected="selected"
                                                                <?php }?> value="18">18% GST</option>
                                                            <option <?php if($tax == '28') { ?> selected="selected"
                                                                <?php }?> value="28">28% GST</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-10">
                                                    <div class="form-group">
                                                        <label for="text_tax"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Stock</label>
                                                        <input type="text" class="form-control" id="text_stock"
                                                            name="text_stock" placeholder="Stock"
                                                            value="<?php echo $stock; ?>" <?php echo $read_only; ?>>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <div class="custom-file">
                                                            <label for="formGroupExampleInput"
                                                                class="color-dark fs-14 fw-500 align-center">Image</label>
                                                            <input type="file" name="image[]" id="image" multiple=""
                                                                class="form-control">
                                                            <input type="hidden" id="old_image" name="old_image"
                                                                value="<?php echo $image; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <div id="first-name-input-wrapper" class="controls col-sm-9">
                                                            <?php
                                                            if(!empty($image)){
                                                                $img_arr = explode("|",$image);	
                                                                for($i=0; $i<count($img_arr); $i++)
                                                                {		
                                                                    $url = base_url().PRODUCT_IMAGE_PATH.$product_id.'/'.$img_arr[$i]; 		
                                                                ?>
                                                            <img id="<?php echo $i."pic";?>" width="50" height="50"
                                                                src="<?php echo $url;?>"
                                                                onclick="deleteImage(this.id,<?php echo "'".$img_arr[$i]."'"; ?>,<?php echo $product_id ?>);"
                                                                style="cursor: pointer; margin: 5px;">

                                                            <?php				
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-10">
                                                    <div class="form-group">
                                                        <label for="text_is_new"
                                                            class="color-dark fs-14 fw-500 align-left mr-5">
                                                            New Product</label>
                                                        <input type="checkbox" name="text_is_new" id="text_is_new"
                                                            value="1" <?php echo $is_new; ?>>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-10">
                                                    <div class="form-group">
                                                        <label for="text_is_bestseller"
                                                            class="color-dark fs-14 fw-500 align-left mr-5">
                                                            Is Best Seller</label>
                                                        <input type="checkbox" name="text_is_bestseller"
                                                            id="text_is_bestseller" value="1"
                                                            <?php echo $is_best_seller; ?>>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-10">
                                                    <div class="form-group">
                                                        <label for="text_meta_title"
                                                            class="color-dark fs-14 fw-500 align-left">
                                                            Meta Title</label>
                                                        <input type="text" class="form-control" id="text_meta_title"
                                                            name="text_meta_title" placeholder="Meta title"
                                                            value="<?php echo $meta_title; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-10">
                                                    <div class="form-group">
                                                        <label for="text_meta_description"
                                                            class="color-dark fs-14 fw-500 align-left">
                                                            Meta Description</label>
                                                        <textarea class="form-control" id="text_meta_description"
                                                            name="text_meta_description" placeholder="Meta Description"
                                                            rows="2"><?php echo $meta_description; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-10">
                                                    <div class="form-group">
                                                        <label for="text_meta_description"
                                                            class="color-dark fs-14 fw-500 align-left">
                                                            Meta Keyword</label>
                                                        <textarea class="form-control" id="text_meta_keyword"
                                                            name="text_meta_keyword" placeholder="Meta Keyword"
                                                            rows="3"><?php echo $meta_keyword; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <?php if(!empty($product_id)){ ?>
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
                                                        href="<?php echo base_url('all-product')?>">
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