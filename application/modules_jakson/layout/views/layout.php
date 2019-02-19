<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Jackson Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jackson/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jackson/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jackson/css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jackson/css/flexslider.css">
	<!-- Flaticons  -->
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/jackson/fonts/flaticon/font/flaticon.css"> -->
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jackson/css/owl-carousel.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jackson/css/owl-theme-default.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jackson/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url(); ?>assets/jackson/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="colorlib-page">
		<div class="container-wrap">
			<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" 
				data-toggle="collapse" 
				data-target="#navbar" 
				aria-expanded="false" 
				aria-controls="navbar">
				<i></i>
			</a>
			<!-- sidebar -->
			<?php $this->load->view('layout/sidebar') ?>

			<!-- main -->
			<?php $this->load->view('layout/main') ?>

		</div>
		<!-- end:container-wrap -->
	</div>
	<!-- end:colorlib-page -->

	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>assets/jackson/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url(); ?>assets/jackson/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url(); ?>assets/jackson/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url(); ?>assets/jackson/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url(); ?>assets/jackson/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="<?php echo base_url(); ?>assets/jackson/js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="<?php echo base_url(); ?>assets/jackson/js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="<?php echo base_url(); ?>assets/jackson/js/main.js"></script>

	</body>
</html>

