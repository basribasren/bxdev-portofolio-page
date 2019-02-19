<section class="colorlib-experience" data-section="experience">
	<div class="colorlib-narrow-content">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
				<span class="heading-meta">Experience</span>
				<h2 class="colorlib-heading animate-box">Work Experience</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
	         <div class="timeline-centered">
				<?php 
					include 'data_experience.php';
					$data['experiences'] = array(
						$experience01, 
						$experience02,
						$experience03,
						$experience04
					);
					$this->load->view('component/component_experience', $data) ?>
		      </div>
		   </div>
	   </div>
	</div>
</section>