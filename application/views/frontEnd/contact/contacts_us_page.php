
<?php
	$banner_image = base_url().$banner->image;
	if(!@getimagesize($banner_image)){
		$banner_image = base_url().'libs/upload_pic/no-image-banner.png';
	}
?>
<!-- banner -->
<div class="banner" style="background: url(<?= $banner_image; ?>) no-repeat!important; " >
	<h2>Contact us</h2>
	<p><a href="<?= base_url(); ?>">Home »</a> Contact us </p>
</div>
<!--//banner -->

	<?php $this->load->view('admin/includes/message'); ?>
<!-- contact -->
<section class="contact" id="contact">
	<div class="container">
		<div class="contact-heading">
			<h3 class="heading">Contact us</h3>
		</div>
		<div class="contact-grids">
			<div class=" col-md-5 contact-form">
			<h4 class="heading">Free Membership</h4>
				<form action="<?= base_url();?>membership/registaion2" method="post">
						<input type="text" name="name" placeholder="Full Name" required=""/>
						<input type="email" name="email" placeholder="Your Mail" required=""/>
						<input type="text" name="phone_num" placeholder="Mobile Number" required=""/>
						<textarea placeholder="Message" name="message" required=""></textarea>
						<div class="submit1">
							<input type="submit" value="sent">
						</div>
				</form>
			</div>
			<div class=" col-md-7 map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d167998.10803373056!2d2.2074740643680624!3d48.85877410312378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1488168816174"></iframe>
				<div class="col-md-4 contact-grid1">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<div class="contact-right">
						<p>Address</p>
						<span><?php if($address && isset($address)){echo $address->value; }?></span>
					</div>
				</div>
				<div class="col-md-4 contact-grid1">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<div class="contact-right">
						<p>Phone</p>
						<span><?php if($phone && isset($phone)){echo $phone->value; }?></span>
						<!-- <span>+1(01) 24-212-5666</span> -->
					</div>
				</div>
				<div class="col-md-4 contact-grid1">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<div class="contact-right">
						<p>Email</p>
						<a href="mailto:<?php if($email && isset($email)){echo $email->value; }?>"><?php if($email && isset($email)){echo $email->value; }?></a>
						<!-- <a href="mailto:info@example1.com">info@example1.com</a> -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</section>
<!-- //contact -->
