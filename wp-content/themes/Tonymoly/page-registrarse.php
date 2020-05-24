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
      <h1>Regístrate!</h1>
    </div>


    <div class="login-block -narrow">

      <?php echo do_shortcode('[user_registration_form id="28"]') ?>

    </div>

    <footer class="sign-up-footer">
      <p>¿Ya estas registrado? <a href="<?php echo get_home_url() ?>/index.php/iniciar-sesion">Iniciar Sesión</a></p>
    </footer>
  </div>

</div>
</section>

<section id="btn-top">
  <span class="ir-arriba glyphicon glyphicon-chevron-up">
  </span></section>

  <?php  get_footer(); ?>

