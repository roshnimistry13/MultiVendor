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
                                                            ?>
                                                            <option
                                                                <?php if($row['category_id'] == $parent_category_id) { ?>
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
                                                        <label for="exampleFormControlSelect2" class="il-gray fs-14 fw-500 align-center">Elements</label>
                                                        <div class="atbd-select ">
                                                            <select name="txt_elements[]" id="txt_elements" class="form-control " multiple="multiple" required>
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