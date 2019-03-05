<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
		<meta name="description" content="My Website portofolio build using Codeigniter">
		<meta name="keywords" content="HTML,CSS,JavaScript,Codeigniter,HMVC">
		<meta name="author" content="Basri Basren">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	    <!-- Title -->
	    <title>Basri Basren</title>

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon2.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo base_url(); ?>assets/favicon2.ico" type="image/x-icon">
		<style>
		    body {
		      background-color: #808080;
		      margin: 0;
		      padding: 0;
		    }
		    #container embed{
		      overflow: auto;
		      position: absolute;
		      width: 100%;
		      height: 100%;
		    }
		</style>
		
	</head>

	<body>
		<div id="container">
			<embed src="<?php echo base_url($file); ?>" type="application/pdf"></embed>
		</div>
	</body>
</html>

