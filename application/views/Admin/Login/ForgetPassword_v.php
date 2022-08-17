<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>
			Forget Password | Multivendor
		</title>

		<link href="<?php echo ADMIN_ASSETS ?>/csscss2.css?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
		<!-- inject:css-->
		<link rel="stylesheet" href="<?php echo ADMIN_ASSETS ?>css/plugin.min.css">
		<link rel="stylesheet" href="<?php echo ADMIN_ASSETS ?>css/style.css">
		<!-- endinject -->
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo ADMIN_ASSETS ?>img/favicon.png">
	</head>

	<body>
		<main class="main-content">
			<div class="signUP-admin">
				<div class="container-fluid">
					<div class="row justify-content-center">
						<div class="col-xl-4 col-lg-5 col-md-5 p-0">
							<div class="signUP-admin-left position-relative h-100vh">
								<div class="signUP-admin-left__content">
									<div class="text-capitalize mb-md-30 mb-15 d-flex align-items-center justify-content-md-start justify-content-center">
										<a class="wh-36 bg-primary text-white radius-md mr-10 content-center" href="index.html">
											M
										</a>
										<span class="text-dark">
											Multivendor
										</span>
									</div>
									<h1>
										Multivendor Forget Password
									</h1>
								</div>
								<div class="signUP-admin-left__img">
									<img class="img-fluid svg" src="<?php echo ADMIN_ASSETS ?>img/svg/signupIllustration.svg" alt="svg">
								</div>
							</div><!-- End: .signUP-admin-left -->
						</div><!-- End: .col -->
						<div class="col-xl-8 col-md-7 col-sm-8">
							<div class="signUp-admin-right content-center h-100 pb-30">
								<div class="row justify-content-center">
									<div class="col-md-8 col-sm-10">
										<div class="edit-profile mt-0">
											<div class="card border-0">
												<div class="card-header border-0 pt-0 pb-0">
													<div class="signUp-header-top mt-md-0 mt-30">
														<h6>
															Forgot Password?
														</h6>
														<p class="mt-md-45 mt-20">
															Enter the email address you used when you joined and we’ll send you instructions to reset your password.
														</p>
													</div>
												</div>
												<div class="card-body pt-20 pb-0">
													<form class="form-horizontal" id="forgetpass" action="<?php echo base_url().'submit-forget-password' ?>" role="form" method="post">
														<div class="edit-profile__body">
															<div class="form-group mb-20">
																<label for="email">
																	Email ID
																</label>
																<input type="text" class="form-control" id="email_username" placeholder="name@example.com" name="email_username" required>
															</div>
															<div class="d-flex mb-sm-35 mb-20">
																<button class="btn btn-primary btn-default btn-squared text-capitalize lh-normal px-md-50 py-15 signIn-createBtn" type="submit">
																	Reset
																</button>
															</div>
															<p class="mb-0 fs-14 fw-500 text-gray text-capitalize">
																return to
																<a href="<?php echo base_url().'admin'; ?>" class="color-primary">
																	Sign in
																</a>
															</p>
														</div>
													</form>
												</div>
											</div><!-- End: .card -->
										</div><!-- End: .edit-profile -->
									</div><!-- End: col -->
								</div>
							</div><!-- End: .signUp-admin-right -->
						</div><!-- End: .col -->
					</div>
				</div>
			</div><!-- End: .signUP-admin -->
		</main>

		<!-- inject:js-->

		<script src="<?php echo ADMIN_ASSETS ?>js/plugins.min.js">
		</script>

		<script src="<?php echo ADMIN_ASSETS ?>js/script.min.js">
		</script>

		<!-- endinject-->
	</body>

</html>