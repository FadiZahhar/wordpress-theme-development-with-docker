<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]--> 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <!-- title of the header -->
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title> 

    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width">

    <!-- display a pingback, it's a notification that is sent from 
    one WordPress site to another whenever a post or page on the 
    first site links to a post or page on the second site -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
</head>
<!-- Displays the class names for the body element -->
<body <?php body_class(); ?>>  
<!-- navbar has a dark background -->
<nav class="navbar navbar-dark bg-dark"> 

<!-- Displays information about the current site -->
    <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
    <!-- it's a button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="#bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span>
    </button>

    <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) ); // Displays a navigation menu
    ?>
</nav>
