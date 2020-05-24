<?php get_header(); ?>
<?php get_template_part('partials/header-general'); ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>	
<section class="cart-custom pt-0">
	<div class="top-cart">
		<p><span>1-3</span> Carrito de compras</p>
	</div>

	<?php echo do_shortcode('[woocommerce_cart]'); ?>
</section>
<?php get_footer(); ?>



