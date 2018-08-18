<section class="hg-promotions" style="padding-bottom: 1em;">
	<div class="container">
		<div class="row">

			<?php if($packages && isset($packages)): foreach($packages as $package):?>
			<div class="col-md-4 col-sm-4 hg-prom-col">
				<div class="hg-prom-content">
					<div class="hg-prom-content--imgbox">
						<div class="hg-prom-content__wrapper">
							<a href="#" class="imglink">
								<?php 
									$dft_image = base_url().'libs/upload_pic/admin_image/admin_defult.jpg' ;
				    			
				    				$image =base_url().$package->image; 
	                                if(!@getimagesize($image)){
	                                    $image = $dft_image; 
	                                }
                            ?>
								<img src="<?= $image; ?>" alt="<?= ucfirst($package->title); ?>" title="<?= ucfirst($package->title); ?> - <?= ucfirst($package->price); ?> Tk." class="img-responsive image-boxes-img cover-fit-img">
							</a>
						</div>
					</div>
					<div class="hg-prom-content--txt">
						<div class="hg-title-block">
							<h3 class="hg-title-block__title"><?= ucfirst($package->title); ?> </h3>
							<span class="hg-title-block__title">Price : <?= ucfirst($package->price); ?> (Per Night) </span>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; endif; ?>
			
		</div>
	</div>
</section>

<section class="hg-gallery">
	<div class="hg-gallery-container container">
		<div class="hg-gallery-content">
			<h3>GALLERY</h3>
			<h4>These are real photos from our customers.
			</h4>
		</div>
	</div>
	<!-- start gallery -->
	<div class="hg-gallery--row container">
		<div class="col-md-12 col-sm-12 hg-gallery__photo-column">
			<div class="hg-gridGallery">
				<div class="hg-gridGallery-slider">
						<!--first gallery-->

						<?php $count=0; $i=0; if($gallarys && isset($gallarys)):  foreach($gallarys as $gallary): ?>

						<?php 
									$dft_image = base_url().'libs/upload_pic/admin_image/admin_defult.jpg' ;
				    			
				    				$image =base_url().$gallary->image; 
	                                if(!@getimagesize($image)){
	                                    $image = $dft_image; 
	                                }
                            ?>

						<?php if($i == 0){ ?>
						<div class="hg-gridGallery-jstrigger gridGallery--cols3">
						<!--big picture-->

							<div class="gridGallery__item-w2">
								<div class="hg-gridGallery__wrapper">
									<a href="<?= $image; ?>" class="hg-gridGallery--image_link sh__zoom--on">
										<div class="hg-gridGallery__img-container">
											<img src="<?= $image; ?>" alt="<?= $gallary->g_title; ?>" width="780" />
										</div>
										<i class="hg-icon glyphicon glyphicon-search hg-icon__circled-icon"></i>
									</a>
								</div>
							</div>
						<?php } elseif($i==1){?>
						<!--small picture-->
							<div class="hg-gridGallery--item">
								<div class="hg-gridGallery__wrapper">
									<a href="<?= $image; ?>" class="hg-gridGallery--image_link sh__zoom--on">
										<div class="hg-gridGallery__img-container">
											<img src="<?= $image; ?>" alt="<?= $gallary->g_title; ?>" width="740">
										</div>
										<i class="hg-icon glyphicon glyphicon-search hg-icon__circled-icon"></i>
									</a>
								</div>
							</div>
						<?php } else{?>
							<!--small picture-->
							<div class="hg-gridGallery--item">
								<div class="hg-gridGallery__wrapper">
									<a href="<?= $image; ?>" class="hg-gridGallery--image_link sh__zoom--on">
										<div class="hg-gridGallery__img-container">
											<img src="<?= $image; ?>" alt="<?= $gallary->g_title; ?>" width="740">
										</div>
										<i class="hg-icon glyphicon glyphicon-search hg-icon__circled-icon"></i>
									</a>
								</div>
							</div>

						<?php }

							$count++; $i++; if($i==3 || $count== count($gallarys)){
						?>
						</div>

						<?php } endforeach; endif; ?>
						<!--end first gallery-->
				</div><!--end slick slider-->
			</div>
		</div>
	</div><!-- end row gallery -->
</section>

<section class="hg-icon_section">
	<div class="hg-icon-bottom container">
		<div class="hg-title-block txt-center">
			<h3 class="hg-title-block__title">SERVICES</h3>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-3">
				<div class="hg-iconbox--center-icon txt-center ">
					<div class="hg-iconbox__icon-wrapper">
						<span class="hg-iconbox__icon icon-travel-61"></span>
					</div>
					<div class="hg-iconbox__content-wrapper">
							<div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
								<h3>
									FREE WIFI
								</h3>
							</div>
							<div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
								<p class="hg-iconbox__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
								</p>
							</div>

					</div>
				</div>
			</div><!-- end column -->
			<div class="col-md-3 col-sm-3">
				<div class="hg-iconbox--center-icon txt-center ">
					<div class="hg-iconbox__icon-wrapper">
							<span class="hg-iconbox__icon icon-travel-62"></span>
					</div>
					<div class="hg-iconbox__content-wrapper">
							<div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
								<h3>
									AIR CONDITIONING
								</h3>
							</div>
							<div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
								<p class="hg-iconbox__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
								</p>
							</div>

					</div>
				</div>
			</div><!-- end column -->
			<div class="col-md-3 col-sm-3">
				<div class="hg-iconbox--center-icon txt-center ">
					<div class="hg-iconbox__icon-wrapper">
						<span class="hg-iconbox__icon icon-travel-54"></span>
					</div>
					<div class="hg-iconbox__content-wrapper">
							<div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
								<h3>
									PRIVATE BATHROOM
								</h3>
							</div>
							<div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
								<p class="hg-iconbox__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
								</p>
							</div>

					</div>
				</div>
			</div><!-- end column -->
			<div class="col-md-3 col-sm-3">
				<div class="hg-iconbox--center-icon txt-center ">
					<div class="hg-iconbox__icon-wrapper">
						<span class="hg-iconbox__icon icon-travel-63"></span>
					</div>
					<div class="hg-iconbox__content-wrapper">
							<div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
								<h3>
									SAFE
								</h3>
							</div>
							<div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
								<p class="hg-iconbox__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
								</p>
							</div>

					</div>
				</div>
			</div><!-- end column -->

			<div class="col-md-3 col-sm-3">
				<div class="hg-iconbox--center-icon txt-center ">
					<div class="hg-iconbox__icon-wrapper">
						<span class="hg-iconbox__icon icon-travel-51"></span>
					</div>
					<div class="hg-iconbox__content-wrapper">
							<div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
								<h3>
									FLAT SCREEN TV
								</h3>
							</div>
							<div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
								<p class="hg-iconbox__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
								</p>
							</div>

					</div>
				</div>
			</div><!-- end column -->
			<div class="col-md-3 col-sm-3">
				<div class="hg-iconbox--center-icon txt-center ">
					<div class="hg-iconbox__icon-wrapper">
							<span class="hg-iconbox__icon icon-travel-16"></span>
					</div>
					<div class="hg-iconbox__content-wrapper">
							<div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
								<h3>
									FREE MINI BAR
								</h3>
							</div>
							<div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
								<p class="hg-iconbox__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
								</p>
							</div>

					</div>
				</div>
			</div><!-- end column -->
			<div class="col-md-3 col-sm-3">
				<div class="hg-iconbox--center-icon txt-center ">
					<div class="hg-iconbox__icon-wrapper">
						<span class="hg-iconbox__icon icon-travel-19"></span>
					</div>
					<div class="hg-iconbox__content-wrapper">
							<div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
								<h3>
									ROOM SERVICE
								</h3>
							</div>
							<div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
								<p class="hg-iconbox__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
								</p>
							</div>

					</div>
				</div>
			</div><!-- end column -->
			<div class="col-md-3 col-sm-3">
				<div class="hg-iconbox--center-icon txt-center ">
					<div class="hg-iconbox__icon-wrapper">
						<span class="hg-iconbox__icon icon-lounge2"></span>
					</div>
					<div class="hg-iconbox__content-wrapper">
							<div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
								<h3>
									POOL
								</h3>
							</div>
							<div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
								<p class="hg-iconbox__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
								</p>
							</div>

					</div>
				</div>
			</div><!-- end column -->
		</div>
	</div>
</section>
<section class="hg-contact"><!-- start services section -->
	<div class="container">
		<div class="hg-title-block txt-center">
			<h3 class="hg-title-block__title">Send Us  Message</h3>
		</div>
		<div class="row">
			<!--left column -->
			<div class="col-md-4 col-sm-4 ">
				<div class="hg-iconbox hg-iconbox--small">
					<div class="hg-iconbox__icon-wrapper">
						<span class="hg-iconbox__gly glyphicon glyphicon-home"></span>

					</div>
					<div class="hg-iconbox__content-wrapper">
							<div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
								<h3>Address</h3>
							</div>
							<div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
								<p class="hg-iconbox__desc"><?php if($address && isset($address)){echo $address->value; }?></p>
							</div>

					</div>
				</div>

				<div class="hg-iconbox hg-iconbox--small">
					<div class="hg-iconbox__icon-wrapper">
						<span class="hg-iconbox__gly glyphicon glyphicon-envelope"></span>
					</div>
					<div class="hg-iconbox__content-wrapper">
							<div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
								<h3>
									EMAIL
								</h3>
							</div>
							<div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
								<p class="hg-iconbox__desc"><a href="mailto:<?php if($email && isset($email)){echo $email->value; }?>" class="__cf_email__" ><?php if($email && isset($email)){echo $email->value; }?></a>
								</p>
							</div>

					</div>
				</div>

				<div class="hg-iconbox hg-iconbox--small">
					<div class="hg-iconbox__icon-wrapper">
						<span class="hg-iconbox__gly glyphicon glyphicon-earphone" ></span>
					</div>
					<div class="hg-iconbox__content-wrapper">
							<div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
								<h3>
									PHONE NUMBER
								</h3>
							</div>
							<div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
								<p class="hg-iconbox__desc"><?php if($phone && isset($phone)){echo $phone->value; }?></p>
							</div>

					</div>
				</div>
			</div>
			<!--right column -->
			<div class="col-md-8 col-sm-8 ">
				<form  method="POST" action="<?= base_url()?>message">
					<div class="row">
						<div class="col-sm-6">
							<div class="hg-form-component">
								<input class="hg-input" type="text" name="name" id="text_field" placeholder=""/>
								<label for="text_field">Name</label>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="hg-form-component">
								<input class="hg-input" type="text" name="phone_no" id="email_field" placeholder="" />
								<label for="email_field">Phone Number</label>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="hg-form-component">
								<textarea class="hg-input" name="message" id="text_area" cols="40" rows="6" placeholder=""></textarea>
								<label for="text_area">Message</label>
							</div>
						</div>
						
						<div class="col-sm-12">
							<div class="hg-form-component">
								<button class="hb_btn btn-gradient hg-submitcontact" type="submit">Send message</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div><!-- end container -->
</section>