<!-- banner bottom -->
<div class="welcome" style="padding: 1em 0;">
		<?php
			$image = base_url().$busines->image;
			if(!@getimagesize($image)){ $image = base_url().'libs/upload_pic/no_image_small.jpg'; }
		?>
		<div class="col-md-5 ">
			<img src="<?php echo $image; ?>" alt="" style="width: 100%">
		</div>
		<div class="col-md-7 welcome_right">
				
			<h3><?php echo ucfirst($busines->b_title); ?></h3>
			<p><?= $busines->description ?></p>
			
		</div>
		<div class="clearfix"></div>
</div>
<!-- //banner bottom -->
