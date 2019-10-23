<style type="text/css" media="screen">
/* ==========================================================
! Section: Clients
========================================================== */
.clients-carousel-item img {
	max-width: 100%;
	opacity: 0.8;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}

.clients-carousel-item img:hover {
	opacity: 1;
}

@media (min-width: 768px) {
	.clients-grid .clients-grid-item {
		display: block;
		width: 25%;
		float: left;
		border-top: 1px dotted #333;
		border-right: 1px dotted #333;
		padding: 10px;
	}

	.clients-grid .clients-grid-item:nth-child(4n+0) {
		border-right: 0;
	}

	.clients-grid .clients-grid-item:nth-child(n+1):nth-child(-n+4) {
		border-top: 0;
	}

	.clients-grid .clients-grid-item img {
		max-width: 100%;
		opacity: 0.8;
		-webkit-transition: all 0.2s ease-in-out;
		-moz-transition: all 0.2s ease-in-out;
		transition: all 0.2s ease-in-out;
	}

	.clients-grid .clients-grid-item img:hover {
		opacity: 1;
	}
}
</style>
<div class="section contrast" id="clients">
	<div class="container">
		<!-- Section Title -->
		<h2 class="title-of-section title-border">Clients</h2>
		<!-- /Section Title -->
		<!-- Clients Carousel List -->
		<div class="clients-carousel owl-carousel owl-theme owl-loaded" id="clients-carousel">
			<div class="owl-stage-outer">
				<div class="owl-stage">
					<!-- item -->
					<div class="clients-carousel-item owl-item">
						<img src="<?php echo base_url(); ?>assets/img/clients/1.png" alt="">
					</div>
					<!-- /item -->
					<!-- item -->
					<div class="clients-carousel-item owl-item">
						<img src="<?php echo base_url(); ?>assets/img/clients/2.png" alt="">
					</div>
					<!-- /item -->
					<!-- item -->
					<div class="clients-carousel-item owl-item">
						<img src="<?php echo base_url(); ?>assets/img/clients/3.png" alt="">
					</div>
					<!-- /item -->
					<!-- item -->
					<div class="clients-carousel-item owl-item">
						<img src="<?php echo base_url(); ?>assets/img/clients/4.png" alt="">
					</div>
					<!-- /item -->
					<!-- item -->
					<div class="clients-carousel-item owl-item">
						<img src="<?php echo base_url(); ?>assets/img/clients/5.png" alt="">
					</div>
					<!-- /item -->
					<!-- item -->
					<div class="clients-carousel-item owl-item">
						<img src="<?php echo base_url(); ?>assets/img/clients/6.png" alt="">
					</div>
					<!-- /item -->
					<!-- item -->
					<div class="clients-carousel-item owl-item">
						<img src="<?php echo base_url(); ?>assets/img/clients/7.png" alt="">
					</div>
					<!-- /item -->
					<!-- item -->
					<div class="clients-carousel-item owl-item">
						<img src="<?php echo base_url(); ?>assets/img/clients/8.png" alt="">
					</div>
					<!-- /item -->
				</div>
			</div>
		</div>
		<!-- / Clients Carousel List -->
	</div>
</div>