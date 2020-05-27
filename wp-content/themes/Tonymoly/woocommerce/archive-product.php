<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );


?>
<section class="main-product">
	<div class="container">

		<div class="main-product__content">
			<?php while (have_posts()) : the_post();  global $product; ?>
				<div class="main-product__item">
					<a href="<?php the_permalink(); ?>">
						<div class="main-product__card">
							<div class="main-product__img">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
							</div>
							<div class="main-product__bag">
								<a href="<?php bloginfo('url'); ?>/?add-to-cart=<?php the_id(); ?>">

									<img src="<?php echo get_template_directory_uri();?>/assets/img/buy.svg" alt="">
								</a>

							</div>
							<div class="main-product__like">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
							<div class="main-product__box">
								<div class="main-title__categories title-black">
									<p><?php the_title(); ?></p>
								</div>
								<div class="main-product__description">
									<p><?php the_content() ?>   </p>
								</div>
								<div class="main-title__categories">
									<p><?php echo $product->get_price_html(); ?></p>
								</div>
							</div>
						</div>
					</a>
				</div>
			<?php endwhile; ?>
			
		</div>
	</div>
</section>


<?php get_footer( 'shop' );  ?>
