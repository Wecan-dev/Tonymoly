<?php get_header(); ?>
<div class="pd-top">
	<div class="main-navsingletv">
		<div class="main-navsingletv__arrowl">
			<a href="<?php echo bloginfo('url'); ?>/blog">
				<i class="fa fa-angle-left" aria-hidden="true"></i>
			</a>
		</div>
		<div class="container main-title__general main-title__general--center">
			<p>Blog</p>
		</div>
	</div>
	<?php while (have_posts()) : the_post(); ?>
		<section class="main-blog main-singletv">
			<div class="container">
				<div class="main-blog__content main-generaltv__content">
					<div class="main-blog__item">
						<div class="main-blog__card">
							<nav aria-label="breadcrumb" class="nav-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item"><a href="#">Library</a></li>
									<li class="breadcrumb-item active" aria-current="page">Data</li>
								</ol>
							</nav>
							<a href="">
								<div class="main-blog__img main-singletv__img">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
								</div>
							</a>
							<div class="main-blog__box main-blogsingle__box">
								<div class="main-generaltv__box">
									<div class="main-blogsingle__categorie">
										<p>#Fashion</p>
									</div>

								</div>
								<a href="#" class="font-general main-blog__title main-singleblog__title">
									<p>

										<?php the_title(); ?>
									</p>
								</a>
								<div class="main-sigleblog__date">
									<p>AUGUST 17, 2019</p>
								</div>
								<div class="main-singleblog__tags">
									<a href="#" class="main-singleblog__tagsa">
										Trendy
									</a>
									<a href="#" class="main-singleblog__tagsa">
										Confirmable
									</a>
									<a href="#" class="main-singleblog__tagsa">
										Recommend 
									</a>
								</div>
								<div class="font-general main-blog__description main-singleblog__description" >
									<p>
										<?php the_content(); ?>
									</p>
								</div>
							</div>
						</div>
					</div>          
				</div>
			</div>
		</section>

		<section class="main-goup">
			<div class="container">
				<div class="main-goup__btn">
					<a class="btn_custom btn--medium btn--filledTransparentB" href="#">
						CARGAR MAS COMENTARIOS
					</a>
				</div>
			</div>
		</section>
		<section class="main-tv">
			<div class="">
				<div class="container main-title__general main-title__general--colorfont ">
					<p>Continua Leyendo</p>
				</div>
				<div class="main-tv__content">
					<div class="main-tv__item">
						<div class="main-tv__card">
							<div class="main-tv__img main-singleblog__imgtv">
								<img src="https://images.unsplash.com/photo-1496440737103-cd596325d314?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="">


							</div>
							<div class="main-tv__box">
								<div class="main-blogsingle__categories">
									<p>SHOPPING</p>
								</div>
								<div class="font-general main-tv__description">
									<p>Taylor Swift's Vogue Cover Looks Like The Uncle Sam……</p>
								</div>
								<div class="font-general main-tv__date">
									<p>AUGUST 17, 2019</p>
								</div>
							</div>
						</div>
					</div>
					<div class="main-tv__item">
						<div class="main-tv__card">
							<div class="main-tv__img main-singleblog__imgtv">
								<img src="https://images.unsplash.com/photo-1500336624523-d727130c3328?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80g" alt="">
							</div>
							<div class="main-tv__box">
								<div class="main-blogsingle__categories">
									<p>UNBOTHERED</p>
								</div>
								<div class="font-general main-tv__description">
									<p>Taylor Swift's Vogue Cover Looks Like The Uncle Sam…</p>
								</div>
								<div class="font-general main-tv__date">
									<p>AUGUST 17, 2019</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	<?php endwhile; ?>

	<?php get_footer(); ?>