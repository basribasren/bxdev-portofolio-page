<?php
	class Blog {
	    public $class;
	    public $effect;
	    public $link;
		public $img;
		public $alt;
		public $date;
		public $tag;
		public $icon;
		public $view;
	    public $title;
	    public $description;
	}

	$articel01 = new Blog();
	$articel01->class = 'col-md-4 col-sm-6 animate-box';
	$articel01->effect = 'fadeInLeft';
	$articel01->link = 'blog.html';
	$articel01->img = 'assets/jackson/images/blog-1.jpg';
	$articel01->alt = 'HTML5 Bootstrap Template by colorlib.com';
	$articel01->date = 'April 14, 2018';
	$articel01->tag = 'Web Design';
	$articel01->icon = 'icon-bubble3';
	$articel01->view = '4';
	$articel01->title = 'Renovating National Gallery';
	$articel01->description = 'Separated live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.';

	$articel02 = new Blog();
	$articel02->class = 'col-md-4 col-sm-6 animate-box';
	$articel02->effect = 'fadeInRight';
	$articel02->link = 'blog.html';
	$articel02->img = 'assets/jackson/images/blog-2.jpg';
	$articel02->alt = 'HTML5 Bootstrap Template by colorlib.com';
	$articel02->date = 'April 14, 2018';
	$articel02->tag = 'Web Design';
	$articel02->icon = 'icon-bubble3';
	$articel02->view = '4';
	$articel02->title = 'Wordpress for a Beginner';
	$articel02->description = 'Separated live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.';

	$articel03 = new Blog();
	$articel03->class = 'col-md-4 col-sm-6 animate-box';
	$articel03->effect = 'fadeInLeft';
	$articel03->link = 'blog.html';
	$articel03->img = 'assets/jackson/images/blog-3.jpg';
	$articel03->alt = 'HTML5 Bootstrap Template by colorlib.com';
	$articel03->date = 'April 14, 2018';
	$articel03->tag = 'Inspiration';
	$articel03->icon = 'icon-bubble3';
	$articel03->view = '4';
	$articel03->title = 'Make website from scratch';
	$articel03->description = 'Separated live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.';
 ?>