<!-- banner bottom -->
<div class="welcome" style="padding: 1em 0;">
		<?php
			$image = base_url().$service->image;
			if(!@getimagesize($image)){ $image = base_url().'libs/upload_pic/no_image_small.jpg'; }
		?>
		<div class="col-md-5 ">
			<img src="<?php echo $image; ?>" alt="" style="width: 100%">
		</div>
		<div class="col-md-7 welcome_right">
				
			<h3><?php echo ucfirst($service->s_title); ?> <span class="pull-right" style="font-size: 15px;">Service Price: <?= number_format($service->price)?></span></h3>
			<p>Details: <?= $service->description ?></p>
			
		</div>
		<div class="clearfix"></div>
</div>
<!-- //banner bottom -->
