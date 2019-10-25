<style type="text/css" media="screen">
/* ==========================================================
! Section: Testimonials
========================================================== */
.testimonials {
	text-align: center;
	font-size: 18px;
}

.testimonial-item {
	width: 100%;
	margin: 0 auto;
}

@media (min-width: 768px) {
	.testimonial-item {
		padding: 20px;
		padding-top: 10px;
		padding-bottom: 10px;
	}
}

/*
.quote-text {
  font-style: italic;
}
*/
.testimonial-credits {
	margin-top: 30px;
}

.testimonial-author {
	font-size: 15px;
	margin-bottom: 0;
	margin-top: 15px;
	font-weight: bold;
}

.testimonial-content {
	background: #031634;
	color: #ffffff;
	padding: 20px;
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	width: 100%;
	position: relative;
}

.testimonial-content p {
	font-size: 13px;
	line-height: 16px;
}

.testimonial-content:after {
	content: '';
	display: block;
	width: 10px;
	height: 10px;
	position: absolute;
	left: 50%;
	bottom: -5px;
	margin-left: -5px;
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	transform: rotate(45deg);
	z-index: 888;
	background: #031634;
}

.testimonial-picture {
	width: 110px;
	height: 110px;
	overflow: hidden;
	margin: 0 auto;
}

.testimonial-picture img {
	width: 100%;
	border-radius: 100%;
	-moz-border-radius: 100%;
	-webkit-border-radius: 100%;
	border: 6px solid #ddd;
}

.testimonial-firm {
	font-size: 10px;
	margin-bottom: 0;
	text-transform: uppercase;
	font-style: italic;
	font-weight: lighter;
}
</style>
<!-- Section: Testimonials -->
<div class="section-testimonials" id="testimonials">
	<!-- Section Title -->
	<h2 class="title-of-section">Feed Back</h2>
	<!-- /Section Title -->
	<!-- Testimonials -->
	<div class="testimonials">
		<!-- Testimonial Slides -->
		<div class="testimonial-slides owl-carousel owl-theme owl-loaded" id="testimonial-carousel">
			<div class="owl-stage-outer">
				<div class="owl-stage">
					<!-- item -->
					<div class="testimonial-item owl-item">
						<!-- Testimonial Content -->
						<div class="testimonial-content">
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat malesuada aliquet. Morbi vulputate nisl eget adipiscing consequat. Cras arcu tortor, ornare vel libero et, sagittis adipiscing leo. Aenean eget."</p>
						</div>
						<!-- /Testimonial Content -->
						<!-- Testimonial Author -->
						<div class="testimonial-credits">
							<!-- picture -->
							<div class="testimonial-picture">
								<img src="<?php echo base_url(); ?>assets/img/team2.jpg" alt="" />
							</div>
							<!-- /picture -->
							<p class="testimonial-author">Melissa Alvarez</p>
							<p class="testimonial-firm">Trexus Co.</p>
						</div>
						<!-- /Testimonial Author -->
					</div>
					<!-- /item -->
					<!-- item -->
					<div class="testimonial-item owl-item">
						<!-- Testimonial Content -->
						<div class="testimonial-content">
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat malesuada aliquet. Morbi vulputate nisl eget adipiscing consequat. Cras arcu tortor, ornare vel libero et, sagittis adipiscing leo. Aenean eget."</p>
						</div>
						<!-- /Testimonial Content -->
						<!-- Testimonial Author -->
						<div class="testimonial-credits">
							<!-- picture -->
							<div class="testimonial-picture">
								<img src="<?php echo base_url(); ?>assets/img/team1.jpg" alt="" />
							</div>
							<!-- /picture -->
							<p class="testimonial-author">John Rex</p>
							<p class="testimonial-firm">DotRex Co.</p>
						</div>
						<!-- /Testimonial Author -->
					</div>
					<!-- /item -->
					<!-- item -->
					<div class="testimonial-item owl-item">
						<!-- Testimonial Content -->
						<div class="testimonial-content">
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat malesuada aliquet. Morbi vulputate nisl eget adipiscing consequat. Cras arcu tortor, ornare vel libero et, sagittis adipiscing leo. Aenean eget."</p>
						</div>
						<!-- /Testimonial Content -->
						<!-- Testimonial Author -->
						<div class="testimonial-credits">
							<!-- picture -->
							<div class="testimonial-picture">
								<img src="<?php echo base_url(); ?>assets/img/team3.jpg" alt="" />
							</div>
							<!-- /picture -->
							<p class="testimonial-author">Jhonathan Smith</p>
							<p class="testimonial-firm">RedWings Co.</p>
						</div>
						<!-- /Testimonial Author -->
					</div>
					<!-- /item -->
				</div>
			</div>
		</div>
		<!-- Testimonial Slides -->
	</div>
	<!-- /testimonials -->
</div>
<!-- /Section: Testimonials -->