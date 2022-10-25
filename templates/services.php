<?php

/**
 *  Template Name: Services
 */
get_header(); ?>

<section class="services-page pt-lg-5 pt-4 pb-md-4 pb-2">
  <div class="container">
    <?php if (get_the_content()) : ?>
      <div class="services-title">
        <?php the_content(); ?>
      </div>
    <?php endif ?>
    <div class="row">
      <?php
        $args = array('order' => 'DESC', 'orderby' => 'title', 'post_type' => 'services');
        $postslist = get_posts($args);
      ?>
      <?php if (count($postslist)) : ?>
        <?php foreach ($postslist as $post) : setup_postdata($post); ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <?php get_template_part('template-parts/content', 'service', get_post_format()); ?>
          </div>
        <?php endforeach; ?>
      <?php endif ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>