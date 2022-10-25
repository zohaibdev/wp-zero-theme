<?php if (!is_front_page() && !is_404() && get_theme_mod('site_title_bar_active') == true) : ?>
    <?php $banner_image = (get_field('inner_banner')) ? get_field('inner_banner') : get_theme_mod('site_title_bar_bg'); ?>
    <section class="inner-banner" style="background-image:url(<?php echo $banner_image ?>);">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-lg-12 text-center text-white">
                    <div class="inner-page-content">
                        <h1 class="inner-page-title mb-2">
                            <?php echo (is_archive()) ? the_archive_title('<h3 class="page-title">', '</h3>') : get_the_title(); ?>
                        </h1>
                        <?php if (get_field('inner_content')) {
                            echo the_field('inner_content');
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>