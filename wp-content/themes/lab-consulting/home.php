<?php 
/*
Template Name: Главная страница
Template Post Type: post, page, product
*/
 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part('template-parts/head') ?>

<body>
	<!-- Preloader Start -->
	<div id="page-preloader">
		<div class="cssload-container">
			<div class="cssload-speeding-wheel">
			</div>
		</div>
	</div>
	<!-- Preloader Finish -->
	<header class="header-home parallax-background">
		<div class="navigation">
			<div class="container">
				<div class="row align-items-center no-gutters">
					<div class="col-6 col-md-4">
						<a href="<?php echo get_option('home'); ?>/" class="logo">
							<img src="<?php bloginfo('template_directory') ?>/img/Logo.png" alt="LAB Consulting" class="logo-img img-fluid">
						</a>
					</div>
					<div class="d-none d-lg-block col-lg-6 menu-sandwich">
						<nav class="nav">
							<?php wp_nav_menu( array(
								'theme_location'  => '',
								'menu'            => 'Основное',
								'container'       => false,
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'nav__menu d-flex',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => '',
							) ); ?>
					</div>
					<div class="col-6 col-md-8 col-lg-2 d-flex justify-content-end">
						<button type="button" class="button modal-button">
							<i class="fa fa-phone">
							</i>
							<span class="button-text">
								Заказать звонок	
							</span>
						</button>
						<button type="button" class="sandwich d-md-block d-lg-none">
							<i class="fa fa-bars"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="offer">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="offer-main">
								<h1 class="offer-title">
									<?php the_field('main-title'); ?>
								</h1>
							<p class="offer-text">
								<?php the_field('main-title_text'); ?>
							</p>
							<ul class="offer-socials offer-wrap">
								<li class="offer-icons">
									<a href="#" target="_blank" class="offer-link offer-link__facebook">
										<i class="fab fa-facebook">
										</i>
									</a>
								</li>
								<li class="offer-icons">
									<a href="#" target="_blank" class="offer-link offer-link__twitter">
										<i class="fab fa-twitter">
										</i>
									</a>
								</li>
								<li class="offer-icons">
									<a href="#" target="_blank" class="offer-link offer-link__telegram">
										<i class="fab fa-telegram-plane ">
										</i>
									</a>
								</li>
							</ul>
						</div>
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="trust">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="trust-title">
						<?php the_field('trust-main_title'); ?>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<div class="trust-element">
						<div class="trust-element__image">
							<img src="<?php the_field('trust-icon1'); ?>" alt="icon">
						</div>
						<h5 class="trust-element__title">
							<?php the_field('trust-title_1'); ?>
						</h5>
						<p class="trust-element__text">
							<?php the_field('trust-text_1'); ?>
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="trust-element">
						<div class="trust-element__image">
							<img src="<?php the_field('trust-icon2'); ?>" alt="icon">
						</div>
						<h5 class="trust-element__title">
							<?php the_field('trust-title_2'); ?>
						</h5>
						<p class="trust-element__text">
							<?php the_field('trust-text_2'); ?>
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 mx-sm-auto">
					<div class="trust-element">
						<div class="trust-element__image">
							<img src="<?php the_field('trust-icon3'); ?>" alt="icon">
						</div>
						<h5 class="trust-element__title">
							<?php the_field('trust-title_3'); ?>
						</h5>
						<p class="trust-element__text">
							<?php the_field('trust-text_3'); ?>
						</p>
					</div>
				</div>
			</div>
			<a href=".mission" class="button-middle go_to">
				<?php the_field('button-middle_text'); ?>
			</a>
		</div>
	</section>
	<section class="letters">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="letters-element">
						<span class="letters-element__letter">
							<?php the_field('left-letter'); ?>
						</span>
						<h3 class="letters-element__title">
							<span class="letters-element__mod">
								<?php the_field('left-letter'); ?>
							</span>
							<?php the_field('word-1'); ?>
						</h3>
						<p class="letters-element__text">
							<?php the_field('letters-text_1'); ?>
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="letters-element">
						<span class="letters-element__letter">
							<?php the_field('mid-letter'); ?>
						</span>
						<h3 class="letters-element__title">
							<span class="letters-element__mod">
								<?php the_field('mid-letter'); ?>
							</span>
							<?php the_field('word-2'); ?>
						</h3>
						<p class="letters-element__text">
							<?php the_field('letters-text_2'); ?>
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="letters-element">
						<span class="letters-element__letter">
							<?php the_field('right-letter'); ?>
						</span>
						<h3 class="letters-element__title">
							<span class="letters-element__mod">
								<?php the_field('right-letter'); ?>
							</span>
							<?php the_field('word-3'); ?>
						</h3>
						<p class="letters-element__text">
							<?php the_field('letters-text_3'); ?>
						</p>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>
	<section class="about-company parallax-window">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="mission">
						<h4 class="mission-title">
							<?php the_field('mission-title'); ?>
						</h4>
						<div class="mission-wrap d-flex">
							<div class="mission-element">
								<p class="mission-element__text">
									<?php the_field('mission-text_left-top'); ?>
								</p>
								<p class="mission-element__text">
									<?php the_field('mission-text_left-bottom'); ?>
								</p>
								<a href="#" class="mission-element__button">
									<?php the_field('button-more'); ?>
								</a>
							</div>
							<div class="mission-element mission-element_right">
								<p class="mission-element__text">
									<?php the_field('mission-text_right-top'); ?>
								</p>
								<p class="mission-element__text">
									<?php the_field('mission-text_right-bottom'); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="news">
						<h4 class="news-title">
							<?php the_field('news-title'); ?>
						</h4>
						<div class="news-element line-thin">
							<a href="#" class="news-element__link d-flex">
								<img src="<?php the_field('news-photo_1'); ?>" alt="icon" class="news-element__image">
								<div class="news-element__wrap">
									<p class="news-element__text">
										<?php the_field('news-text_1'); ?>
									</p>
									<p class="news-element__date">
										<?php the_field('news-text_1-date'); ?>
									</p>
								</div>
							</a>
						</div>
						<div class="news-element line-thin">
							<a href="#" class="news-element__link d-flex">
								<img src="<?php the_field('news-photo_2'); ?>" alt="icon" class="news-element__image">
								<div class="news-element__wrap">
									<p class="news-element__text">
										<?php the_field('news-text_2'); ?>
									</p>
									<p class="news-element__date">
										<?php the_field('news-text_2-date'); ?>
									</p>
								</div>
							</a>
						</div>
						<div class="news-element line-thin">
							<a href="#" class="news-element__link d-flex">
								<img src="<?php the_field('news-photo_3'); ?>" alt="icon" class="news-element__image">
								<div class="news-element__wrap">
									<p class="news-element__text">
										<?php the_field('news-text_2'); ?>
									</p>
									<p class="news-element__date">
										<?php the_field('news-text_2-date'); ?>
									</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_template_part('template-parts/footer') ?>