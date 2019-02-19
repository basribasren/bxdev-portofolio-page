<div class="section-about" id="about">
	<div class="container">
		<!-- Section Title -->
		<h2 class="title-of-section title-border">About Me</h2>
		<!-- /Section Title -->	
	</div>
	<div class="container about-container">
		<div class="row contrast">
			<!-- Left Column -->
			<div class="col-sm-6 col-no-padding">
				<div class="about-picture" id="about-picture">
					<img src="<?php echo base_url(); ?>assets/img/about-image.jpg" alt="" class="responsive-image">
				</div>
			</div>			
			<!-- /Left Column -->
			<!-- Right Column -->
			<div class="col-sm-6"> 
				<div class="padding-box">
					<h1 class="title2">Who i am</h1>
					<p><?php echo $aboutme ?></p>		
					<!-- row -->
					<div class="row">
						<!-- col -->
						<div class="col-sm-6">
							<h3 class="title3">Address</h3>
							<p><?php echo $address ?></p>
						</div>
						<!-- /col -->
						<!-- col -->
						<div class="col-sm-6">
							<h3 class="title3">Email</h3>
							<p><?php echo $email ?></p>
						</div>
						<!-- /col -->
					</div>	
					<!-- /row -->

					<!-- row -->
					<div class="row">
						<!-- col -->
						<div class="col-sm-6">
							<h3 class="title3">Phone</h3>
							<p><?php echo $phone ?></p>
						</div>
						<!-- /col -->
						<!-- col -->
						<div class="col-sm-6">
							<h3 class="title3">Find me On</h3>
							<!-- Social Icons -->
		                    <div class="social-icons">
		                        <a href="<?php echo $instagram ?>" target=_blank ><i class="fa fa-instagram"></i></a>
		                        <a href="<?php echo $facebook ?>" target=_blank ><i class="fa fa-facebook"></i></a>
		                        <a href="<?php echo $twitter ?>" target=_blank ><i class="fa fa-twitter"></i></a>
		                        <a href="<?php echo $linkedin ?>" target=_blank ><i class="fa fa-linkedin"></i></a>
		                        <a href="<?php echo $github ?>" target=_blank ><i class="fa fa-github"></i></a>
		                    </div>
		                    <!-- /Social Icons -->
						</div>
						<!-- /col -->						
					</div>	
					<!-- /row -->					
				</div>
			</div>
			<!-- /Right Column -->
		</div>
	</div>
</div>