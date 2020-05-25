
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
					<div class="path"></div>
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
							<a href="">
								Preguntas Frecuentes
							</a> 
						</li>
						<li>
							<a href="">
								Cambios & Devoluciones
							</a> 
						</li>
						<li>
							<a href="">
								Metodos de pago
							</a> 
						</li>
						<li>
							<a href="">
								Politicas de envio
							</a> 
						</li>
						<li>
							<a href="">
								Términos y condiciones
							</a> 
						</li>
						<li>
							<a href="">
								Politicas de privacidad
							</a> 
						</li>
						<li>
							<a href="">
								Soporte tecnico
							</a> 
						</li>
						<li>
							<a href="">
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
							<a href="">
								Distribuir Tonymoly
							</a> 
						</li>
						<li>
							<a href="">
								Refiere y gana!
							</a> 
						</li>
						<li>
							<a href="">
								Wishlist
							</a> 
						</li>
						<li>
							<a href="">
								Categorias

							</a> 
						</li>
						<li>
							<a href="">
								Ofertas
							</a> 
						</li>
						<li>
							<a href="">
								Nuevo productos
							</a> 
						</li>
						<li>
							<a href="">
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
					<a class="accept" href="">Aceptar</a>
				</div>
			</div>
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