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
<link href='<?php echo get_template_directory_uri();?>/assets/css/accordion.css' rel='stylesheet'>
<link href="<?php echo get_template_directory_uri();?>/assets/img/favicon-32x32.png"  rel="icon" type="image/png" sizes="32x32">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@800;900&display=swap" rel="stylesheet">
<?php wp_head(); ?>

</head>
<body>
