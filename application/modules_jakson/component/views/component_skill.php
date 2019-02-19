<?php foreach ($skills as $skill):?>
    <div class="<?php echo $skill->class;?>" data-animate-effect="<?php echo $skill->effect;?>">
		<div class="progress-wrap">
			<h3><?php echo $skill->title;?></h3>
			<div class="progress">
			 	<div class="progress-bar <?php echo $skill->color;?>" 
			 		role="progressbar" 
			 		aria-valuenow="<?php echo $skill->value;?>"
			 		aria-valuemin="0" 
			 		aria-valuemax="100" 
			 		style="width:<?php echo $skill->value;?>%">
			    <span><?php echo $skill->value;?>%</span>
			  	</div>
			</div>
		</div>
	</div>
<?php endforeach;?>
