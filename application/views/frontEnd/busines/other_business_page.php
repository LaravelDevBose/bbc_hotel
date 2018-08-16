<?php
	$banner_image = base_url().$banner->image;
	if(!@getimagesize($banner_image)){
		$banner_image = base_url().'libs/upload_pic/no-image-banner.png';
	}
?>
<!-- banner -->
<div class="banner" style="background: url(<?= $banner_image; ?>) no-repeat!important; " >
	<h2>Our Business</h2>
	<p><a href="<?= base_url(); ?>">Home »</a> Our Business </p>
</div>
<!--//banner -->

<!-- services -->
<div class="services">
	<div class="container">
		<h3 class="heading">Professional Services</h3>
			<?php if($business && isset($business)): ?>
			<div class="service_grids row">

				<?php foreach($business as $busines): ?>
				<div class="col-md-6 well " style="margin: 15px; width: 46%;">
					<div >
						<div class="col-md-6 service_grid1" style="height: 285px;">
							<?php
								$image = base_url().$busines->image;
								if(!@getimagesize($image)){ $image = base_url().'libs/upload_pic/no_image_small.jpg'; }
							?>
							<img src="<?php echo $image;  ?>" alt="<?= ucfirst($busines->b_title)?>" style="width: 100%; height: 285px;" />
						</div>
						<div class="col-md-6 service_grid2 " style="padding-right: 0px;">
							<h3><?= ucfirst($busines->b_title)?></h3>
							<p><?= substr($busines->description, 0, 100)?></p>
							<div class="read">
								<a href="<?= base_url();?>singel_busines/<?= $busines->id; ?>" class="linka fancybox fancybox.ajax">Read more »</a>
							</div>
						</div>
					</div>
					
				</div>
				<?php endforeach; ?>
				
				<div class="clearfix"></div>
			</div>
			<?php endif; ?>
	</div>
</div>
<!-- //services -->
