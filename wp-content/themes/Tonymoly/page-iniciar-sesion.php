<?php 

if(is_user_logged_in() != NULL)
{
  header('Location: http://localhost/Tonymoly/');
} 

?>

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

<section id="iniciar-sesion" class="margin-top-page">
  <div class="container">
    <div class="title-page text-center">
      <h2><strong>Iniciar Sesión</strong></h2>
      <p>Inicia sesión rapido usando</p>
    </div>

    <div class="login-box">


      <div class="login-block">

        <!--        <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div> -->
       

       <div class="login-block -narrow">

        <?php

        if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>



<?php endif; ?>


<form class="login-form login-form-sesion" method="post">

  <?php do_action( 'woocommerce_login_form_start' ); ?>
  <div class="form-group">
    <label for="username" class="sr-only">Nombre de usuario</label>
    <input type="text"  name="username" id="username" autocomplete="username" placeholder="" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>     
  </div>       
  <div class="form-group">  
    <input type="password" placeholder="" name="password" id="password" autocomplete="current-password" />
    
  </div> 
  
  <?php do_action( 'woocommerce_login_form' ); ?>
  
  <p class="form-row form-row-sesion ">
    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
      
      <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" checked="checked" /> <strong><?php esc_html_e( 'Recuerdame', 'woocommerce' ); ?></strong>
    </label>
    <a class="forgot" href="<?php echo get_home_url() ?>/index.php/olvidaste-contrasena">Olvidaste tu contraseña?</a> 
  </p>
  <div class="action-login text-center">  
    <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
    <button type="submit" class="btn_custom btn--large btn--filledBlack" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Iniciar Sesión', 'woocommerce' ); ?></button>
  </div>

  <?php do_action( 'woocommerce_login_form_end' ); ?>

</form>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>



<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>

</div>

<footer class="sign-up-footer">
  <p>¿Aún no eres miembro? <a href="<?php echo get_home_url() ?>/index.php/registrarse"> Registrate gratis aquí</a></p>
</footer>
</div>

</div>
</section>

<section id="btn-top">
  <span class="ir-arriba glyphicon glyphicon-chevron-up">
  </span></section>

  <?php  get_footer(); ?>

