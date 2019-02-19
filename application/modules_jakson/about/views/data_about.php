<?php 
	class Service {
	    public $class;
	    public $effect;
	    public $color;
	    public $icon;
	    public $title;
	    public $description;
	}

	$service01 = new Service();
	$service01->class = 'col-md-3 animate-box';
	$service01->effect = 'fadeInLeft';
	$service01->color = 'color-1';
	$service01->icon = 'icon-bulb';
	$service01->iconClass = 'icon2';
	$service01->title = 'Graphic Design';
	$service01->description = '';

	$service02 = new Service();
	$service02->class = 'col-md-3 animate-box';
	$service02->effect = 'fadeInRight';
	$service02->color = 'color-2';
	$service02->icon = 'icon-globe-outline';
	$service02->iconClass = 'icon2';
	$service02->title = 'Web Design';
	$service02->description = '';

	$service03 = new Service();
	$service03->class = 'col-md-3 animate-box';
	$service03->effect = 'fadeInTop';
	$service03->color = 'color-2';
	$service03->icon = 'icon-data';
	$service03->iconClass = 'icon2';
	$service03->title = 'Software';
	$service03->description = '';

	$service04 = new Service();
	$service04->class = 'col-md-3 animate-box';
	$service04->effect = 'fadeInBottom';
	$service04->color = 'color-2';
	$service04->icon = 'icon-phone3';
	$service04->iconClass = 'icon2';
	$service04->title = 'Application';
	$service04->description = '';

?>