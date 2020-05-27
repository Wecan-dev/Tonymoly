<?php  get_header(); ?>
<?php get_template_part('partials/header-general'); ?>

<style type="text/css">
	.content-distribuidor{
		display: flex;
		justify-content: center;
	}

	.content-text-border{
		border-radius: 6px;
		box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
		border: solid 0.2px #95989a;
		background-color: #ffffff;
		border-left: 6px solid #767676;
	}
	.p-text-distribuidor{
		padding: 20px;
	}
	.content-distribuidor-text{
		padding: 0 25px 50px;
	}
	.title-distribuidor{
		padding: 15px 0px;
		font-family: Muli;
		font-size: 22px;
		font-weight: 600;
		font-stretch: normal;
		font-style: normal;
		line-height: 1.18;
		letter-spacing: normal;
		color: #242b37;
	}
	.p-text-distribuidor span{
		color: #f75b75;
	}
	.content-form-d{
		padding-top: 50px;
	}
	.content-form-d label{
		height: 20px;
		opacity: 0.9;
		font-family: Muli;
		font-size: 16px;
		font-weight: normal;
		font-stretch: normal;
		font-style: normal;
		line-height: 2.1;
		letter-spacing: 0.4px;
		text-align: left;
		color: #767676;
		padding-top: 20px;
		padding-bottom: 30px;
	}
	.content-form-d input{
		width: 100%;
		height: 45px;
		opacity: 0.5;
		border-radius: 6px;
		border: solid 1px #d2d2d2;
		background-color: #fafafa;
	}
	.form-button-distribuidor{
		background: #f65d77;
		width: 100%;
		padding: 25px;
		color: #fff;
		border: none;
		border-radius: 5px;
		margin-top: 50px;
		line-height: 1px;
		text-transform: uppercase;
	}

	.title-principal{
		font-size: 28px;
		font-weight: 600;
	}
	.title-secundario{
		font-size: 20px;
	}
</style>
<section>
	<div class="content-distribuidor-text"">
		

		<div class="content-distribuidor"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/06a3f2cbfd0f5c4fd9c960594da65444.png"></div>
		<div>
			<div>
				<p class="title-distribuidor"><span class="title-principal">Convierte en distribuidor,<br>
				</span><span class="title-secundario">Tenemos una idea de negocio para ti!</span></p>
				<div class="content-text-border">
					<p class="p-text-distribuidor">Ahora puedes hacer dinero compartiendo los productos de tonymoly con tus amigos y conocidos, es muy sencillo, en la vista de cada producto, presionas el botón de compartir, y así puedes compartir los productos linkeados a tu código de referido, asegúrate de que tus amigos al final de la compra ingresen tu código.
						Compartiendo tu código recibiras un <span>10%</span>de utilidad por cada producto, y tus amigos obtendrán un <span>5%</span> o <span>10%</span> de descuento este dinero podrás gastarlo en tonymoly o cobrarlo tu eres quien decide.</p>
					</div>

				</div>
			</div>
			<div class="content-form-d">
				<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?>
			</div>
			
		</div>
	</section>


	<?php get_footer(); ?>