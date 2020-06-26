<?php 
	$hero = array(
	    'name' => 'Basri Basren',
	    'jobs' => 'Web Developer'
	);
	$about = array(
	    'aboutme' => 'My name is Basri Basren and I am a web developer. The skills I have in the field of web development include building a website using several NodeJS frameworks including, using framework express.js and loopback. In addition, I can also use the react.js library in building component-based websites. Besides using framework NodeJS, I can also use several PHP frameworks such as Codeigniter and Laravel in creating websites.'
	);
	$contact = array(
	    'address' => 'Jalan Kapal Layar No.5 Kelurahan Loktuan Kecamatan Bontang Utara – Bontang – Kalimantan Timur',
	    'email' => 'basri.basreen@gmail.com',
	    'phone' => '+62 821 5775 9313',
	    'whatsapp' => '+62 821 5775 9313'
	);
	$social = array(
	    'instagram' => 'https://www.instagram.com/basribasreen/',
	    'facebook' => 'https://web.facebook.com/basri.basreen',
	    'whatsapp' => 'https://wa.me/6282157759313',
	    'linkedin' => 'https://www.linkedin.com/in/basrioffi/',
	    'github' => 'https://github.com/basribasren'
	);
?>
<!-- home -->
<section>	
	<!-- Section: Mini Hero -->
	<?php $this->load->view('home/section_hero', $hero) ?>
	<!-- /Section: Mini Hero -->

	<!-- Section: About  -->
	<?php $this->load->view('home/section_about', array_merge($about, $contact, $social)) ?>
	<!-- / Section: About  -->

	<!-- SECTION: Features -->
	<?php $this->load->view('home/section_features') ?>
	<!-- /SECTION: Features -->	
	
	<!-- Section: Portfolio -->
	<?php $this->load->view('home/section_portofolio') ?>
	<!-- /Section: portfolio -->

	<!-- Section: Resume Education -->
	<?php $this->load->view('home/section_education') ?>
	<!-- /Section: Resume Education -->	

	<!-- Section: Resume Experience -->
	<?php $this->load->view('home/section_experience') ?>
	<!-- /Section: Resume Experience -->	

	<!-- Section: Certificate -->
	<?php $this->load->view('home/section_certificate') ?>
	<!-- /Section: Certificate -->

	<!-- Section: Image background-->
	<?php $this->load->view('home/section_background') ?>
	<!-- / Section: Image Background-->

	<!-- Double Section -->
	<div class="section" id="testimonials">
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- Col -->
				<!-- <div class="col-md-6">
					STILL IN DRAFT
					$this->load->view('home/section_testimonials')
				</div> -->
				<!-- /Col -->
				<!-- Col -->
				<div class="col-md-12">
					<?php $this->load->view('home/section_skill') ?>
				</div>
				<!-- /Col -->
			</div>
			<!-- /row -->
		</div>
	</div>
	<!-- /Double Section -->
	
	<!-- STILL IN DRAFT -->
	<!-- Section: Clients -->	
	<!-- $this->load->view('home/section_client') -->
	<!-- /Section: Clients -->

	<!-- Section: Contact -->	
	<?php $this->load->view('home/section_contact', array_merge($contact, $social)) ?>
	<!-- /Section: Contact -->	

	<!-- Section: Map -->	
	<?php $this->load->view('home/section_map') ?>
	<!-- /Section: Map -->	
</section>