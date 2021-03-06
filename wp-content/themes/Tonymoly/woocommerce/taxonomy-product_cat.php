<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

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
          
        </div>
        <div class="main-productitem__filter">
          <a class="font-general" href="">ORDENAR POR</a>
          
        </div>
      </div>
    </div>
  </section>
<?php

wc_get_template( 'archive-product.php' );
get_footer(); ?>