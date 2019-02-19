<?php 
	class Skill {
	    public $class;
	    public $effect;
	    public $color;
	    public $icon;
	    public $title;
	    public $description;
	}

	$skill01 = new Skill();
	$skill01->class = 'col-md-6 animate-box';
	$skill01->effect = 'fadeInLeft';
	$skill01->color = 'color-1';
	$skill01->value = '75';
	$skill01->title = 'Photoshop';

	$skill02 = new Skill();
	$skill02->class = 'col-md-6 animate-box';
	$skill02->effect = 'fadeInLeft';
	$skill02->color = 'color-2';
	$skill02->value = '90';
	$skill02->title = 'HTML5';

	$skill03 = new Skill();
	$skill03->class = 'col-md-6 animate-box';
	$skill03->effect = 'fadeInLeft';
	$skill03->color = 'color-3';
	$skill03->value = '80';
	$skill03->title = 'Jquery';

	$skill04 = new Skill();
	$skill04->class = 'col-md-6 animate-box';
	$skill04->effect = 'fadeInLeft';
	$skill04->color = 'color-4';
	$skill04->value = '60';
	$skill04->title = 'WordPress';

?>