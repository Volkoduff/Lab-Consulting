<?php 
/*
Template Name: Услуги
Template Post Type: post, page, product
*/
 ?>

 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part('template-parts/head') ?>
<?php get_template_part('template-parts/header') ?>
	<section class="legal">
		<div class="container">
			<div class="row align-items-md-center text-center ">
				<div class="col-lg-3 col-md-4">
					<img src="<?php bloginfo('template_directory') ?>/img/circle.png" class="circle-wrap__img" alt="working">
				</div>
				<div class="col-lg-4 col-md-8 text-md-left">
					<div class="support">
						<h3 class="support-title">
							<?php the_field('support-title'); ?>
						</h3>
						<p class="support-text">
							<?php the_field('support-text'); ?>
						</p>
					</div>
				</div>
				<div class="col-lg-5 d-flex justify-content-end">
					<ul class="services">
						<li class="services__item d-flex">
							<a href="#" class="services__link">
								<?php the_field('service-item1'); ?>
							</a>
						</li>
						<li class="services__item d-flex">
							<a href="#" class="services__link">
								<?php the_field('service-item2'); ?>
							</a>
						</li>
						<li class="services__item d-flex">
							<a href="#" class="services__link">
								<?php the_field('service-item3'); ?>
							</a>
						</li>
						<li class="services__item d-flex">
							<a href="#" class="services__link">
								<?php the_field('service-item4'); ?>
							</a>
						</li>
						<li class="services__item d-flex">
							<a href="#" class="services__link">
								<?php the_field('service-item5'); ?>
							</a>
						</li>
						<li class="services__item d-flex">
							<a href="#" class="services__link">
								<?php the_field('service-item6'); ?>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="second-category">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="main">
						<div class="main-content">
							<h2 class="main-content__title">
								<?php the_field('service-item2_title'); ?>
							</h2>
							<p class="main-content__text">
								But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.
							</p>
							<p class="main-content__text">
								To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
							</p>
							<p class="main-content__text">
								To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
							</p>
							<p class="main-content__text">
								Mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.
							</p>
							<p class="main-content__text">
								To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
							</p>
							<p class="main-content__text">
								No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. 
							</p>
						</div>
						<div class="consultation">
							<h5 class="consultation__title">
								Нужна бесплатная консультация?
							</h5>
							<div class="consultation__wrap d-flex align-items-center">
								<button type="button" class="consultation__link modal-button">
									Оставить заявку
								</button>
								<a href="tel:+380487542356" class="tel">
									+38 (048) 754-23-56
								</a>
							</div>
							<div class="consultation__element d-flex justify-content-between">
								<p class="consultation__text">
									Наши консультанты свяжутся с Вами максимально быстро и ответят на все интересующие Вас вопросы
								</p>
								<img src="<?php bloginfo('template_directory') ?>/img/call.png" class="consultation__call" alt="call">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="side-bar"> 
						<div class="navigation-block">
							<h4 class="navigation-block__title">
								Навигация
							</h4>
							<ul class="navigation-block__element">
								<li class="navigation-block__item">
									<a href="#" class="navigation-block__link">
										Подпункт номер один
									</a>
								</li>
								<li class="navigation-block__item">
									<a href="#" class="navigation-block__link">
										Второй подпункт
									</a>
								</li>
								<li class="navigation-block__item">
									<a href="#" class="navigation-block__link">
										Третья подкатегория c длинным названием
									</a>
								</li>
								<li class="navigation-block__item">
									<a href="#" class="navigation-block__link">
										Категория номер четыре
									</a>
								</li>
							</ul>
						</div>
						<div class="reviews">
							<h4 class="reviews__title">
								Отзывы
							</h4>
							<div class="slider">
							  <div class="slider__item">
							  	<div class="slider__element">
							  		<img src="<?php the_field('person-photo1'); ?>" alt="icon" class="slider__img">
							  	</div>
							  	<p class="slider__name">
							  		<?php the_field('person-name1'); ?>
							  	</p>
							  	<p class="slider__review">
							  		<?php the_field('person-reviews1'); ?>
							  	</p>
							  	<a href="#" target="_blank">
							  		<i class="fab fa-facebook-f">
							  		</i>
							  	</a>
							  </div>
							  <div class="slider__item">
							  	<div class="slider__element">
							  		<img src="<?php the_field('person-photo2'); ?>" alt="icon" class="slider__img">
							  	</div>
							  	<p class="slider__name">
							  		<?php the_field('person-name2'); ?>
							  	</p>
							  	<p class="slider__review">
							  		<?php the_field('person-reviews2'); ?>
							  	</p>
							  	<a href="#" target="_blank">
							  		<i class="fab fa-facebook-f">
							  		</i>
							  	</a>
							  </div>
							  <div class="slider__item">
							  	<div class="slider__element">
							  		<img src="<?php the_field('person-photo3'); ?>" alt="icon" class="slider__img">
							  	</div>
							  	<p class="slider__name">
							  		<?php the_field('person-name3'); ?>
							  	</p>
							  	<p class="slider__review">
							  		<?php the_field('person-reviews3'); ?>
							  	</p>
							  	<a href="#" target="_blank">
							  		<i class="fab fa-facebook-f">
							  		</i>
							  	</a>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_template_part('template-parts/footer') ?>