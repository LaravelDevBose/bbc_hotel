
<!DOCTYPE html>
<html>

<?php $this->load->view('frontEnd/includes/header_css_js');?>

<body>
	
<!-- header -->
<div class="header">
	<div class="agileits_top_menu">
		<div class="container">
			<div class="w3l_header_left">
				<ul>
					<li><i class="fa fa-phone" aria-hidden="true"></i> <?php if($phone && isset($phone)){echo $phone->value; }?></li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:<?php if($email && isset($email)){echo $email->value; }?>"><?php if($email && isset($email)){echo $email->value; }?></a></li>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php if($address && isset($address)){echo $address->value; }?></li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="content white agile-info">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
					<a class="navbar-brand" href="<?= base_url(); ?>" style="">
						<?php if($logo && isset($logo)): $logoImage = base_url().$logo->value; if(@getimagesize($logoImage)): ?>
							<img src="<?= $logoImage; ?>" alt="Logo" style="float: left; height: 50px; width: 50px;">
						<?php endif; endif; ?>
						<h1 style="">Mocca Digital</h1>
					</a>
				</div>
				<!--/.navbar-header-->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="<?= ($this->uri->uri_string()== '')?'active': ' ' ?>"><a href="<?= base_url();?>">Home</a></li>
							<li class="<?= ($this->uri->uri_string()== 'about_us')?'active': ' ' ?>"><a href="<?= base_url('about_us');?>">About</a></li>
							<li class="<?= ($this->uri->uri_string()== 'services')?'active': ' ' ?>"><a href="<?= base_url('services');?>">Services</a></li>
							<li class="<?= ($this->uri->uri_string()== 'gallary')?'active': ' ' ?>"><a href="<?= base_url('gallary'); ?>">Gallery</a></li>
							<li class="<?= ($this->uri->uri_string()== 'other_business')?'active': ' ' ?>"><a href="<?= base_url('other_business'); ?>">Other Business</a></li>
							<li class="<?= ($this->uri->uri_string()== 'materials')?'active': ' ' ?>"><a href="<?= base_url('materials'); ?>">Material</a></li>
							<li class="<?= ($this->uri->uri_string()== 'contact_us')?'active': ' ' ?>"><a href="<?= base_url('contact_us');?>">Contact</a></li>
						</ul>
					</nav>
				</div>
				<!--/.navbar-collapse-->
				<!--/.navbar-->
			</div>
		</nav>
	</div>
</div>
<!-- //header -->


<?php if($page_path && isset($page_path)){ $this->load->view($page_path);}?>


<!-- footer -->
<div class="footer_top_agileits" style="border-top: 2px solid;">
	<div class="container-fluid">
		<div class="col-md-4 col-md-offset-2 footer_grid">
			<h3>About Us</h3>
			<p style="text-align: justify;"><?php if($about_us && isset($about_us)){ if(strlen($about_us->value) <= 300 ){ echo substr($about_us->value, 5, strlen($about_us->value)-5 ); } else{ echo substr($about_us->value, 5, 300); }  }?></p>
			<div class="read">
				<a href="<?= base_url('about_us'); ?>">Read more »</a>
			</div>
		</div>
			
		
		<div class="col-md-4 footer_grid">
			<h3>Contact Info</h3>
			<ul class="address">
				<li><i class="fa fa-map-marker" aria-hidden="true"></i><?php if($address && isset($address)){echo $address->value; }?></li>
				<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?php if($email && isset($email)){echo $email->value; }?>"><?php if($email && isset($email)){echo $email->value; }?></a></li>
				<li><i class="fa fa-phone" aria-hidden="true"></i><?php if($phone && isset($phone)){echo $phone->value; }?></li>
				
			</ul>
		</div>
		
		<div class="clearfix"> </div>
	</div>
</div>
<div class="footer_w3ls">
	<div class="container">
		<div class="footer_bottom1">
			<p>© <?= date('Y');?> <a href="<?= base_url();?>">Mocca Digital</a>. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a> | Developed By:- <a rel="nofollow" href="http://linktechbd.com/">Link Up Technology Ltd.</a> </p>
		</div>
	</div>
</div>
<!-- //footer -->

	<?php $this->load->view('frontEnd/includes/footer_css_js');?>
</body>
</html>