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
		    'aboutme' => 'Turpis, sit amet iaculis dui consectetur at. Cras sagittis molestie orci. Suspendisse ut laoreet mi. Phasellus eu tortor vehicula, blandit enim eu, auctor massa. Nulla ultricies tortor dolor, sit amet suscipit enim condimentum id. Etiam eget iaculis tellus. Varius sit amet.',
		    'address' => 'Jalan Raya Jetis No.53 Desa Mulyoagung Kecamatan DAU – Malang – Jawa Timur',
		    'email' => 'basri.basreen',
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