<?php

/**
 *
 */

get_header(); ?>

<section class="zero-theme-archive pt-5 pb-2">
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<?php if (have_posts()) : ?>
					<div class="row">
						<div class="col-lg-8">
							<div class="row">
								<div class="col-12 pb-4">
									<?php
									the_archive_title('<h3 class="page-title">', '</h3>');
									the_archive_description('<div class="taxonomy-description">', '</div>');
									?>
								</div>
							</div>
							<div class="row">
								<?php
								// Start the Loop.
								while (have_posts()) :
									the_post(); ?>

									<div class="col-lg-6">
										<?php get_template_part('template-parts/content', 'service', get_post_format()); ?>
									</div>
							<?php
								// End the loop.
								endwhile;

								// Previous/next page navigation.
								the_posts_pagination(
									array(
										'prev_text'          => __('Previous page', 'zerotheme'),
										'next_text'          => __('Next page', 'zerotheme'),
										'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'zerotheme') . ' </span>',
									)
								);

							// If no content, include the "No posts found" template.
							else :
								get_template_part('template-parts/content', 'none');

							endif;
							?>
							</div>
						</div>
						<div class="col-lg-4">
							<?php get_sidebar(); ?>
						</div>
					</div>
			</main><!-- .site-main -->
		</div><!-- .content-area -->
	</div>
</section>
<?php get_footer(); ?>