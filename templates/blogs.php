<?php
/**
 * template name: Blogs 
 */
get_header();?>
<section class="blogs py-lg-5 pb-3 pt-3">
  <div class="container">
     <div class="row">
       <div class="col-lg-8">
         <div class="row no-gutters">
            <?php 
               query_posts(array( 
               'post_type' => 'post',
               'showposts' => 6,
               ) );  ?>
               <?php
               while (have_posts()) : the_post(); ?> 
               <div class="col-12 blogs-item py-4 border-bottom">
                 <?php get_template_part('templates/content', get_post_format());?>
               </div>
               <?php endwhile; wp_reset_query(); ?>
         </div>
       </div>
       <div class="col-lg-4 pl-lg-4 pt-4 pt-lg-0">
          <?php get_sidebar();?>
       </div>
     </div>
  </div>
</section>
<?php get_footer();?>