<?php
	$role_id            		= "";
	$role_name          		= "";		
	$description          		= "";		
	$menu_id    				= array();		
	$is_active              	= "checked";

	if(!empty($result))
	{
		$role_id         = $result[0]['role_id'];
		$role_name       = $result[0]['role_name'];
		$is_active       = $result[0]['is_active'];
		$description     = $result[0]['role_description'];
		$menu_id    	 = $role_menu_id;
		if($is_active == "0")
			$is_active = "";
		else
			$is_active = "checked";
	}
?><div class="contents">
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
                            <a href="<?php echo base_url().'role' ?>">
                                Role
                            </a>
                            <span class="breadcrumb__seperator">
                                <span class="la la-slash">
                                </span>
                            </span>
                        </li>
                        <li class="atbd-breadcrumb__item">
                            <span>
                                Add Role
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
                                        Add Role
                                    </h6>
                                </div>
                                <div class="card-body py-md-30">
                                    <div class="horizontal-form">
                                        <form method="post" class="form-horizontal"
                                            action="<?php echo base_url().'submit-role' ?>" id="role-form"
                                            name="role-form" enctype="multipart/form-data">
                                            <input type="hidden" id="text_role_id" name="text_role_id"
                                                value="<?php echo $role_id; ?>">
                                            <div class="row">
                                                <div class="col-md-4 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center"> Role
                                                            Name</label>
                                                        <input type="text"
                                                            class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                            id="text_role_name" name="text_role_name"
                                                            placeholder="Role Name" required=""
                                                            value="<?php echo $role_name; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Description</label>
                                                        <input type="text"
                                                            class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                            id="text_description" name="text_description"
                                                            placeholder="Description"
                                                            value="<?php echo $description; ?>">
                                                    </div>
                                                </div>
                                                <?php if(!empty($role_id)){ ?>
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
                                                <div class="form-group col-md-12">
                                                    <label for="formGroupExampleInput"
                                                        class="color-dark fs-14 fw-500 align-center">Menu
                                                    </label>
                                                </div>
                                                <?php foreach($menu as $m_row){?>
                                                <div class="col-md-12">
                                                    <div class="checkbox-theme-default custom-checkbox ">
                                                        <input class="checkbox" type="checkbox"
                                                            id="menu_<?php echo $m_row['menu_id']; ?>" name="menu[]"
                                                            value="<?php echo $m_row['menu_id']; ?>"
                                                            <?php if(in_array($m_row['menu_id'], $menu_id)) echo 'checked'; ?>>
                                                        <label for="menu_<?php echo $m_row['menu_id']; ?>">
                                                            <span class="checkbox-text">
                                                                <?php echo ucwords($m_row['menu_name']); ?>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <?php
													$s_menu_ids = $m_row['submenu_id'];
													if($s_menu_ids)
													{
														$sub_ids = explode(',',$s_menu_ids);
														foreach($sub_ids as $s_row)
														{	
															$where['submenu_id'] = $s_row;
															$submenus = $this->Master_m->where('submenu_details',$where);
															$where1['menu_id'] = $m_row['menu_id'];
															$where1['role_id'] = $role_id;
															$submenus_details = $this->Master_m->where('role_details',$where1);
															$submenu_id = array();
															if(!empty($submenus_details))
															{
																$submenu_id = explode(',',$submenus_details[0]['submenu_id']);
															}
															
															if($submenus){ ?>
                                                <div class="col-md-3 ml-30 my-20">
                                                    <div class="form-check form-check-inline checkbox-theme-default custom-checkbox">
                                                        <input type="checkbox" class="controls form-check-input"
														id="submenu_<?php echo $submenus[0]['submenu_id']; ?>"
														name="submenu_<?php echo $m_row['menu_id']; ?>[]"
														value="<?php echo $submenus[0]['submenu_id']; ?>"
														<?php if(in_array($s_row, $submenu_id)) echo 'checked'; ?>>
                                                        <label class="control-label"
														for="submenu_<?php echo $submenus[0]['submenu_id']; ?>">
															<?php echo ucwords($submenus[0]['submenu_name']); ?>
                                                        </label>
                                                    </div>
                                                </div>


                                                <?php }  } } }?>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <div class="col-sm-12 d-flex aling-items-center">
                                                    <button type="submit" class="btn btn-success  btn-xs px-30"
                                                        href="javascript:void(0)">
                                                        Submit
                                                    </button>
                                                    <a class="btn btn-light btn-xs px-30 ml-2"
                                                        href="<?php echo base_url('role')?>">
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