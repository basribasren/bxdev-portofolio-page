<?php
	class Contact {
	    public $class;
	    public $effect;
	    public $link;
		public $icon;
		public $contact;
	}

	$contact01 = new Contact();
	$contact01->class = 'colorlib-feature colorlib-feature-sm animate-box';
	$contact01->effect = 'fadeInLeft';
	$contact01->link = '#';
	$contact01->icon = 'icon-globe-outline';
	$contact01->contact = 'info@domain.com';

	$contact02 = new Contact();
	$contact02->class = 'colorlib-feature colorlib-feature-sm animate-box';
	$contact02->effect = 'fadeInLeft';
	$contact02->link = '#';
	$contact02->icon = 'icon-map';
	$contact02->contact = '198 West 21th Street, Suite 721 New York NY 10016';

	$contact03 = new Contact();
	$contact03->class = 'colorlib-feature colorlib-feature-sm animate-box';
	$contact03->effect = 'fadeInLeft';
	$contact03->link = 'tel://';
	$contact03->icon = 'icon-phone';
	$contact03->contact = '+123 456 7890';

 ?>