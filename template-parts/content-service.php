<?php 
$permalink = get_the_permalink();
$image_src = get_the_post_thumbnail_url();
$title = get_the_title();
$content = get_the_content();
?>             
<div class="services-item shadow rounded overflow-hidden">
	<?php if(has_post_thumbnail()){?>
	<div class="services-image scale">
		<img class="h-100 w-100 object-fit-cover" loading="lazy" src="<?php echo $image_src;?>" alt="<?php if($title){ echo $title;}?>">
	</div>
	<?php } ?>
	<div class="services-content text-center p-4">
		<h5 class="services-title"><a href="<?php echo $permalink;?>"><?php echo $title;?></a></h5>
		<div class="zero-theme-post-description">
			<?php echo wp_trim_words($content,30,'...');?>
			<a href="<?php the_permalink();?>" class="d-table mx-auto mt-3 service-btn">Read More <i class="far fa-long-arrow-right"></i></a>
		</div>
	</div>
</div>