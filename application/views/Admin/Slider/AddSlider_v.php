<?php
			
	$slider_id            	= "";
	$slider_image          	= "";
	$slider_title          	= "";
	$short_description      = "";
	$position               = "";
	$is_active              = "checked";
    $required               = "required";
	if(!empty($result))
	{
		$slider_id       	= $result[0]['slider_id'];
		$slider_image      	= $result[0]['slider_image'];
		$slider_title      	= $result[0]['slider_title'];
		$short_description  = $result[0]['short_description'];
		$position           = $result[0]['position'];
		$is_active          = $result[0]['is_active'];
        $required           = "";
		
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
                            <a href="<?php echo base_url().'slider' ?>">
                                Slider
                            </a>
                            <span class="breadcrumb__seperator">
                                <span class="la la-slash">
                                </span>
                            </span>
                        </li>
                        <li class="atbd-breadcrumb__item">
                            <span>
                                Add Slider
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
                                        Add Slider
                                    </h6>
                                </div>
                                <div class="card-body py-md-30">
                                    <div class="horizontal-form">
                                        <form method="post" class="form-horizontal"
                                            action="<?php echo base_url().'submit-slider' ?>" id="slider-form"
                                            name="slider-form" enctype="multipart/form-data">
                                            <input type="hidden" id="text_slider_id" name="text_slider_id"
                                                value="<?php echo $slider_id; ?>">
                                            <div class="row">
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Title</label>
                                                        <input type="text"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                                            name="slider_title" placeholder="Slider Title" required=""
                                                            value="<?php echo $slider_title; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Image
                                                            Position</label>
                                                        <input type="number"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                                            name="slider_position" placeholder="Slider Position"
                                                            required="" value="<?php echo $position; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <div class="custom-file">
                                                            <label for="formGroupExampleInput"
                                                                class="color-dark fs-14 fw-500 align-center">Image</label>
                                                            <input type="file" name="slider_img" id="slider_img"
                                                                class="form-control" <?php echo $required;?>>
                                                            <input type="hidden" id="old_slider_img"
                                                                name="old_slider_img"
                                                                value="<?php echo $slider_image; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if(!empty($slider_image) || $slider_image !=""){?>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">&nbsp;</label>
                                                        <img src="<?php echo base_url().SLIDER_IMAGE_PATH.$slider_image ?>"
                                                            width="" height="100">
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="row">
                                                <?php if(!empty($slider_id)){ ?>
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
                                                        href="<?php echo base_url('slider')?>">
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