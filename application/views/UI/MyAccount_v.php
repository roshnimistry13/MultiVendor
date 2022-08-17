 <div class="inner-banner-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5 col-md-4">
				<div class="inner-content">
					<h2>
						My Account
					</h2>
					<ul>
						<li>
							<a href="<?php echo base_url(); ?>">
								Home
							</a>
						</li>
						<li>
							My Account
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-7 col-md-8">
				<div class="inner-img">
					<img src="<?php echo UI_ASSETS ?>images/inner-banner/home-two2.png" alt="Images">
				</div>
			</div>
		</div>
	</div>
</div>

 <?php 
 	$customer_id = $customer_details[0]['customer_id'];
 	$first_name = $customer_details[0]['first_name']; 
 	$last_name = $customer_details[0]['last_name']; 
 	$gender = $customer_details[0]['gender']; 
 	$mobile = $customer_details[0]['mobile']; 
 	$email = $customer_details[0]['email']; 
 	$password = $customer_details[0]['password']; 
 
 ?>

<div class="my-account-area ptb-100">
	<div class="container">
		<div class="tab account-tab">
			<div class="row">
				<div class="col-lg-4">
					<ul class="tabs">
						<li>
							<a href="#">
								My Account
							</a>
						</li>
						<li>
							<a href="#">
								My Order
							</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-8">
					<div class="tab_content current active">
						<div class="tabs_item current">
							<div class="account-tab-item">
								<div class="account-details">
									<h2>
										Profile Details
									</h2>
									<div class="account-form">
										<form class="form-horizontal" role="form"  id="profile-form" name="profile-form" method="post" enctype="multipart/form-data">  
											<div class="row">
												<div class="col-lg-6">
													<div class="form-group">
														<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" value="<?php echo $first_name ?>">
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" value="<?php echo $last_name ?>">
													</div>
												</div>
												<div class="col-lg-6 ">
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="gender" id="male" value="Male" <?php if($gender == "Male") echo "checked"; ?>>
														<label class="form-check-label" for="male">
															Male
														</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="gender" id="female" value="Female" <?php if($gender == "Female") echo "checked"; ?>>
														<label class="form-check-label" for="female">
															Female
														</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="gender" id="other" value="Other" <?php if($gender == "Other") echo "checked"; ?>>
														<label class="form-check-label" for="other">
															Other
														</label>
													</div>
												</div>

												<div class="col-lg-12 ">
													<div class="form-group">
														<input type="tel" class="form-control" id="mobile_no" name="mobile_no" placeholder="Enter Your mobile no" value="<?php echo $mobile ?>">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="form-group">
														<input type="email" class="form-control" id="email" name="email" placeholder="email" value="<?php echo $email ?>">
													</div>
												</div>
												<div class="col-lg-4 col-md-6">
													<a href="javascript:void(0)" class="default-btn btn-bg-three" onclick="updateCustomerProfile()">
														Update
													</a>
												</div>
											</div>
										</form>
									</div>
									<div class="account-form mt-5">
										<h3>
											Change Password
										</h3>
										<form class="form-horizontal" role="form" id="change-password-form" name="change-password-form" method="post" enctype="multipart/form-data">
											<div class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<input type="password" class="form-control" id="current_password" name="current_password" placeholder="Current Password">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="form-group">
														<input type="password" class="form-control" id="new_password" name="new_password" placeholder="New Password">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="form-group">
														<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
													</div>
												</div>
												<div class="col-lg-4 col-md-6">
													<a href="javascript:void(0)" class="default-btn btn-bg-three" onclick="updateCustomerPassword()">
														Update
													</a>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="tabs_item">
							<div class="account-tab-item">
								<div class="d-flex flex-wrap">
									<?php
									if(!empty($orders))
									{
										foreach($orders as $o_row)
										{
											$order_id 		= $o_row['order_id'];	
											$order_number 	= $o_row['order_number'];	
											$total_quantity = $o_row['total_quantity'];	
											$total_amount 	= $o_row['total_amount'];	
									?>		
									<div class="col-sm-12 col-md-6 px-2 mb-3">
										<a class="w-100" href="#">
											<div class="card p-2">
												<div class="card-header d-flex justify-content-between align-item-center mb-2">
													<div>
														Qty:
														<span>
															<?php echo $total_quantity ?>
														</span>
													</div>
													<div>
														Order No:
														<span>
															<?php echo $order_number ?>
														</span>
													</div>
												</div>	
									<?php
											$order_details = $this->Master_m->getOrderProductDetails($order_id);
											if(!empty($order_details))
											{
												foreach($order_details as $d_row)
												{
													$product_id 		= $d_row['product_id'];	
													$product_name 	= $d_row['product_name'];	
													$quantity = $d_row['quantity'];	
													$net_price 	= $d_row['net_price'];	
													$image 	= $d_row['image'];	
													$img_arr = explode('|',$image);
													$image_url = base_url().PRODUCT_IMAGE_PATH.$product_id.'/'.$img_arr[0];
												?>
													<div class="d-flex align-items-center">
														<div class="d-flex align-items-center">
															<div class="cart-order-img">
																<img class="w-100" src="<?php echo $image_url ?>"
																alt="">
															</div>
															<div class="products-card-title">
																<p class="mx-2 my-0">
																	<?php echo $product_name; ?>
																</p>
																<div class="order-qty d-flex justify-content-between align-item-center mx-2 my-0">
																	<div>
																		Qty:
																		<span>
																			<?php echo $quantity; ?>
																		</span>
																	</div>
																	<div>
																		Rs.:
																		<span>
																			<?php echo $net_price; ?>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<hr>
													
												<?php
												}
											}
											else
											{
												
											}
									?>
												<div class="card-amount d-flex justify-content-end align-item-center">
													<div>
														Total amt:
														<span>
															<?php echo $total_amount ?>
														</span>
													</div>
												</div>
											</div>
										</a>
									</div>
											
											
									<?php		
										}
									}
									else
									{
										
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>