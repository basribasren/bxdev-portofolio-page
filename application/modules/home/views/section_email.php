<!-- form -->
<iframe name="mail" style="display:none;"></iframe>
<form action="<?php echo base_url(); ?>assets/php/contact-form.php" 
	method="post" 
	target="mail" 
	onsubmit="Swal.fire(
	  'Email has been send!',
	  '',
	  'success'
	)">
	<!-- item -->            
	<div class="form-group">
		Name: 
		<input type="text" 
			class="form-control required" 
			id="name" 
			name="name" 
			placeholder="Name*" 
			aria-label="Name"
			required
		>
	</div>    
	<!-- /item -->
	<!-- item -->        
	<div class="form-group">
		Email: 
		<input type="email" 
			class="form-control required" 
			id="email" 
			name="email" 
			placeholder="Email" 
			aria-label="Email"
			required
		>
	</div>    
	<!-- /item --> 
	<!-- item -->            
	<div class="form-group">
		Subject: 
		<input type="text" 
			class="form-control required" 
			id="subject" 
			name="subject" 
			placeholder="Subject"
			aria-label="Subject" 
			required
		>
	</div>    
	<!-- /item -->
	<!-- item -->            
	<div class="form-group">
		Message: 
		<textarea class="form-control required"
			name="message" 
			id="message" 
			placeholder="Message"
			aria-label="Message" 
			required
		></textarea>
	</div>    
	<!-- /item --> 
	<!-- item -->            
	<div class="form-group form-send">
		<input type="submit" 
			name="submit" 
			value="Kirim" 
			aria-label="Submit"
			class="btn btn-default btn3" 
		>
	</div>    
	<!-- /item -->                
</form>
<!-- /form -->