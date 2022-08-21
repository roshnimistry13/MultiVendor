<?php
			
    $user_id            		= "";
    $name          		        = "";			
    $is_active              	= "checked";
    $role_id                    = "";
    $email                      = "";
    $username                   = "";

    if(!empty($result))
    {
        $user_id         = $result[0]['user_id'];
        $name            = $result[0]['name'];
        $role_id         = $result[0]['role_id'];
        $email           = $result[0]['email'];
        $username        = $result[0]['username'];
        $is_active       = $result[0]['is_active'];
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
                            <a href="<?php echo base_url().'user' ?>">
                                User
                            </a>
                            <span class="breadcrumb__seperator">
                                <span class="la la-slash">
                                </span>
                            </span>
                        </li>
                        <li class="atbd-breadcrumb__item">
                            <span>
                                Add User
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
                                        Add User
                                    </h6>
                                </div>
                                <div class="card-body py-md-30">
                                    <div class="horizontal-form">
                                        <form method="post" class="form-horizontal"
                                            action="<?php echo base_url().'submit-user' ?>" id="user-form"
                                            name="user-form" enctype="multipart/form-data">
                                            <input type="hidden" id="text_user_id" name="text_user_id"
                                                value="<?php echo $user_id; ?>">
                                            <div class="row">
                                                <div class="col-md-4 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Name</label>
                                                        <input type="text"
                                                            class="form-control ih-small ip-gray radius-xs b-light px-15 text-capitalize"
                                                            id="text_name" name="text_name" placeholder="Name"
                                                            required="" value="<?php echo $name; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Email</label>
                                                        <input type="text"
                                                            class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                            id="text_email" name="text_email" placeholder="Email ID"
                                                            value="<?php echo $email; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            User Name</label>
                                                        <input type="text"
                                                            class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                            id="text_user_name" name="text_user_name"
                                                            placeholder="User Name" value="<?php echo $username; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Password</label>
                                                        <input type="password"
                                                            class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                            id="text_password" name="text_password"
                                                            placeholder="Password" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Role</label>
                                                        <select id="text_role_id" name="text_role_id"
                                                            class="form-control ih-small" required="">
                                                            <option value="">Select Role</option>
                                                            <?php
                                                                if(!empty($role)){
                                                                    foreach($role as $row)
                                                                    { ?>
                                                            <option <?php if($row['role_id'] == $role_id) { ?>
                                                                selected="selected" <?php }?>
                                                                value="<?php echo $row['role_id'] ?>">
                                                                <?php echo $row['role_name'] ?>
                                                            </option>
                                                            <?php
                                                                    }
                                                                }
                                                                ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row"></div>
                                            <?php if(!empty($user_id)){ ?>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="checkbox-theme-default custom-checkbox ">
                                                        <input class="checkbox" type="checkbox" name="text_is_active"
                                                            id="text_is_active" value="1" <?php echo $is_active; ?>>
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
                                                href="<?php echo base_url('user')?>">
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