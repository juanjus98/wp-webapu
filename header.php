<!doctype html>
<html lang="es" class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 

  <meta name="description" content="Diseño y desarrollo de página Web.">
  <meta name="author" content="webApu.com">

  <title>NUEVO <?php bloginfo('name'); ?></title>

  <!--Styeles-->
  <link href="<?php bloginfo("template_url"); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php bloginfo("template_url"); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php bloginfo("template_url"); ?>/assets/css/style.min.css" rel="stylesheet">


  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo("template_url"); ?>/images/icons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo("template_url"); ?>/images/icons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo("template_url"); ?>/images/icons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo("template_url"); ?>/images/icons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo("template_url"); ?>/images/icons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo("template_url"); ?>/images/icons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo("template_url"); ?>/images/icons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo("template_url"); ?>/images/icons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo("template_url"); ?>/images/icons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo("template_url"); ?>/images/icons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo("template_url"); ?>/images/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo("template_url"); ?>/images/icons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo("template_url"); ?>/images/icons/favicon-16x16.png">
  <link rel="manifest" href="<?php bloginfo("template_url"); ?>/images/icons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php bloginfo("template_url"); ?>/images/icons/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <link rel="shortcut icon" href="<?php bloginfo("template_url"); ?>/images/icons/favico.ico" type="image/x-icon">
  <link rel="icon" href="<?php bloginfo("template_url"); ?>/images/icons/favico.ico" type="image/x-icon">
  <!-- //Favicons -->

  <!--lightslider-->
  <link rel="stylesheet"  href="<?php bloginfo("template_url"); ?>/assets/plugins/lightslider/css/lightslider.css"/>

</head>
<body>
  <header class="cd-auto-hide-header">
    <div class="container">
      <div class="logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-animate" title="<?php bloginfo('name'); ?>">
          <img src="<?php bloginfo("template_url"); ?>/assets/images/web-apu-logo.png" alt="<?php bloginfo('name'); ?>">
        </a>
      </div>

      <nav class="cd-primary-nav">
        <a href="#cd-navigation" class="nav-trigger">
          <span>
            <em aria-hidden="true"></em>
            Menu
          </span>
        </a> <!-- .nav-trigger -->
        <?php
        wp_nav_menu(array(
          'menu' => 'primary',
          'theme_location' => 'primary',
          'depth' => 2,
          'container' => 'ul',
          'container_class' => '',
          'container_id' => 'cd-navigation',
          'menu_class' => ''
//'link_before' => '<span class="link">',     
//'link_after'  => '</span>',
//'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
//'walker' => new wp_bootstrap_navwalker()
          ));
          ?>

        </nav> <!-- .cd-primary-nav -->
      </div>
    </header> <!-- .cd-auto-hide-header -->
    <main class="main-content">