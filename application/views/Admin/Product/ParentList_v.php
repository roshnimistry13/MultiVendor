<div class="contents">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">
                        Parent Products
                    </h4>
                    <?php 
                        $user_type 								= $this->session->userdata[ADMIN_SESSION]['user_type'];
                        if(strtolower($user_type) != "admin"){	
                    ?>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <div class="action-btn">
                            <a href="<?php echo base_url().'add-parent-product' ?>"
                                class="btn btn-sm btn-primary btn-add">
                                <i class="la la-plus">
                                </i> Add
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-body">
                        <div class="userDatatable global-shadow border-0 bg-white w-100">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless w-100" id="parentproductDatatable">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th>
                                                <span class="userDatatable-title">
                                                    #
                                                </span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">
                                                    Parent Name
                                                </span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">
                                                    Vendor
                                                </span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">
                                                    Code
                                                </span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">
                                                    Status
                                                </span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title float-right">
                                                    Action
                                                </span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>