
<div class="mobile-search">
	<!--<form class="search-form">
		<span data-feather="search">
		</span>
		<input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Search...">
	</form>-->
</div>

<div class="mobile-author-actions">
</div>
<header class="header-top">
	<nav class="navbar navbar-light">
		<div class="navbar-left">
			<a href="" class="sidebar-toggle">
				<img class="svg" src="<?php echo ADMIN_ASSETS ?>img/svg/bars.svg" alt="img">
			</a>
			<a class="navbar-brand" href="<?php echo base_url('/')?>">
				<img class="dark" src="<?php echo ADMIN_ASSETS ?>img/logo_dark.png" alt="svg"><img class="light" src="<?php echo ADMIN_ASSETS ?>img/logo_white.png" alt="img">
			</a>
			<!--<form action="/" class="search-form">
				<span data-feather="search">
				</span>
				<input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Search...">
			</form>-->
		</div>
		<!-- ends: navbar-left -->

		<div class="navbar-right">
			<ul class="navbar-right__menu">
				<li class="nav-author">
					<div class="dropdown-custom">
						<a href="javascript:;" class="nav-item-toggle">
							<img src="<?php echo ADMIN_ASSETS ?>img/author-nav.jpg" alt="" class="rounded-circle">
						</a>
						<div class="dropdown-wrapper">
							<div class="nav-author__info">
								<div class="author-img">
									<img src="<?php echo ADMIN_ASSETS ?>img/author-nav.jpg" alt="" class="rounded-circle">
								</div>
								<div>
									<h6>
										<?php 
										echo $this->session->userdata[ADMIN_SESSION]['name'];
										?>
									</h6>
									<span>
										UI Designer
									</span>
								</div>
							</div>
							<div class="nav-author__options">
								<ul>
									<li>
										<a href="">
											<span data-feather="user">
											</span> Profile
										</a>
									</li>
									<li>
										<a href="">
											<span data-feather="settings">
											</span> Settings
										</a>
									</li>
									<li>
										<a href="">
											<span data-feather="key">
											</span> Billing
										</a>
									</li>									
								</ul>
								<a href="<?php echo base_url('admin-logout')?>" class="nav-author__signout">
									<span data-feather="log-out">
									</span> Sign Out
								</a>
							</div>
						</div>
					</div>
				</li>
			</ul>
			<div class="navbar-right__mobileAction d-md-none">
				<a href="#" class="btn-search">
					<span data-feather="search">
					</span>
					<span data-feather="x">
					</span>
				</a>
				<a href="#" class="btn-author-action">
					<span data-feather="more-vertical">
					</span>
				</a>
			</div>
		</div>
	</nav>
</header>