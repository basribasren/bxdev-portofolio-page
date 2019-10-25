<style type="text/css" media="screen">
/* ==========================================================
! Header
========================================================== */
#header {
    background: #f9f9f9;
    color: #ffffff;
    -webkit-box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.1);
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 8888;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

#header .container {
    position: relative;
}

#header .navbar {
    margin-bottom: 0;
}

.header-stick {
    position: fixed !important;
    top: 0;
    left: 0;
    opacity: 0.95;
}

.header-stick:hover {
    opacity: 1;
}

.header-stick .navbar {
    padding-top: 5px;
    padding-bottom: 5px;
}

.header-stick .navbar-brand {
    padding-top: 7px;
}

.navbar-brand {
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.navbar li {
    position: relative;
}

.navbar li>a {
    border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
}

.navbar li a {
    white-space: nowrap;
    color: #09afad;
    font-weight: bold;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.navbar li a:hover,
.navbar li a:focus {
    color: #ffffff;
    background: #09afad;
}

.navbar li>ul {
    list-style: none;
}

.navbar li>ul>li {
    padding: 0;
}

.navbar li>ul>li a {
    padding: 5px;
    padding-left: 8px;
    display: block;
}

@media (min-width: 768px) {
    .navbar li:hover>ul {
        visibility: visible;
        opacity: 1;
    }

    .navbar li>ul {
        position: absolute;
        z-index: 999;
        top: 100%;
        left: 0;
        padding: 0;
        display: block;
        list-style: none;
        visibility: hidden;
        opacity: 0;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .navbar li>ul>li {
        padding: 0;
    }

    .navbar li>ul>li a {
        display: block;
        padding: 10px;
        white-space: nowrap;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        color: #ffffff;
        background: #031634;
    }

    .navbar li>ul>li a:hover {
        background: #09afad;
        text-decoration: none;
    }
}

.navbar-toggle {
    color: #333;
    border-color: #ffffff;
}

.navbar-brand {
    max-width: 150px;
}

.navbar-brand img {
    width: 30%;
}

</style>
<header id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg justify-content-between">
            <!-- logo -->
            <a class="navbar-brand" href="#hero1">
                <img src="<?php echo base_url(); ?>assets/img/logo-1.png" alt="">
            </a>
            <!-- /logo -->
            <!-- Collapse Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <!-- /Collapse Button -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-main-collapse">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#education">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#certificate">Sertificate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#clients">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
    <!-- /.container -->
</header>