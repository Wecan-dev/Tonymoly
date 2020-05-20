<section class='main-slider' id='toscana-slider'>
  <?php $args = array( 'post_type' => 'banner');?>   
  <?php $loop = new WP_Query( $args ); ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class='main-slider__item' style='background-image:url(&#39;<?php echo get_the_post_thumbnail_url(); ?>&#39;);'>
      <div class='main-slider__box' data-animation='fadeInUp'>
        <?php the_content(); ?>
      </div>
    </div>

    <?php endwhile; ?>



  <!-- <div class='main-slider__item' style='background-image:url(&#39;<?php echo get_template_directory_uri();?>/assets/img/slider/slide-01.jpg&#39;);'>
    <div class='main-slider__box' data-animation='fadeInUp'>
      <div class='main-slider__info'>
        <h2 class='boldness'>
          Conecta
          <br>
          <span>
            con tus
            <i>sentidos</i>
          </span>
        </h2>
        <ul>
          <li>Observa la naturaleza</li>
          <li>Respira mejor aire</li>
          <li>Siente entorno campestre</li>
        </ul>
        <p class='boldness'>
          70.000 m
          <sup>2</sup>
        </p>
        <p class='mb-0'>de reserva natural</p>
      </div>
    </div>
  </div>
  <div class='main-slider__item' style='background-image:url(&#39;<?php echo get_template_directory_uri();?>/assets/img/slider/slide-02.jpg&#39;);'>
    <div class='main-slider__box' data-animation='fadeInUp'>
      <div class='main-slider__infoproject'>
        <img alt='Prato logo' class='property-logo' src='<?php echo get_template_directory_uri();?>/assets/img/logos/logo-prato-3x.png'>
        <h4>
          Prato
          <br>
          Apartamentos
        </h4>
        <div class='infoproject__address'>
          <span>Ubicación</span>
          <p>Loma de San José, Sabaneta</p>
        </div>
        <div class='infoproject__area'>
          <span>Área</span>
          <p>70 m² hasta 87 m²</p>
        </div>
        <div class='infoproject__price'>
          <span>Desde</span>
          <p>$323.601.608</p>
          <small>Valor impuestos incluido*</small>
        </div>
        </img>
      </div>
    </div>
  </div>
  <div class='main-slider__item' style='background-image:url(&#39;<?php echo get_template_directory_uri();?>/assets/img/slider/slide-03.jpg&#39;);'>
    <div class='main-slider__box' data-animation='fadeInUp'>
      <div class='main-slider__infoproject'>
        <img alt='Livorno logo' class='property-logo' src='<?php echo get_template_directory_uri();?>/assets/img/logos/logo-livorno-3x.png'>
        <h4>
          Livorno
          <br>
          Apartamentos
        </h4>
        <div class='infoproject__address'>
          <span>Ubicación</span>
          <p>Loma de San José, Sabaneta</p>
        </div>
        <div class='infoproject__area'>
          <span>Área</span>
          <p>55 m² hasta 62 m²</p>
        </div>
        <div class='infoproject__price'>
          <span>Desde</span>
          <p>$251.913.401</p>
          <small>Valor impuestos incluido*</small>
        </div>
        </img>
      </div>
    </div>
  </div> -->
</section>