<?php
$user_type         = $this->session->userdata[ADMIN_SESSION]['user_type'];
$product_id        = "";
$product_name      = "";
$product_code      = "";
$short_description = "";
$description       = "";
$brand_id          = "";
$vendor_id         = "";
$category_id       = "";
$child_category    = "";
$mrp_price         = "";
$unit_price         = "";
$discount          = "";
$net_price         = "";
$tag               = "";
$tax               = "";
$image             = "";
$cover_img         = "";
$is_new            = "";
$is_best_seller    = "";
$is_feature        = "";
$meta_title        = "";
$meta_description  = "";
$meta_keyword      = "";
$is_active         = "checked";
$stock             = "";
$qty                = "";
$disabled          = "";
$element_id        = array();
$attributes_id = array();

$warranty_title 					= "";
$warranty_detail 					= "";


$read_only = "";
if(strtolower($user_type) == "vendor")
{
	$vendor_id = $this->session->userdata[ADMIN_SESSION]['user_id'];
}

if(!empty($result)){
	$product_id             = $result[0]['product_id'];
	$product_name           = $result[0]['product_name'];
	$product_code           = $result[0]['product_code'];
	$short_description      = $result[0]['short_description'];
	$description            = $result[0]['description'];
	$brand_id               = $result[0]['brand_id'];
	$vendor_id              = $result[0]['vendor_id'];
	$category_id            = $result[0]['category_id'];
	$child_category         = $result[0]['child_category'];
	$mrp_price              = $result[0]['mrp_price'];
	$unit_price              = $result[0]['unit_price'];
	$discount               = $result[0]['discount'];
	$net_price              = $result[0]['net_price'];
	$tag                    = $result[0]['tag'];
	$tax                    = $result[0]['tax'];
	$image                  = $result[0]['image'];
	$cover_img              = $result[0]['cover_img'];
	$is_new_product         = $result[0]['is_new_product'];
	$is_popular_product     = $result[0]['is_popular_product'];
	$is_feature_product     = $result[0]['is_feature_product'];
	$meta_title        		= $result[0]['meta_title'];
	$meta_description  		= $result[0]['meta_description'];
	$meta_keyword      		= $result[0]['meta_keyword'];
	$is_active         		= $result[0]['is_active'];
	$qty                    = $result[0]['qty'];;
	//$stock             		= $product_stock;
	$stock             		= $result[0]['stock'];
	$element_id        		= explode(',',$result[0]['element_id']);
	$attributes_id     		= explode(',',$result[0]['attributes_id']);
	$attr_result       		= $attr_result;
    $disabled               = "disabled";

    $warranty_title 					= $result[0]['warranty_title'];
    $warranty_detail 					= $result[0]['warranty_detail'];
    
	
	if($is_new_product == 0)
	$is_new = "";
	else
	$is_new = "checked";

	if($is_popular_product == 0)
	$is_best_seller = "";
	else
	$is_best_seller = "checked";

	if($is_feature_product == 0)
	$is_feature = "";
	else
	$is_feature = "checked";

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
                            <!-- <div class="card card-horizontal card-default card-md mb-4">
                                <div class="card-header">
                                    <h6 class="color-primary">
                                        Add Product
                                    </h6>
                                </div>
                                <div class="card-body border-top py-md-30"> -->
                                    <div class="horizontal-form">
                                        <form method="post" class="form-horizontal"
                                            action="<?php echo base_url().'submit-product' ?>" id="product-form"
                                            name="product-form" enctype="multipart/form-data">
                                            <input type="hidden" id="text_product_id" name="text_product_id"
                                                value="<?php echo $product_id; ?>">
                                            <input type="hidden" id="txt_second_last_child"
                                                value="<?php echo $second_last_child; ?>">
                                            <div class="card card-horizontal card-default card-md mb-4 border">
                                                <div class="card-header border-0 bg-normal">
                                                    <h6 class="color-primary">
                                                        Product Detail
                                                    </h6>
                                                </div>
                                                <div class="card-body border-top">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <ul id="category_breadcrumb"
                                                                    class="atbd-breadcrumb nav category_breadcrumb">
                                                                    <?php if(!empty($result) && !empty($breadcrumbs)){ 
                                                                echo $breadcrumbs;
                                                            }?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 mb-10">
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput"
                                                                    class="color-dark fs-14 fw-500 align-center">
                                                                    Category
                                                                </label>
                                                                <select id="text_category_id" name="text_category_id"
                                                                    class="form-control select2" required="">
                                                                    <option value="">
                                                                        Select Category
                                                                    </option>
                                                                    <?php
															if(!empty($category))
															{
																foreach($category as $row){
																	?>
                                                                    <option
                                                                        <?php if($row['category_id'] == $category_id) echo "selected"?>
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
                                                        <div class="col-md-4 mb-10 div-subcategory">
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput"
                                                                    class="color-dark fs-14 fw-500 align-center">
                                                                    Subcategory
                                                                </label>
                                                                <select id="text_subcategory_id"
                                                                    name="text_subcategory_id"
                                                                    class="form-control select2">
                                                                    <?php if(!empty($result) && !empty($cate_list)){ 																
																if(!empty($cate_list))                                                                
																{
																	foreach($cate_list as $cat){
																		?>
                                                                    <option
                                                                        <?php if($cat['category_id'] == $child_category) echo "selected"?>
                                                                        value="<?php echo $cat['category_id'] ?>">
                                                                        <?php echo $cat['category_name'] ?>
                                                                    </option>
                                                                    <?php
																	}
																}																
															?>

                                                                    <?php }else{?>
                                                                    <option value="">
                                                                        Select Category
                                                                    </option>
                                                                    <?php } ?>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-10">
                                                            <input type="hidden" id="brand_id"
                                                                value="<?php echo $brand_id; ?>">
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput"
                                                                    class="color-dark fs-14 fw-500 align-center">
                                                                    Brand
                                                                </label>
                                                                <select id="text_brand_id" name="text_brand_id"
                                                                    class="form-control select2" required="">
                                                                    <option value="">
                                                                        Select Brand
                                                                    </option>
                                                                    <?php
															if(!empty($brand))
															{
																foreach($brand as $row1)
																{ ?>
                                                                    <option value="<?php echo $row1['brand_id'] ?>"
                                                                        <?php if($row1['brand_id'] == $brand_id) { ?>
                                                                        selected="selected" <?php }?>>
                                                                        <?php echo $row1['brand_name'] ?>
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
                                                        <div class="col-md-8 mb-10">
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput"
                                                                    class="color-dark fs-14 fw-500 align-center">
                                                                    Product Name
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control ih-small ip-gray radius-xs b-light px-15 text-capitalize"
                                                                    id="text_product_name" name="text_product_name"
                                                                    placeholder="Product Name" required=""
                                                                    value="<?php echo $product_name; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-10">
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput"
                                                                    class="color-dark fs-14 fw-500 align-center">
                                                                    Product Code
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                                    id="text_product_code" name="text_product_code"
                                                                    placeholder="Product Code" required=""
                                                                    value="<?php echo $product_code; ?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 mb-10">
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput"
                                                                    class="color-dark fs-14 fw-500 align-center">
                                                                    Vendor
                                                                </label>
                                                                <select id="text_vendor_id" name="text_vendor_id"
                                                                    class="form-control select2" required>
                                                                    <option value="">
                                                                        Select Vendor
                                                                    </option>
                                                                    <?php
															if(!empty($vendor))
															{
																foreach($vendor as $v_row){
																	?>
                                                                    <option
                                                                        <?php if($v_row['vendor_id'] == $vendor_id) { ?>
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


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card card-horizontal card-default card-md mb-4 border">
                                                <div class="card-header border-0">
                                                    <h6 class="color-primary">
                                                        Description
                                                    </h6>
                                                </div>
                                                <div class="card-body border-top">
                                                    <div class="row">
                                                        <div class="col-md-12 mb-10">
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput"
                                                                    class="color-dark fs-14 fw-500 align-center">
                                                                    Short Description
                                                                </label>
                                                                <textarea class="form-control"
                                                                    id="text_short_description"
                                                                    name="text_short_description"
                                                                    placeholder="Short Description" rows="2"
                                                                    required=""><?php echo $short_description; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-10">
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput"
                                                                    class="color-dark fs-14 fw-500 align-center">
                                                                    Description
                                                                </label>
                                                                <textarea class="form-control" id="text_description"
                                                                    name="text_description" placeholder="Description"
                                                                    rows="8"
                                                                    required=""><?php echo $description; ?></textarea>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- PRODUCT ELEMENTS -->
                                            <div class="card card-horizontal card-default card-md mb-4 border">
                                                <div class="card-header border-0">
                                                    <h6 class="color-primary">
                                                        Product Elements
                                                    </h6>
                                                </div>
                                                <div class="card-body border-top">
                                                    <div class="row" id="divElements">
                                                        <?php
                                                    if(!empty($result)){?>
                                                        <?php echo $category_elements; ?>
                                                        <?php }
                                                ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- PRODUCT ELEMENTS END -->

                                            <!-- PRODUCT PRICE CARD -->
                                            <div class="card card-horizontal card-default card-md mb-4 border">
                                                <div class="card-header border-0">
                                                    <h6 class="color-primary">
                                                        Product Price
                                                    </h6>
                                                </div>
                                                <div class="card-body border-top">
                                                    <div class="row">
                                                        <div class="col-md-4 mb-10 qty-ele-attr d-none">
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput"
                                                                    class="color-dark fs-14 fw-500 align-center">
                                                                    QTY
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control ih-small ip-gray radius-xs b-light px-15 text-capitalize"
                                                                    id="txt_qty" name="txt_qty" placeholder="Qty"
                                                                    value="<?php echo $qty; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-10">
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput"
                                                                    class="color-dark fs-14 fw-500 align-center">
                                                                    Unit Price (₹)
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control ih-small cal-discount"
                                                                    id="text_unit_price" name="text_unit_price"
                                                                    placeholder="Unit Price (₹)"
                                                                    value="<?php echo $unit_price; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-10">
                                                            <div class="form-group">
                                                                <label for="text_tax"
                                                                    class="color-dark fs-14 fw-500 align-center">
                                                                    Tax
                                                                </label>
                                                                <select id="text_tax" name="text_tax"
                                                                    class="form-control select2">
                                                                    <?php
                                                                    $gst_array  = $this->config->item('gst_array');
                                                                    if(!empty($gst_array)){
                                                                        foreach($gst_array as $key=>$val)
                                                                        { ?>
                                                                    <option
                                                                        <?php echo ($key == $tax) ? 'selected' : ''; ?>
                                                                        value="<?php echo $key ?>">
                                                                        <?php echo $val ?>
                                                                    </option>
                                                                    <?php }
                                                                    } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-10">
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput"
                                                                    class="color-dark fs-14 fw-500 align-center">
                                                                    MRP Price (₹)
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control ih-small cal-discount"
                                                                    id="text_mrp_price" name="text_mrp_price"
                                                                    placeholder="MRP Price (₹)"
                                                                    value="<?php echo $mrp_price; ?>" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-10">
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput"
                                                                    class="color-dark fs-14 fw-500 align-center">
                                                                    Discount(in %)
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control ih-small cal-discount"
                                                                    id="text_discount" name="text_discount"
                                                                    placeholder="in %" value="<?php echo $discount; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-10">
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput"
                                                                    class="color-dark fs-14 fw-500 align-center">
                                                                    Selling Price
                                                                </label>
                                                                <input type="text" class="form-control ih-small"
                                                                    id="text_net_price" name="text_net_price"
                                                                    placeholder="Net Price"
                                                                    value="<?php echo $net_price; ?>" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 mb-10">
                                                            <div class="form-group">
                                                                <label for="text_tax"
                                                                    class="color-dark fs-14 fw-500 align-center">
                                                                    Stock
                                                                </label>
                                                                <input type="text" class="form-control ih-small"
                                                                    id="text_stock" name="text_stock"
                                                                    placeholder="Stock" value="<?php echo $stock; ?>"
                                                                    <?php echo $read_only; ?>>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- PRODUCT PRICE END -->

                                            <!-- PRODUCT IMAGES -->
                                            <div class="card card-horizontal card-default card-md mb-4 border">
                                                <div class="card-header border-0 ">
                                                    <h6 class="color-primary">
                                                        Product Images
                                                    </h6>
                                                </div>
                                                <div class="card-body border-top">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-25">
                                                            <div class="form-group">
                                                                <div class="custom-file">
                                                                    <label for="formGroupExampleInput"
                                                                        class="color-dark fs-14 fw-500 align-center">
                                                                        Image
                                                                    </label>
                                                                    <input type="file" name="image[]" id="image"
                                                                        multiple="" class="form-control">
                                                                    <input type="hidden" id="old_image" name="old_image"
                                                                        value="<?php echo $image; ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                if(!empty($image)) { ?>
                                                        <div class="col-md-6 mb-25">
                                                            <div class="form-group">
                                                                <div id="first-name-input-wrapper"
                                                                    class="controls col-sm-9">
                                                                    <?php
															if(!empty($image))
															{
																$img_arr = explode("|",$image);
																for($i = 0; $i < count($img_arr); $i++){
																	$url = base_url().PRODUCT_IMAGE_PATH.$product_id.'/'.$img_arr[$i];
																	?>
                                                                    <img id="<?php echo $i."pic";?>" width="50"
                                                                        height="50" src="<?php echo $url;?>"
                                                                        onclick="deleteImage(this.id,<?php echo "'".$img_arr[$i]."'"; ?>,<?php echo $product_id ?>);"
                                                                        style="cursor: pointer; margin: 5px;">

                                                                    <?php
																}
															}
															?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        <div class="col-md-6 mb-25">
                                                            <div class="form-group">
                                                                <div class="custom-file">
                                                                    <label for="formGroupExampleInput"
                                                                        class="color-dark fs-14 fw-500 align-center">
                                                                        Cover Image
                                                                    </label>
                                                                    <input type="file" name="cover_image"
                                                                        id="cover_image" class="form-control">
                                                                    <input type="hidden" id="old_cover_image"
                                                                        name="old_cover_image"
                                                                        value="<?php echo $cover_img; ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        if(!empty($cover_img)) { ?>
                                                        <div class="col-md-6 mb-25">
                                                            <div class="form-group">
                                                                <div id="first-name-input-wrapper"
                                                                    class="controls col-sm-9">
                                                                    <?php
															    $cover_img_url = base_url().PRODUCT_IMAGE_PATH.$product_id.'/'.$cover_img;
																	?>
                                                                    <img id="" width="100" height="100"
                                                                        src="<?php echo $cover_img_url;?>"
                                                                        style="cursor: pointer; margin: 5px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- PRODUCT IMAGES END-->

                                            <!-- PRODUCT META DATA -->
                                            <div class="card card-horizontal card-default card-md mb-4 border">
                                                <div class="card-header border-0">
                                                    <h6 class="color-primary">
                                                        Other Detail
                                                    </h6>
                                                </div>
                                                <div class="card-body border-top">
                                                    <div class="row">
                                                        <div class="col-md-3 mb-10">
                                                            <div class="form-group">
                                                                <label for="text_is_new"
                                                                    class="color-dark fs-14 fw-500 align-left mr-5">
                                                                    New Product
                                                                </label>
                                                                <input type="checkbox" name="text_is_new"
                                                                    id="text_is_new" value="1" <?php echo $is_new; ?>>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-10">
                                                            <div class="form-group">
                                                                <label for="text_popular_product"
                                                                    class="color-dark fs-14 fw-500 align-left mr-5">
                                                                    Popular Product
                                                                </label>
                                                                <input type="checkbox" name="text_popular_product"
                                                                    id="text_popular_product" value="1"
                                                                    <?php echo $is_best_seller; ?>>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-10">
                                                            <div class="form-group">
                                                                <label for="text_is_feature_product"
                                                                    class="color-dark fs-14 fw-500 align-left mr-5">
                                                                    Feature Poduct
                                                                </label>
                                                                <input type="checkbox" name="text_is_feature_product"
                                                                    id="text_is_feature_product" value="1"
                                                                    <?php echo $is_feature; ?>>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card card-default card-md mb-4">
                                                                <div class="card-body  pb-10 pl-0">
                                                                    <div class="atbd-collapse atbd-collapse-custom">
                                                                        <div class="atbd-collapse-item">
                                                                            <div class="atbd-collapse-item__header">
                                                                                <a href="#" class="item-link collapsed"
                                                                                    data-toggle="collapse"
                                                                                    data-target="#collapse-body-meta-data"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="collapse-body-meta-data">

                                                                                    <i class="la la-angle-right"></i>

                                                                                    <h6 class="color-primary" class="fw-600">Meta Data</h6>
                                                                                </a>
                                                                            </div>
                                                                            <div id="collapse-body-meta-data"
                                                                                class="atbd-collapse-item__body collapse pt-3"
                                                                                style="">
                                                                                <div class="collapse-body-text p-0">
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    for="text_meta_title"
                                                                                                    class="color-dark fs-14 fw-500 align-left">
                                                                                                    Meta Title
                                                                                                </label>
                                                                                                <input type="text"
                                                                                                    class="form-control ih-small"
                                                                                                    id="text_meta_title"
                                                                                                    name="text_meta_title"
                                                                                                    placeholder="Meta title"
                                                                                                    value="<?php echo $meta_title; ?>">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    for="text_meta_description"
                                                                                                    class="color-dark fs-14 fw-500 align-left">
                                                                                                    Meta Description
                                                                                                </label>
                                                                                                <textarea
                                                                                                    class="form-control"
                                                                                                    id="text_meta_description"
                                                                                                    name="text_meta_description"
                                                                                                    placeholder="Meta Description"
                                                                                                    rows="2"><?php echo $meta_description; ?></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    for="text_meta_description"
                                                                                                    class="color-dark fs-14 fw-500 align-left">
                                                                                                    Meta Keyword
                                                                                                </label>
                                                                                                <textarea
                                                                                                    class="form-control"
                                                                                                    id="text_meta_keyword"
                                                                                                    name="text_meta_keyword"
                                                                                                    placeholder="Meta Keyword"
                                                                                                    rows="3"><?php echo $meta_keyword; ?></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="atbd-collapse-item">
                                                                            <div class="atbd-collapse-item__header">
                                                                                <a href="#" class="item-link collapsed"
                                                                                    data-toggle="collapse"
                                                                                    data-target="#collapse-body-warranty-detail"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="collapse-body-warranty-detail">

                                                                                    <i class="la la-angle-right"></i>

                                                                                    <h6 class="color-primary" class="fw-600">Warranty Detail
                                                                                    </h6>
                                                                                </a>
                                                                            </div>
                                                                            <div id="collapse-body-warranty-detail"
                                                                                class="atbd-collapse-item__body collapse pt-3"
                                                                                style="">
                                                                                <div class="collapse-body-text p-0">
                                                                                    <div lcass="row">
                                                                                        <div class="col-12 mb-10">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    for="txt_warranty_title"
                                                                                                    class="color-dark fs-14 fw-500 align-left mr-5">
                                                                                                    Warranty Title
                                                                                                </label>
                                                                                                <input type="text"
                                                                                                    class="form-control ih-small"
                                                                                                    name="txt_warranty_title"
                                                                                                    id="txt_warranty_title"
                                                                                                    value="<?php echo $warranty_title;?>">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 mb-10">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    for="txt_warranty_title"
                                                                                                    class="color-dark fs-14 fw-500 align-left mr-5">
                                                                                                    Warranty Description
                                                                                                </label>
                                                                                                <textarea
                                                                                                    class="form-control"
                                                                                                    id="text_warranty_description"
                                                                                                    name="text_warranty_description"
                                                                                                    placeholder="Description"
                                                                                                    rows="8"><?php echo $warranty_detail;?></textarea>
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
                                                    <div class="row">
                                                        <?php
												if(!empty($product_id))
												{
													?>
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="checkbox-theme-default custom-checkbox ">
                                                                    <input class="checkbox" type="checkbox"
                                                                        name="text_is_active" id="text_is_active"
                                                                        value="1" <?php echo $is_active; ?>>
                                                                    <label for="text_is_active">
                                                                        <span class="checkbox-text">
                                                                            Is Active
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
												} ?>
                                                    </div>
                                                    <div class="form-group row mt-3">
                                                        <div class="col-sm-12 d-flex aling-items-center">
                                                            <button type="submit" class="btn btn-success  btn-xs px-30">
                                                                Submit
                                                            </button>
                                                            <a class="btn btn-light btn-xs px-30 ml-2"
                                                                href="<?php echo base_url('all-product')?>">
                                                                Cancel
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- PRODUCT META DATA END-->
                                        </form>
                                    </div>
                                <!-- </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>