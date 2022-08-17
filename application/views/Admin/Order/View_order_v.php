<div class="contents view-order-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
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
                            <a href="<?php echo base_url().'order' ?>">
                                Order
                            </a>
                            <span class="breadcrumb__seperator">
                                <span class="la la-slash">
                                </span>
                            </span>
                        </li>
                        <li class="atbd-breadcrumb__item">
                            <span>
                                View Order
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-body">
                        <div class="atbd-nav-controller nav-controller-slide">
                            <div class="nav-controller-content tab-content">
                                <div class="tab-pane fade active show" id="control1" role="tabpanel"
                                    aria-labelledby="control1-tab">
                                    <div class="tab-slide-content">
                                        <div class="atbd-tab tab-horizontal">
                                            <ul class="nav nav-tabs vertical-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="tab-1" data-toggle="tab"
                                                        href="#tab-content-order" role="tab"
                                                        aria-controls="tab-content-order" aria-selected="false">Order
                                                        Summary</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-2" data-toggle="tab"
                                                        href="#tab-content-product" role="tab"
                                                        aria-controls="tab-content-product"
                                                        aria-selected="false">Product Detail</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-3" data-toggle="tab"
                                                        href="#tab-content-payment" role="tab"
                                                        aria-controls="tab-content-payment"
                                                        aria-selected="false">Payment </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="tab-content-order"
                                                    role="tabpanel" aria-labelledby="tab-1">
                                                    <div class="row">
                                                        <div class="col-xxl-4 col-lg-6">
                                                            <div class="bg-white radius-xl pt-25 pb-50 px-25">
                                                                <div class="card order-summery  bg-normal p-sm-25 p-15">
                                                                    <div
                                                                        class="card-header bg-white border-bottom-0 p-0 pb-25">
                                                                        <h5 class="fw-500">Order Summary</h5>
                                                                        <h6 class="fw-500">#ORD-1</h6>
                                                                    </div>
                                                                    <div class="card-body bg-white">
                                                                        <div class="total">
                                                                            <div class="shipping">
                                                                                Status:
                                                                                <span
                                                                                    class="badge badge-round badge-success badge-lg">Shipped</span>
                                                                            </div>
                                                                            <div class="subtotalTotal">
                                                                                Subtotal:
                                                                                <span>₹1,690.26</span>
                                                                            </div>
                                                                            <div class="taxes">
                                                                                Discount:
                                                                                <span>-₹126.30</span>
                                                                            </div>
                                                                            <div class="shipping">
                                                                                Shipping charge:
                                                                                <span>₹46.30</span>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="total-money d-flex justify-content-between">
                                                                            <h6>Total :</h6>
                                                                            <h5>₹1738.60</h5>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- ends: card -->
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-lg-6">
                                                            <div class="bg-white radius-xl pt-25 pb-50 px-25">
                                                                <div class="card order-summery  bg-normal p-sm-25 p-15">
                                                                    <div
                                                                        class="card-header bg-white border-bottom-0 p-0 pb-25">
                                                                        <h5 class="fw-500">Customer Detail</h5>
                                                                    </div>
                                                                    <div class="card-body bg-white">
                                                                        <div class="total">
                                                                            <div class="">
                                                                                Name:
                                                                                <span>Roshni Mistry</span>
                                                                            </div>
                                                                            <div class="">
                                                                                Phone:
                                                                                <span>1234567896</span>
                                                                            </div>
                                                                            <div class="text-lowercase">
                                                                                Email:
                                                                                <span>roshnimistry@gmail.com</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body bg-white mt-2">
                                                                        <h6>Shipping Address </h6>
                                                                        <div class="mt-3">
                                                                            <span>Phase 3 GIDC, Vapi, Gujarat
                                                                                396191</span>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- ends: card -->

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="tab-content-product" role="tabpanel"
                                                    aria-labelledby="tab-2">
                                                    <div class="row">
                                                        <div class="col-12 mt-30">
                                                            <div class="card border-0">
                                                                <div class="card-header">
                                                                    <h6>Products Detail</h6>
                                                                </div>
                                                                <div class="card-body p-0">
                                                                    <div class="landing-pages-table table-responsive">
                                                                        <table
                                                                            class="table table--default product-detail">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Product</th>
                                                                                    <th>Qty</th>
                                                                                    <th>MRP(rs)</th>
                                                                                    <th>Discount</th>
                                                                                    <th>GST</th>
                                                                                    <th>Amount</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="">Product-1</a>
                                                                                    </td>
                                                                                    <td>1</td>
                                                                                    <td>₹200</td>
                                                                                    <td>₹100</td>
                                                                                    <td>₹25</td>
                                                                                    <td>₹250</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <a href="">Product-2</a>
                                                                                    </td>
                                                                                    <td>1</td>
                                                                                    <td>₹200</td>
                                                                                    <td>₹100</td>
                                                                                    <td>₹25</td>
                                                                                    <td>₹250</td>
                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th colspan="5" class="text-right">
                                                                                        Total Amount</th>
                                                                                    <th class="text-right pr-3">₹1000</th>
                                                                                </tr>
                                                                            </tfoot>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab-content-payment" role="tabpanel"
                                                    aria-labelledby="tab-3">
                                                    <p>Content of Tab Pane 3</p>
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
        </div>
    </div>
</div>