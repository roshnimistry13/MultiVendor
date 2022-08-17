<?php
			
    $element_id         = "";
    $element          	= "";
    $display_name       = "";
    $is_active          = "checked";
    $attributes_id      = array();

    if(!empty($result))
    {
        $element_id       	= $result[0]['element_id'];
        $element      	    = $result[0]['element_name'];
        $is_active          = $result[0]['is_active'];
        $display_name       = $result[0]['display_name'];
        $attributes_id      = explode(',',$result[0]['attributes']);
        
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
                            <a href="<?php echo base_url().'elements' ?>">
                                Elements
                            </a>
                            <span class="breadcrumb__seperator">
                                <span class="la la-slash">
                                </span>
                            </span>
                        </li>
                        <li class="atbd-breadcrumb__item">
                            <span>
                                Add Elements
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
                                        Add Element
                                    </h6>
                                </div>
                                <div class="card-body py-md-30">
                                    <div class="horizontal-form">
                                        <form method="post" class="form-horizontal"
                                            action="<?php echo base_url().'submit-elements' ?>" id="element-form"
                                            name="element-form" enctype="multipart/form-data">
                                            <input type="hidden" id="text_element_id" name="text_element_id"
                                                value="<?php echo $element_id; ?>">
                                            <div class="row">
                                                <div class="col-md-4 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Element Name</label>
                                                        <input type="text"
                                                            class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                            id="text_element" name="text_element" placeholder="Element"
                                                            required="" value="<?php echo $element; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Display Name</label>
                                                        <input type="text"
                                                            class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                            id="text_display_name" name="text_display_name" placeholder="Display Name"
                                                            required="" value="<?php echo $display_name; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-25">
                                                    <div class="form-group tagSelect-rtl">
                                                        <label for="exampleFormControlSelect2"
                                                            class="il-gray fs-14 fw-500 align-center">Attributes</label>
                                                        <div class="atbd-select">
                                                            <select name="txt_attributes[]" id="txt_attributes"
                                                                class="form-control " multiple="multiple" required>
                                                                <option value="">select</option>
                                                                <?php
                                                                    foreach($attributes as $data){
                                                                    $selected = "";
                                                                    if(!empty($attributes_id)){
                                                                        if(in_array($data['attributes_id'],
                                                                        $attributes_id)){
                                                                            $selected = "selected";
                                                                        }
                                                                    }
                                                                    echo '<option
                                                                        value="'.$data['attributes_id'].'" '.$selected.'>
                                                                        '.$data['attributes_name'].'</option>';
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <?php if(!empty($element_id)){ ?>
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
                                                        href="<?php echo base_url('elements')?>">
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