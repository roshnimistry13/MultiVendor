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
                                        <img class="ap-img__main rounded-circle wh-120" src="<?php echo ADMIN_ASSETS ?>img/author-nav.jpg"
                                            alt="profile">
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
                                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill"
                                        href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                        aria-selected="false">
                                        <span data-feather="users"></span>social profiles</a>
                                    
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
                                                        <form>
                                                            <div class="form-group mb-20">
                                                                <label for="names">name</label>
                                                                <input type="text" class="form-control" id="names"
                                                                    placeholder="Duran Clayton">
                                                            </div>
                                                            <div class="form-group mb-20">
                                                                <label for="phoneNumber1">phone number</label>
                                                                <input type="tel" class="form-control" id="phoneNumber1"
                                                                    placeholder="+440 2546 5236">
                                                            </div>
                                                            <div class="form-group mb-20">
                                                                <div class="countryOption">
                                                                    <label for="countryOption">
                                                                        country
                                                                    </label>
                                                                    <select
                                                                        class="js-example-basic-single js-states form-control"
                                                                        id="countryOption">
                                                                        <option value="JAN">event</option>
                                                                        <option value="FBR">Venues</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-20">
                                                                <div class="cityOption">
                                                                    <label for="cityOption">
                                                                        city
                                                                    </label>
                                                                    <select
                                                                        class="js-example-basic-single js-states form-control"
                                                                        id="cityOption">
                                                                        <option value="JAN">event</option>
                                                                        <option value="FBR">Venues</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-20">
                                                                <label for="company1">company name</label>
                                                                <input type="text" class="form-control" id="company1"
                                                                    placeholder="Example">
                                                            </div>
                                                            <div class="form-group mb-20">
                                                                <label for="website">website</label>
                                                                <input type="email" class="form-control" id="website"
                                                                    placeholder="www.example.com">
                                                            </div>
                                                            <div class="form-group mb-20">
                                                                <label for="userBio">user bio</label>
                                                                <textarea class="form-control" id="userBio"
                                                                    rows="5"></textarea>
                                                            </div>
                                                            <div class="form-group mb-20">
                                                                <div class="skillsOption">
                                                                    <label for="skillsOption">
                                                                        skils
                                                                    </label>
                                                                    <select
                                                                        class="js-example-basic-single js-states form-control"
                                                                        id="skillsOption" multiple="multiple">
                                                                        <option value="JAN">event</option>
                                                                        <option value="FBR">Venues</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="button-group d-flex flex-wrap pt-30 mb-15">
                                                                <button
                                                                    class="btn btn-primary btn-default btn-squared mr-15 text-capitalize">update
                                                                    profile
                                                                </button>
                                                                <button
                                                                    class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                                                </button>
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
                                <div class="edit-profile mt-25">
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
                                                        <form>
                                                            <div class="form-group mb-20">
                                                                <label for="name">old passowrd</label>
                                                                <input type="text" class="form-control" id="name">
                                                            </div>
                                                            <div class="form-group mb-1">
                                                                <label for="password-field">new password</label>
                                                                <div class="position-relative">
                                                                    <input id="password-field" type="password"
                                                                        class="form-control pr-50" name="password"
                                                                        value="secret">
                                                                    <span
                                                                        class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></span>
                                                                </div>
                                                                <small id="passwordHelpInline"
                                                                    class="text-light fs-13">Minimum
                                                                    6
                                                                    characters
                                                                </small>
                                                            </div>
                                                            <div class="button-group d-flex flex-wrap pt-45 mb-35">
                                                                <button
                                                                    class="btn btn-primary btn-default btn-squared mr-15 text-capitalize">Save
                                                                    Changes
                                                                </button>
                                                                <button
                                                                    class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                                                </button>
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
                            <div class="tab-pane fade " id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <!-- Edit Profile -->
                                <div class="edit-profile edit-social mt-25">
                                    <div class="card">
                                        <div class="card-header  px-sm-25 px-3">
                                            <div class="edit-profile__title">
                                                <h6>social profiles</h6>
                                                <span class="fs-13 color-light fw-400">Add elsewhere links to your
                                                    profile</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="col-xxl-6 col-lg-8 col-sm-10">
                                                    <div class="edit-profile__body mx-lg-20">
                                                        <form>
                                                            <div class=" mb-30">
                                                                <label for="socialUrl">facebook</label>
                                                                <div class="input-group flex-nowrap">
                                                                    <div class="input-group-prepend">
                                                                        <span
                                                                            class="input-group-text border-facebook bg-facebook text-white wh-44 radius-xs justify-content-center"
                                                                            id="addon-wrapping1">
                                                                            <i class="lab la-facebook-f fs-18"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input type="text"
                                                                        class="form-control form-control--social"
                                                                        placeholder="Url" aria-label="Username"
                                                                        aria-describedby="addon-wrapping1"
                                                                        id="socialUrl">
                                                                </div>
                                                            </div>
                                                            <div class=" mb-30">
                                                                <label for="twitterUrl">twitter</label>
                                                                <div class="input-group flex-nowrap">
                                                                    <div class="input-group-prepend">
                                                                        <span
                                                                            class="input-group-text border-twitter bg-twitter text-white wh-44 radius-xs justify-content-center"
                                                                            id="addon-wrapping2">
                                                                            <i class="lab la-twitter fs-18"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input type="text"
                                                                        class="form-control form-control--social"
                                                                        placeholder="@Username" aria-label="Username"
                                                                        aria-describedby="addon-wrapping2"
                                                                        id="twitterUrl">
                                                                </div>
                                                            </div>
                                                            <div class=" mb-30">
                                                                <label for="webUrl">Website</label>
                                                                <div class="input-group flex-nowrap">
                                                                    <div class="input-group-prepend">
                                                                        <span
                                                                            class="input-group-text border-ruby  bg-ruby text-white wh-44 radius-xs justify-content-center"
                                                                            id="addon-wrapping3">
                                                                            <i class="las la-basketball-ball fs-18"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input type="text"
                                                                        class="form-control form-control--social"
                                                                        placeholder="Url" aria-label="Username"
                                                                        aria-describedby="addon-wrapping3" id="webUrl">
                                                                </div>
                                                            </div>
                                                            <div class=" mb-30">
                                                                <label for="instagramUrl">instagram</label>
                                                                <div class="input-group flex-nowrap">
                                                                    <div class="input-group-prepend">
                                                                        <span
                                                                            class="input-group-text border-instagram  bg-instagram text-white wh-44 radius-xs justify-content-center"
                                                                            id="addon-wrapping4">
                                                                            <i class="lab la-instagram fs-18"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input type="text"
                                                                        class="form-control form-control--social"
                                                                        aria-describedby="addon-wrapping4"
                                                                        placeholder="Url" id="instagramUrl">
                                                                </div>
                                                            </div>
                                                            <div class=" mb-30">
                                                                <label for="githubUrl">github</label>
                                                                <div class="input-group flex-nowrap">
                                                                    <div class="input-group-prepend">
                                                                        <span
                                                                            class="input-group-text border-dark  bg-dark  text-white wh-44 radius-xs justify-content-center"
                                                                            id="addon-wrapping5">
                                                                            <i class="lab la-github fs-18"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input type="text"
                                                                        class="form-control form-control--social"
                                                                        placeholder="Username" aria-label="Username"
                                                                        aria-describedby="addon-wrapping5"
                                                                        id="githubUrl">
                                                                </div>
                                                            </div>
                                                            <div class=" mb-0">
                                                                <label for="mediumUrl">medium</label>
                                                                <div class="input-group flex-nowrap">
                                                                    <div class="input-group-prepend">
                                                                        <span
                                                                            class="input-group-text border-dark bg-dark text-white wh-44 radius-xs justify-content-center"
                                                                            id="addon-wrapping6">
                                                                            <i class="lab la-medium fs-18"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input type="text"
                                                                        class="form-control form-control--social"
                                                                        placeholder="Username" aria-label="medium"
                                                                        aria-describedby="addon-wrapping6"
                                                                        id="mediumUrl">
                                                                </div>
                                                            </div>
                                                            <div class="button-group d-flex flex-wrap pt-50 mb-15">
                                                                <button
                                                                    class="btn btn-primary btn-default btn-squared mr-15 text-capitalize">Update
                                                                    Social Profiles
                                                                </button>
                                                                <button
                                                                    class="btn btn-light btn-default btn-squared fw-400 text-capitalize">cancel
                                                                </button>
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