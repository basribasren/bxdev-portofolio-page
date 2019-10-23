<style type="text/css" media="screen">
	
</style>
<div class="section" id="education">
	<div class="container">
		<!-- Section Title -->
		<h2 class="title-of-section title-border">Education</h2>
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
					<p class="resume-item-ico"><i class="fas fa-university"></i></p>
					<h2 class="title2 resume-item-title1">Informatics Engineering</h2>
					<h3 class="title3 resume-item-title2">University of Muhammadiyah Malang</h3>
					<p>Title of skripsi is "Perancangan Sistem Repositori Skripsi Berbasis PWA (Progressive Web App) (Studi Kasus: Ruang Baca Fakultas Teknik)" with IPK 3.71</p>
					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#ijazahModal">
						Ijazah
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
<div class="modal fade" id="ijazahModal" tabindex="-1" role="dialog" aria-labelledby="ijazahModal" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="ijazahModal">Ijazah</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php 
					$data['file'] = 'assets/pdf/ijazah.pdf';
					$this->load->view('home/section_pdf', $data);
				?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>