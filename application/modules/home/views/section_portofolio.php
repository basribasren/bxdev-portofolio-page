<style type="text/css" media="screen">
/* ==========================================================
! Section: Portfolio
========================================================== */
.portfolio-filter {
	text-align: center;
}

.portfolio-filter-title {
	font-weight: bold;
	margin-right: 10px;
	text-transform: uppercase;
}

#filter-header a {
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	background: #031634;
}

#filter-header a:hover {
	background: #da222b;
}

#filter-header .category-item-active {
	background: #da222b;
}

.portfolio-list {
	padding-left: 12px;
	padding-right: 12px;
}

.portfolio-item {
	margin-bottom: 20px;
	-webkit-transition: all 1s ease-in-out;
	-moz-transition: all 1s ease-in-out;
	transition: all 1s ease-in-out;
}

@media (min-width:992px) {
	.portfolio-item {
		margin-left: -12px;
		margin-right: -12px;
		margin-bottom: 6px;
	}
}

.portfolio-title {
	font-weight: bold;
	font-size: 24px;
}

.portfolio-thumbnail {
	min-height: 250px;
	display: block;
	position: relative;
	color: #ffffff;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}

.portfolio-thumbnail:hover .portfolio-description-wrapper {
	visibility: visible;
	opacity: 1;
	color: #ffffff;
}

.portfolio-description-wrapper {
	position: absolute;
	width: 100%;
	height: 100%;
	background: rgba(0, 0, 0, 0.5);
	text-align: center;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	opacity: 0;
	visibility: hidden;
}

.portfolio-description {
	position: absolute;
	width: 100%;
	top: 50%;
	margin-top: -45px;
}

.portfolio-filter {
	margin-bottom: 20px;
}

.portfolio-filter .category-item {
	display: inline-block;
	background: #031634;
	color: #ffffff;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	padding: 5px 12px;
}

.portfolio-filter .category-item:hover {
	text-decoration: none;
	background: #09afad;
}

.portfolio-filter .category-item-active {
	background: #09afad;
	color: #ffffff;
	text-decoration: none;
}

.project-item-disabled {
	pointer-events: none;
	opacity: 0.3 !important;
}
</style>
<div class="section section-portfolio contrast" id="portfolio">
	<div class="container">
		<!-- Section Title -->
		<h2 class="title-of-section title-border">Portfolio</h2>
		<!-- /Section Title -->
		<!-- Categories -->
		<div class="portfolio-filter">
			<div class="" id="filter-header">
				<span class="portfolio-filter-title">Filter: </span>
				<a href="#" class="category-item category-item-active" data-filter="filter-item">All</a>
				<a href="#" class="category-item" data-filter="cat-nodejs">NodeJS</a>
				<a href="#" class="category-item" data-filter="cat-php">PHP</a>
				<!-- <a href="#" class="category-item" data-filter="cat-phyton">Phyton</a> -->
			</div>
		</div>
		<!-- Categories -->
		<!-- portfolio list -->
		<div class="portfolio-list row" id="filter-container">
			<!-- item -->
			<div class="col-lg-4">
				<div class="portfolio-item filter-item cat-cultural cat-nodejs">
					<a href="<?php echo base_url(); ?>assets/img/portfolio/siresi-front-end.jpg" class="portfolio-thumbnail fancybox" rel="portfolio" data-caption="Sistem repositori skripsi berbasis PWA (Progressive Web App) yang dibangun menggunakan library React.js dan Redux.js" style="background-image: url('<?php echo base_url(); ?>assets/img/portfolio/siresi-front-end-thumb.jpg');">
						<!-- portfolio-description -->
						<div class="portfolio-description-wrapper">
							<div class="portfolio-description">
								<!-- portfolio name -->
								<h2 class="portfolio-title">Siresi FT UMM</h2>
								<!-- /portfolio name -->
								<span class="see-more">Sistem repositori skripsi berbasis PWA (<i>Progressive Web App</i>) yang dibangun menggunakan library React.js dan Redux.js</span>
							</div>
						</div>
						<!-- /portfolio-description -->
					</a>
				</div>
			</div>
			<!-- /item -->
			<!-- item -->
			<div class="col-lg-4">
				<div class="portfolio-item filter-item cat-business cat-nodejs">
					<a href="<?php echo base_url(); ?>assets/img/portfolio/siresi-back-end.jpg" class="portfolio-thumbnail fancybox" rel="portfolio" data-caption="Rest API yang dibangun menggunakan framework Loopback" style="background-image: url('<?php echo base_url(); ?>assets/img/portfolio/siresi-back-end-thumb.jpg');">
						<!-- portfolio-description -->
						<div class="portfolio-description-wrapper">
							<div class="portfolio-description">
								<!-- portfolio name -->
								<h2 class="portfolio-title">Rest API for Siresi FT UMM</h2>
								<!-- /portfolio name -->
								<span class="see-more">Rest API yang dibangun menggunakan framework Loopback</span>
							</div>
						</div>
						<!-- /portfolio-description -->
					</a>
				</div>
			</div>
			<!-- /item -->
			<!-- item -->
			<div class="col-lg-4">
				<div class="portfolio-item filter-item cat-cultural cat-php">
					<a href="<?php echo base_url(); ?>assets/img/portfolio/basribasren-portfolio.jpg" class="portfolio-thumbnail fancybox" rel="portfolio" data-caption="Website portofolio yang dibangun menggunakan framework Codeigniter dan kondep HMVC(Hierarchical Model View Controller)" style="background-image: url('<?php echo base_url(); ?>assets/img/portfolio/basribasren-portfolio-thumb.jpg');">
						<!-- portfolio-description -->
						<div class="portfolio-description-wrapper">
							<div class="portfolio-description">
								<!-- portfolio name -->
								<h2 class="portfolio-title">My Portfolio Website</h2>
								<!-- /portfolio name -->
								<span class="see-more">Website portofolio yang dibangun menggunakan framework Codeigniter dan kondep HMVC (<i>Hierarchical Model View Controller</i>)</span>
							</div>
						</div>
						<!-- /portfolio-description -->
					</a>
				</div>
			</div>
			<!-- /item -->
			<!-- item -->
			<!-- /item -->
		</div>
		<!-- /portfolio list -->
	</div>
</div>