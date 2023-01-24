<?php
			
	$offer_id            	= "";
	$title          	    = "";
	$offer_on_element       = "";
	$offer_value            = "";
	$category_id            = array();
	$keywords               = "";
	$is_active              = "checked";
	$upcomming              = "";
    $start_date      	    = "";
	$to_date      	        = "";
	if(!empty($result))
	{
		$offer_id       	= $result[0]['offer_id'];
		$title      	    = $result[0]['title'];
		$offer_on_element   = $result[0]['offer_on_element'];
		$offer_value      	= $result[0]['offer_value'];
		$category_id      	= $result[0]['category_id'];
		$keywords      	    = $result[0]['keywords'];
		$is_active          = $result[0]['is_active'];	
        $start_date      	= date('d F Y',strtotime($result[0]['from_date']));
		$to_date      	    = date('d F Y',strtotime($result[0]['to_date']));	
		if($is_active == "1"){
            $is_active = "checked";	
        }
		else if($is_active == "2"){
            $upcomming = "checked";
        }
			

    if(!empty($category_id)){
        $category_id = explode(',',$category_id);
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
                            <a href="<?php echo base_url().'offer' ?>">
                                Offer
                            </a>
                            <span class="breadcrumb__seperator">
                                <span class="la la-slash">
                                </span>
                            </span>
                        </li>
                        <li class="atbd-breadcrumb__item">
                            <span>
                                Add Offer
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
                                        Add Offer
                                    </h6>
                                </div>
                                <div class="card-body py-md-30">
                                    <div class="horizontal-form">
                                        <form method="post" class="form-horizontal"
                                            action="<?php echo base_url().'submit-offer' ?>" id="offer-form"
                                            name="offer-form" enctype="multipart/form-data">
                                            <input type="hidden" id="text_offer_id" name="text_offer_id"
                                                value="<?php echo $offer_id; ?>">
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Keywords
                                                        </label>
                                                        <select id="text_offer_keyword" name="text_offer_keyword"
                                                            class="form-control ih-small" required>
                                                            <option value="">Select Element</option>
                                                            <?php
                                                                    $offer_keywords_array  = $this->config->item('offer_keywords_array');
                                                                    if(!empty($offer_keywords_array)){
                                                                        foreach($offer_keywords_array as $key=>$val)
                                                                        { ?>
                                                            <option <?php echo ($key == $keywords) ? 'selected' : ''; ?>
                                                                value="<?php echo $key ?>">
                                                                <?php echo $val ?>
                                                            </option>
                                                            <?php }
                                                                    } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Offer Value
                                                        </label>
                                                        <input type="number"
                                                            class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                            name="text_offer_amt" placeholder="Offer Amount" min="0" required=""
                                                            value="<?php echo $offer_value; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Offer On Element
                                                        </label>
                                                        <select id="text_offer_element" name="text_offer_element"
                                                            class="form-control ih-small" required>
                                                            <option value="">Select Element</option>
                                                            <option value="price"
                                                                <?php echo ($offer_on_element == "price") ? 'selected' : ''; ?>>
                                                                Price</option>
                                                            <option value="discount"
                                                                <?php echo ($offer_on_element == "discount") ? 'selected' : ''; ?>>
                                                                Discount</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Offer On Category
                                                        </label>
                                                        <select id="text_offer_category" name="text_offer_category[]"
                                                            class="form-control select2 ih-small" multiple>
                                                            <option value="">Select Element</option>
                                                            <?php 
                                                                foreach($category as $row){ 
                                                                    $fullhierarchy = "";
                                                                    $parent_id      = $row['parent_id'];
                                                                    $parent_name    = getCateforyNameByID($parent_id);
                                                                    $fullhierarchy  .= $parent_name. '->'.$row['category_name'];
                                                                    $selected = "";
                                                                    if(!empty($category_id)){
                                                                        if(in_array($row['category_id'],
                                                                        $category_id)){
                                                                            $selected = "selected";
                                                                        }
                                                                    }
                                                                ?>
                                                            <option value="<?php echo $row['category_id']; ?>"
                                                                <?php echo $selected;?>>
                                                                <?php echo $row['category_name'].' ('. $fullhierarchy .')'; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="atbd-date-picker">
                                                        <div class="form-group mb-0 form-group-calender">
                                                            <label for="formGroupExampleInput"
                                                                class="color-dark fs-14 fw-500 align-center">
                                                                From
                                                            </label>
                                                            <div class="position-relative">
                                                                <input type="text"
                                                                    class="form-control ih-small form-control-default datepicker"
                                                                    id="from_date" name="from_date"
                                                                    placeholder="Start Date" required
                                                                    value="<?php echo $start_date?>">
                                                                <a href="#"><span data-feather="calendar"></span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="atbd-date-picker">
                                                        <div class="form-group mb-0 form-group-calender">
                                                            <label for="formGroupExampleInput"
                                                                class="color-dark fs-14 fw-500 align-center">
                                                                To
                                                            </label>
                                                            <div class="position-relative">
                                                                <input type="text"
                                                                    class="form-control ih-small form-control-default datepicker"
                                                                    id="to_date" name="to_date" placeholder="End  Date"
                                                                    required value="<?php echo $to_date;?>">
                                                                <a href="#"><span data-feather="calendar"></span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row mt-3">
                                                <?php if(!empty($offer_id)){ ?>
                                                <!-- <div class="form-group">
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
                                                </div> -->
                                                <?php } ?>
                                                <div class="form-group">
                                                    <div class="col-12">
                                                        <div class="radio-horizontal-list d-flex">
                                                            <div class="radio-theme-default custom-radio ">
                                                                <input class="radio" type="radio"
                                                                    name="text_is_active" value="1" id="text_is_active" <?php echo $is_active; ?>>
                                                                <label for="text_is_active">
                                                                    <span class="radio-text">Is Active</span>
                                                                </label>
                                                            </div>
                                                            <div class="radio-theme-default custom-radio ">
                                                                <input class="radio" type="radio"
                                                                    name="text_is_active" value="2" id="text_is_upcomming" <?php echo $upcomming; ?>>
                                                                <label for="text_is_upcomming">
                                                                    <span class="radio-text">Up Commimng</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <div class="col-sm-12 d-flex aling-items-center">
                                                    <button type="submit" class="btn btn-success  btn-xs px-30"
                                                        href="javascript:void(0)">
                                                        Submit
                                                    </button>
                                                    <a class="btn btn-light btn-xs px-30 ml-2"
                                                        href="<?php echo base_url('offer')?>">
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