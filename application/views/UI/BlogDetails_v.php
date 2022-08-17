<?php
if($blog_details)
{
	$blog_id    = $blog_details[0]['blog_id'];
	$blog_title = $blog_details[0]['blog_title'];
	$short_code = $blog_details[0]['short_code'];
	$blog_date  = date('d M, Y',strtotime($blog_details[0]['blog_date']));
	$blog_author= $blog_details[0]['blog_author'];
	$description= $blog_details[0]['description'];
	$blog_image = base_url().BLOG_IMAGE_PATH.$blog_details[0]['blog_image'];
}
?>

<div class="inner-banner-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5 col-md-4">
				<div class="inner-content">
					<h2>
						Blog Details
					</h2>
					<ul>
						<li>
							<a href="<?php echo base_url(); ?>">
								Home
							</a>
						</li>
						<li>
							Blog Details
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


<div class="blog-details-area pt-100 pb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="blog-article">
					<div class="blog-article-img">
						<img src="<?php echo $blog_image ?>" alt="Images">
						<div class="blog-article-tag">
							<h3>
								<?php echo $blog_date; ?>
							</h3>
							<!--<span>
								Nov
							</span>-->
						</div>
					</div>
					<div class="blog-article-title">
						<h2>
							<?php echo $blog_title; ?>
						</h2>
						<ul>
							<li>
								By Admin
							</li>
							<li>
								<i class='bx bx-user'>
								</i><?php echo $blog_author; ?>
							</li>
						</ul>
					</div>
					<div class="article-content">
						<?php echo $description; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



