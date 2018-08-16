<head>
	<title><?php if($title && isset($title)){echo $title.' | Mocca Digital'; }else{ echo "Mocca Digital"; }?></title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1); 
		}
	</script>
	<!--//tags -->
	
	<!-- FlexSlider css -->
	<link rel="stylesheet" href="<?= base_url();?>libs/frontEnd/css/flexslider.css" type="text/css" media="screen" />
	<!-- //FlexSlider css -->

	<link href="<?= base_url();?>libs/frontEnd/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?= base_url();?>libs/frontEnd/css/style.css" rel="stylesheet" type="text/css" media="all" />
	
	<!-- for bootstrap carousel slider -->
	<link rel="stylesheet" href="<?= base_url();?>libs/frontEnd/css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?= base_url();?>libs/frontEnd/css/owl.theme.css" type="text/css" media="all">
	<!-- //for bootstrap carousel slider -->

	<!-- fontawesome icons  -->
	<link href="<?= base_url();?>libs/frontEnd/css/font-awesome.css" rel="stylesheet">
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //google fonts -->
	<script src="<?php echo base_url();?>libs/backEnd/sweetAlert_script/sweetalert.min.js"></script>
</head>