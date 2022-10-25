<?php
/**
 * template name: FAQ 
 */
get_header(); ?>
<?php 
$faq = get_field('faq');
?>
<section class="faq py-5">
	<div class="container">
		<div class="faq-content">
			<h2>
				<?php echo the_field('title');?>
			</h2>
			<?php echo the_content();?>
		</div>
		<div id="accordion">
			<?php $count =1; foreach($faq as $faqitems){
	$faq_title=$faqitems['title'];
	$faq_content=$faqitems['content'];
			?>
			<div class="card my-3">
				<div class="card-header">
					<a class="card-link d-flex align-items-center justify-content-between <?php if($count>1){ echo 'collapsed';}?>" data-toggle="collapse" href="#collapse<?php echo $count; ?>"> <?php echo $faq_title; ?> <i class="far fa-chevron-down"></i></a>
				</div>
				<div id="collapse<?php echo $count;?>" class="collapse <?php if($count==1){ echo 'show';}?>" data-parent="#accordion">
					<div class="card-body"><?php echo $faq_content; ?></div>
				</div>
			</div>
			<?php $count++; } ?>
		</div>
	</div>
</section>
<?php
get_footer();
?>