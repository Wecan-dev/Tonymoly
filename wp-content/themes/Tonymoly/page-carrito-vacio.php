<?php get_header(); ?>
<?php get_template_part('partials/header-general'); ?>

<section class="carrito-vacio section-pb">
	<div class="container">
		<div class="carrito-vacio__content">
			<div class="content-vacio__img">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/img-carrito-vacio.png" alt="">
			</div>
			<div class="content-vacio__text">
				<h3>Oye, tu bolsa está vacía</h3>
				<p>
					No hay nada en tu bolsa. Vamos a agregar algunos productos!
				</p>
			</div>
			<div class="content-vacio__search">
				<a href="<?php echo bloginfo('url'); ?>/shop">BUSCAR PRODUCTOS <i class="fa fa-search" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
