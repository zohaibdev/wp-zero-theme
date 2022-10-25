<?php 
	$permalink=get_the_permalink();
	$image_src=get_the_post_thumbnail_url();
	$title=get_the_title();
	$content=get_the_content();
?>
<div class="zero-theme-post-item">
	<div class="zero-theme-post-content">
		<h5 class="zero-theme-post-title pb-3 border-bottom"> <?php echo $title;?></h5>
		<?php if(is_singular('post')) { ?>
			<div class="single-meta">
				<?php if( !has_category( 'Uncategorized' ) ) { ?>
				<div class="categories"><?php the_category();?></div> 
				<?php } ?>
				<div class="post-meta">
					<span><?php the_author();?></span><span class="post-date"><?php the_time('F j, Y'); ?></span>
				</div>
			</div>
		<?php }?>
		<div class="zero-theme-post-description pb-3">
			<?php the_content();?>
		</div>
	</div>
</div>