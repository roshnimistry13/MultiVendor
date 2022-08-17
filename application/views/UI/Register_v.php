
<div class="inner-banner-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5 col-md-4">
				<div class="inner-content">
					<h2>
						Register
					</h2>
					<ul>
						<li>
							<a href="<?php echo base_url() ?>">
								Home
							</a>
						</li>
						<li>
							Register
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-7 col-md-8">
				<div class="inner-img">
					<img src="<?php echo UI_ASSETS ?>images/inner-banner/home-two1.png" alt="Images">
				</div>
			</div>
		</div>
	</div>
</div>


<div class="user-area pt-100 pb-70">
	<div class="container">
		<div class="user-width">
			<div class="user-form">
				<div class="contact-form">
					<h2>
						Register Now
					</h2>
					<form class="form-horizontal" role="form"  action="<?php echo base_url().'submit-register' ?>" id="register-form" method="post">   
						<div class="row">
							<div class="col-lg-6 ">
								<div class="form-group">
									<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter Your first name">
								</div>
							</div>
							<div class="col-lg-6 ">
								<div class="form-group">
									<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Your last name">
								</div>
							</div>
							<div class="col-lg-6 ">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked="">
									<label class="form-check-label" for="male">
										Male
									</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="female" value="Female">
									<label class="form-check-label" for="female">
										Female
									</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="other" value="Other">
									<label class="form-check-label" for="other">
										Other
									</label>
								</div>
							</div>
							
							<div class="col-lg-6 ">
								<div class="form-group">
									<input type="tel" class="form-control" id="mobile_no" name="mobile_no" placeholder="Enter Your mobile no">
								</div>
							</div>
							<div class="col-lg-6 ">
								<div class="form-group">
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter Your email">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<input class="form-control" type="password" id="password" name="password" placeholder="Password">
								</div>
							</div>
							<div class="col-lg-12 ">
								<button type="submit" class="default-btn btn-bg-three">
									Register Now
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>