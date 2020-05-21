<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset='UTF-8'>
  <title><?php bloginfo('name');?></title>

  <!-- Behavioral Meta Data -->
  <meta content='width=device-width, initial-scale=1, user-scalable=no' name='viewport'>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta content='#205250' name=' theme-color'>

  <!-- Google Meta Data -->
  <meta name='description', content='<?php bloginfo('description');?>'>
  <meta name='keywords', content=''>
  <meta name="robots" content="index, follow">

  <!-- Blog Meta Data -->
  <meta name="dc.language" content="es">
  <meta name="dc.source" content="<?php bloginfo('url');?>">
  <meta itemprop="url" content="<?php bloginfo('url');?>">

  <!-- Twitter Card Meta Data -->
  <meta content='summary' name='twitter:card'>
  <meta content='Paginas web' name='twitter:site'>
  <meta content='Paginas web' name='twitter:title'>
  <meta content='Paginas web' name='twitter:description'>

  <!-- Open Graph Meta Data -->
  <meta content='website' property='og:type'>
  <meta content='<?php echo get_template_directory_uri(); ?>/assets/img/logo-header.png' property='og:image'>
  <meta property="og:site_name" content="">
  <meta property="og:title" content="">
  <meta content='' property='og:description'>
  <meta property="og:type" content="">
  <meta property="og:image" content="">

  <!-- Links -->
  <link href='<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri();?>/assets/css/animate/animate.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri();?>/assets/css/slick/slick.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri();?>/assets/css/slick/slick-theme.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri();?>/assets/css/main.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri();?>/assets/css/t-responsive.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri();?>/assets/css/offcanvas.css' rel='stylesheet'>
  <link href="<?php echo get_template_directory_uri();?>/assets/img/favicon-32x32.png"  rel="icon" type="image/png" sizes="32x32">
  <?php wp_head(); ?>
</head>

<body>
  <div class="pd-top">
    <nav class="navbar navbar-expand-md fixed-top">
      <button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
      <a class="navbar-brand" href="#">Tonymoly</a>
      <div class="main-navbar__icons">
        <i class="fa fa-search" aria-hidden="true"></i>
        <img src="<?php echo get_template_directory_uri();?>/assets/img/bag.svg" alt="">
      </div>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class='nav-item'>
            <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>'>Home</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>/cart'>Cart</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>/checkout'>checkout</a>
          </li>

          <li class='nav-item'>
            <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>/my-account'>My Accouent</a>
          </li>
       
        </ul>

      </div>
    </nav>
    <div class="main-huincha">
      <p class="text-white">Registrate y obten un 15% en tu primera compra</p>
    </div>
