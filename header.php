<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php bloginfo('name'); ?> <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
</head>

<?php wp_head();
//Home page fields
$sliderItems = get_field('home_slider');
?>

<body <?php body_class(); ?>>
	<div class="wrapper">
		<?php if (is_home() || is_front_page()) { ?>
			<div class="loader" id="preloader">
				<div class="spinner-border" role="status">
					<span class="sr-only">Loading...</span>
				</div>
			</div>
		<?php } ?>
		<header>
			<nav class="navbar navbar-expand-md navbar-light" role="navigation">
				<div class="container">
					<a class="navbar-brand" href="<?php echo site_url() ?>">
						<img src="<?php echo get_theme_mod('logo'); ?>" alt="<?php echo bloginfo() ?>" class="img-fluid" />
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
						<span class="navbar-toggler-icon"></span>
					</button>
					<?php
					wp_nav_menu(array(
						'theme_location'    => 'header_menu',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav ms-auto',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					));
					?>
					<?php if (get_theme_mod('header_button_text') != false && get_theme_mod('header_button_link') != false) : ?>
						<div class="hd-btn">
							<a class="th-btn" href="<?php echo get_theme_mod('header_button_link') ?>"><span><?php echo get_theme_mod('header_button_text') ?></span></a>
						</div>
					<?php endif; ?>
				</div>
			</nav>
		</header>
		<!--header end-->


		<!--Slider Start-->
		<?php if (is_home() || is_front_page()) { ?>

			<section class="home-slider">
				<?php
				if (is_array($sliderItems)) {
					foreach ($sliderItems as $slideritem) {
						//fields variables
						$slider_buttons = $slideritem['buttons'];
				?>
						<div class="home-slider-item">
							<div class="home-slider-image">
								<img class="w-100 h-100 object-fit-cover" loading="lazy" src="<?php echo $slideritem['image']; ?>">
							</div>
							<div class="home-slider-content-wrap position-absolute w-100">
								<div class="container">
									<div class="row">
										<div class="col-lg-6 col-md-7 col-12">
											<div class="home-slider-content">
												<?php echo $slideritem['content']; ?>
												<?php if (is_array($slider_buttons)) { ?>
													<div class="home-slider-btns">
														<?php $count = 1;
														foreach ($slider_buttons as $button) { ?>
															<a class="slider-btn btn-<?php echo $count; ?>" href="<?php echo $button['link']['url'] ?>"><?php echo $button['link']['title']; ?></a>
														<?php $count++;
														} ?>
													</div>
												<?php  } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				<?php }
				} ?>
			</section>
		<?php } ?>

		<?php echo get_template_part('template-parts/titlebar');
