<?php get_header(); ?>
<?php get_template_part('partials/header-general'); ?>


<section class="section-pb">
	<div class="container">
		<div class="servicio-cliente__content">
			<div class="content-cliente--img">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/img-servicio-cliente.png" alt="">
			</div>
			<div class="content-cliente--text">
				<h3>En que podemos ayudarte?</h3>
				<p>Puedes solicitar llamada, whatsapp o correo</p>
				<p>Tu eres nuestra prioridad!, para cualquier pregunta, solicitud o reclamación  que tengas no dudes en solicitar nuestra ayuda. Podemos llamarte, contactarte por WhatsApp, o puedes contactarnos vía email a tonymolycolombia@hotmail.com y con gusto te responderemos en el menor tiempo posible.
				</p>
			</div>
			<div class="content-cliente--redes">
				<p>Contactános usando:</p>
				<div class="content-cliente--btn">
					<div class="btn-cliente--redes btn-cliente--redes__mobile">
						<i class="fa fa-mobile"></i><a href="">Llamada</a>
					</div>
					<div class="btn-cliente--redes">
						<div class="circle-small whatsapp"><i class="fa fa-whatsapp"></i>
						</div><a href="">whatsapp</a>
					</div>
				</div>
				<a href="<?php echo bloginfo('url'); ?>/">ir al home</a>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>
