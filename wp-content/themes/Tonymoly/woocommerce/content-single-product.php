<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div class="product-details" id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>
	<div style="background: #fff;">
		<div class="main-share__products">
			<div class="main-share__product">
				<p class="font-general">Refiere y gana dinero!</p>
				<span class="font-general">Haz click aqui y adquiere tu código</span>
			</div>
			<div class="main-share__product">
				<div class="main-share__producticons">
					<a class="main-footer__redescircle" href="">
						<i class="fa fa-facebook" aria-hidden="true"></i>
					</a>
					<a class="main-footer__redescircle" href="">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</a>
					<a class="main-footer__redescircle" href="">
						<i class="fa fa-pinterest-p" aria-hidden="true"></i>
					</a>
					<a class="main-footer__redescircle" href="">
						<i class="fa fa-whatsapp" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="summary entry-summary product-details__text container">
			<h1 class="title__products"><?php the_title(); ?></h1>
			<p class="description__products"><?php the_content(); ?></p>
			<?php
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );
			?>
			 <div class="main-share__productsbtn">
				<a class="btn_custom btn--medium btn--filledTransparentB" href="#">
					WISHLIST
					<i class="fa fa-heart-o" aria-hidden="true"></i>
				</a>
				<a class="btn_custom btn--medium btn--filledTransparentB" href="#">
					COMPARTIR
					<img src="<?php echo get_template_directory_uri();?>/assets/img/share.svg" alt="">
				</a>
			</div>
			<div class="main-notes__products">
				<ul>
					<li >
						<i class="fa fa-headphones" aria-hidden="true"></i>
						<p class="font-general">Servicio al cliente: 3175038594   <a href="">Click aquí</a></p>
					</li>
					<li  >
						<img src="<?php echo get_template_directory_uri();?>/assets/img/truck.svg" alt="">
						<p class="font-general">Envio Standard 2 a 3 días</p>
					</li>
				</ul>
			</div>
			
			
		</div>
	</div>

	<div class="summary entry-summary product-details__text main-descriptionstab__products">
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="font-general nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Producto</a>
		</li>
		<li class="nav-item">
			<a class="font-general nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Modo de uso</a>
		</li>
		<li class="nav-item">
			<a class="font-general nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Ingredientes</a>
		</li>
		</ul>
		<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
			<div class="main-descriptionstab__product">
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas iste, explicabo in provident debitis vel dolore pariatur, sequi, ullam accusantium fuga repellat harum. Excepturi, quibusdam aliquam hic aliquid praesentium aperiam.</p>
			</div>
		</div>
		<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
		<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
		</div>
	</div>
	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>


<section class="main-product">
  <div class="container">
    <div class="">
      <div class="main-title__general">
        <p>PRODUCTOS SIMILARES</p>
      </div>
      
    </div>
    <div class="main-product__content">
      <?php $args = array( 'post_type' => 'product');?>   
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>
        <div class="main-product__item">
          <a href="<?php the_permalink(); ?>">
            <div class="main-product__card">
              <div class="main-product__img">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
              </div>
              <div class="main-product__bag">
                <a href="<?php bloginfo('url'); ?>/?add-to-cart=<?php the_id(); ?>">

                  <img src="<?php echo get_template_directory_uri();?>/assets/img/bag-black.svg" alt="">
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
