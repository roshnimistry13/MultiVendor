<?php
			
	$product_id            	= "";
	$product_name          	= "";
	$stock          	    = "";
	if(!empty($result))
	{
		$product_id       	= $result[0]['product_id'];
		$product_name      	= $result[0]['product_name'];
		$stock      	    = $result[0]['stock'];
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
                            <a href="<?php echo base_url().'stock' ?>">
                                Stock
                            </a>
                            <span class="breadcrumb__seperator">
                                <span class="la la-slash">
                                </span>
                            </span>
                        </li>
                        <li class="atbd-breadcrumb__item">
                            <span>
                                Edit Stock
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
                                        Edit Stock
                                    </h6>
                                </div>
                                <div class="card-body py-md-30">
                                    <div class="horizontal-form">
                                        <form method="post" class="form-horizontal"
                                            action="<?php echo base_url().'submit-stock' ?>" id="stock-form"
                                            name="stock-form" enctype="multipart/form-data">
                                            <input type="hidden" id="text_product_id" name="text_product_id"
                                                value="<?php echo $product_id; ?>">
                                            <div class="row">
                                                <div class="col-12 col-md-6 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Product
                                                            Name</label>
                                                        <input type="text"
                                                            class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                            name="text_product_name" placeholder="Product Name" required=""
                                                            value="<?php echo $product_name; ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">Current
                                                            Stock</label>
                                                        <input type="text"
                                                            class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                            name="text_product_stock" placeholder="Product Stock" required=""
                                                            value="<?php echo $stock; ?>" readonly>
                                                    </div>
                                                </div> 
                                                <div class="col-12 col-md-3 mb-25">
                                                    <div class="form-group">
                                                        <label for="formGroupExampleInput"
                                                            class="color-dark fs-14 fw-500 align-center">
                                                            Stock in</label>
                                                        <input type="number"
                                                            class="form-control ih-small ip-gray radius-xs b-light px-15"
                                                            name="text_stock_in" placeholder="Stock in">
                                                    </div>
                                                </div> 
                                            </div> 
                                            <div class="form-group row mt-3">
                                                <div class="col-sm-12 d-flex aling-items-center">
                                                    <button type="submit" class="btn btn-success  btn-xs px-30"
                                                        href="javascript:void(0)">
                                                        Submit
                                                    </button>
                                                    <a class="btn btn-light btn-xs px-30 ml-2"
                                                        href="<?php echo base_url('stock')?>">
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