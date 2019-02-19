<section class="colorlib-work" data-section="work">
	<div class="colorlib-narrow-content">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
				<span class="heading-meta">My Work</span>
				<h2 class="colorlib-heading animate-box">Recent Work</h2>
			</div>
		</div>
		<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
			<div class="col-md-12">
				<p class="work-menu"><span><a href="#" class="active">Graphic Design</a></span> <span><a href="#">Web Design</a></span> <span><a href="#">Software</a></span> <span><a href="#">Apps</a></span></p>
			</div>
		</div>
		<div class="row">
			<?php 
				include 'data_work.php';
				$data['works'] = array(
					$work01, 
					$work02,
					$work03,
					$work04
				);
				$this->load->view('component/component_work', $data) 
			?>
			
		</div>
		<div class="row">
			<div class="col-md-12 animate-box">
				<p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
			</div>
		</div>
	</div>
</section>