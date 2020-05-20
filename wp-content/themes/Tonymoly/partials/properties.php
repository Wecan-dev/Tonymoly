<section class='main-properties' id='proyectos'>

  <?php $args = array( 'post_type' => 'propiedades');?>   
  <?php $loop = new WP_Query( $args ); ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class='main-properties__item'>
      <img alt='<?php the_title(); ?>' class='property-img w-100' src='<?php echo get_the_post_thumbnail_url(); ?>'>
      <div class='item-mask wow fadeInUp'>
        <img alt='Prato logo' class='property-logo' src='<?php the_field('logo');?>'>
        <h4 class='strong'><?php the_title(); ?></h4>
        <?php the_content(); ?>
        <?php if(get_field('link_landing')):?>
          <div class='item-mask__button'>
            <a class='btn btn-custom white' href='<?php the_field('link_landing');?>' target='blank'>Visitar Ahora</a>
          </div>
        <?php else:?>

        <?php endif;?>
      </div>
    </div>
  <?php endwhile; ?>
  <!-- <div class='main-properties__item'>
    <img alt='Prato' class='property-img w-100' src='<?php echo get_template_directory_uri();?>/assets/img/prato.jpg'>
    <div class='item-mask wow fadeInUp'>
      <img alt='Prato logo' class='property-logo' src='<?php echo get_template_directory_uri();?>/assets/img/logos/logo-prato.png'>
      <h4 class='strong'>Prato</h4>
      <h4>Apartamentos</h4>
      <div class='item-mask__area'>
        <span>Área</span>
        <br>
        70 m² hasta 87 m²
      </div>
      <div class='item-mask__price'>
        <span>Desde</span>
        $323.601.608
        <br>
        <small>Valor impuestos incluido*</small>
      </div>
      <div class='item-mask__button'>
        <a class='btn btn-custom white' href='http://67.205.183.131/Prato/' target='blank'>Visitar Ahora</a>
      </div>
    </div>
  </div>
  <div class='main-properties__item'>
    <img alt='livorno' class='property-img w-100' src='<?php echo get_template_directory_uri();?>/assets/img/livorno.jpg'>
    <div class='item-mask wow fadeInUp' data-wow-delay='0.5s'>
      <img alt='livorno logo' class='property-logo' src='<?php echo get_template_directory_uri();?>/assets/img/logos/logo-livorno.png'>
      <h4 class='strong'>Livorno</h4>
      <h4>Apartamentos</h4>
      <div class='item-mask__area'>
        <span>Área</span>
        <br>
        55 m² hasta 62 m²
      </div>
      <div class='item-mask__price'>
        <span>Desde</span>
        $251.913.401
        <br>
        <small>Valor impuestos incluido*</small>
      </div>
      <div class='item-mask__button'>
        <a class='btn btn-custom white' href='http://67.205.183.131/Livorno/' target='blank'>Visitar Ahora</a>
      </div>
    </div>
  </div> -->
</section>