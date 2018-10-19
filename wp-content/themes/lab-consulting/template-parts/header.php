	<!-- Preloader Start -->
	<div id="page-preloader">
		<div class="cssload-container">
			<div class="cssload-speeding-wheel">
			</div>
		</div>
	</div>
	<!-- Preloader Finish -->
	<header class="header-about">
		<div class="navigation">
			<div class="container">
				<div class="row no-gutters align-items-center">
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
						</nav>
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
		<?php if ( get_the_ID () ) { ?>
		 <div class="container container-fluid_plain-about">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-4 text-center text-lg-left">
						<h1 class="about-title">
							<title>
								<?php the_title()?>
							</title>
						</h1>
						<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
					</div>
					<div class="col-lg-8">
						<ul class="menu d-flex justify-content-md-center justify-content-lg-end">
							<?php wp_list_pages(array (
					            'child_of' => get_the_ID(),
					            'title_li' => 0
						    )); ?>
						</ul>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</header>