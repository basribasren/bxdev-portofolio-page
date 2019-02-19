<?php foreach ($contacts as $contact):?>
    <div class="<?php echo $contact->class;?>" data-animate-effect="<?php echo $contact->effect;?>">
		<div class="colorlib-icon">
			<i class="<?php echo $contact->icon;?>"></i>
		</div>
		<div class="colorlib-text">
			<p><a href="<?php echo $contact->link;?>"><?php echo $contact->contact;?></a></p>
		</div>
	</div>
<?php endforeach;?>