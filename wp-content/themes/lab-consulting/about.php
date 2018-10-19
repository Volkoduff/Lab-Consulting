<?php 
/*
Template Name: О компании
Template Post Type: post, page, product
*/
 ?>


 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part('template-parts/head') ?>
<?php get_template_part('template-parts/header') ?>
	<section class="advantages">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="advantages-wrap">
						<h2 class="advantages-title">
							<?php the_field('advantages-title'); ?>
						</h2>
						<div class="advantages-main">
							<p class="advantages-main__text advantages-main__text_left">
								<?php the_field('advantages-text_left'); ?>
							</p>
							<p class="advantages-main__text">
								<?php the_field('advantages-text_right'); ?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<ul class="advantages-block">
						<li class="advantages-item">
							<div class="advantages-icon">
								<img src="<?php the_field('adv-icon'); ?>" alt="icon">
							</div>
							<div class="advantages-element">
								<h3 class="advantages-item__title">
									<?php the_field('adv1-title'); ?>
								</h3>
								<div class="advantages-item__text">
									<?php the_field('adv1-text'); ?>
								</div>
							</div>
						</li>
						<li class="advantages-item">
							<div class="advantages-icon">
								<img src="<?php the_field('adv-icon'); ?>" alt="icon">
							</div>
							<div class="advantages-element">
								<h3 class="advantages-item__title">
									<?php the_field('adv2-title'); ?>
								</h3>
								<div class="advantages-item__text">
									<?php the_field('adv2-text'); ?>
								</div>
							</div>
						</li>
						<li class="advantages-item">
							<div class="advantages-icon">
								<img src="<?php the_field('adv-icon'); ?>" alt="icon">
							</div>
							<div class="advantages-element">
								<h3 class="advantages-item__title">
									<?php the_field('adv3-title'); ?>
								</h3>
								<div class="advantages-item__text">
									<?php the_field('adv3-text'); ?>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="power">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="power-title">
						<?php the_field('power-title'); ?>
					</h2>
				</div>
			</div>
			<div class="row">
				<?php echo do_shortcode('[rl_gallery id="99"]'); ?>
			</div>
		</div>
	</section>
<?php get_template_part('template-parts/footer') ?>