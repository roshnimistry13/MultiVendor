<div class="contents">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Dashboard</h4>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-3 col-md-6 mb-25">
                <div class="feature-cards5 d-flex justify-content-between border-0 radius-xl bg-white p-25">
                    <div class="application-task d-flex align-items-center">
                        <div class="application-task-icon wh-60 bg-primary content-center">
                            <img class="svg" src="<?php echo ADMIN_ASSETS ?>img/svg/feature-cards9.svg" alt="">
                        </div>
                        <div class="application-task-content">
                            <h4><?php echo $totalproducts?></h4>
                            <span class="fs-14 mt-1 text-capitalize">Products</span>
                        </div>
                    </div>
                    <div class="card__more-action dropdown dropdown-click">
                        <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="true">
                            <span data-feather="more-horizontal"></span>
                        </button>
                        <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu"
                            x-placement="top-end"
                            style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-96px, -137px, 0px);">
                            <a class="dropdown-item" href="#">view</a>
                            <a class="dropdown-item" href="#">edit</a>
                            <a class="dropdown-item" href="#">delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-3 col-md-6 mb-25">
                <div class="feature-cards5 d-flex justify-content-between border-0 radius-xl bg-white p-25">
                    <div class="application-task d-flex align-items-center">
                        <div class="application-task-icon wh-60 bg-secondary content-center">
                            <img class="svg" src="<?php echo ADMIN_ASSETS ?>img/svg/feature-cards10.svg" alt="">
                        </div>
                        <div class="application-task-content">
                            <h4><?php echo $totalvendors?></h4>
                            <span class="fs-14 mt-1 text-capitalize">Vendors</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-3 col-md-6 mb-25">
                <div class="feature-cards5 d-flex justify-content-between border-0 radius-xl bg-white p-25">
                    <div class="application-task d-flex align-items-center">
                        <div class="application-task-icon wh-60 bg-success content-center">
                            <img class="svg" src="<?php echo ADMIN_ASSETS ?>img/svg/feature-cards11.svg" alt="">
                        </div>
                        <div class="application-task-content">
                            <h4><?php echo $totalorders?></h4>
                            <span class="fs-14 mt-1 text-capitalize">Orders</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-3 col-md-6 mb-25">
                <div class="feature-cards5 d-flex justify-content-between border-0 radius-xl bg-white p-25">
                    <div class="application-task d-flex align-items-center">
                        <div class="application-task-icon wh-60 bg-warning content-center">
                            <img class="svg" src="<?php echo ADMIN_ASSETS ?>img/svg/feature-cards12.svg" alt="">
                        </div>
                        <div class="application-task-content">
                            <h4><?php echo $totalCustomers?></h4>
                            <span class="fs-14 mt-1 text-capitalize">Customer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-md-6 mb-25">

                <div class="card border-0">
                    <div class="card-header">
                        <h6>Top Selling Products</h6>
                        <div class="card-extra">
                            <ul class="card-tab-links mr-3 nav-tabs nav" role="tablist">
                                <li>
                                    <a class="active" href="#t_selling-today" data-toggle="tab" id="t_selling-today-tab"
                                        role="tab" aria-selected="true">Today</a>
                                </li>
                                <li>
                                    <a href="#t_selling-week" data-toggle="tab" id="t_selling-week-tab" role="tab"
                                        aria-selected="true">Week</a>
                                </li>
                                <li>
                                    <a href="#t_selling-month" data-toggle="tab" id="t_selling-month-tab" role="tab"
                                        aria-selected="true">Month</a>
                                </li>
                                <li>
                                    <a href="#t_selling-year" data-toggle="tab" id="t_selling-year-tab" role="tab"
                                        aria-selected="true">Year</a>
                                </li>
                            </ul>
                            <div class="dropdown dropleft">
                                <a href="#" role="button" id="todo2" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span data-feather="more-horizontal"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="todo2">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="t_selling-today" role="tabpanel"
                                aria-labelledby="t_selling-today-tab">
                                <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table--default">
                                            <thead>
                                                <tr>
                                                    <th>Prduct Name</th>
                                                    <th>Price</th>
                                                    <th>Sold</th>
                                                    <th>Revenue</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/287.png" alt="img">
                                                            <span>Samsung Galaxy S8 256GB</span>
                                                        </div>
                                                    </td>
                                                    <td>$289</td>
                                                    <td>339</td>
                                                    <td>$60,258</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid"
                                                                src="<?php echo ADMIN_ASSETS ?>img/165.png" alt="img">
                                                            <span>Half Sleeve Shirt</span>
                                                        </div>
                                                    </td>
                                                    <td>$29</td>
                                                    <td>136</td>
                                                    <td>$2,483</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/166.png" alt="img">
                                                            <span>Marco Shoes</span>
                                                        </div>
                                                    </td>
                                                    <td>$59</td>
                                                    <td>448</td>
                                                    <td>$19,758</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/315.png" alt="img">
                                                            <span>15" Mackbook Pro</span>
                                                        </div>
                                                    </td>
                                                    <td>$1,299</td>
                                                    <td>159</td>
                                                    <td>$197,458</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/506.png" alt="img">
                                                            <span>Apple iPhone X</span>
                                                        </div>
                                                    </td>
                                                    <td>$899</td>
                                                    <td>146</td>
                                                    <td>115,254</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="t_selling-week" role="tabpanel"
                                aria-labelledby="t_selling-week-tab">
                                <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table--default">
                                            <thead>
                                                <tr>
                                                    <th>Prduct Name</th>
                                                    <th>Price</th>
                                                    <th>Sold</th>
                                                    <th>Revenue</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/287.png" alt="img">
                                                            <span>Samsung Galaxy S8 256GB</span>
                                                        </div>
                                                    </td>
                                                    <td>$289</td>
                                                    <td>339</td>
                                                    <td>$60,258</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid"
                                                                src="<?php echo ADMIN_ASSETS ?>img/165.png" alt="img">
                                                            <span>Half Sleeve Shirt</span>
                                                        </div>
                                                    </td>
                                                    <td>$29</td>
                                                    <td>136</td>
                                                    <td>$2,483</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/166.png" alt="img">
                                                            <span>Marco Shoes</span>
                                                        </div>
                                                    </td>
                                                    <td>$59</td>
                                                    <td>448</td>
                                                    <td>$19,758</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/315.png" alt="img">
                                                            <span>15" Mackbook Pro</span>
                                                        </div>
                                                    </td>
                                                    <td>$1,299</td>
                                                    <td>159</td>
                                                    <td>$197,458</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/506.png" alt="img">
                                                            <span>Apple iPhone X</span>
                                                        </div>
                                                    </td>
                                                    <td>$899</td>
                                                    <td>146</td>
                                                    <td>115,254</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="t_selling-month" role="tabpanel"
                                aria-labelledby="t_selling-month-tab">
                                <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table--default">
                                            <thead>
                                                <tr>
                                                    <th>Prduct Name</th>
                                                    <th>Price</th>
                                                    <th>Sold</th>
                                                    <th>Revenue</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/287.png" alt="img">
                                                            <span>Samsung Galaxy S8 256GB</span>
                                                        </div>
                                                    </td>
                                                    <td>$289</td>
                                                    <td>339</td>
                                                    <td>$60,258</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid"
                                                                src="<?php echo ADMIN_ASSETS ?>img/165.png" alt="img">
                                                            <span>Half Sleeve Shirt</span>
                                                        </div>
                                                    </td>
                                                    <td>$29</td>
                                                    <td>136</td>
                                                    <td>$2,483</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/166.png" alt="img">
                                                            <span>Marco Shoes</span>
                                                        </div>
                                                    </td>
                                                    <td>$59</td>
                                                    <td>448</td>
                                                    <td>$19,758</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/315.png" alt="img">
                                                            <span>15" Mackbook Pro</span>
                                                        </div>
                                                    </td>
                                                    <td>$1,299</td>
                                                    <td>159</td>
                                                    <td>$197,458</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/506.png" alt="img">
                                                            <span>Apple iPhone X</span>
                                                        </div>
                                                    </td>
                                                    <td>$899</td>
                                                    <td>146</td>
                                                    <td>115,254</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="t_selling-year" role="tabpanel"
                                aria-labelledby="t_selling-year-tab">
                                <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table--default">
                                            <thead>
                                                <tr>
                                                    <th>Prduct Name</th>
                                                    <th>Price</th>
                                                    <th>Sold</th>
                                                    <th>Revenue</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/287.png" alt="img">
                                                            <span>Samsung Galaxy S8 256GB</span>
                                                        </div>
                                                    </td>
                                                    <td>$289</td>
                                                    <td>339</td>
                                                    <td>$60,258</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid"
                                                                src="<?php echo ADMIN_ASSETS ?>img/165.png" alt="img">
                                                            <span>Half Sleeve Shirt</span>
                                                        </div>
                                                    </td>
                                                    <td>$29</td>
                                                    <td>136</td>
                                                    <td>$2,483</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/166.png" alt="img">
                                                            <span>Marco Shoes</span>
                                                        </div>
                                                    </td>
                                                    <td>$59</td>
                                                    <td>448</td>
                                                    <td>$19,758</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/315.png" alt="img">
                                                            <span>15" Mackbook Pro</span>
                                                        </div>
                                                    </td>
                                                    <td>$1,299</td>
                                                    <td>159</td>
                                                    <td>$197,458</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/506.png" alt="img">
                                                            <span>Apple iPhone X</span>
                                                        </div>
                                                    </td>
                                                    <td>$899</td>
                                                    <td>146</td>
                                                    <td>115,254</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xxl-6 col-xl-6 col-md-6 mb-25">

                <div class="card border-0">
                    <div class="card-header">
                        <h6>UP Comming Offers</h6>
                    </div>
                    <div class="card-body p-0">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="t_selling-today" role="tabpanel"
                                aria-labelledby="t_selling-today-tab">
                                <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table--default">                                            
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Flat 50% Off</h6>
                                                                </a>
                                                                <p class="pt-1 d-block mb-0">
                                                                   20-Oct-2022 to 31-Oct-2022
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Upto 60% Off</h6>
                                                                </a>
                                                                <p class="pt-1 d-block mb-0">
                                                                   20-Oct-2022 to 31-Oct-2022
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Under ₹799</h6>
                                                                </a>
                                                                <p class="pt-1 d-block mb-0">
                                                                   20-Oct-2022 to 31-Oct-2022
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Under ₹799</h6>
                                                                </a>
                                                                <p class="pt-1 d-block mb-0">
                                                                   20-Oct-2022 to 31-Oct-2022
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Under ₹799</h6>
                                                                </a>
                                                                <p class="pt-1 d-block mb-0">
                                                                   20-Oct-2022 to 31-Oct-2022
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="t_selling-week" role="tabpanel"
                                aria-labelledby="t_selling-week-tab">
                                <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table--default">
                                            <thead>
                                                <tr>
                                                    <th>Prduct Name</th>
                                                    <th>Price</th>
                                                    <th>Sold</th>
                                                    <th>Revenue</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/287.png" alt="img">
                                                            <span>Samsung Galaxy S8 256GB</span>
                                                        </div>
                                                    </td>
                                                    <td>$289</td>
                                                    <td>339</td>
                                                    <td>$60,258</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid"
                                                                src="<?php echo ADMIN_ASSETS ?>img/165.png" alt="img">
                                                            <span>Half Sleeve Shirt</span>
                                                        </div>
                                                    </td>
                                                    <td>$29</td>
                                                    <td>136</td>
                                                    <td>$2,483</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/166.png" alt="img">
                                                            <span>Marco Shoes</span>
                                                        </div>
                                                    </td>
                                                    <td>$59</td>
                                                    <td>448</td>
                                                    <td>$19,758</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/315.png" alt="img">
                                                            <span>15" Mackbook Pro</span>
                                                        </div>
                                                    </td>
                                                    <td>$1,299</td>
                                                    <td>159</td>
                                                    <td>$197,458</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/506.png" alt="img">
                                                            <span>Apple iPhone X</span>
                                                        </div>
                                                    </td>
                                                    <td>$899</td>
                                                    <td>146</td>
                                                    <td>115,254</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="t_selling-month" role="tabpanel"
                                aria-labelledby="t_selling-month-tab">
                                <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table--default">
                                            <thead>
                                                <tr>
                                                    <th>Prduct Name</th>
                                                    <th>Price</th>
                                                    <th>Sold</th>
                                                    <th>Revenue</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/287.png" alt="img">
                                                            <span>Samsung Galaxy S8 256GB</span>
                                                        </div>
                                                    </td>
                                                    <td>$289</td>
                                                    <td>339</td>
                                                    <td>$60,258</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid"
                                                                src="<?php echo ADMIN_ASSETS ?>img/165.png" alt="img">
                                                            <span>Half Sleeve Shirt</span>
                                                        </div>
                                                    </td>
                                                    <td>$29</td>
                                                    <td>136</td>
                                                    <td>$2,483</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/166.png" alt="img">
                                                            <span>Marco Shoes</span>
                                                        </div>
                                                    </td>
                                                    <td>$59</td>
                                                    <td>448</td>
                                                    <td>$19,758</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/315.png" alt="img">
                                                            <span>15" Mackbook Pro</span>
                                                        </div>
                                                    </td>
                                                    <td>$1,299</td>
                                                    <td>159</td>
                                                    <td>$197,458</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/506.png" alt="img">
                                                            <span>Apple iPhone X</span>
                                                        </div>
                                                    </td>
                                                    <td>$899</td>
                                                    <td>146</td>
                                                    <td>115,254</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="t_selling-year" role="tabpanel"
                                aria-labelledby="t_selling-year-tab">
                                <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table--default">
                                            <thead>
                                                <tr>
                                                    <th>Prduct Name</th>
                                                    <th>Price</th>
                                                    <th>Sold</th>
                                                    <th>Revenue</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/287.png" alt="img">
                                                            <span>Samsung Galaxy S8 256GB</span>
                                                        </div>
                                                    </td>
                                                    <td>$289</td>
                                                    <td>339</td>
                                                    <td>$60,258</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid"
                                                                src="<?php echo ADMIN_ASSETS ?>img/165.png" alt="img">
                                                            <span>Half Sleeve Shirt</span>
                                                        </div>
                                                    </td>
                                                    <td>$29</td>
                                                    <td>136</td>
                                                    <td>$2,483</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/166.png" alt="img">
                                                            <span>Marco Shoes</span>
                                                        </div>
                                                    </td>
                                                    <td>$59</td>
                                                    <td>448</td>
                                                    <td>$19,758</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/315.png" alt="img">
                                                            <span>15" Mackbook Pro</span>
                                                        </div>
                                                    </td>
                                                    <td>$1,299</td>
                                                    <td>159</td>
                                                    <td>$197,458</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="selling-product-img d-flex align-items-center">
                                                            <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary"
                                                                src="<?php echo ADMIN_ASSETS ?>img/506.png" alt="img">
                                                            <span>Apple iPhone X</span>
                                                        </div>
                                                    </td>
                                                    <td>$899</td>
                                                    <td>146</td>
                                                    <td>115,254</td>
                                                </tr>
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
    </div>
</div>