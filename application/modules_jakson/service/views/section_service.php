<section class="colorlib-services" data-section="services">
	<div class="colorlib-narrow-content">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
				<span class="heading-meta">What I do?</span>
				<h2 class="colorlib-heading">Here are some of my expertise</h2>
			</div>
		</div>
		<div class="row row-pt-md">
			<?php include 'data_service.php';?>
			<?php 
				$data['services'] = array(
					$service01, 
					$service02,
					$service03,
					$service04,
					$service05,
					$service06
				);
				$this->load->view('component/component_service', $data) 
			?>
		</div>
	</div>
</section>