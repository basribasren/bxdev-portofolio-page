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

<?php 
$portfolio = array(
	array(
		'image' => 'siresi-front-end.jpg',
		'thumb' => 'siresi-front-end-thumb.jpg',
		'title' =>'Siresi FT UMM',
		'desc' => 'Sistem repositori skripsi berbasis PWA (<i>Progressive Web App</i>) yang dibangun menggunakan library React.js dan Redux.js'
	),
	array(
		'image' => 'siresi-back-end.jpg',
		'thumb' => 'siresi-back-end-thumb.jpg',
		'title' =>'Rest API for Siresi FT UMM',
		'desc' => 'Rest API yang dibangun menggunakan framework Loopback'
	),
	array(
		'image' => 'basribasren-portfolio.jpg',
		'thumb' => 'basribasren-portfolio-thumb.jpg',
		'title' =>'My Portfolio Website',
		'desc' => 'Website portofolio yang dibangun menggunakan framework Codeigniter dan kondep HMVC (<i>Hierarchical Model View Controller</i>)'
	),
);
?>

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
			<?php 
				$arrlength = count($portfolio);
				for ($i = 0; $i < $arrlength; $i++){
					$imageurl = 'assets/img/portfolio/'.$portfolio[$i]['image'];
					$thumburl = 'assets/img/portfolio/'.$portfolio[$i]['thumb'];
			?>
				<div class="col-lg-4">
					<div class="portfolio-item filter-item cat-cultural cat-nodejs">
						<a href="<?php echo base_url($imageurl); ?>" 
							class="portfolio-thumbnail fancybox" 
							rel="portfolio" 
							data-caption="<?php echo $portfolio[$i]['desc']; ?>" 
							style="background-image: url(<?php echo base_url($thumburl); ?>);">
							<!-- portfolio-description -->
							<div class="portfolio-description-wrapper">
								<div class="portfolio-description">
									<!-- portfolio name -->
									<h2 class="portfolio-title"><?php $portfolio[$i]['title']; ?></h2>
									<!-- /portfolio name -->
									<span class="see-more"><?php echo $portfolio[$i]['desc']; ?></span>
								</div>
							</div>
							<!-- /portfolio-description -->
						</a>
					</div>
				</div>
			<?php
				}
			?>
			<!-- /item -->
		</div>
		<!-- /portfolio list -->
	</div>
</div>