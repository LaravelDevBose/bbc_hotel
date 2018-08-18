<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]> <html class="no-js"> <![endif]-->
<html lang="en">
	<?php $this->load->view('frontEnd/includes/header_css_js');?>
	<style>
		.bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
		    width: 100%;
		}
		.bootstrap-select.btn-group .dropdown-menu li {
		    position: relative;
		    display: block;
		}

		.bootstrap-select.btn-group .dropdown-menu .active a .text{
		    color: #fff;
		}
	</style>
	<body>

	

	<div id="page_wrapper">
		<header id="header" class="site-header header--sticky header--not-sticked site-header--absolute">
				<div class="site-header-main-wrapper clearfix">
					<div class="container siteheader-container">
							<div class="flex-col flex-basis-auto">
								<div class="flex-row site-header-row site-header-main">
									<!-- left column - logo -->
									<div class="flex-col flex flex-start-x flex-center-y flex-basis-auto flex-grow-0 site-header-col-left">
										<div id="logo-container">
												<div class="site-logo">
														<a href="<?= base_url(); ?>" class="site-logo-anch">
															<?php if($logo && isset($logo)): $image =base_url().$logo->value; ?>
																<img style="left: 21%; width: 100px; height: 40px;"   class="logo-img-sticky site-logo-img-sticky" src="<?= $image; ?>" alt="greekhotel" title="Greek Hotel">
																<img style="float: left; width: 100px;" class="logo-img site-logo-img" src="<?= $image; ?>" alt="greekhotel" title="Greek Hotel" width="196" height="36">
															<?php endif;?>
															<h3 class="logoName" style="color: #5ad2d4; padding-left: 5px; float: left; line-height: 0px;">Hotel BBC</h3>
														</a>
												</div>
										</div>
									</div>
									<!-- center column -->
									<div class="flex-col flex flex-center-x flex-center-y flex-basis-auto flex-grow-0 site-header-col-center site-header-main-center">
									</div>
									<!-- right column - navigation menu -->
									<div class="flex-col flex flex-end-x flex-center-y flex-basis-auto site-header-col-right site-header-main-right">
											<div class="main-menu-wrapper">
													<a href="tel:<?php if($phone && isset($phone)){echo $phone->value; }?>" class="sh-component btn-fullwhite ">
															<i class="fa fa-phone" aria-hidden="true"></i>
															<span><?php if($phone && isset($phone)){echo $phone->value; }?></span>
													</a>
													<a href="mailto:<?php if($email && isset($email)){echo $email->value; }?>" class="sh-component btn-fullwhite ">
															<i class="fa fa-envelope" aria-hidden="true"></i>
															<span><?php if($email && isset($email)){echo $email->value; }?></span>
													</a>
													<a href="tel:+9714-421-4988" class="sh-component btn-fullwhite ">
															<i class="fa fa-address-book" aria-hidden="true"></i>
															<span><?php if($address && isset($address)){echo $address->value; }?></span>
													</a>
													
											</div>
									</div>
								</div>
							</div>
					</div>
				</div>
		</header>
		<!--slider starts -->
		<div class="clearfix">
			<div class="hg-slideshow">
			<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="greekhotel-slider" data-source="gallery" style="background:rgba(102,102,102,0);padding:0px;">
					<!-- START REVOLUTION SLIDER 5.4.5.1 fullscreen mode -->
						<div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.5.1">
					<ul>	<!-- SLIDE  -->


						<?php $i = 1;  if($sliders && isset($sliders)): foreach($sliders as $slider): ?>

						<li data-index="rs-<?= $i++; ?>" data-transition="slotzoom-horizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="<?= base_url(). $slider->image; ?>"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
							<!-- MAIN IMAGE -->
							<img src="<?= base_url(). $slider->image; ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="8" class="rev-slidebg" data-no-retina>
							<!-- LAYER NR. 3 -->
							<div class="tp-caption   tp-resizeme rs-parallaxlevel-14"
								 id="slide-1-layer-2"
								 data-x="center" data-hoffset=""
								 data-y="center" data-voffset="-3"
											data-width="['auto']"
								data-height="['auto']"

								data-type="text"
								data-responsive_offset="on"

								data-frames='[{"delay":10,"split":"chars","splitdelay":0.05,"speed":2000,"split_direction":"forward","frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 7; white-space: nowrap; font-size: 72px; line-height: 90px; font-weight: 500; color: #ffffff; letter-spacing: 0px;font-family:Poppins;text-transform:uppercase;letter-spacing:20px;"><?= ucfirst($slider->s_title)?> </div>
						</li>
			
						<?php endforeach; endif;?>

					</ul>
					<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
					</div><!-- END REVOLUTION SLIDER -->
		</div>
		</div>
		<!-- end clearfix -->

		<!--Search section  -->
		<div class="container search-container">
			<div class="row">
				<div class="col-md-12 col-sm-12 ">
					<div class="home-container">
						<!--floating icon-->
						<div class="hg-iconbox--center-icon txt-center hg-iconbox--floating">
							<div class="hg-iconbox__icon-wrapper">
								<span class="glyphicon glyphicon-chevron-down"></span>
							</div>
						</div>
						<!--search form-->
						<div class="form-container">
							<h2>BOOKING YOUR ROOM</h2>
							<form action="<?= base_url();?>booking" method="POST" style="z-index:9998;">
								<div class="flex-row form-row">
									<div class="col-md-12">
										<div class="col-md-6">
										<!--date picker arrival-->
											<div class="hg-form-component-input form-group">
												<label for="reservation-area">Area</label>
												

												<select id="reservation-area" class="selectpicker" name="area_id" required  data-live-search="true">
						                            <option value="0">Select Your Area</option>
							                            <?php if($areas && isset($areas)): foreach($areas as $area):?>
							                            <option value="<?= $area->id; ?>"><?= $area->name; ?></option>
							                            <?php endforeach; endif; ?>
						                        	
						                        </select>
							                  	<!-- <input  required="" name="area" type='text' class="" value placeholder="Area Name"/> -->

								              
								          	</div>
										</div>
						

										<!--Coloana adults  -->
										<div class="col-md-3">
											<div class="hg-form-component-input">
												<label for="reservation-type">Rome Type</label>
												<select required="" id="reservation-type" name="room_type">
													
												</select>
											</div>
										</div>
										
										
										<!--Coloana children  -->
										<div class="col-md-3">
											<div class="hg-form-component-input">
												<label for="reservation-children">Quentity</label>
												<select required="" id="reservation-children" name="room_qty">
													<optgroup  label="Quentity">
														
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
													</optgroup>
												</select>
											</div>
										</div>
									</div>


									<div class="col-md-12">
										<!--Coloana adults  -->
										<div class="col-md-3">
											<!--date picker arrival-->
											<div class="hg-form-component-input form-group">
												<label for="reservation-startdate">Check In date</label>
												<div class='input-group date'>
								                  	<input id="reservation-startdate" type='text' required="" name="start_date" class="form-control js-datepicker" value placeholder="Check in date"/>

								              	</div>
								          	</div>
										</div>
											<!---date pickerdeparture  -->
										<div class="col-md-3">
											<div class="hg-form-component-input form-group">
												<label for="reservation-enddate">Check Out date</label>
												<div class='input-group date'>
													<input id="reservation-enddate" type='text' required="" name="end_date" class="form-control js-datepicker" value placeholder="Check Out date" />

												</div>
											</div>
										</div>

										<!--Coloana adults  -->
										<div class="col-md-3">
											<div class="hg-form-component-input">
												<label for="reservation-people">Adults</label>
												<select id="reservation-people" name="adults">
													<optgroup label="Adults">
														<option value="0">Adults</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														
													</optgroup>
												</select>
											</div>
										</div>
										
										<!--Coloana children  -->
										<div class="col-md-3">
											<div class="hg-form-component-input">
												<label for="reservation-children">Children</label>
												<select id="reservation-children" name="children">
													<optgroup label="Children">
														<option value="0">Children</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
													</optgroup>
												</select>
											</div>
										</div>
									</div>
									<!--Coloana submit -->
									<div class="col-md-3 col-md-offset-9">
										<div class="hg-form-component">
											<button class="hb_btn btn-gradient" type="submit"> Booking</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end search container -->
	
		<?php if($this->uri->uri_string()== ''):?>
		<!-- start wellcome section -->
		<div class="hg-wcome-container container">
			<div class="hg-wcome-content">
				<h3>Welcome</h3>
				<p style="color: #7f82f0 ; text-align: justify;"> <?php if($note && isset($note)){ echo ucfirst($note->value); }?></p>
			</div>
		</div>
		<?php endif;?>

		<?php $this->load->view('admin/includes/message'); ?>
		<?php if($page_path && isset($page_path)){ $this->load->view($page_path);}?>
		<footer>
			<div class="hg-footer container">
				<div class="hg-footer--row row">
					<div class=" col-md-12 col-sm-12">
						
						<div class="clearfix hg-title-block">
							<h3 class="hg-title-block__title">Follow us:</h3>
						</div>
						<ul class="footer-social">
							<li class="footer-social__item "><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li class="footer-social__item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li class="footer-social__item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li class="footer-social__item"><a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i>
								</a></li>
							<li class="footer-social__item"><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>

						</ul>
						<div class="hg-textbox">
							<p class="copyright">
								Copyright &copy; 2018 <a href="<?= base_url(); ?>">Hotel BBC.com</a>
								<br>
								<p >Design & Developed By:- <a rel="nofollow" href="http://linktechbd.com/">Link Up Technology Ltd.</a> </p>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>	<!-- end footer section -->
		<a href="#" class="totop">TOP</a> <!--/.totop -->
		<?php $this->load->view('frontEnd/includes/footer_css_js');?>
		<script>
			$('#reservation-area').change(function(){
				var area_id = $(this).val();
				
				if(area_id != 0 && area_id.length != ''){
					$.ajax({
						url:'<?= base_url(); ?>search/room_type',
						type:'POST',
						dataType:'json',
						data:{area_id:area_id},
						success:function(data){
							console.log(data);
							$('#reservation-type').empty();
							if(data.length > 0){
								$.each(data, function(key, value){
									$('#reservation-type').append('<option value="'+value.id+'">'+value.title+'</option>');
								});
							}else{
								$('#reservation-type').append('<option value="0">Not Room Type Aviable </option>')
							}
							
						},
						error:function(error){
							console.log(error);
							return false;
						}
					})
				}else{
				    swal({
				        text: "Select A Valid Area Name",
				        icon: "error",
				        buttons: false,
				        timer: 1500,
				    }); 
					return false;
				}
			})
		</script>
	</body>

</html>
