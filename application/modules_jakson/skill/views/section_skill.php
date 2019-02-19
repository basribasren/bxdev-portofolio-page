<section class="colorlib-skills" data-section="skills">
	<div class="colorlib-narrow-content">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
				<span class="heading-meta">My Specialty</span>
				<h2 class="colorlib-heading animate-box">My Skills</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
				<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
			</div>
			<?php 
				include 'data_skill.php';
				$data['skills'] = array(
					$skill01, 
					$skill02,
					$skill03,
					$skill04
				);
				$this->load->view('component/component_skill', $data) ?>
			
		</div>
	</div>
</section>