<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Connor_Reporting
 */

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/assets/css/main.css">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+"
        crossorigin="anonymous"></script>

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/owlcarousel/owl.theme.default.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/aos.css">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-57669016-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-57669016-1');
    </script>

    <script async src="//71482.tctm.co/t.js"></script>

    <?php wp_head(); ?>

    
	
</head>

<body>

 <!-- Navbar -->
 <section id="contact-bar" class="fixed-top d-none d-lg-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 logins">
                <a href="https://connorreporting.reporterbase.com/attorney/" target="_blank">Client Login</a> | <a href="https://connorreporting.reporterbase.com/reporter/" target="_blank">Reporter Login</a>
            </div>
            <div class="col-lg-6 phone">
                <a href="tel://(800) 554-3376">Get in touch: (800) 554-3376</a>
            </div>
        </div>
    </div>
 </section>
 <nav class="navbar fixed-top navbar-expand-lg">
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/connor-logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo esc_url( home_url( '/' ) ); ?>about" id="navbarDropdown">About Us</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>about">Our Company</a>
                    <a class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>team">Leadership Team</a>
                    <a class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/testimonials/">Testimonials</a>
                    <a class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>blog">Blog</a>
                    <a class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>about/job-openings">Job Openings</a>
                    <a class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>about/video-tutorial">Video Tutorials</a>
                    
                </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo esc_url( home_url( '/' ) ); ?>services" id="navbarDropdown">Services</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>services/court-reporting">Court Reporting</a>
                <a class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>services/legal-videography">Legal Videography</a>
                <a class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>services/trial-presentation/">Trial Presentation</a>
                <a class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>services/video-conferencing/">Video Conferencing</a>
                <a class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>services/document-management">Document Management</a>
                <a class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>services/global-reporting">Global Reporting</a>
                <a class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>services/technology">Technology</a>
                <a class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>services/exhibeo">Exhibeo</a>
            </div>
        </li>
        <li class="nav-item">
            <p class="nav-link d-none d-lg-block" id="location">Locations</p>
        </li>
        <li class="nav-item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>all-locations" class="nav-link d-lg-none">Locations</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Client Center</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="https://connorreporting.reporterbase.com/attorney/" target="_blank">Client Login</a>
                    <a class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>pay-online">Pay Online</a>
                    <a class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>survey">Client Survey</a>
                    <a class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>scheduling"> Scheduling</a>
                    <a class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>online-office-repository"> Online Office Repository</a>
                    <a class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>connor-on-the-go">Connor On The Go</a>
                </div>
        </li>
        <li class="nav-item">
            <a id="nav-button" class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>contact">CONTACT US</a>
        </li>
        <li class="nav-item d-none d-lg-block" id="search-icon">
            <i class="fas fa-search"></i>
        </li>
        </div>
    </div>
</nav>
      
<!-- End Navbar -->  

<!-- Contact Bar -->
<!-- <section id="contact-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-inline text-right">
                    <a href="#">
                        <li class="list-inline-item">Reporter Login</li>
                    </a>
                    <a href="#">
                        <li class="list-inline-item">Client Login</li>
                    </a>
                    <a href="#">
                        <li class="list-inline-item">1-888-283-1161</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</section> -->
<!-- End Contact Bar -->
