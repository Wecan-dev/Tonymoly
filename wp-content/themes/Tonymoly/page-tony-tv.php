<?php get_header(); ?>
<section class="main-blog">
  <div class="container">
    <div class="main-blog__content main-generaltv__content">

      <?php $args = array( 'post_type' => 'tonytv');?>   
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>

        <div class="main-blog__item">
          <div class="main-blog__card">
            <div class="main-generaltv__profile">
              <div class="main-generaltv__imgProfile">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/profile.png" alt="">
              </div>
              <div class="main-generaltv__info">
                <div class="main-generaltv__name">
                  <p>Louis Chandler</p>
                </div>
                <div class="main-generaltv__complete">
                  <span>Maquillador</span>
                </div>
              </div>
            </div>
            <a href="<?php the_permalink();?>">
              <div class="main-blog__img main-generaltv__img">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
              </div>
            </a>
            <div class="main-blog__box">
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
                <p><?php the_content(); ?></p>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>


    </div>
  </div>
</section>
<section class="main-ctshare">
  <div class="container">
    <div class="main-ctshare__content">
      <div class="main-ctshare__item">
        <div class="main-ctshare__text">
          <p>Comparte en TONY.<span>tv</span> un video, foto, tutoríal o review usando nuestros productos y participa en las premiaciones! </p>
        </div>
        <div class="main-ctshare__btn">
          <a class="btn_custom btn--medium btn--filledBlack  " href="#">
            CLICK AQUI PARA COMPARTIR
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="main-goup">
  <div class="container">
    <div class="main-goup__btn">
      <a class="btn_custom btn--medium btn--filledTransparentB" href="#">
        CARGAR MAS VIDEOS
      </a>
    </div>
  </div>
</section>


<?php get_footer(); ?>