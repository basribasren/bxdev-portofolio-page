<?php 
	class Work {
	    public $class;
	    public $effect;
	    public $img;
	    public $title;
	    public $category;
	    public $seen;
	    public $like;
	}

	$work01 = new Work();
	$work01->class = 'col-md-6 animate-box';
	$work01->effect = 'fadeInLeft';
	$work01->img = 'assets/jackson/images/img-1.jpg';
	$work01->title = 'Work 01';
	$work01->category = 'Website';
	$work01->seen = '45';
	$work01->like = '200';

	$work02 = new Work();
	$work02->class = 'col-md-6 animate-box';
	$work02->effect = 'fadeInLeft';
	$work02->img = 'assets/jackson/images/img-2.jpg';
	$work02->title = 'Work 02';
	$work02->category = 'Animation';
	$work02->seen = '45';
	$work02->like = '200';

	$work03 = new Work();
	$work03->class = 'col-md-6 animate-box';
	$work03->effect = 'fadeInLeft';
	$work03->img = 'assets/jackson/images/img-3.jpg';
	$work03->title = 'Work 03';
	$work03->category = 'Illustration';
	$work03->seen = '45';
	$work03->like = '200';

	$work04 = new Work();
	$work04->class = 'col-md-6 animate-box';
	$work04->effect = 'fadeInLeft';
	$work04->img = 'assets/jackson/images/img-4.jpg';
	$work04->title = 'Work 04';
	$work04->category = 'Web Design';
	$work04->seen = '45';
	$work04->like = '200';

?>