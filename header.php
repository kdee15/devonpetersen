<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <?php wp_head(); ?>

        <link rel="author" href="https://plus.google.com/+YOUR-PROFILE-HERE"/>

        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/favicon.png" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/apple-touch-icon.png" rel="apple-touch-icon" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />

		<!-- A. CSS +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/stylesheet.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/hacks.css">

        <!-- A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

        <!-- B. HEAD JS +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --> 

        <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery/jquery-1.9.1.min.js"></script>

        <!-- B. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    </head>

    <body <?php body_class(); ?> class="page-home" id="page-home" >
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
		
		<!-- C. WORK AREA ++++++++++++++++++++++++++++++++++++++ -->

            <!-- C.1. MASTHEAD -->
            
            <header id="masthead">
            
                <div class="container">
                
                    <!-- C.1.1. Logo -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/logo.png" alt="" class="logo" id="bob-siteLogo" />
                    
                    <!-- C.1.2. Navigation -->
                    <nav class="nav-main">
                        <ul>
                            <li><a class="textLink" href="#section-different">About Us</a></li>
                            <li><a class="textLink" href="#section-services">Our Services</a></li>
                            <li><a class="textLink" href="#section-casestudies">Our Artists</a></li>
                            <li><a class="textLink" href="#section-contact">Contact</a></li>
                            <li><a class="imgLink" href="http://www.facebook.com/bighousevoices" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/icon-facebook.svg" alt="Facebook"></a></li>
                        </ul>
                    </nav>
                
                </div>
            
            </header>
            
            <!-- C.1. END -->