
<link rel="stylesheet" href="<?php echo base_url(); ?>libs/FrontEnd/dist/css/lightbox.min.css">
<?php
	$banner_image = base_url().$banner->image;
	if(!@getimagesize($banner_image)){
		$banner_image = base_url().'libs/upload_pic/no-image-banner.png';
	}
?>
<!-- banner -->
<div class="banner" style="background: url(<?= $banner_image; ?>) no-repeat!important; " >
	<h2>Photo Gallary</h2>
	<p><a href="<?= base_url(); ?>">Home »</a> Photo Gallary </p>
</div>
<!--//banner -->
<!-- Portfolio -->
	<div class="portfolio w3layouts agileits" id="portfolio">
		<div class="container">
 
			<h3 class="heading">Photo Gallary</h3>
			


			<?php if($images && isset($images)):   ?>
			<ul class="portfolio-area">
				<?php foreach($images as $g_image): ?>

				<li class="portfolio-item2" >
					<div>
						<span class="image-block img-hover">
							<?php
								$image = base_url().$g_image->image;
								if(!@getimagesize($image)){ $image = base_url().'libs/upload_pic/no_image_small.jpg'; }
							?>
							<a class="example-image-link" href="<?php echo $image; ?>" data-lightbox="example-set" data-title="<?php echo ucfirst($g_image->g_title); ?>">
								<figure>
									<img src="<?php echo $image; ?>" class="img-responsive w3layouts agileits" alt="<?php echo ucfirst($g_image->g_title); ?> ">
									<figcaption>
										<h3><?php echo ucfirst($g_image->g_title); ?> </h3>
									</figcaption>
								</figure>
							</a>
						</span>
					</div>
				</li>

				<?php endforeach; ?>
				
				<div class="column-clear"></div>
			</ul>
			<?php endif; ?>

			<!--end portfolio-area -->
		</div>
	</div>
<!-- //Portfolio -->
	<script src="<?php echo base_url(); ?>libs/FrontEnd/dist/js/lightbox-plus-jquery.min.js"></script>
