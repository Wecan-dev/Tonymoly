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
    <div class="main-navsingletv">
      <div class="main-navsingletv__arrowl">
        <a href="<?php echo bloginfo('url'); ?>/tony-tv">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
      </div>
      <div class="container main-title__general main-title__general--center">
        <p>TONY. <span>TV</span></p>
      </div>
    </div>

    <section class="main-blog main-singletv">
      <div class="container">
        <div class="main-blog__content main-generaltv__content">
          <div class="main-blog__item">
            <div class="main-blog__card">

              <a href="">
                <div class="main-blog__img main-singletv__img">
                  <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80" alt="">
                </div>
              </a>
              <div class="main-blog__box main-singletv__box">
                <div class="main-generaltv__box">
                  <div class="main-generaltv__dates">
                    <a href="">
                      <i class="fa fa-heart-o" aria-hidden="true"></i>
                      Like
                    </a>
                    <a href="">
                      <i class="fa fa-comment-o" aria-hidden="true"></i>
                      4 Comentarios
                    </a>
                    
                  </div>
                  <div class="font-general main-blog__date">
                    <p>Marzo 26, 2020</p>
                  </div>
                </div>
                <a href="#" class="font-general main-blog__title">
                  <p><?php the_title(); ?></p>
                </a>
                <div class="font-general main-blog__description">
                  <p><?php the_content(); ?>
                </p>
              </div>
            </div>
          </div>
        </div>          
      </div>
    </div>
  </section>

  <section class="main-goup">
    <div class="container">
      <div class="main-goup__btn">
        <a class="btn_custom btn--medium btn--filledTransparentB" href="#">
          CARGAR MAS COMENTARIOS
        </a>
      </div>
    </div>
  </section>

  
  <?php get_footer(); ?>

