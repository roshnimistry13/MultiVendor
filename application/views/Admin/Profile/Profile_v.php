<?php 
    if(!empty($profile_data)){
        $name       = $profile_data[0]['name'];
        $email      = $profile_data[0]['email'];
        $profile    = $profile_data[0]['profile_photo'];

        $user_type 		= $this->session->userdata[ADMIN_SESSION]['user_type'];
        $user_id 		= $this->session->userdata[ADMIN_SESSION]['user_id'];

        $profile_path = PROFILE_IMG_PATH.$user_type.'/'.$user_id.'/'.$profile;
    }
?>

<div class="contents">
    <div class="profile-setting ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">My profile</h4>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-5">
                    <!-- Profile Acoount -->
                    <div class="card mb-25">
                        <div class="card-body text-center p-0">
                            <div
                                class="account-profile border-bottom pt-25 px-25 pb-0 flex-column d-flex align-items-center ">
                                <div class="ap-img mb-20 pro_img_wrapper">
                                    <input id="file-upload" type="file" name="fileUpload" class="d-none">
                                    <label for="file-upload">
                                        <!-- Profile picture image-->
                                        <img class="ap-img__main rounded-circle wh-120"
                                            src="<?php echo $profile_path; ?>" alt="profile">
                                        <span class="cross" id="remove_pro_pic">
                                            <span data-feather="camera"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="ap-nameAddress pb-3">
                                    <h5 class="ap-nameAddress__title">Duran Clayton</h5>
                                    <p class="ap-nameAddress__subTitle fs-14 m-0">UI/UX Designer</p>
                                </div>
                            </div>
                            <div class="ps-tab p-20 pb-25">
                                <div class="nav flex-column text-left" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill"
                                        href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                        aria-selected="true">
                                        <span data-feather="user"></span>Edit profile</a>
                                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                        href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                        aria-selected="false">
                                        <span data-feather="key"></span>change password</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Profile Acoount End -->
                </div>
                <div class="col-xxl-9 col-lg-8 col-sm-7">

                    <div class="mb-50">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade  show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <!-- Edit Profile -->
                                <div class="edit-profile ">
                                    <div class="card">
                                        <div class="card-header px-sm-25 px-3">
                                            <div class="edit-profile__title">
                                                <h6>Edit Profile</h6>
                                                <span class="fs-13 color-light fw-400">Set up your personal
                                                    information</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="col-xxl-6 col-lg-8 col-sm-10">
                                                    <div class="edit-profile__body mx-lg-20">
                                                        <form action="<?php echo base_url('update-profile')?>"
                                                            method="post" id="profile_form">
                                                            <div class="form-group mb-20">
                                                                <label for="txt_name">Name</label>
                                                                <input type="text" class="form-control" id="txt_name"
                                                                    name="txt_name" placeholder="Name"
                                                                    value="<?php echo $name;?>">
                                                            </div>
                                                            <div class="form-group mb-20">
                                                                <label for="txt_email">Email</label>
                                                                <input type="text" class="form-control" id="txt_email"
                                                                    name="txt_email" placeholder="Email"
                                                                    value="<?php echo $email;?>">
                                                            </div>
                                                            <div class="form-group d-flex flex-wrap pt-30 mb-15">
                                                                <button type="button"
                                                                    class="btn btn-primary btn-xs btn-squared mr-15 text-capitalize"
                                                                    onclick="updateprofile()">update
                                                                    profile
                                                                </button>
                                                                <a href="<?php echo base_url('profile');?>"
                                                                    class="btn btn-light btn-xs btn-squared fw-400 text-capitalize">cancel
                                                                </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Edit Profile End -->
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <!-- Edit Profile -->
                                <div class="edit-profile">
                                    <div class="card">
                                        <div class="card-header  px-sm-25 px-3">
                                            <div class="edit-profile__title">
                                                <h6>change password</h6>
                                                <span class="fs-13 color-light fw-400">Change or reset your account
                                                    password</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="col-xxl-6 col-lg-8 col-sm-10">
                                                    <div class="edit-profile__body mx-lg-20">
                                                        <form action="<?php echo base_url('update-password')?>"
                                                            method="post" id="update-password-form">
                                                            <div class="form-group mb-20">
                                                                <label for="txt_oldpassword">old passowrd</label>
                                                                <input type="password" class="form-control"
                                                                    id="txt_oldpassword" name="txt_oldpassword">
                                                            </div>
                                                            <div class="form-group mb-1">
                                                                <label for="txt_new_password">new password</label>
                                                                <div class="position-relative">
                                                                    <input id="txt_new_password" type="password"
                                                                        class="form-control pr-50"
                                                                        name="txt_new_password" value="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-1">
                                                                <label for="txt_confirm_password">Confirm
                                                                    password</label>
                                                                <div class="position-relative">
                                                                    <input id="txt_confirm_password" type="password"
                                                                        class="form-control pr-50"
                                                                        name="txt_confirm_password" value="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group d-flex flex-wrap pt-45 mb-35">
                                                                <button type="button"
                                                                    class="btn btn-primary btn-xs btn-squared mr-15 text-capitalize"
                                                                    onclick="updatePassword()">Save
                                                                    Changes
                                                                </button>
                                                                <a href="<?php echo base_url('profile');?>"
                                                                    class="btn btn-light btn-xs btn-squared fw-400 text-capitalize">cancel
                                                                </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Edit Profile End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal-basic modal fade show" id="otp-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-bg-white ">
            <div class="modal-header">
                <h6 class="modal-title">Valiadte otp</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span data-feather="x"></span></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group mb-20">
                        <label for="txt_oldpassword">Enter otp</label>
                        <input type="text" class="form-control" id="txt_opt" name="txt_opt">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary btn-sm btnsubmitotp">Submit</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>