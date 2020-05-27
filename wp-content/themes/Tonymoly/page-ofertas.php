<?php get_header(); ?>
<?php get_template_part('partials/header-general'); ?>
  <section class="main-productfull main-productfull__filter">
    <div class="container container__position">
      <div class="main-productfull__content">
        <div class="main-productfull__item">
          <div class="main-productfull__img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/blush.jpeg" alt="">
          </div>
          <div class="main-productFull__btn">
            <a class="btn_custom btn--small btn--filled arrowsline" href="#">
              Comprar      
            </a>
          </div>
        </div>
        <div class="main-productfull__item">
          <div class="main-productfull__img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/blush.jpeg" alt="">
          </div>
          <div class="main-productFull__btn">
            <a class="btn_custom btn--small btn--filled arrowsline" href="#">
              Comprar      
            </a>
          </div>
        </div>
        <div class="main-productfull__item">
          <div class="main-productfull__img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/blush.jpeg" alt="">
          </div>
          <div class="main-productFull__btn">
            <a class="btn_custom btn--small btn--filled arrowsline" href="#">
              Comprar      
            </a>
          </div>
        </div>
      </div>

      <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
        <span class="slider__label sr-only">
        </div>
      </span>
      <div class="main-producttabs__filter">
        <div class="main-productitem__filter">
          <a class="font-general" href="">FILTRAR POR</a>
          <img src="<?php echo get_template_directory_uri();?>/assets/img/sort.svg" alt="">
        </div>
        <div class="main-productitem__filter">
          <a class="font-general" href="">ORDENAR POR</a>
          <img src="<?php echo get_template_directory_uri();?>/assets/img/sort.svg" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="main-product section-pb">
    <div class="container">
      <div class="main-archiveproduct__content">
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
                  <a href="<?php bloginfo('url'); ?>/?add-to-cart=<?php the_id(); ?>">

                    <img src="<?php echo get_template_directory_uri();?>/assets/img/buy.svg" alt="">
                  </a>

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
                    <p>$12.00</p>
                    <!-- <p>< ?php echo $product->get_price_html(); ?></p> -->
                  </div>
                </div>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
        
      </div>
    </div>
  </section>
  

<?php get_footer(); ?>
