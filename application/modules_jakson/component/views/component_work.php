<?php foreach ($works as $work):?>
    <div class="<?php echo $work->class;?>" data-animate-effect="<?php echo $work->effect;?>">
		<div class="project" style="background-image: url(<?php echo base_url($work->img); ?>);">
			<div class="desc">
				<div class="con">
					<h3><a href="work.html"><?php echo $work->title;?></a></h3>
					<span><?php echo $work->category;?></span>
					<p class="icon">
						<span><a href="#"><i class="icon-share3"></i></a></span>
						<span><a href="#"><i class="icon-eye"></i> <?php echo $work->seen;?></a></span>
						<span><a href="#"><i class="icon-heart"></i> <?php echo $work->like;?></a></span>
					</p>
				</div>
			</div>
		</div>
	</div>
<?php endforeach;?>

<!-- 
<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
	<div class="project" style="background-image: url(<?php echo base_url(); ?>assets/jackson/images/img-1.jpg);">
		<div class="desc">
			<div class="con">
				<h3><a href="work.html">Work 01</a></h3>
				<span>Website</span>
				<p class="icon">
					<span><a href="#"><i class="icon-share3"></i></a></span>
					<span><a href="#"><i class="icon-eye"></i> 100</a></span>
					<span><a href="#"><i class="icon-heart"></i> 49</a></span>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
	<div class="project" style="background-image: url(<?php echo base_url(); ?>assets/jackson/images/img-2.jpg);">
		<div class="desc">
			<div class="con">
				<h3><a href="work.html">Work 02</a></h3>
				<span>Animation</span>
				<p class="icon">
					<span><a href="#"><i class="icon-share3"></i></a></span>
					<span><a href="#"><i class="icon-eye"></i> 100</a></span>
					<span><a href="#"><i class="icon-heart"></i> 49</a></span>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="col-md-6 animate-box" data-animate-effect="fadeInTop">
	<div class="project" style="background-image: url(<?php echo base_url(); ?>assets/jackson/images/img-3.jpg);">
		<div class="desc">
			<div class="con">
				<h3><a href="work.html">Work 03</a></h3>
				<span>Illustration</span>
				<p class="icon">
					<span><a href="#"><i class="icon-share3"></i></a></span>
					<span><a href="#"><i class="icon-eye"></i> 100</a></span>
					<span><a href="#"><i class="icon-heart"></i> 49</a></span>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="col-md-6 animate-box" data-animate-effect="fadeInBottom">
	<div class="project" style="background-image: url(<?php echo base_url(); ?>assets/jackson/images/img-4.jpg);">
		<div class="desc">
			<div class="con">
				<h3><a href="work.html">Work 04</a></h3>
				<span>Application</span>
				<p class="icon">
					<span><a href="#"><i class="icon-share3"></i></a></span>
					<span><a href="#"><i class="icon-eye"></i> 100</a></span>
					<span><a href="#"><i class="icon-heart"></i> 49</a></span>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
	<div class="project" style="background-image: url(<?php echo base_url(); ?>assets/jackson/images/img-5.jpg);">
		<div class="desc">
			<div class="con">
				<h3><a href="work.html">Work 05</a></h3>
				<span>Graphic, Logo</span>
				<p class="icon">
					<span><a href="#"><i class="icon-share3"></i></a></span>
					<span><a href="#"><i class="icon-eye"></i> 100</a></span>
					<span><a href="#"><i class="icon-heart"></i> 49</a></span>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
	<div class="project" style="background-image: url(<?php echo base_url(); ?>assets/jackson/images/img-6.jpg);">
		<div class="desc">
			<div class="con">
				<h3><a href="work.html">Work 06</a></h3>
				<span>Web Design</span>
				<p class="icon">
					<span><a href="#"><i class="icon-share3"></i></a></span>
					<span><a href="#"><i class="icon-eye"></i> 100</a></span>
					<span><a href="#"><i class="icon-heart"></i> 49</a></span>
				</p>
			</div>
		</div>
	</div>
</div> -->