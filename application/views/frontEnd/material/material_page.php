<?php
	$banner_image = base_url().$banner->image;
	if(!@getimagesize($banner_image)){
		$banner_image = base_url().'libs/upload_pic/no-image-banner.png';
	}
?>
<!-- banner -->
<div class="banner" style="background: url(<?= $banner_image; ?>) no-repeat!important; " >
	<h2>Printing Materials</h2>
	<p><a href="<?= base_url(); ?>">Home »</a> Printing Materials</p>
</div>
<!--//banner -->
<!-- Portfolio -->
	<div class="portfolio w3layouts agileits" id="portfolio">
		<div class="container">

			<h3 class="heading">Printing Materials</h3>
			


			<?php if($materials && isset($materials)):   ?>
			<ul class="portfolio-area">
				<?php foreach($materials as $material): ?>

				<li class="portfolio-item2" >
					<div>
						<span class="image-block img-hover">
							<?php
								$image = base_url().$material->image;
								if(!@getimagesize($image)){ $image = base_url().'libs/upload_pic/no_image_small.jpg'; }
							?>
							<a class="example-image-link" href="<?php echo $image; ?>" data-lightbox="example-set" data-title="<?php echo ucfirst($material->material_name); ?>">
								<figure>
									<img src="<?php echo $image; ?>" class="img-responsive w3layouts agileits" alt="<?php echo ucfirst($material->material_name); ?> ">
									<figcaption>
										<h3><?php echo ucfirst($material->material_name); ?> </h3>
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
