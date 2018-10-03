
<style>
	
.f-container {
	  display: block;
	  min-height: 0px;
	  background-color: #d3dcf7;
	  padding: 0px 35px 35px 35px;
	  -webkit-box-shadow: 0 15px 75px 0 rgba(0, 0, 0, 0.06);
	          box-shadow: 0 15px 75px 0 rgba(0, 0, 0, 0.06);
	}

</style>
<section class="hg-contact " style="    background-color: #ebf4f8;"><!-- start services section -->
	<div class="container f-container">
		<div class="hg-title-block txt-center">
			<h3 class="hg-title-block__title">Send Us  Message</h3>
		</div>
		<div class="row ">
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