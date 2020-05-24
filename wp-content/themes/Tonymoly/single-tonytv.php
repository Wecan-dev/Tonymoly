<?php get_header(); ?>
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
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
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

