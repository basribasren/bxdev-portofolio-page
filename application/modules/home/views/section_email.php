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
		<input type="text" 
			class="form-control required" 
			id="name" 
			name="name" 
			placeholder="Name*" 
			required
		>
	</div>    
	<!-- /item -->
	<!-- item -->        
	<div class="form-group">
		<input type="email" 
			class="form-control required" 
			id="email" 
			name="email" 
			placeholder="Email" 
			required
		>
	</div>    
	<!-- /item --> 
	<!-- item -->            
	<div class="form-group">
		<input type="text" 
			class="form-control required" 
			id="subject" 
			name="subject" 
			placeholder="Subject" 
			required
		>
	</div>    
	<!-- /item -->
	<!-- item -->            
	<div class="form-group">
		<textarea class="form-control required"
			name="message" 
			id="message" 
			placeholder="Message" 
			required
		></textarea>
	</div>    
	<!-- /item --> 
	<!-- item -->            
	<div class="form-group form-send">
		<input type="submit" 
			name="submit" 
			value="Kirim" 
			class="btn btn-default btn3" 
		>
	</div>    
	<!-- /item -->                
</form>
<!-- /form -->