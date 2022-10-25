<?php 
	$permalink=get_the_permalink();
	$image_src=get_the_post_thumbnail_url();
	$title=get_the_title();
	$content=get_the_content();
?>
<div class="zero-theme-post-item">
	<?php if(has_post_thumbnail()){?>
	<div class="zero-theme-post-image">
		<img class="h-100 w-100 object-fit-cover" loading="lazy" src="<?php echo $image_src;?>" alt="<?php if($title){ echo $title;}?>">
	</div>
	<?php } ?>
	<div class="zero-theme-post-content pt-md-0 pt-3">
		<?php if( !has_category( 'Uncategorized' ) ) { ?>
		<div class="categories"><?php the_category();?></div>  
		<?php }

		if ( !is_singular()){?>
		<h5 class="zero-theme-post-title"><a href="<?php echo $permalink;?>"><?php echo $title;?></a></h5>
		<?php }else{ 
			echo '<h5 class="zero-theme-post-title">'.$title.'</h5>';
		}?>
		<div class="zero-theme-post-description">
			<?php if($content){
	if ( is_singular()){
		the_content();
	}else{
		echo wp_trim_words($content,30,'...');
	}} ?>
			<div class="post-meta">
				<span><?php the_author();?></span><span class="post-date"><?php the_time('F j, Y'); ?></span>
			</div>
		</div>
	</div>
</div>