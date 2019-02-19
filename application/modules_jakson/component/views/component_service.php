<?php foreach ($services as $service):?>
    <div class="<?php echo $service->class;?>" data-animate-effect="<?php echo $service->effect;?>">
		<div class="services <?php echo $service->color;?>">
			<span class="<?php echo $service->iconClass;?>">
				<i class="<?php echo $service->icon;?>"></i>
			</span>
			<div class="desc">
				<h3><?php echo $service->title;?></h3>
				<p><?php echo $service->description;?></p>
			</div>
		</div>
	</div>
<?php endforeach;?>