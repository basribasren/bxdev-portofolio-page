
<div class="section-about" id="about">
	<div class="container">
		<!-- Section Title -->
		<h2 class="title-of-section title-border">About Me</h2>
		<!-- /Section Title -->	
	</div>
	<div class="container about-container">
		<div class="row contrast">
			<!-- Left Column -->
			<div class="col-md-6 col-no-padding">
				<div class="about-carousel owl-carousel owl-theme owl-loaded" id="about-carousel">
					<div class="owl-stage-outer">
				        <div class="owl-stage">
							<!-- item -->
							<div class="about-item owl-item">
								<img src="<?php echo base_url(); ?>assets/img/about-me-02.jpg" alt="">
							</div>
							<!-- <div class="about-picture" id="about-picture">
								<img src="<?php echo base_url(); ?>assets/img/about-me.jpg" alt="" class="img-fluid">
							</div> -->
							<!-- /item -->
							<!-- item -->
							<div class="about-item owl-item">
								<img src="<?php echo base_url(); ?>assets/img/about-me-03.jpg" alt="">
							</div>
							<!-- /item -->
							<!-- item -->
							<div class="about-item owl-item">
								<img src="<?php echo base_url(); ?>assets/img/about-me-04.jpg" alt="">
							</div>
							<!-- /item -->
						</div>
					</div>
				</div>
			</div>			
			<!-- /Left Column -->
			<!-- Right Column -->
			<div class="col-md-6"> 
				<div class="padding-box">
					<h1 class="title2">Who i am</h1>
					<p><?php echo $aboutme ?></p>		
					<!-- row -->
					<div class="row">
						<div class="col-sm-6">
							<h3 class="title3">Address</h3>
							<p><?php echo $address ?></p>
						</div>
						<div class="col-sm-6">
							<h3 class="title3">Email</h3>
							<p><?php echo $email ?></p>
						</div>
					</div>	
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-sm-6">
							<h3 class="title3">Phone</h3>
							<p><?php echo $phone ?></p>
						</div>
						<div class="col-sm-6">
							<h3 class="title3">Find me On</h3>
		                    <?php $this->load->view('home/section_social') ?>
						</div>
					</div>	
					<!-- /row -->					
				</div>
			</div>
			<!-- /Right Column -->
		</div>
	</div>
</div>