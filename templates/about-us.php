























<?php
/**
 * template name: About 
 */

//page Fields
$sections=get_field('sections');
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php if(is_array($sections)){ $count=1; foreach($sections as $section){ ?>
<section class="about-section about-section<?php echo $count;?> <?php if($count%2==0){ echo 'about-section-even'; }else{ echo '';} ?> py-lg-5 py-4">
	<div class="container pb-3 py-md-3">
		<div class="row align-items-center">
			<div class="col-lg-6 mb-2 mb-lg-0 <?php if($count%2==0){ echo 'order-lg-1';}else{echo '';} ?>">
				<div class="section-content">
					<?php echo $section['content']; ?>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="section-image">
					<img class="img-fluid" loading="lazy" src="<?php echo $section['image']; ?>">
				</div>
			</div>
		</div>
	</div>
</section>

<?php $count++;} } ?>





<?php endwhile; wp_reset_query(); ?>
<?php
get_footer();
?>