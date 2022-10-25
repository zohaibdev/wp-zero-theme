<?php

/**
 * Template for displaying search forms in Zero Theme
 *
 */
?>

<form role="search" method="get" class="search-form d-flex align-items-center position-relative w-100" action="<?php echo esc_url(home_url('/')); ?>">
	<label class="mb-0 d-block w-100">
		<span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'zero-theme'); ?></span>
		<input type="search" class="search-field px-2 py-1 w-100 form-control" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'zero-theme'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit position-absolute h-100  btn btn-primary border-0"><span class="search-form-icon"><i class="far fa-search"></i></span></button>
</form>