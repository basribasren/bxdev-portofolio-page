<style type="text/css" media="screen">
</style>
<div class="section contrast" id="experience">
	<div class="container">
		<!-- Section Title -->
		<h2 class="title-of-section title-border">Experience</h2>
		<!-- /Section Title -->
		<!-- row -->
		<div class="row">
			<!-- item -->
			<div class="col-lg-4">
				<!-- box -->
				<!-- box -->
			</div>
			<!-- /item -->
			<!-- item -->
			<div class="col-lg-4">
				<!-- box -->
				<div class="resume-box">
					<p class="resume-item-ico"><i class="fa fa-flag"></i></p>
					<h2 class="title2 resume-item-title1">PT Raksasa Laju Lintang</h2>
					<h3 class="title3 resume-item-title2">Jan 2017 – February 2017</h3>
					<p>Praktek Kerja Lapangan (PKL) at ralali.com as web developer</p>
					<hr>
					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#pdfModal">
						Sertificate
					</button>
				</div>
				<!-- box -->
			</div>
			<!-- /item -->
			<!-- item -->
			<div class="col-lg-4">
				<!-- box -->
				<!-- box -->
			</div>
			<!-- /item -->
		</div>
		<!-- /row -->
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="pdfModal" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="pdfModal">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php 
					$data['file'] = 'assets/pdf/sertificatePKL.pdf';
					$this->load->view('home/section_pdf', $data);
				?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>