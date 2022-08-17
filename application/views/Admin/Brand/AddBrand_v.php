<?php
			
	$brand_id            	= "";
	$brand_name          	= "";
	$brand_logo          	= "";
	$is_active              = "checked";
	if(!empty($result))
	{
		$brand_id       	= $result[0]['brand_id'];
		$brand_name      	= $result[0]['brand_name'];
		$brand_logo      	= $result[0]['brand_logo'];
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
                            <a href="<?php echo base_url().'brand' ?>">
                                Brand
                            </a>
                            <span class="breadcrumb__seperator">
                                <span class="la la-slash">
                                </span>
                            </span>
                        </li>
                        <li class="atbd-breadcrumb__item">
                            <span>
                                Add Brand
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
                                        Add Brand
                                    </h6>
                                </div>
                                <div class="card-body py-md-30">
                                    <div class="horizontal-form">
                                        <form method="post" class="form-horizontal"
                                            action="<?php echo base_url().'submit-brand' ?>" id="brand-form"
                                            name="brand-form" enctype="multipart/form-data">
                                            <input type="hidden" id="text_brand_id" name="text_brand_id"
                                                value="<?php echo $brand_id; ?>">
                                            <div class="row">
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Brand
                                                            Name</label>
                                                        <input type="text"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                                            name="text_brand_name" placeholder="Brand Name" required=""
                                                            value="<?php echo $brand_name; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <div class="custom-file">
                                                            <label for="formGroupExampleInput"
                                                                class="color-dark fs-14 fw-500 align-center">Brand
                                                                logo</label>
                                                            <input type="file" name="brand_logo" id="brand_logo"
                                                                class="form-control">
                                                            <input type="hidden" id="old_brand_logo"
                                                                name="old_brand_logo"
                                                                value="<?php echo $brand_logo; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">                                                        
                                                    </div>
                                                </div>
                                                <?php if(!empty($brand_logo) || $brand_logo !=""){?>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">                                                        
                                                        <img src="<?php echo base_url().BRAND_LOGO_PATH.$brand_logo ?>" >
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="row">
                                                <?php if(!empty($brand_id)){ ?>
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
                                                        href="<?php echo base_url('brand')?>">
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