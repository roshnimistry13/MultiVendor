<?php 
    $years                  = range(date('Y'),'2020');
    $customer_name          = $this->session->userdata[CUSTOMER_SESSION]['customer_name'];
    $gender                 = $this->session->userdata[CUSTOMER_SESSION]['gender'];
    $mobile                 = $this->session->userdata[CUSTOMER_SESSION]['mobile'];
    $email                  = $this->session->userdata[CUSTOMER_SESSION]['email'];
?>

<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span></span> Pages
                <span></span> Account
            </div>
        </div>
    </div>
    <section class="pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="dashboard-menu">
                                <ul class="nav flex-column" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="orders-tab" data-bs-toggle="tab" href="#orders"
                                            role="tab" aria-controls="orders" aria-selected="false"><i
                                                class="fi-rs-shopping-bag mr-10"></i>Orders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab"
                                            href="#track-orders" role="tab" aria-controls="track-orders"
                                            aria-selected="false"><i class="fi-rs-shopping-cart-check mr-10"></i>Track
                                            Your Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address"
                                            role="tab" aria-controls="address" aria-selected="true"><i
                                                class="fi-rs-marker mr-10"></i>My Address</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab"
                                            href="#account-detail" role="tab" aria-controls="account-detail"
                                            aria-selected="true"><i class="fi-rs-user mr-10"></i>Account details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="change-password-tab" data-bs-toggle="tab"
                                            href="#change-password" role="tab" aria-controls="change-password"
                                            aria-selected="true"><i class="fi-rs-key mr-10"></i>Change Password</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url();?>"><i
                                                class="fi-rs-sign-out mr-10"></i>Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content dashboard-content">
                                <div class="tab-pane fade active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="shop-product-fillter float-end">
                                                <div class="sort-by-product-area">
                                                    <div class="sort-by-cover">
                                                        <div class="sort-by-product-wrap">
                                                            <div class="sort-by">
                                                                <span><i class="fi-rs-apps"></i>Filter By Year</span>
                                                            </div>
                                                        </div>
                                                        <div class="sort-by-dropdown">
                                                            <ul>
                                                                <?php foreach($years as $row){?>
                                                                <li><a class=""
                                                                        href="javascript:void(0)"><?php echo $row;?></a>
                                                                </li>
                                                                <?php } ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table shopping-summery text-center clean">
                                                    <thead>
                                                        <tr>
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Total</th>
                                                            <!-- <th>Actions</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if(!empty($orders)){ 
                                                            foreach($orders as $row){ ?>
                                                        <tr>
                                                            <td><a
                                                                    href="<?php echo base_url('order-detail?id=').$row['order_id']; ?>"><?php echo $row['order_number']; ?></a>
                                                            </td>
                                                            <td><?php echo date('d-M-Y',strtotime($row['order_date'])); ?>
                                                            </td>
                                                            <td>₹<?php echo $row['total_amount']; ?>
                                                                (<small><?php echo $row['total_item'] .'items';?></small>)
                                                            </td>
                                                            <!-- <td>
                                                                <a href="#" class="btn-small d-block">
                                                                    <i class="fi fi-rs-eye"></i>
                                                                </a>
                                                            </td> -->
                                                        </tr>
                                                        <?php } } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="track-orders" role="tabpanel"
                                    aria-labelledby="track-orders-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Orders tracking</h5>
                                        </div>
                                        <div class="card-body contact-from-area">
                                            <p>To track your order please enter your OrderID in the box below and press
                                                "Track" button. This was given to you on your receipt and in the
                                                confirmation email you should have received.</p>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <form class="contact-form-style mt-30 mb-50" action="#"
                                                        method="post">
                                                        <div class="input-style mb-20">
                                                            <label>Order ID</label>
                                                            <input name="order-id"
                                                                placeholder="Found in your order confirmation email"
                                                                type="text" class="square">
                                                        </div>
                                                        <div class="input-style mb-20">
                                                            <label>Billing email</label>
                                                            <input name="billing-email"
                                                                placeholder="Email you used during checkout"
                                                                type="email" class="square">
                                                        </div>
                                                        <button class="submit submit-auto-width"
                                                            type="submit">Track</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="address" role="tabpanel"
                                    aria-labelledby="address-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h5 class="mb-0">Saved Address</h5>
                                                </div>
                                                <div class="col-auto">
                                                    <div class=" float-end">
                                                        <a href="javascript:void(0)"
                                                            class="btn  btn-sm  btn_add_address"><i
                                                                class="fi fi-rs-add mr-10"></i> Add New Address</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive all-address-list">
                                                <table class="table shopping-summery  clean">
                                                    <tbody>
                                                        <?php if(!empty($address)){
                                                            foreach($address as $row1){ 
                                                                $city_state 	    = $row1['city'].' , '.$row1['state'].' , '.$row1['country'].' - '.$row1['pincode'];
                                                                $set_default 		= $row1['set_default'];                                                                
                                                            ?>
                                                        <tr>
                                                            <td class="product-des product-name">
                                                                <div class="py-2">
                                                                    <h5 class="product-name">
                                                                        <a href="javascript:void(0)">
                                                                            <?php echo $row1['first_name'].' '.$row1['last_name'];?>
                                                                        </a>
                                                                        <?php if($set_default == 1){ ?>                                                   
                                                                            <span class="badge bg-6 text-dark">(Default)</span>
                                                                       <?php } ?>                                                                        
                                                                        <span
                                                                            class="badge bg-2 mx-2 text-dark"><?php echo $row1['address_type']; ?></span>
                                                                    </h5>
                                                                    <p class="font-xs"><?php echo $row1['address']?></p>
                                                                    <p class="font-xs"><?php echo $city_state;?></p>
                                                                    <p class="font-xs">Contact No :
                                                                        <?php echo $row1['mobile'];?></p>
                                                                </div>
                                                            </td>
                                                            <td class="action edit-delete-btn" data-title="">
                                                                <a href="javascript:void(0)" class="mx-1 btneditaddress" data-id="<?php echo $row1['address_id']?>"><i
                                                                        class="fi fi-rs-edit"></i></i></a>
                                                                <a href="javascript:void(0)" class="text-danger mx-1 btremoveaddress" data-id="<?php echo $row1['address_id']?>"><i
                                                                        class="fi-rs-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <?php } } ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="account-detail" role="tabpanel"
                                    aria-labelledby="account-detail-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Account Details</h5>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" id="RegisterForm"
                                                action="<?php echo base_url('register-customer')?>">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label>Full Name <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="name"
                                                            type="text" value="<?php echo $customer_name;?>">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Email <span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="email"
                                                            type="email" value="<?php echo $email;?>">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Mobile No<span class="required">*</span></label>
                                                        <input required="" class="form-control square" name="contact_no"
                                                            type="text" value="<?php echo $mobile;?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                    <div class="input-style mb-10">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="gender"
                                                                id="male-radio" value="male" <?php echo ($gender == "male") ? 'checked' : '' ?>>
                                                            <label class="form-check-label"
                                                                for="male-radio">Male</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="gender"
                                                                id="female-radio" value="female" <?php echo ($gender == "female") ? 'checked' : '' ?>>
                                                            <label class="form-check-label"
                                                                for="female-radio">Female</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="gender"
                                                                id="other-radio" value="other" <?php echo ($gender == "other") ? 'checked' : '' ?>>
                                                            <label class="form-check-label"
                                                                for="other-radio">Other</label>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-fill-out submit"
                                                            name="submit" value="Submit">Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="change-password" role="tabpanel"
                                    aria-labelledby="account-detail-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Change Password</h5>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" id="change_password" name="change_password"
                                                action="<?php echo base_url('change-password'); ?>">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label>Current Password <span class="required">*</span></label>
                                                        <input required="" class="form-control square"
                                                            name="current_password" type="password">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>New Password <span class="required">*</span></label>
                                                        <input required="" class="form-control square" id="new_password"
                                                            name="new_password" type="password">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Confirm Password <span class="required">*</span></label>
                                                        <input required="" class="form-control square"
                                                            name="confrim_password" type="password">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-fill-out submit"
                                                            name="submit" value="Submit">Change</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>