<style type="text/css" media="screen">
/* ==========================================================
! Section: certificate
========================================================== */

.certificate-thumbnail {
  min-height: 150px;
  background-repeat: no-repeat;
  background-position: center center;
  /*max-width:100%; */
  max-height:100%;
  display: block;
  position: relative;
  color: #ffffff;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  /*-webkit-background-size: contain;*/
  /*-moz-background-size: contain;*/
  /*-o-background-size: contain;*/
  /*background-size: contain;*/
  /*object-fit: contain;*/
}

.certificate-thumbnail:hover .portfolio-description-wrapper {
  visibility: visible;
  opacity: 1;
  color: #ffffff;
}
</style>

<?php 
$certificate = array(
	array(
		'cert_image' => 'Database Desaign and Programming With SQL.jpg',
		'cert_desc' =>'Certificate Database Desaign and Programming With SQL From Oracle',
		'cert_thumb' => 'oracle-thumb.png',
		'cert_title' => 'Database Desaign and Programming With SQL',
		'cert_date' => 'November 5, 2015',
	),
	array(
		'cert_image' => 'Database Programming With SQL.jpg',
		'cert_desc' =>'Certificate Database Programming With SQL From Oracle',
		'cert_thumb' => 'oracle-thumb.png',
		'cert_title' => 'Database Programming With SQL',
		'cert_date' => 'November 5, 2015',
	),
	array(
		'cert_image' => 'Sertificate Competence-01.jpg',
		'cert_desc' =>'Certificate Competence From Badan Nasional Sertifikasi Profesi (BNSP)',
		'cert_thumb' => 'bnsp-thumb.png',
		'cert_title' => 'Certificate Competence',
		'cert_date' => '21 Februari 2019',
	),
	array(
		'cert_image' => 'Sertificate Competence-02.jpg',
		'cert_desc' =>'Certificate Competence From Badan Nasional Sertifikasi Profesi (BNSP)',
		'cert_thumb' => 'bnsp-thumb.png',
		'cert_title' => 'Certificate Competence',
		'cert_date' => '21 Februari 2019',
	),
	array(
		'cert_image' => 'Sertifikat Pembinaan Karir.jpg',
		'cert_desc' =>'Sertifikat Pembinaan Karir From Universitas Muhammadiyah Malang (UMM)',
		'cert_thumb' => 'umm-thumb.png',
		'cert_title' => 'Sertifikat Pembinaan Karir',
		'cert_date' => '19 Februari 2019',
	),
);
?>

<div class="section contrast" id="certificate">
	<div class="container">			
		<!-- Section Title -->
		<h2 class="title-of-section title-border">Certificate</h2>
		<!-- /Section Title -->

		<!-- certificate Carousel List -->
		<div class="certificate-carousel owl-carousel owl-theme owl-loaded" id="certificate-carousel">
			<!-- item -->
			<?php 
				$arrlength = count($certificate);
				for ($i = 0; $i < $arrlength; $i++){
					$image = 'assets/img/certificate/'.$certificate[$i]['cert_image'];
					$thumb = 'assets/img/certificate/'.$certificate[$i]['cert_thumb'];
			?>
			<div class="portfolio-item item">
				<a href="<?php echo base_url($image); ?>" 
					class="certificate-thumbnail fancybox" 
					data-caption="<?php echo $certificate[$i]['cert_desc'] ?>" 
					style="background-image: url('<?php echo base_url($thumb); ?>');"
				>
					<div class="portfolio-description-wrapper">
						<div class="portfolio-description">
							<h2 class="portfolio-title"><?php echo $certificate[$i]['cert_title']; ?></h2>
							<span class="see-more"><?php echo $certificate[$i]['cert_date']; ?></span>
						</div>
					</div>
				</a>
			</div>
			<?php
				}
			?>
			<!-- /item -->
		</div>
		<!-- / clients Carousel List -->
	</div>			
</div>