<aside>
  <div class="sidebar-item">
    <div class="sidebar-search">
       <?php get_search_form(); ?>
    </div>
  </div>
    <div class="sidebar-item pt-4">
    <h4 class="border-bottom pb-2">Recent Posts</h4>
    <div class="sidebar-recent-posts">
      <?php
      
        $args = array('numberposts' => 4, 'order'=> 'DESC', 'orderby' => 'title');
        $postslist = get_posts( $args );
        foreach ($postslist as $post){ setup_postdata($post); ?> 
            <div class="media py-3 border-bottom">
              <?php if(has_post_thumbnail()){ ?>
              <img class="mr-3 w-25" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
              <?php }?>
              <div class="media-body">
                <h6 class="mt-0 mb-0"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h6>
                <div class="post-meta">
                     <span><?php the_author();?></span><span class="post-date"><?php the_time('F j, Y'); ?></span>
                </div>
                <!--<php echo wp_trim_words(get_the_excerpt(),6,'...');?>-->
              </div>
            </div>
        <?php } ?> 
    </div>
  </div>
</aside>














