<?php get_header(); ?>

<section class="search-results">
<?php
$s=get_search_query();
$args = array(
                's' =>$s
            );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<div class='search-header py-4 pb-2 text-center bg-light mb-5'><h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2></div>");?>
      <div class="container">
      <?php  while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                    <div class="zero-theme-search-result d-flex my-4">
                     <?php if(has_post_thumbnail()){ ?>
                      <div class="zero-theme-search-result-image">
                        <?php the_post_thumbnail('small-thumbnail');?>
                      </div>
                      <?php }?>
                      <div class="zero-theme-search-result-content px-4">
                        <h3><a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a></h3>
                        <?php if(!empty( get_the_content())){
                          echo wp_trim_words(get_the_content(),40,'...');
                         }?>
                      </div>
                    </div>
                 <?php
        }?>
        </div>
    <?php }else{
?>      <div class="container py-5">
        <h2 style='font-weight:bold;color:#000'>Nothing found for : <?php echo get_query_var('s'); ?> </h2>
        <div class="alert alert-info">
          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
        </div>
<?php } ?>
</section>

<?php get_footer(); ?>