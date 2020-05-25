<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>
<div class="main-navbar__profile">
        <div class="main-navbar__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/profile.png" alt="">
        </div>
        <div class="main-navbar__info">
          <div class="main-navbar__name">
            <p>Hola Camila!</p>
          </div>
          <div class="main-navbar__complete">
            <span>Completa la información de perfil</span>
          </div>
        </div>
      </div>
<nav class="woocommerce-MyAccount-navigation">
	<ul>
		<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
			<li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
				<div class="main-list_nav">
					<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>">
					<i class="fa fa-user-o" aria-hidden="true"></i>
					<?php echo esc_html( $label ); ?></a>
				</div>
				<i class="fa fa-angle-right" aria-hidden="true"></i>
			</li>
		<?php endforeach; ?>
	</ul>
</nav>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>
