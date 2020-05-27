<?php get_header(); ?>
<?php get_template_part('partials/header-general'); ?>

<style type="text/css">
  .title-concurso{
    display: flex;
    justify-content: end;
    align-items: end;
  }
  .title-concurso img{
    margin-right: 10px;
  }
  .title-concurso a{
    font-family: Muli;
    font-size: 15px;
    font-weight: bold;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.27;
    letter-spacing: normal;
    text-align: left;
    color: #46362b;
  }
  .title-concurso .textPink{
    color: #f75b75;
  }
</style>

<section class="main-blog section-pb">
  <div class="container">
    <div class="main-blog__content ">

      <?php $args = array( 'post_type' => 'concursos');?>   
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>

        <div class="main-blog__item">
          <div class="main-blog__card">
            <div >
              <div class="title-concurso"><img style="width: 20px;"src="<?php echo get_template_directory_uri(); ?>/assets/img/gift (1).png"><p > <a href="<?php the_permalink(); ?>">MAQUILLAJE DE NOCHE</a> <br>
                <span>Inicia el <span class="textPink">27 de junio</span> y finaliza el <span class="textPink">28 de julio</span></span></p>

              </div>
            </div>
            <div class="main-blog__img">
              <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
              </a>
            </div>
            <div class="main-blog__box">
              <div class="font-general main-blog__title">
               <a href="<?php the_permalink(); ?>">
                <p><?php the_title(); ?></p>
              </a>
            </div>
            <div class="font-general main-blog__description">
              <p><?php the_content(); ?></p>
            </div>
            <div class="main-sharetony__btn">
              <a href="<?php the_permalink(); ?>" class="btn_custom btn--medium btn--filled">PARTICIPAR</a>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>


  </div>
</div>
</section>

<?php get_footer(); ?>