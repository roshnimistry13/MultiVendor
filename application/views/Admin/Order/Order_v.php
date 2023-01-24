<div class="contents">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">
                        Order List
                    </h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <!-- <div class="action-btn">
							<a href="<?php echo base_url().'add-order' ?>" class="btn btn-sm btn-primary btn-add">
								<i class="la la-plus">
								</i> Add
							</a>
						</div> -->
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-20">
                            <div class="dropdown dropdown-click">
                                <div class="btn-group dropcenter">
                                    <button class="btn btn-outline-lighten btn-sm">Delivery Status</button>

                                    <button type="button" class="btn btn-outline-lighten btn-sm dropdown-toggle-split"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span data-feather="chevron-down"></span>
                                    </button>

                                    <div class="dropdown-default dropdown-menu">
									<a class="dropdown-item filterByDeliveryStatus" href="javascript:void(0)" data-statusid="0">All</a>
										<?php if(!empty($delivery_status)){
											foreach($delivery_status as $row){
										?>
                                        <a class="dropdown-item filterByDeliveryStatus" href="javascript:void(0)" data-statusid="<?php echo $row['delivery_status_id'];?>"><?php echo $row['delivery_status']?></a>
										<?php } }?>
                                    </div>

                                </div>
                            </div>

                        </div>
						
                        <div class="userDatatable global-shadow border-0 bg-white w-100">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless" id="orderDatatable">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th>
                                                <span class="userDatatable-title">
                                                    #
                                                </span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">
                                                    Date
                                                </span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">
                                                    Order No
                                                </span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">
                                                     Customer Name
                                                </span>
                                            </th>                                           
                                            <th>
                                                <span class="userDatatable-title">
                                                    Amount
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