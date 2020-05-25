
<section class="main-blog">
  <div class="container">
    <div class="main-title__general main-title__general--center">
      <p>Blog</p>
    </div>
    <div class="main-blog__content">
     <?php $args = array( 'post_type' => 'post');?>   
     <?php $loop = new WP_Query( $args ); ?>
     <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>
      <div class="main-blog__item">
        <div class="main-blog__card">
          <div class="main-blog__img">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
          </div>
          <div class="main-blog__box">
            <div class="font-general main-blog__date">
              <p>Marzo 26, 2020</p>
            </div>
            <div class="font-general main-blog__title">
              <p><?php the_title(); ?></p>
            </div>
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