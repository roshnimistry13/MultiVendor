<div class="contents">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">
                        Stock List
                    </h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <!-- <div class="action-btn">
							<a href="<?php echo base_url().'add-brand' ?>" class="btn btn-sm btn-primary btn-add">
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
                        <div class="userDatatable global-shadow border-0 bg-white w-100">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless" id="stockDatatable">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th>
                                                <span class="userDatatable-title">
                                                    #
                                                </span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">
                                                    Product Name
                                                </span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">
                                                    Stock
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

<div class="modal-basic modal fade show" id="product_stock_detail_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-bg-white ">
            <div class="modal-header">
                <!-- <h6 class="modal-title">Stock Detail</h6><br> -->
				<span class="product-name color-primary"></span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span data-feather="x"></span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 mb-30">
                        <div class="userDatatable global-shadow border-0 bg-white w-100">
                            <div class="table-responsive">
                                <table class="table mb-0 w-100" id="stockDetailDatatable">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th>
                                                <span class="userDatatable-title">
                                                    Date
                                                </span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">
                                                    Old Stock
                                                </span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">
                                                    Current Stock
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
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>