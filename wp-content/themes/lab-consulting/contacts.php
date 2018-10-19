<?php 
/*
Template Name: Контакты
Template Post Type: post, page, product
*/
 ?>


 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part('template-parts/head') ?>
<?php get_template_part('template-parts/header') ?>
	<section class="map">
		<div class="map-wrap">
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4905df60bfb41cdeb0d66fce1c88af934e4a0d5778d50883b3b9856dab920305&amp;width=100%25&amp;height=443&amp;lang=ru_RU&amp;scroll=false"></script>
		</div>
		<div class="map-info">
			<div class="container">
				<div class="row">
					<div class="col d-flex justify-content-lg-end">
						<div class="card">
							<div class="card-head">
								<div class="card-head__wrap d-flex justify-content-between ">
									<h2 class="card-head__title">
										LAB Consulting
									</h2>
									<ul class="card-head__socials d-flex">
										<li class="card-head__socials">
											<a href="#" target="_blank" class="card-head__icon offer-link">
												<i class="fab fa-facebook">
												</i>
											</a>
										</li>
										<li class="card-head__socials">
											<a href="#" target="_blank" class="card-head__icon offer-link">
												<i class="fab fa-twitter">
												</i>
											</a>
										</li>
										<li class="card-head__socials">
											<a href="#" target="_blank" class="card-head__icon offer-link">
												<i class="fab fa-telegram-plane">
												</i>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-wrap d-flex">
								<div class="card-contacts">
									<div class="card-contacts__tel">
										<a href="tel:+380487542354" class="card-contacts__link">
											<i class="fa fa-phone fa-phone_white">
											</i>
											+38 (048) 754-23-54
										</a>
									</div>
									<div class="card-contacts__tel">
										<a href="tel:+380487542354" class="card-contacts__link">
											<i class="fa fa-phone fa-phone_white">
											</i>
											+38 (048) 754-23-54
										</a>
									</div>
									<div class="card-contacts__adress d-flex">
										<i class="fa fa-location-arrow">
										</i>
										<address class="adress">
											<p>
												65000,
											</p>
											<p>
												Украина, г. Одесса
											</p>
											<p>
												Ул Базарная, 36
											</p>
										</address>
									</div>
									<a href="#" class="card-contacts__link">
										<i class="fa fa-envelope">
										</i>
										info@lab-consult.com
									</a>
								</div>
								<div class="card-right">
									<p class="card-right__text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</p>
									<p class="card-right__text card-right__text_bottom">
										Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_template_part('template-parts/footer') ?>