
<footer>
	<div class="container">
		<div class="main-footer__new">
			<div class="main-footer__titlenew">
				<p>Suscribete a nuestro newsletter!</p>
			</div>
			<div class="main-footer__titlenew main-footer__descriptionnew">
				<p>No te pierdas las mejores ofertas que lanzamos semanalmente </p>
			</div>
			<form action="">
				<div class="form-group">
					<input class="form-control" id="formGroupExampleInput" placeholder="CORREO ELECTRONICO" type="email">
				</div>
				<div class="main-suscripte">
					<a class="btn_custom btn--large btn--filledBlack" href="#" tabindex="-1">
						SUSCRIBIRTE
					</a>
				</div>
				<p class="main-footer__politicas"> Al suscribirte aceptas
					<a class="" target="_blank" href="#">
						términos y condiciones
					</a>
					la
					<a href="">la política de privacidad</a>
					y
					<a href="">tratamiento de datos personales </a>
				</p>
			</form>
			
			<p class="main-footer__titlecite">TONYMOLY</p>
			<p class="main-footer__subtitlecite">Siguenos en nuestras redes sociales!</p>

			<div class="main-footer__redes">
				<a class="main-footer__redescircle" href="">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</a>
				<a class="main-footer__redescircle" href="">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>
				<a class="main-footer__redescircle" href="">
					<i class="fa fa-pinterest-p" aria-hidden="true"></i>
				</a>
			</div>

			<ul class="main-footer__dates">
				<li>
					<i class="fa fa-headphones" aria-hidden="true"></i>
					<a href="">Lineas de atención y servicio al cliente</a>
				</li>

				<li>
					<div class="circle-small twitter">
						<i class="fa fa-twitter"></i>
					</div>
					<a href="">Mercadeo@tonymolycolombia.com</a>
				</li>
				<li>
					<div class="circle-small whatsapp">
						<i class="fa fa-whatsapp"></i>
					</div>

					<a href=""><span>Tel </span>3174281215 
					</a>
				</li>
			</ul>
			<div class="main-footer__content">
				<div class="main-footer__item">
					<div class="main-footer__titlelist">
						<p>Ayuda</p>
					</div>
					<ul>
						<li>
							<a href="<?php echo bloginfo('url'); ?>/fqa">
								Preguntas Frecuentes
							</a> 
						</li>
						<li>
							<a href="<?php echo bloginfo('url'); ?>/cambios-y-devoluciones">
								Cambios & Devoluciones
							</a> 
						</li>
						<li>
							<a href="<?php echo bloginfo('url'); ?>/metodos-de-pago">
								Metodos de pago
							</a> 
						</li>
						<li>
							<a href="<?php echo bloginfo('url'); ?>/politicas-de-envios">
								Politicas de envio
							</a> 
						</li>
						<li>
							<a href="<?php echo bloginfo('url'); ?>/terminos-y-condiciones">
								Términos y condiciones
							</a> 
						</li>
						<li>
							<a href="<?php echo bloginfo('url'); ?>/politicas-de-privacidad">
								Politicas de privacidad
							</a> 
						</li>
						<li>
							<a href="">
								Soporte tecnico
							</a> 
						</li>
						<li>
							<a href="<?php echo wp_logout_url( home_url() ); ?>">
								Cerrar sesión
							</a> 
						</li>
					</ul>
				</div>

				<div class="main-footer__item">
					<div class="main-footer__titlelist">
						<p>Tienda</p>
					</div>
					<ul>
						<li>
							<a href="">
								Sobre Tonymoly
							</a> 
						</li>
						<li>
							<a href='<?php echo bloginfo('url'); ?>/conviertete-en-distribuidor'>
								Distribuir Tonymoly
							</a> 
						</li>
						<li>
							<a href="href='<?php echo bloginfo('url'); ?>/refiere-y-gana'">
								Refiere y gana!
							</a> 
						</li>
						<li>
							<a href='<?php echo bloginfo('url'); ?>/categories'>
								Wishlist
							</a> 
						</li>
						<li>
							<a href='<?php echo bloginfo('url'); ?>/categories'>
								Categorias

							</a> 
						</li>
						<li>
							<a href='<?php echo bloginfo('url'); ?>/ofertas'>
								Ofertas
							</a> 
						</li>
						<li>
							<a href='<?php echo bloginfo('url'); ?>/producto-nuevo'>
								Nuevo productos
							</a> 
						</li>
						<li>
							<a href='<?php echo bloginfo('url'); ?>/blog'>
								Blog
							</a> 
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="main-footer__copy">
		<p>© 2020 Todos los derechos reservados <a href="">TONYMOLY COLOMBIA</a></p>
	</div>
</footer>
<!-- Modal -->
<div class="modal fade" id="Modallogout" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="main-modallogout__content">
			<div class="main-modallogout__item">
				<div class="main-modallogout__icon">
					<a href="">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/off.svg" alt="">
					</a>
				</div>
				<div class="main-modallogout__text">
					<p class="font-general"> Estas seguro de que quieres cerrar sesión?</p>
				</div>
			</div>
			<div class="main-modallogout__item">
				<div class="main-modallogout__btns">
					<a class="cancel" href="">Cancelar</a>
					<a class="accept" href="<?= wp_logout_url() ?>">Aceptar</a>
				</div>
			</div>
		</div>
      </div>     
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="ModalThanks" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog__Thanks modal-dialog-centered" role="document">
    <div class="modal-content modal-contentThanks">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <i class="fa fa-times-circle-o" aria-hidden="true"></i>
        </button>
      </div>     
      <div class="modal-body modal-body__modalthanks">
        <div class="main-Modalthanks__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/page-1.svg" alt="">
        </div>
        <div class="main-modalthanks__title">
          <p class="font-general">Gracias mercedes!</p>
        </div>
        <div class="main-modalthanks__description">
          <p class="font-general">Empieza a completar los requisitos para ganar!</p>
        </div>
        <div class="main-modalThanks__btn">
          <a href="" class="btn_custom btn--medium btn--filled">IR AL HOME</a>
        </div>
      </div>
    </div>
  </div>
</div>
<script src='<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js'></script>
<script src='<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'></script>
<script src='<?php echo get_template_directory_uri();?>/assets/js/wow.min.js'></script>
<script src='<?php echo get_template_directory_uri();?>/assets/js/slick.min.js'></script>
<script src='<?php echo get_template_directory_uri();?>/assets/js/settings-slick.js'></script>
<script src='<?php echo get_template_directory_uri();?>/assets/js/main.js'></script>
</div>
<?php wp_footer(); ?>
</body>

</html>