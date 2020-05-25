<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

?>
<?php  get_header(); ?>
<?php get_template_part('partials/header-general'); ?>

<section id="iniciar-sesion" class="margin-top-page">
  <div class="container">
    <div class="title-page text-center">
      <h2><strong>Registro</strong></h2>
      <p class="">Crea tu cuenta rapido usando</p>

      <div class="main-share__btns">
        <div class="btn-share">
          <i class="fa fa-facebook"></i>
          <p>Facebook</p>
        </div>
        <div class="btn-share">
          <i class="fa fa-google-plus" aria-hidden="true"></i>
          <p>Google</p>
        </div>
      </div>
      <div class="main-sesion__text">
        <hr>
        <p class="font-general">O usa tu email</p>
      </div>
    </div>


    <div class="login-block -narrow">

      <?php echo do_shortcode('[user_registration_form id="28"]') ?>

    </div>

    <div class="main-sesion__politicas">
      <p class="font-general">Al clickear en ‘Registrarte’ aceptas nuestros 
        <a href="">términos y condiciones</a>, <a href="">políticas de privacidad</a> y 
        <a href="">tratamiento de datos</a>.
      </p>
    </div>
    <div class="main-sesion__question">
      <p class="font-general">No estas Registrado?</p>
      <div class="main-goup__btn">

        <a  class="btn_custom btn--medium btn--filledTransparentB" href="<?php echo bloginfo('url'); ?>/iniciar-sesion">Iniciar Sesión</a>
      </div>
    </div>

  </div>

</div>
</section>

<section id="btn-top">
  <span class="ir-arriba glyphicon glyphicon-chevron-up">
  </span></section>

  <?php  get_footer(); ?>

