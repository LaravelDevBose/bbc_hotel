
<?php
	$banner_image = base_url().$banner->image;
	if(!@getimagesize($banner_image)){
		$banner_image = base_url().'libs/upload_pic/no-image-banner.png';
	}
?>
<!-- banner -->
<div class="banner" style="background: url(<?= $banner_image; ?>) no-repeat!important; " >
	<h2>About Us</h2>
	<p><a href="<?= base_url(); ?>">Home »</a> About us </p>
</div>
<!--//banner -->


<!-- banner bottom -->
<div class="welcome">
	<div class="container">
		<div class="col-md-12  ">
			<div class="testimonial ddd">
				<div class="panel panel-default">
				  	<div class="panel-heading"><h3 class="">Message</h3></div>
				  	<div class="panel-body">
				    	<div class="col-md-3 test_img">
				    		<?php $dft_image = base_url().'libs/upload_pic/admin_image/admin_defult.jpg' ;
				    			if($md_image && isset($md_image)){
				    				$image = base_url().$md_image->value; 
	                                if(!@getimagesize($image)){
	                                    $image = $dft_image; 
	                                }
				    			}else{
				    				$image = $dft_image; 
				    			}
                                
                            ?>
							<img src="<?= $image; ?>" alt="<?php if($md_name && isset($md_name)){echo ucfirst($md_name->value); }?>" style="padding: 20px; border: 2px solid;" />
						</div>
						<div class="col-md-9 test_info">
							<h4><?php if($md_name && isset($md_name)){echo ucfirst($md_name->value); }?></h4>
							<h5><?php if($md_desig && isset($md_desig)){echo ucfirst($md_desig->value); }?></h5>
							
						</div>
						<div class="clearfix"></div>
						<p><?php if($md_message && isset($md_message)){ echo $md_message->value;}?> </p>
						<div class="clearfix"></div>
			  		</div>
				</div>
				
			</div>
		</div>
		<div class="col-md-12 ">
			<div class="inner_grid1">
				<div class="col-md-12 ddd">
					<div class="panel panel-default">
					  	<div class="panel-heading"><h3 class="">About Us</h3></div>
					  	<div class="panel-body">
					    	<p><?php if($about_us && isset($about_us)){ echo $about_us->value;  }?></p>
				  		</div>
					</div>
										
					
				</div>
				<div class="clearfix"></div>
			</div>
			
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner bottom -->
