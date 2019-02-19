<section class="colorlib-education" data-section="education">
	<div class="colorlib-narrow-content">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
				<span class="heading-meta">Education</span>
				<h2 class="colorlib-heading animate-box">Education</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
				<div class="fancy-collapse-panel">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<?php 
							include 'data_education.php';
							$data['educations'] = array(
								$education01, 
								$education02,
								$education03,
								$education04,
								$education05
							);
							$this->load->view('component/component_education', $data) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>