
<?php if($sliders && isset($sliders)): ?>
<!-- banner -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<?php for($i=0; $i< count($sliders); $i++):?>
		<li data-target="#myCarousel" data-slide-to="<?= $i; ?>" class="<?php echo ($i==0)?'active':'' ?>"></li>
		<?php endfor; ?>
	</ol>
	<div class="carousel-inner" role="listbox">
		<?php $i=0; foreach($sliders as $slider):?>
		<div class="item  <?php echo ($i==0)?'active':'' ?>"  style="background: url(<?= base_url(). $slider->image; ?>) no-repeat!important; ">
			<div class="container">
				<div class="carousel-caption text-center">
					<h3><span><?= ucfirst($slider->s_title)?></span></h3>
				</div>
			</div>
		</div>
		<?php $i=1; endforeach; ?>
	</div>
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="fa fa-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="fa fa-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	<!-- The Modal -->
</div>

<?php endif;?>
<!-- //banner -->
<?php $this->load->view('admin/includes/message'); ?>

<div class="welcome" style="padding: 1em 0 ;">
	<div class="container">
		<div class="col-md-8 col-md-offset-2 ">
			<div class="inner_grid1" style="    margin-bottom: 0em;">
				<div class="col-md-12 ">
					<div class="panel panel-default">
					  	<div class="panel-heading" style="background:#18ba60; color: #fff; "><h3 class="">Welcome To Mocca Digital</h3></div>
					  	<div class="panel-body">
					    	<p style="text-align: justify;"><?php if($note && isset($note)){ echo ucfirst($note->value); }?></p>
							
					    	

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


<!-- banner bottom -->
<div class="welcome" style="padding: 1em 0;">
	<div class="container">
		<div class="col-md-6 ">
			<div class="inner_grid1">
				<div class="col-md-12 ddd">
					<div class="panel panel-default">
					  	<div class="panel-heading"><h3 class="">About Us</h3></div>
					  	<div class="panel-body" style="    min-height: 250px;">
					    	<p style="text-align: justify;"><?php if($about_us && isset($about_us)){ if(strlen($about_us->value) <= 300 ){ echo substr($about_us->value, 5, strlen($about_us->value)-5 ); } else{ echo substr($about_us->value, 5, 300); }  }?></p>
							<a href="<?= base_url('about_us'); ?>" style="color: #28b767; float: right;">Read more »</a>
					    	

				  		</div>
					</div>
										
					
				</div>
				<div class="clearfix"></div>
			</div>
			
		</div>
		<div class="col-md-6  ">
			<div class="testimonial ddd">
				<div class="panel panel-default">
				  	<div class="panel-heading"><h3 class="">Message</h3></div>
				  	<div class="panel-body" style="    min-height: 250px;">
				    	<div class="col-md-3 test_img">
				    		<?php $dft_image = base_url().'libs/upload_pic/admin_image/admin_defult.jpg' ;
				    			if($md_image && isset($md_image)){
				    				$image =base_url().$md_image->value; 
	                                if(!@getimagesize($image)){
	                                    $image = $dft_image; 
	                                }
				    			}else{
				    				$image = $dft_image; 
				    			}
                                
                            ?>
							<img src="<?= $image; ?>" alt="<?php if($md_name && isset($md_name)){echo ucfirst($md_name->value); }?>" height="90" />
						</div>
						<div class="col-md-9 test_info">
							<h4><?php if($md_name && isset($md_name)){echo ucfirst($md_name->value); }?></h4>
							<h5><?php if($md_desig && isset($md_desig)){echo ucfirst($md_desig->value); }?></h5>
							
						</div>
						<div class="clearfix"></div>
						<p style="text-align: justify;"><?php if($md_message && isset($md_message)){ echo substr($md_message->value, 5 , 200);}?> </p>
						<div class="clearfix"></div>
						<a href="<?= base_url('about_us'); ?>" style="color: #28b767; float: right;">Read more »</a>
						
			  		</div>
				</div>
				
			</div>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner bottom -->

<!-- Team -->
<div class="team" id="team">
	<h3 class="heading">Our Other Business</h3>
	<div class="container">
		<div class="flexslider-info">
			<section class="slider">
				<div class="flexslider">
					
					<ul class="slides">
						<?php $count = 0; $i = 0; foreach($business as $busines): ?>

						<?php if($i == 0): ?>
						<li>
							<div class="w3l-info1">
						<?php endif;?>
								<div class="col-md-6">
									<div class="col-md-5 team-grid-1">
										<?php
											$image = base_url().$busines->image;
											if(!@getimagesize($image)){ $image = base_url().'libs/upload_pic/no_image_small.jpg'; }
										?>
										<img src="<?= $image; ?>" alt="" />
									</div>
									<div class="col-md-7 team-grid-2" style="padding-top: 30px;">
										<h4><?= ucfirst($busines->b_title)?></h4>
										
										<p style="text-align: justify;"><?= substr($busines->description, 0 ,100) ?></p>
										
										<a href="<?= base_url();?>singel_busines/<?= $busines->id; ?>" class="linka fancybox fancybox.ajax">Read more »</a>
										
									</div>
									<div class="clearfix"></div>
								</div>
								
						<?php $count++; $i++;  if($i==2 || $count== count($business)){ $i=0;  ?>
									<div class="clearfix"></div>
							</div>
						</li>
						<?php }  endforeach; ?>
					</ul>
					
				</div>
			</section>
		</div>
	</div>
</div>
<!-- //Team -->

<!-- Services -->
<div class="services" id="services" >
	<div class="col-md-9">
		<h3 class="heading">Services</h3>
		<div class="container-fluid">
			<div class="services_grids">
			<?php if($serviess && isset($serviess)):  foreach($serviess as $servies): ?>
				<div class="col-md-3 ser_grid1">
					<a href="<?= base_url();?>singel_service/<?= $servies->id; ?>" class="linka fancybox fancybox.ajax">
						<?php
							$image = base_url().$servies->image;
							if(!@getimagesize($image)){ $image = base_url().'libs/upload_pic/no_image_small.jpg'; }
						?>
						<img src="<?= $image; ?>" alt="<?php echo ucfirst($servies->s_title); ?>" style="height: 200px;" />
						<div class="ser_info">
							<h4 style="width: 100%;"> <?php echo ucfirst($servies->s_title); ?> </h4>
							<div class="clearfix"></div>
						</div>
						<p style="text-align: justify;"><?php echo substr($servies->description, 0,100); ?></p>
					</a>
				</div>
				<?php endforeach; ?>
				<div class="clearfix"> </div>
				<div class="ser_all" >
					<a href="<?= base_url('services');?>">Show all services</a>
				</div>
			<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<h3 class="heading">News & Event</h3>
		<div class="panel panel-default">
		  	<div class="panel-body">
		  		<marquee onmouseover="this.stop();" onmouseout="this.start();" direction="up" scrollamount="3" scrolldelay="50" top="0" left="0" style="height: 220px;">
	                <div class="marqueeContent">
	                    <?php
	                        if ($news_events && isset($news_events)) :
	                        foreach ($news_events as $news) :
	                    ?>
	                        <a href="<?php echo base_url(); ?>details_NewsEvent/<?php echo $news->id; ?>"  class="linka fancybox fancybox.ajax" ><?php echo $news->title; ?></a> <br>
	                        <p style="border-bottom: 1px solid #ccc;"><?php echo date('d M Y', strtotime($news->date)); ?></p>
	                    <?php endforeach; endif; ?>
	                </div>
	            </marquee>
		  	</div>
	  	</div>
		
	</div>
	<div class="clearfix"> </div>
</div>
<!-- //Services -->
<div class="clearfix"> </div>
<!-- testimonials free consulting -->
<div class="test_consultant" style="padding-top: 2rem;">
	<div class="container">
		<!-- Testimonials Slider-->
		<div class="slider col-md-6">

<link rel="stylesheet" href="<?php echo base_url(); ?>libs/FrontEnd/dist/css/lightbox.min.css">
			<h3 class="heading">Printing Materials</h3>
				<div class="callbacks_container">
					<div class="services_grids">
					<?php if($materials && isset($materials)):  foreach($materials as $material): ?>
						<div class="col-md-6 ser_grid1" style="padding-bottom: 15px">
							<?php
								$image = base_url().$material->image;
								if(!@getimagesize($image)){ $image = base_url().'libs/upload_pic/no_image_small.jpg'; }
							?>
							<a class="example-image-link" href="<?php echo $image; ?>" data-lightbox="example-set" data-title="<?php echo ucfirst($material->material_name); ?>">
								<img src="<?= $image; ?>" alt="<?php echo ucfirst($material->material_name); ?>" style="height: 120px;" />
								<div class="ser_info">
									<h4 style="width: 100%"> <?php echo ucfirst($material->material_name); ?> </h4>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
						<?php endforeach; ?>
						<div class="clearfix"> </div>
						<div class="ser_all">
							<a href="<?= base_url('materials');?>">Show all Materials</a>
						</div>
					<?php endif; ?>
					</div>
					<div class="clearfix"> </div>
				</div>
				<script src="<?php echo base_url(); ?>libs/FrontEnd/dist/js/lightbox-plus-jquery.min.js"></script>

		</div>
		<!-- //Testimonials Slider-->
		
		<!-- Free consulting -->
		<div class="consulting col-md-6">
			<h3 class="heading">Free Membership</h3>
			<div class="wthree-contact-form">
				<form action="<?= base_url();?>membership/registaion" method="post">
					<input type="text" name="name" placeholder="Name" required="">
					<input type="email" class="email" name="email" placeholder="Email" required="">
					<div class="clearfix"></div>
					<input type="text" class="number" name="phone_num" placeholder="Phone Number" required="">
					<textarea name="message" placeholder="Message" required=""></textarea>
					<input type="submit" value="SUBMIT">
				</form>
			</div>
		</div>
		<!-- //Free consulting -->
		<div class="clearfix"> </div>
	</div>
</div>
<!-- testimonials free consulting -->


<!-- Services -->
<div class="services" id="services">
	<h3 class="heading">Photo Gallary</h3>
	<div class="container-fluid">
		<div class="services_grids">
		<?php if($gallarys && isset($gallarys)):  foreach($gallarys as $gallary): ?>
			<div class="col-md-3 ser_grid1">
				<?php
					$image = base_url().$gallary->image;
					if(!@getimagesize($image)){ $image = base_url().'libs/upload_pic/no_image_small.jpg'; }
				?>
				<a class="example-image-link" href="<?php echo $image; ?>" data-lightbox="example-set" data-title="<?php echo ucfirst($gallary->g_title); ?>">

					<img src="<?= $image; ?>" alt="<?php echo ucfirst($gallary->g_title); ?>" style="height: 200px;" />
					<div class="ser_info">
						
						<h4 style="width: 100%;"> <?php echo ucfirst($gallary->g_title); ?> </h4>
						
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
			<?php endforeach; ?>
			<div class="clearfix"> </div>
			<div class="ser_all">
				<a href="<?= base_url('gallary');?>">Show Gallary</a>
			</div>
		<?php endif; ?>
		</div>
	</div>
</div>
<!-- //Services -->




