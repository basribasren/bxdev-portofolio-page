<?php 
/**
 * @param class header_area This is the custom style.
 * @param class animated This is the custom style.
 * @param class menu_area This is the custom style.
 * @param class sing-up-button This is the custom style.
 */
?>
<header id="header">
	<nav class="navbar">
        <div class="container">

            <!-- Navbar Header -->
            <div class="navbar-header">
            	<!-- Collapse Button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- /Collapse Button -->
                <!-- logo -->
                <a class="navbar-brand" href="#hero1">
                   <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="">
                </a>
                <!-- /logo -->
            </div>
            <!-- / Navbar Header -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">                  
                    <li>
                        <a href="#about">About</a>
                    </li>   
                    <li>
                        <a href="#portfolio">Portfolio</a>
                    </li>   
                    <li>
                        <a href="#education">Education</a>
                    </li>  
                    <li>
                        <a href="#experience">Experience</a>
                    </li>  
                    <li>
                        <a href="#testimonials">Testimonials</a>
                    </li>
                    <li>
                        <a href="#testimonials">Skills</a>
                    </li>              
                    <li>
                        <a href="#clients">Clients</a>
                    </li> 
                    <li>
                        <a href="#contact">Contact</a>
                    </li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</header>