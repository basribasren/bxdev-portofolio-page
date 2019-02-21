<div class="section section-contact" id="contact">
	<div class="container">
		<!-- Section Title -->
		<h2 class="title-of-section title-border">Get in Touch</h2>
		<!-- /Section Title -->
		<!-- row -->
		<div class="row">
			<!-- col -->
			<div class="col-sm-5">
				<!-- box -->
				<div class="contact-box">
					<h4 class="title4"><i class="fa fa-map-marker-alt"></i> Address: </h4>
					<p><?php echo $address ?></p>
					<h4 class="title4"><i class="fa fa-phone"></i> Phone: </h4>
					<p><?php echo $phone ?></p>
					<h4 class="title4"><i class="fa fa-whatsapp"></i> Whatsapp: </h4>
					<p><?php echo $whatsapp ?></p>
					<h4 class="title4"><i class="fa fa-mail-bulk"></i> E-mail: </h4>
					<p><?php echo $email ?></p>
					<!-- Social Icons -->
                    <div class="social-icons">
                        <a href="<?php echo $instagram ?>" target=_blank ><i class="fa fa-instagram"></i></a>
                        <a href="<?php echo $facebook ?>" target=_blank ><i class="fa fa-facebook"></i></a>
                        <a href="<?php echo $twitch ?>" target=_blank ><i class="fa fa-twitch"></i></a>
                        <a href="<?php echo $linkedin ?>" target=_blank ><i class="fa fa-linkedin"></i></a>
                        <a href="<?php echo $github ?>" target=_blank ><i class="fa fa-github"></i></a>
                    </div>
                    <!-- /Social Icons -->
				</div>
				<!-- /box -->					
			</div>
			<!-- /col -->
			<!-- col -->
			<div class="col-sm-7">
				<!-- form -->
				<iframe name="mail" style="display:none;"></iframe>
				<form action="<?php echo base_url(); ?>assets/php/contact-form.php" method="post" target="mail" onsubmit="Swal.fire(
					  'Email has been send!',
					  '',
					  'success'
					)">
					<!-- item -->            
					<div class="form-group">
					  <input type="text" class="form-control required" id="name" name="name" placeholder="Name*" required>
					</div>    
					<!-- /item -->
					<!-- item -->        
					<div class="form-group">
					  <input type="email" class="form-control required" id="email" name="email" placeholder="Email" required>
					</div>    
					<!-- /item --> 
					<!-- item -->            
					<div class="form-group">
					  <input type="text" class="form-control required" id="subject" name="subject" placeholder="Subject" required>
					</div>    
					<!-- /item -->
					<!-- item -->            
					<div class="form-group">
					  <textarea class="form-control required" name="message" id="message" placeholder="Message" required></textarea>
					</div>    
					<!-- /item --> 
					<!-- item -->            
					<div class="form-group form-send">
					  <input type="submit" name="submit" value="Kirim" class="btn btn-default btn3" >
					</div>    
					<!-- /item -->                
				</form>
				<!-- /form -->
			</div>
			<!-- /col -->
		</div>
		<!-- /row -->
	</div>
</div>