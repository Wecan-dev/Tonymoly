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
<!--   <meta name="google-signin-scope" content="profile email">
  <meta name="google-signin-client_id" content="10440841093-jmo2kn3d9728s7lmpkb5gen61pm56ka3.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
-->
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
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@800;900&display=swap" rel="stylesheet">
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
      <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">Tonymoly</a>
      <div class="main-navbar__icons">
      <div class="search-container">
        <form action="/search" method="get">
          <input class="search expandright" id="searchright" type="search" name="q" placeholder="Search">
          <label class="button searchbutton" for="searchright"><span class="mglass">&#9906;</span></label>
        </form>
      </div>
        <a href="<?php echo bloginfo('url'); ?>/cart"> <img src="<?php echo get_template_directory_uri();?>/assets/img/bag-white.svg" alt=""></a>
      </div>
      
      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <div class="main-navbar__profile">
          <div class="main-navbar__img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/profile.png" alt="">
          </div>
          <div class="main-navbar__info">
            <div class="main-navbar__name">
              <p>Hola Camila!</p>
            </div>
            <div class="main-navbar__complete">
              <span>Completa la información de perfil</span>
            </div>
          </div>
        </div>
        <ul class="navbar-nav mr-auto">
          <li class='nav-item'>
            <a class="btn_custom btn--medium btn--filledGray" href="#">
              Iniciar Sesión    
            </a>
            <a class="btn_custom btn--medium btn--filledGray" href="#">
              Registrarme   
            </a>
          </li>
          <li class='nav-item'>
            <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>'>Home</a>
            <i class="fa fa-plus" aria-hidden="true"></i>
          </li>
          <li class='nav-item'>
            <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>/cart'>Cart</a>
            <i class="fa fa-plus" aria-hidden="true"></i>
          </li>
          <li class='nav-item'>
            <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>/checkout'>checkout</a>
            <i class="fa fa-plus" aria-hidden="true"></i>
          </li>

          <li class='nav-item'>
            <a class='nav-link scroll-link' href='<?php echo bloginfo('url'); ?>/my-account'>My Account</a>
            <i class="fa fa-plus" aria-hidden="true"></i>
          </li>

        </ul>

      </div>
    </nav>
    <div class="main-huincha">
      <p class="text-white">Registrate y obten un 15% en tu primera compra</p>
    </div>

    <style>

.button {
	display: inline-block;
	margin: 4px 2px;
	font-size: 14px;
	padding-left: 32px;
	padding-right: 32px;
	height: 50px;
	line-height: 50px;
	text-align: center;
	color: white;
	text-decoration: none;
	cursor: pointer;
	-moz-user-select: none;
	-khtml-user-select: none;
	-webkit-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

.button:hover {
	transition-duration: 0.4s;
	-moz-transition-duration: 0.4s;
	-webkit-transition-duration: 0.4s;
	-o-transition-duration: 0.4s;
	background-color: white;
	color: black;
}

.search-container {
	position: relative;
	display: inline-block;
	margin: 4px 2px;
	height: 50px;
	width: 50px;
	vertical-align: bottom;
}

.mglass {
	display: inline-block;
	pointer-events: none;
	-webkit-transform: rotate(-45deg);
	-moz-transform: rotate(-45deg);
	-o-transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
}

.searchbutton {
	position: absolute;
	font-size: 30px;
	width: 85%;
	margin: 0;
	padding: 0;
}

.search:focus + .searchbutton {
	transition-duration: 0.4s;
	-moz-transition-duration: 0.4s;
	-webkit-transition-duration: 0.4s;
	-o-transition-duration: 0.4s;
	background-color: white;
	color: black;
}

.search {
	position: absolute;
	left: 49px; /* Button width-1px (Not 50px/100% because that will sometimes show a 1px line between the search box and button) */
	background-color: white;
	outline: none;
	border: none;
	padding: 0;
	width: 0;
	height: 100%;
	z-index: 10;
	transition-duration: 0.4s;
	-moz-transition-duration: 0.4s;
	-webkit-transition-duration: 0.4s;
	-o-transition-duration: 0.4s;
}

.search:focus {
	width: 10rem; /* Bar width+1px */
	padding: 0 16px 0 0;
}

.expandright {
	left: auto;
	right: 49px; /* Button width-1px */
}

.expandright:focus {
	padding: 0 0 0 16px;
}
    </style>