<!-- home -->
<section id="body" class="">	

	<!-- Section: Mini Hero -->

	<?php 
		$data = array(
		    'name' => 'Basri Basren',
		    'jobs' => 'Web Developer'
		);
		$this->load->view('home/section_hero', $data);
	?>
	<!-- /Section: Mini Hero -->

	<!-- Section: About  -->
	<?php 
		$data = array(
		    'aboutme' => 'My name is Basri Basren and I am a web developer. I graduated from a Bachelor of Informatics Engineering, University of Muhammadiyah Malang (UMM) in February 2019. The skills I have in the field of web development include building a website using several NodeJS frameworks including, using framework express.js and loopback. In addition, I can also use the react.js library in building component-based websites. Besides using framework NodeJS, I can also use several PHP frameworks such as Codeigniter and Laravel in creating websites.',
		    'address' => 'Jalan Raya Jetis No.53 Desa Mulyoagung Kecamatan DAU – Malang – Jawa Timur',
		    'email' => 'basri.basreen@gmail.com',
		    'phone' => '+62 8233 5888 691',

		    'instagram' => 'https://www.instagram.com/basribasreen/',
		    'facebook' => 'https://web.facebook.com/basri.basreen',
		    'twitter' => '',
		    'linkedin' => 'https://www.linkedin.com/in/basrioffi/',
		    'github' => 'https://github.com/basribasren'
		);
		$this->load->view('home/section_about', $data) 
	?>
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

	<!-- Section: Image background-->
	<?php $this->load->view('home/section_background') ?>
	<!-- / Section: Image Background-->

	<!-- Double Section -->
	<?php $this->load->view('home/section_testimonials') ?>
	<!-- /Double Section -->
	
	<!-- Section: Clients -->	
	<?php $this->load->view('home/section_client') ?>
	<!-- /Section: Clients -->

	<!-- Section: Contact -->	
	<?php $this->load->view('home/section_contact') ?>
	<!-- /Section: Contact -->	

	<!-- SECTION: Map -->
	<?php $this->load->view('home/section_map') ?>
	<!-- /SECTION: Map -->	


</section>