<?php
/**
 * template name:Home
 * The template for displaying Home pages
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<!-- <section class="services-section">
  <div class="container">
    <div class="row mb-4">
        <div class="col-lg-7 col-md-8 ml-auto mr-auto text-center">
         <div class="services-content">
            <php echo $section1['content'];?>
         </div>
        </div>
    </div>
    <div class="row services zero-theme-posts">
      <php 
       $args = array('numberposts' => 4, 'order'=> 'DESC', 'orderby' => 'title', 'post_type' => 'services');    
        $postslist = get_posts( $args );
        foreach ($postslist as $post){ setup_postdata($post); ?> 
         <div class="col-lg-4 col-md-6 col-12 pb-4">
           <php get_template_part('template-parts/content','service'); ?>
         </div>
      <php } ?>
    </div>
  </div>
</section> -->


<!-- <section class="services-section">
  <div class="container">
    <div class="row mb-4">
        <div class="col-lg-7 col-md-8 ml-auto mr-auto text-center">
         <div class="services-content">
            <php echo $section1['content'];?>
         </div>
        </div>
    </div>
    <div class="row services zero-theme-posts">
      <php $args = array('numberposts' => 4, 'order'=> 'DESC', 'orderby' => 'title', 'post_type' => 'post');    
        $postslist = get_posts( $args );
        foreach ($postslist as $post){ setup_postdata($post); ?> 
       <div class="col-lg-4 col-md-6 col-12 pb-4">
         <php get_template_part('template-parts/content','service',get_post_format()); ?>
       </div>
      <php } ?>
    </div>
  </div>
</section>
 -->


<section class="services-section">
  <div class="container">
    <div class="row services zero-theme-posts-wrap" id="theme-posts">

    </div>
	 <button type="button" class="loadmore">More posts</button>
	  <span class="no-more-post"></span>
  </div>
</section>







<?php endwhile; ?>
<?php
get_footer();




