<?php
			
	$submenu_id            		= "";
	$submenu_name          		= "";
	$submenu_link          		= "";
	$submenu_position          	= "";
	$is_active              	= "checked";

	if(!empty($result))
	{
		$submenu_id         = $result[0]['submenu_id'];
		$submenu_name       = $result[0]['submenu_name'];
		$submenu_link       = $result[0]['submenu_link'];
		$submenu_position   = $result[0]['submenu_position'];
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
                            <a href="<?php echo base_url().'submenu' ?>">
							Submenu
                            </a>
                            <span class="breadcrumb__seperator">
                                <span class="la la-slash">
                                </span>
                            </span>
                        </li>
                        <li class="atbd-breadcrumb__item">
                            <span>
                                Add Submenu
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
                                        Add Submenu
                                    </h6>
                                </div>
                                <div class="card-body py-md-30">
                                    <div class="horizontal-form">
									<form method="post" class="form-horizontal" action="<?php echo base_url().'submit-submenu' ?>"  id="submenu-form" name="submenu-form"enctype="multipart/form-data">
							<input type="hidden" id="text_submenu_id" name="text_submenu_id" value="<?php echo $submenu_id; ?>">
                                            <div class="row">
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Submenu Name</label>
                                                        <input type="text"
                                                            class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                                            id="text_submenu_name" name="text_submenu_name" placeholder="Submenu Name" required="" value="<?php echo $submenu_name; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">                                                        
														<label for="formGroupExampleInput"
															class="color-dark fs-14 fw-500 align-center">Submenu Link
															</label>
															<input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                                            id="text_submenu_link" name="text_submenu_link" placeholder="Submenu Link" required="" value="<?php echo $submenu_link; ?>">
														                   
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-25">
                                                    <div class="form-group">                                                        
														<label for="formGroupExampleInput"
															class="color-dark fs-14 fw-500 align-center">Submenu Position
															</label>
															<input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                                            id="text_submenu_position" name="text_submenu_position" placeholder="Submenu Position" value="<?php echo $submenu_position; ?>">
														                   
                                                    </div>
                                                </div>
                                                </div>
												<div class="row">
                                                <?php if(!empty($submenu_id)){ ?>
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
                                                        href="<?php echo base_url('submenu')?>">
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