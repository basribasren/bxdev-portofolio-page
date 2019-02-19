<section class="colorlib-blog" data-section="blog">
	<div class="colorlib-narrow-content">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
				<span class="heading-meta">Read</span>
				<h2 class="colorlib-heading">Recent Blog</h2>
			</div>
		</div>
		<div class="row">
			<?php 
				include 'data_blog.php';
				$data['articels'] = array(
					$articel01, 
					$articel02,
					$articel03
				);
				$this->load->view('component/component_articel', $data) 
			?>
		</div>
		<div class="row">
			<div class="col-md-12 animate-box">
				<p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
			</div>
		</div>
	</div>
</section>