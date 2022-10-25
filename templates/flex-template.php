<?php

/**Template Name: Flex Template */
get_header() ?>

<?php while (have_posts()) : the_post(); ?>
    <?php if (have_rows('sections')) : ?>
        <?php while (have_rows('sections')) : the_row(); ?>
            <?php if (get_row_layout() == 'faqs') : ?>
                <?php $sc_ex_classes = (get_sub_field('extra_classes')) ? get_sub_field('extra_classes') : '' ?>
                <section class="faqs <?php echo $sc_ex_classes ?>">
                    <div class="container">
                        <div class="title-block">
                            <?php display_text(get_sub_field('title'), get_sub_field('title_tag'), get_sub_field('title_extra_classes')) ?>
                        </div>
                        <?php if (have_rows('faqs')) : ?>
                            <div class="accordion faqs-block" id="accordion">
                                <?php $count = 1 ?>
                                <?php while (have_rows('faqs')) : the_row(); ?>
                                    <?php if (get_sub_field('question') != null && get_sub_field('answer')) : ?>
                                        <div class="accordion-item">
                                            <div class="accordion-header" id="heading-<?php echo $count ?>">

                                                <button class="accordion-button <?php echo ($count > 1) ? 'collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#Item-<?php echo $count ?>" aria-expanded="<?php echo ($count == 1) ? 'true' : 'false' ?>" aria-controls="Item-<?php echo $count ?>">
                                                    <?php the_sub_field('question') ?>
                                                </button>
                                            </div>
                                            <div id="Item-<?php echo $count ?>" class="accordion-collapse collapse <?php echo ($count == 1) ? 'show' : '' ?>" aria-labelledby="heading-<?php echo $count ?>" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <?php the_sub_field('answer') ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php $count++ ?>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>
            <?php elseif (get_row_layout() == 'two_column_image_content_block') : ?>
                <?php $sc_ex_classes = (get_sub_field('extra_classes')) ? get_sub_field('extra_classes') : '' ?>
                <section class="two-column-content-block <?php echo $sc_ex_classes ?>">
                    <div class="container">
                        <div class="row">
                            <?php if (get_sub_field('image_position') == "Left" && get_sub_field('image') != null) : ?>
                                <?php $image = get_sub_field('image'); ?>
                                <div class="col-md-6">
                                    <div class="img-block left">
                                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>" class="img-fluid" />
                                    </div>
                                </div>
                            <?php endif ?>
                            <div class="col-md-6">
                                <div class="content-block">
                                    <div class="title-block">
                                        <?php display_text(get_sub_field('title'), get_sub_field('title_tag'), get_sub_field('title_extra_classes')) ?>
                                    </div>
                                    <?php if (get_sub_field('content') != null) : ?>
                                        <div class="content">
                                            <?php the_sub_field('content') ?>
                                        </div>
                                    <?php endif ?>

                                    <?php if (get_sub_field('button_link') != null) : ?>
                                        <?php $btn = get_sub_field('button_link') ?>
                                        <div class="action">
                                            <a href="<?php echo $btn['url'] ?>" target="<?php echo $btn['target'] ?>" class="th-btn"><?php echo $btn['title'] ?></a>
                                        </div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <?php if (get_sub_field('image_position') == "Right" && get_sub_field('image') != null) : ?>
                                <?php $image = get_sub_field('image'); ?>
                                <div class="col-md-6">
                                    <div class="img-block left">
                                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>" class="img-fluid" />
                                    </div>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                </section>
            <?php elseif (get_row_layout() == 'faq') : ?>

            <?php endif; ?>
        <?php endwhile; ?>
    <?php else : ?>
        <?php echo 'Layout not found'; ?>
    <?php endif; ?>
<?php endwhile; ?>
<?php get_footer() ?>