<?php foreach ($articels as $articel):?>
    <div class="<?php echo $articel->class;?>" data-animate-effect="<?php echo $articel->effect;?>">
		<div class="blog-entry">
			<a href="<?php echo $articel->link;?>" class="blog-img">
				<img src="<?php echo base_url($articel->img); ?>" class="img-responsive" alt="<?php echo $articel->alt;?>">
			</a>
			<div class="desc">
				<span>
					<small> <?php echo $articel->date;?> </small> | 
					<small> <?php echo $articel->tag;?> </small> | 
					<small> <i class="<?php echo $articel->icon;?>"></i> <?php echo $articel->view;?></small>
				</span>
				<h3>
					<a href="<?php echo $articel->link;?>"><?php echo $articel->title;?></a>
				</h3>
				<p><?php echo $articel->description;?></p>
			</div>
		</div>
	</div>
<?php endforeach;?>