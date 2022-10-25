<aside>
  <div class="sidebar-item">
    <div class="sidebar-search">
      <?php get_search_form(); ?>
    </div>
  </div>
  <div class="sidebar-item pt-4">
    <h4 class="border-bottom pb-2">All Services</h4>
    <div class="service-page-menu">
      <ul class="menu-style-01">
        <?php
        $args = array('numberposts' => -1, 'order' => 'DESC', 'orderby' => 'title', 'post_type' => 'services');
        $postslist = get_posts($args);
        foreach ($postslist as $post) {
          setup_postdata($post); ?>
          <li><a href="<?php the_permalink(); ?>"><i class="fas fa-arrow-right"></i> <?php the_title(); ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</aside>