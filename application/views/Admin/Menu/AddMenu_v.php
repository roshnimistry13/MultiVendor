<?php
			
	$menu_id            		= "";
	$menu_name          		= "";		
	$position          			= "";		
	$is_active              	= "checked";
	$menu_link     				= "";
	$menu_icon     				= "";
	$submenu_id     			= array();
		

	if(!empty($result))
	{
		$menu_id         = $result[0]['menu_id'];
		$menu_name       = $result[0]['menu_name'];
		$position        = $result[0]['menu_position'];
		$is_active       = $result[0]['menu_status'];
		$menu_link     	= $result[0]['menu_link'];
		$menu_icon     	= $result[0]['menu_icon'];
		$submenu_id     = explode(',',$result[0]['submenu_id']);
		
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
                            <a href="<?php echo base_url().'menu' ?>">
                                Menu
                            </a>
                            <span class="breadcrumb__seperator">
                                <span class="la la-slash">
                                </span>
                            </span>
                        </li>
                        <li class="atbd-breadcrumb__item">
                            <span>
                                Add Menu
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
                                        Add Menu
                                    </h6>
                                </div>
                                <div class="card-body py-md-30">
                                    <div class="horizontal-form">
                                        <form method="post" class="form-horizontal"
                                            action="<?php echo base_url().'submit-menu' ?>" id="menu-form"
                                            name="menu-form" enctype="multipart/form-data">
                                            <input type="hidden" id="text_menu_id" name="text_menu_id"
                                                value="<?php echo $menu_id; ?>">
                                            <div class="row">
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Name</label>
                                                        <input type="text"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15 text-capitalize"
                                                            id="text_menu_name" name="text_menu_name"
                                                            placeholder="Menu Name" required=""
                                                            value="<?php echo $menu_name; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Link</label>
                                                        <input type="text"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15 text-capitalize"
                                                            id="text_menu_link" name="text_menu_link"
                                                            placeholder="Menu Link" required=""
                                                            value="<?php echo $menu_link; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Icon</label>
                                                        <input type="text"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                                            id="text_menu_icon" name="text_menu_icon"
                                                            placeholder="Menu Icon" value='<?php echo $menu_icon; ?>'>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Position</label>
                                                        <input type="text"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                                            id="text_menu_position" name="text_menu_position"
                                                            placeholder="Menu Position"
                                                            value="<?php echo $position; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <?php if(!empty($menu_id)){ ?>
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
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Submenu</label>
                                                    </div>                                                    
                                                </div>
                                            </div>                                                                                        
											<div class="row">                                                        
												<?php foreach($submenu as $row){?>
													<div class="col-md-3">
														<div class="form-check form-check-inline checkbox-theme-default custom-checkbox">
															<input type="checkbox" class="controls form-check-input"
																value="<?php echo $row['submenu_id']?>"
																id="submenu_<?php echo $row['submenu_id']?>"
																name="submenu[]" <?php
																	if(in_array($row['submenu_id'], $submenu_id)) echo 'checked'; ?>>
																	<label class="control-label"
																		for="submenu_<?php echo $row['submenu_id']?>">
																		<?php echo ucwords($row['submenu_name']);?>
																	</label>
														</div>
													</div>
												<?php } ?>                                                        
											</div> 
                                            <div class="form-group row mt-25">
                                                <div class="col-sm-12 d-flex aling-items-center">
                                                    <button type="submit" class="btn btn-success  btn-xs px-30"
                                                        href="javascript:void(0)">
                                                        Submit
                                                    </button>
                                                    <a class="btn btn-light btn-xs px-30 ml-2"
                                                        href="<?php echo base_url('menu')?>">
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