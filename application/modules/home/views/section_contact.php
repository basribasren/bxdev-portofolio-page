<style type="text/css" media="screen">
/* ==========================================================
! Section: Contact
========================================================== */
.section-contact {
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	color: #ffffff !important;
}

.contact-box {
	padding: 20px;
	background: transparent;
	border-radius: 6px;
	-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
}

.contact-box h1,
.contact-box h2,
.contact-box h3,
.contact-box h4 {
	margin-top: 0;
	color: #ffffff;
}

.contact-box .title4 {
	margin-top: 0;
}
</style>
<div class="section section-contact" id="contact" style="background-image: url('<?php echo base_url(); ?>assets/img/bg3.jpg')">
	<div class="container">
		<!-- Section Title -->
		<h2 class="title-of-section title-border">Get in Touch</h2>
		<!-- /Section Title -->
		<!-- row -->
		<div class="row">
			<div class="col-sm-5">
				<!-- box -->
				<div class="contact-box">
					<h4 class="title4"><i class="fas fa-map-marker-alt"></i> Address: </h4>
					<p>
						<?php echo $address ?>
					</p>
					<h4 class="title4"><i class="fas fa-phone"></i> Phone: </h4>
					<p>
						<?php echo $phone ?>
					</p>
					<h4 class="title4"><i class="fab fa-whatsapp"></i> Whatsapp: </h4>
					<p>
						<?php echo $whatsapp ?>
					</p>
					<h4 class="title4"><i class="fas fa-mail-bulk"></i> E-mail: </h4>
					<p>
						<?php echo $email ?>
					</p>
					<!-- Social Icons -->
					<?php $this->load->view('home/section_social') ?>
					<!-- /Social Icons -->
				</div>
				<!-- /box -->
			</div>
			<div class="col-sm-7">
				<?php $this->load->view('home/section_email') ?>
			</div>
		</div>
		<!-- /row -->
	</div>
</div>