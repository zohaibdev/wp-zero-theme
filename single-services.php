










<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<section class="zero-theme-single-post py-md-5 py-4">
   <div class="container">
     <div class="row">
       <div class="col-lg-8 col-12 mb-lg-0 mb-md-5 mb-4">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation(
					array(
						'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link' ),
					)
				);
			} elseif ( is_singular( 'services' ) ) {
				// Previous/next post navigation.
				the_post_navigation(
					array(
						'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next: ') . ' </span> ' .
							'<span class="screen-reader-text">' . __( 'Next post:') . ' </span> ' .
							'<span class="post-title">%title <i class="far fa-long-arrow-alt-right"></i></span>',
						'prev_text' => '<span class="meta-nav" aria-hidden="true"><i class="far fa-long-arrow-alt-left"></i> ' . __( 'Previous: ') . '</span> ' .
							'<span class="screen-reader-text">' . __( ' Previous post:') . '</span> ' .
							'<span class="post-title">%title</span>',
					)
				);
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->
   </div>
   <div class="col-lg-4 col-12">
	<?php get_sidebar('service');?>
   </div>
  </div>
</div><!-- .content-area -->
<?php get_footer(); ?>