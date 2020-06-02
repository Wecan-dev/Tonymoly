<?php get_header();?>
<?php get_template_part('partials/header-general'); ?>
<section>
	   <div class="modal-body modal-body__modalthanks">
        <div class="main-Modalthanks__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/page-1.svg" alt="">
        </div>
        <div class="main-modalthanks__title">
          <p class="font-general">Gracias por tu compra!</p>
        </div>
        <div class="main-modalthanks__description">
          <p class="font-general">Empieza a completar los requisitos para ganar!</p>
        </div>
        <div class="main-modalThanks__btn">
          <a href="<?php bloginfo('url'); ?>" class="btn_custom btn--medium btn--filled">IR AL HOME</a>
        </div>
      </div>
</section>
<?php get_footer();?>