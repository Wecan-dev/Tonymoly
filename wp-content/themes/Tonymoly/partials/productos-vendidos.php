
<section class="main-product">
  <div class="container">
    <div class="main-title__between">
      <div class="main-title__general">
        <p>Productos mas Vendidos</p>
      </div>
      <div class="main-subtitle">
        <a href="<?php bloginfo('url'); ?>/shop">Ver todos</a>
      </div>
    </div>
    <div class="main-product__content">
      <?php $args = array( 'post_type' => 'product');?>   
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>
        <div class="main-product__item">
          <a href="<?php the_permalink(); ?>">
            <div class="main-product__card">
              <div class="main-product__img">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
              </div>
              <div class="main-product__bag">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/bag-black.svg" alt="">

              </div>
              <div class="main-product__like">
                <i class="fa fa-heart-o" aria-hidden="true"></i>
              </div>
              <div class="main-product__box">
                <div class="main-title__categories title-black">
                  <p><?php the_title(); ?></p>
                </div>
                <div class="main-product__description">
                  <p><?php the_content() ?>   </p>
                </div>
                <div class="main-title__categories">
                  <p><?php echo $product->get_price_html(); ?></p>
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php endwhile; ?>


    </div>
  </div>
</section>