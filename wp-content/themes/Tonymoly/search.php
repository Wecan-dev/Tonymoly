<?php get_header(); ?>
<?php get_template_part('partials/header-general'); ?>
<section class="main-product">
	<div class="container">
		<?php if (have_posts()): ?>


			<div class="main-product__content">
				<?php while (have_posts()) : the_post();  global $product; ?>
					<div class="main-product__item">
						<a href="<?php the_permalink(); ?>">
							<div class="main-product__card">
								<div class="main-product__img">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
								</div>
								<div class="main-product__bag">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/bag-black.svg" alt="">

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

									</div>
								</div>
							</div>
						</a>
					</div>
				<?php endwhile; ?>

			</div>
			<?php else: ?>

				<div>
					<div style="display: flex; justify-content: center; align-items: center; height: 50vh; font-size: 21px;">
						<strong>No se encontro ningun resultado</strong>
					</div>
				</div>
			<?php endif ?>
		</div>
	</section>
	<?php get_footer(); ?>