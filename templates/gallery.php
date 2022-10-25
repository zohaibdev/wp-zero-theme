<?php
/**
 * template name: Gallery 
 */
$gallery=get_field('gallery');
get_header(); ?>
<section class="gallery py-4 py-lg-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mr-auto ml-auto">
				<div class="gallery-contant pb-md-4 pb-1 text-center">
				  <?php the_content();?>
				</div>
			</div>
		</div>
		<div class="row">
		  <?php foreach($gallery as $item){ 
		    $gallery_image = $item['image'];
		    $gallery_title = $item['title'];
		    $gallery_description = $item['description'];
		  ?>
			<div class="col-lg-4 col-md-6 col-12 pb-4">
				<div class="card">
                   <div class="card-image">
                    <a href="<?php echo $gallery_image['url'];?>" data-fancybox="gallery">
				      <img class="card-img-top h-100 w-100 object-fit-cover" src="<?php echo $gallery_image['sizes']['medium'];?>" alt="<?php echo $gallery_image['alt'];?>">
				    </a>
				    </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $gallery_title;?></h5>
                    <div class="card-description">
                    <?php if($gallery_description){
                      echo $gallery_description;
                     } ?>
                    </div>
                  </div>
                </div>
			</div>
		  <?php } ?>
	    </div>
	 </div>
</section>
<?php
get_footer();?>