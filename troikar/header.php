<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title>

        <?php
              if (function_exists('is_tag') && is_tag()) {
                 single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
              elseif (is_archive()) {
                 wp_title(''); echo ' Archive - '; }
              elseif (is_search()) {
                 echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
              elseif (!(is_404()) && (is_single()) || (is_page())) {
                 wp_title(''); echo ' - '; }
              elseif (is_404()) {
                 echo 'Not Found - '; }
              if (is_home()) {
                 bloginfo('name'); echo ' - '; bloginfo('description'); }
              else {
                  bloginfo('name'); }
              if ($paged>1) {
                 echo ' - page '. $paged; }
           ?>

        </title>

        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">

        <?php wp_head(); ?>
        <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

    </head>
    <body <?php body_class(); ?>>

       <div id="loader-wrapper">
            <div id="loader" >
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/preloader-logo.png">
                <div class="loader-inner line-scale"></div>
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <div id="content-wrap">
            <header>
                <div class="container">
                    <!-- /////////////////////////// HEADER NAV /////////////////////////// -->--><nav id="myNavmenu" class="navmenu navmenu-default navmenu-fixed-left offcanvas" role="navigation"> 
                    <!-- //////////////////// HEADER OFFCANVAS NAV BEGINING ///////////////// -->
                        <h2><span><?php bloginfo('name'); ?></span></h2>
                        <?php mostay_nav(); ?>
                    </nav>
                    <div class="navbar offcanvas-nav-header">
                      <button type="button" class="visible-lg visible-md visible-sm visible-xs navbar-toggle" data-toggle="offcanvas" data-target="#myNavmenu" data-canvas="body">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
                   
                    <form class="col-md-3"><?php get_search_form( ); ?>  </form>
                    <h1><a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php bloginfo( 'description' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/header-logo-lg.png"><span><?php bloginfo('name'); ?></span></a></h1>
                    <small>Todos los derechos reservados.</br> R&R Carriages LLC 2015</small>
                </div>
                <div class="grd-line"></div>
                <div class="black-bar"></div>
            </header>

            <!-- /header -->
