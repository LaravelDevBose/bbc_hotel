<?php
	$banner_image = base_url().$banner->image;
	if(!@getimagesize($banner_image)){
		$banner_image = base_url().'libs/upload_pic/no-image-banner.png';
	}
?>
<!-- banner -->
<div class="banner" style="background: url(<?= $banner_image; ?>) no-repeat!important; " >
	<h2>Our Services</h2>
	<p><a href="<?= base_url(); ?>">Home »</a> Our Services </p>
</div>
<!--//banner -->


<!-- services -->
<div class="services">
	<div class="container">
		<h3 class="heading">Our Services</h3>
		<div class="services_grids">
		<?php if($serviess && isset($serviess)):  foreach($serviess as $servies): ?>
			<div class="col-md-3 ser_grid1">
				<?php
					$image = base_url().$servies->image;
					if(!@getimagesize($image)){ $image = base_url().'libs/upload_pic/no_image_small.jpg'; }
				?>
				<img src="<?= $image; ?>" alt="<?php echo ucfirst($servies->s_title); ?>" style="height: 200px;" />
				<div class="ser_info">
					<h4 style="width: 100%"> <?php echo ucfirst($servies->s_title); ?> </h4>
					<div class="clearfix"></div>
				</div>
				<p><?php echo substr($servies->description, 0,100); ?></p>
			</div>
			<?php endforeach; ?>
			
		<?php endif; ?>
		</div>
	</div>
</div>
<!-- //services -->
