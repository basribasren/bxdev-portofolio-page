<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
		<meta name="description" content="My Website portofolio build using Codeigniter">
		<meta name="keywords" content="HTML,CSS,JavaScript,Codeigniter,HMVC">
		<meta name="author" content="Basri Basren">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	    <!-- Title -->
	    <title>Basri Basren</title>

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon2.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo base_url(); ?>assets/favicon2.ico" type="image/x-icon">

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- Google Web Fonts -->
		<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
		<!-- <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet"> -->
		<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet"> -->
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/solid.css" integrity="sha384-r/k8YTFqmlOaqRkZuSiE9trsrDXkh07mRaoGBMoDcmA58OHILZPsk29i2BsFng1B" crossorigin="anonymous">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/brands.css" integrity="sha384-BKw0P+CQz9xmby+uplDwp82Py8x1xtYPK3ORn/ZSoe6Dk3ETP59WCDnX+fI1XCKK" crossorigin="anonymous">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous">
		<!-- animate.css -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
		<!-- fancybox.css -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
		<!-- owl carousel -->
		<link href="<?php echo base_url(); ?>assets/vendor/OwlCarousel2/dist/assets/owl.carousel.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/vendor/OwlCarousel2/dist/assets/owl.theme.default.css" rel="stylesheet">
		
		<!-- Main Styles -->
		<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
	</head>

	<body class="">
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

		<!-- content -->
		<?php $this->load->view('layout/content') ?>

		<!-- footer -->
		<?php $this->load->view('layout/footer') ?>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<!-- Bootstrap and Pooper -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<!-- Validate -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
		<!-- Waypoints -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
		<!-- Fancybox -->
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
		<!-- Owl Caroulsel -->
		<script src="<?php echo base_url(); ?>assets/vendor/OwlCarousel2/dist/owl.carousel.min.js"></script>
		<!-- Sweet-alert -->
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
		<!-- Images Loaded-->
		<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
		<!-- Double Tap to Go -->
		<script src="<?php echo base_url(); ?>assets/vendor/doubletaptogo.min.js"></script>
		<!-- Cross-browser -->
		<script src="<?php echo base_url(); ?>assets/vendor/cross-browser.js"></script>
		<!-- Typedjs -->
		<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
	
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

