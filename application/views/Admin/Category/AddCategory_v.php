<?php
			
	$category_id            = "";
	$category_name          = "";
	$top_menu      			= "";
	$menu_position          = "";
	$description            = "";
	$category_image         = "";
    $parent_category_id     = "";
    $brand_id               = array();
    $element_id             = array();
	$is_active              = "checked";
    $return_or_replace 				    = array();
    $return_replace_validity			= "";
    $policy_covers					    = "";
    $return_policy 	                    = "";

	if(!empty($result))
	{
        $category_id       	= $result[0]['category_id'];
		$category_name      = $result[0]['category_name'];
		$top_menu 			= $result[0]['top_menu'];
		$menu_position      = $result[0]['menu_position'];
		$description        = $result[0]['description'];
		$category_image     = $result[0]['category_image'];
		$is_active          = $result[0]['is_active'];
        $parent_category_id = $result[0]['parent_category_id'];
        $brand_id           = explode(',',$result[0]['brand_id']);
        $element_id         = explode(',',$result[0]['element_id']);

        $return_or_replace 				    = explode(',',$result[0]['return_or_replace']);
        $return_replace_validity			= $result[0]['return_replace_validity'];
        $policy_covers					    = $result[0]['policy_covers'];
        $return_policy 	                    = $result[0]['return_policy'];
		
		if($is_active == "0"){
			$is_active = "";
		}
		else
		{
			$is_active = "checked";
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
                            <a href="<?php echo base_url().'category' ?>">
                                Category
                            </a>
                            <span class="breadcrumb__seperator">
                                <span class="la la-slash">
                                </span>
                            </span>
                        </li>
                        <li class="atbd-breadcrumb__item">
                            <span>
                                Add Category
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
                                        Add Category
                                    </h6>
                                </div>
                                <div class="card-body py-md-30">
                                    <div class="horizontal-form">
                                        <form method="post" class="form-horizontal"
                                            action="<?php echo base_url().'submit-category' ?>" id="category-form"
                                            name="category-form" enctype="multipart/form-data">
                                            <input type="hidden" id="text_categroy_id" name="text_categroy_id"
                                                value="<?php echo $category_id; ?>">
                                            <div class="row">
                                                <div class="col-md-4 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Category
                                                            Name</label>
                                                        <input type="text"
                                                            class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                            id="text_category_name" name="text_category_name"
                                                            placeholder="Category Name" required=""
                                                            value="<?php echo $category_name; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Parent Category
                                                        </label>
                                                        <select id="text_parent_category" name="text_parent_category"
                                                            class="form-control select2 ih-small">
                                                            <option value="">Select Parent Category</option>
                                                            <?php
                                                                if(!empty($category)){
                                                                    foreach($category as $row)
                                                                    {
                                                                        $parent_cat = "";
                                                                        if($row['parent_category_id'] != 0)
                                                                        $parent_cat = getCateforyNameByID($row['parent_category_id']).' -> ';
                                                            ?>
                                                            <option
                                                                <?php if($row['category_id'] == $parent_category_id) { ?>
                                                                selected="selected" <?php }?>
                                                                value="<?php echo $row['category_id'] ?>">
                                                                <?php echo $parent_cat.$row['category_name'] ?>
                                                            </option>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Description</label>
                                                        <textarea class="form-control" id="text_description"
                                                            name="text_description" placeholder="Description"
                                                            rows=""><?php echo $description; ?></textarea>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-4 mb-25">                                                    
                                                    <div class="form-group tagSelect-rtl">
                                                        <label for="exampleFormControlSelect2" class="il-gray fs-14 fw-500 align-center">Brand</label>

                                                        <div class="atbd-select ">
                                                            <select name="txt_brand_id[]" id="txt_brand_id" class="form-control " multiple="multiple">
                                                                <option value="">select</option>
                                                                <?php
                                                                    foreach($brand as $data){
                                                                    $selected = "";
                                                                    if(!empty($brand_id)){
                                                                        if(in_array($data['brand_id'],
                                                                        $brand_id)){
                                                                            $selected = "selected";
                                                                        }
                                                                    }
                                                                    echo '<option
                                                                        value="'.$data['brand_id'].'" '.$selected.'>
                                                                        '.$data['brand_name'].'</option>';
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="col-md-8 mb-25 elements-list">
                                                    <div class="form-group tagSelect-rtl">
                                                        <label for="exampleFormControlSelect2"
                                                            class="il-gray fs-14 fw-500 align-center">Elements</label>
                                                        <div class="atbd-select ">
                                                            <select name="txt_elements[]" id="txt_elements"
                                                                class="form-control " multiple="multiple" required>
                                                                <option value="">select</option>
                                                                <?php
                                                                    foreach($elements as $ele){
                                                                    $selected = "";
                                                                    if(!empty($element_id)){
                                                                        if(in_array($ele['element_id'],
                                                                        $element_id)){
                                                                            $selected = "selected";
                                                                        }
                                                                    }
                                                                    echo '<option
                                                                        value="'.$ele['element_id'].'" '.$selected.'>
                                                                        '.$ele['element_name'].'</option>';
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 mb-25">
                                                    <div class="form-group">
                                                        <div class="custom-file">
                                                            <label for="formGroupExampleInput"
                                                                class="color-dark fs-14 fw-500 align-center">Category
                                                                Image</label>
                                                            <input class="form-control" type="file"
                                                                name="category_image" id="category_image">
                                                            <input type="hidden" id="old_category_image"
                                                                name="old_category_image"
                                                                value="<?php echo $category_image; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if(!empty($category_image) || $category_image !=""){?>
                                                <div class="col-md-4 mb-25">
                                                    <div class="form-group">
                                                        <img src="<?php echo base_url().CATEGORY_IMAGE_PATH.$category_image ?>"
                                                            width="" height="100">
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="row">
                                                <?php if(!empty($category_id)){ ?>
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

                                            <div class="row policy-section">
                                                <div class="col-12">
                                                    <div class="card card-default card-md mb-4">
                                                        <div class="card-body pb-10 pl-0">
                                                            <div class="atbd-collapse atbd-collapse-custom ">
                                                                <div class="atbd-collapse-item">
                                                                    <div class="atbd-collapse-item__header active">
                                                                        <a href="#" class="item-link collapsed"
                                                                            data-toggle="collapse"
                                                                            data-target="#collapse-body-return-replace-poliicy"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse-body-return-replace-poliicy">
                                                                            <i class="la la-angle-right"></i>
                                                                            <h6 class="fw-600">Return/Replacement Policy
                                                                            </h6>
                                                                        </a>
                                                                    </div>
                                                                    <div id="collapse-body-return-replace-poliicy"
                                                                        class="atbd-collapse-item__body collapse pt-5 show" >
                                                                        <div class="collapse-body-text">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <label for="radio-optional"
                                                                                        class="color-dark fs-14 fw-500 align-left mr-5">
                                                                                        Policy
                                                                                    </label>
                                                                                    <div class="checkbox-group d-flex">
                                                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                                                                            <input class="checkbox"
                                                                                                type="checkbox"
                                                                                                name="check_services[]"
                                                                                                value="return"
                                                                                                id="check_return"
                                                                                                <?php echo (in_array("return",$return_or_replace)) ? "checked" : "" ;?>>
                                                                                            <label for="check_return">
                                                                                                <span
                                                                                                    class="checkbox-text">Return</span>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="checkbox-theme-default custom-checkbox checkbox-group__single">
                                                                                            <input class="checkbox"
                                                                                                type="checkbox"
                                                                                                name="check_services[]"
                                                                                                value="replace"
                                                                                                id="check_replace"
                                                                                                <?php echo (in_array("replace",$return_or_replace)) ? "checked" : "" ;?>>  
                                                                                            <label for="check_replace">
                                                                                                <span
                                                                                                    class="checkbox-text">Replace</span>
                                                                                            </label>
                                                                                        </div>
                                                                                                                                                                                
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="txt_return_replace_validity"
                                                                                            class="color-dark fs-14 fw-500 align-left mr-5">
                                                                                            Validity
                                                                                        </label>
                                                                                        <input type="number"
                                                                                            class="form-control ih-small"
                                                                                            name="txt_return_replace_validity"
                                                                                            id="txt_return_replace_validity"
                                                                                            value="<?php echo $return_replace_validity; ?>" required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="txt_return_replace_validity"
                                                                                            class="color-dark fs-14 fw-500 align-left mr-5">
                                                                                            Policy Covers
                                                                                        </label>
                                                                                        <textarea class="form-control"
                                                                                            id="txt_policy_covers"
                                                                                            name="txt_policy_covers" required><?php echo $policy_covers; ?></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="txt_return_replace_validity"
                                                                                            class="color-dark fs-14 fw-500 align-left mr-5">
                                                                                            Policy Description
                                                                                        </label>
                                                                                        <textarea class="form-control"
                                                                                            id="txt_policy_description"
                                                                                            name="txt_policy_description" required><?php echo $return_policy; ?></textarea>
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
                                                        href="<?php echo base_url('category')?>">
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