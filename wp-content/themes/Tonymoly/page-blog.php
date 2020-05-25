<?php get_header(); ?>
<?php get_template_part('partials/header-general'); ?>

<section class="main-blog">
  <div class="container">
    <div class="main-blog__content">

     <?php $args = array( 'post_type' => 'post');?>   
     <?php $loop = new WP_Query( $args ); ?>
     <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>

      <div class="main-blog__item">
        <div class="main-blog__card">
          <div class="main-blog__img">
            <a href="<?php the_permalink(); ?>">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </a>
          </div>
          <div class="main-blog__huincha">
            <p>STYLE</p>
          </div>
          <div class="main-blog__box">
            <div class="font-general main-blog__date">
              <p>Marzo 26, 2020</p>
            </div>
            <div class="font-general main-blog__title">
             <a href="<?php the_permalink(); ?>">
              <p><?php the_title(); ?></p>
            </a>
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

<section class="main-goup">
  <div class="container">
    <div class="main-goup__btn">
      <a class="btn_custom btn--medium btn--filledTransparentB" href="#">
        CARGAR MAS BLOGS
      </a>
    </div>
  </div>
</section>


<?php get_footer(); ?>