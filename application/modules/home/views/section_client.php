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


<?php 
$clients = array('1.png', '2.png', '3.png', '4.png', '5.png', '6.png', '7.png', '8.png');
?>

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
					<?php 
						$arrlength = count($clients);
						for ($i = 0; $i < $arrlength; $i++){
							$image = 'assets/img/clients/'.$clients[$i];
					?>
						<div class="clients-carousel-item owl-item">
							<img src="<?php echo base_url($image); ?>" alt="">
						</div>
					<?php } ?>
					<!-- /item -->
				</div>
			</div>
		</div>
		<!-- / Clients Carousel List -->
	</div>
</div>