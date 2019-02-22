<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="description" content="">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	    <!-- Title -->
	    <title>Basri Basren</title>

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon2.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo base_url(); ?>assets/favicon2.ico" type="image/x-icon">

		<!-- Google Web Fonts -->
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
		<!-- Bootstrap -->
		<link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- animate.css -->
		<link href="<?php echo base_url(); ?>assets/vendor/animate.css" rel="stylesheet">
		<!-- fancybox.css -->
		<link href="<?php echo base_url(); ?>assets/vendor/fancybox/jquery.fancybox.css" rel="stylesheet">
		<!-- owl carousel -->
		<link href="<?php echo base_url(); ?>assets/vendor/owl.carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/vendor/owl.carousel/owl-carousel/owl.theme.css" rel="stylesheet">
		<!-- Main Styles -->
		<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
	</head>

	<body>
		<!-- Page Loader -->
		<div class="loader-container" id="page-loader"> 
		  <div class="loading-wrapper loading-wrapper-hide">
		    <div class="loader-animation" id="loader-animation">
		        <svg class="svg-loader" width=100 height=100>
		          <circle cx=50 cy=50 r=25 />
		        </svg>
		    </div>    
		    <!-- Edit With Your Name -->
		    <div class="loader-name" id="loader-name">
		      <img src="<?php echo base_url(); ?>assets/img/logo-negative.png" alt="">
		    </div>
		    <!-- /Edit With Your Name -->
		  </div>   
		</div>
		<!-- /End of Page loader -->

		<!-- header -->
		<?php $this->load->view('layout/header') ?>

		<!-- sidebar -->

		<!-- content -->
		<section id="body" class="">	
			<?php $this->load->view('layout/content') ?>
		</section>

		<!-- footer -->
		<?php $this->load->view('layout/footer') ?>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo base_url(); ?>assets/vendor/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/validate.js"></script>
		<!-- Waypoints -->
		<script src="<?php echo base_url(); ?>assets/vendor/waypoints.min.js"></script>
		<!-- Fancybox -->
		<script src="<?php echo base_url(); ?>assets/vendor/fancybox/jquery.fancybox.js"></script>
		<!-- Owl Caroulsel -->
		<script src="<?php echo base_url(); ?>assets/vendor/owl.carousel/owl-carousel/owl.carousel.js"></script>
		<!-- Sweet-alert -->
		<script src="<?php echo base_url(); ?>assets/vendor/sweetalert/sweetalert2.all.min.js"></script>
		<!-- Images Loaded-->
		<script src="<?php echo base_url(); ?>assets/vendor/imagesloaded.pkgd.min.js"></script>
		<!-- Double Tap to Go -->
		<script src="<?php echo base_url(); ?>assets/vendor/doubletaptogo.min.js"></script>
		<!-- Cross-browser -->
		<script src="<?php echo base_url(); ?>assets/vendor/cross-browser.js"></script>
		<!-- Footer-reveal -->
		<script src="<?php echo base_url(); ?>assets/vendor/jquery.footer-reveal.js"></script>
		<!-- Water-ripple -->
	    <script src="<?php echo base_url(); ?>assets/vendor/ripples/jquery.ripples-min.js"></script>
		<!-- Typedjs -->
	    <script src="<?php echo base_url(); ?>assets/vendor/typedjs/typed.min.js"></script>
		<!-- Couter-Up -->
	    <script src="<?php echo base_url(); ?>assets/vendor/counterup/jquery.counterup.min.js"></script>
		<!-- Main Scripts -->
		<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="<?php echo base_url(); ?>assets/vendor/html5shiv.js"></script>
		  <script src="<?php echo base_url(); ?>assets/vendor/respond.min.js"></script>
		<![endif]-->
	</body>
</html>

