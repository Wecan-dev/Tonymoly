<?php get_header(); ?>
<?php get_template_part('partials/header-general'); ?>

<section class="carrito-vacio section-pb">
	<div class="container">
		<div class="carrito-vacio__content calificar-vacio__content">
			<h3>Calificar productos</h3>
			<div class="content-vacio__img">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/makeup.png" alt="">
			</div>
			<div class="content-vacio__text">
				<h3>Hola Mercedes!</h3>
				<p>
					Te invitamos a calificar nuestros productos,
					eres muy importante para nosotros y queremos conocer tu opinion. Saludos
				</p>
			</div>
			<div class="content-vacio__search">
				<a href="<?php echo bloginfo('url'); ?>/shop">BUSCAR PRODUCTOS <i class="fa fa-search" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
