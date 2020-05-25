<section class="main-tv">
  <div class="">
    <div class="container main-title__general main-title__general--center">
      <p>TONY. <span>TV</span></p>
    </div>
    <div class="main-tv__content">
      <?php $args = array( 'post_type' => 'tonytv');?>   
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>
        <div class="main-tv__item">
          <div class="main-tv__card">
            <div class="main-tv__img">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
              <div class="main-tv-oval">
                <i class="fa fa-play" aria-hidden="true"></i>
              </div>
            </div>
            <div class="main-tv__box">
              <div class="font-general main-tv__date">
                <p>Marzo 26, 2020</p>
              </div>
              <div class="font-general main-tv__description">
                <p><?php echo excerpt(15); ?></p>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>

    </div>
  </div>
</section>
