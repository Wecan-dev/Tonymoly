<?php get_header(); ?>
<?php get_template_part('partials/header-general'); ?>
<section class="main-categories section-pb">
  <div class="">
    <div class="main_content-categories-w">
      <?php $args = array(

        'orderby' => 'slug',
        'order' => 'ASC'
      );
      $product_categories = get_terms('product_cat', $args);
      $count = count($product_categories);


      if ($count > 0) {
        foreach ($product_categories as $product_category) {
          ?>
          <?php $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);

          $images = wp_get_attachment_image_src($thumbnail_id, 'medium');

          ?>

          <div class="main-categories__item">
            <a href="<?php echo $url_category = get_term_link( $product_category ) ?>">
              <div class="main-categories__card">
                <div class="main-categories__img">
                  <img src="<?php echo $images[0]; ?>" alt="">
                </div>
                <div class="main-categories__box">
                  <div class="main-title__categories">
                    <p><?php echo $product_category->name; ?></p>
                  </div>
                </div>
              </div>
            </a>
          </div>


          <?php

        }
      }
      ?>


    </div>
    
  </div>
</section>


<?php get_footer(); ?>
