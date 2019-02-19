<section class="colorlib-contact" data-section="contact">
	<div class="colorlib-narrow-content">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
				<span class="heading-meta">Get in Touch</span>
				<h2 class="colorlib-heading">Contact</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5">
				<?php 
					include 'data_contact.php';
					$data['contacts'] = array(
						$contact01, 
						$contact02,
						$contact03
					);
					$this->load->view('component/component_contact', $data) 
				?>
			</div>
			<div class="col-md-7 col-md-push-1">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
						<form action="">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Subject">
							</div>
							<div class="form-group">
								<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
							</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>