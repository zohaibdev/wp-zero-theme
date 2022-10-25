<?php

/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="content-area pd-50">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>