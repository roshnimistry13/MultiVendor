  <div class="inner-banner-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5 col-md-4">
				<div class="inner-content">
					<h2>
						Log In
					</h2>
					<ul>
						<li>
							<a href="<?php echo base_url() ?>">
								Home
							</a>
						</li>
						<li>
							Log In
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
						Log In
					</h2>
					<form class="form-horizontal" role="form"  id="login-form" name="login-form" method="post" enctype="multipart/form-data">   
						<div class="row">
							<div class="col-lg-12 ">
								<div class="form-group">
									<input type="text" class="form-control" id="email" name="email" placeholder="Email">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<input class="form-control" type="password" name="password" id="password" placeholder="Password">
								</div>
							</div>
							<div class="col-lg-12 form-condition">
								<div class="agree-label">
									<input type="checkbox" id="remember_me" name="remember_me">
									<label for="remember_me">
										Remember Me
										<a class="forget" href="<?php echo base_url().'forgot-password'; ?>">
											Forgot My Password?
										</a>
									</label>
								</div>
							</div>
							<div class="col-lg-12 ">
								<a class="default-btn btn-bg-three" href="javascript:void(0)" onclick="checkLogin()">
									Log In Now
								</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>