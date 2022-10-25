<?php

add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video', 'audio'));
add_image_size('small-thumbnail', 200, 165);
add_filter('get_the_archive_title_prefix', '__return_false');
add_filter('use_block_editor_for_post_type', '__return_false');


add_action('widgets_init', 'zerotheme_widgets_init');
function zerotheme_widgets_init()
{
    register_sidebar(
        array(
            'name'          => __('Footer Two', 'zerotheme'),
            'id'            => 'footer-two',
            'description'   => __('Appears at the bottom of the content on posts and pages.', 'zerotheme'),
            'before_widget' => '<div class="footer-col-1">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        )
    );
}


add_action('after_setup_theme', 'register_custom_nav_menus');
function register_custom_nav_menus()
{
    register_nav_menus(array(
        'header_menu' => 'Header Menu',
        'header_menu_reponsive' => 'Header Menu Reponsive',
        'footer_menu' => 'Footer Menu',
        'my_account_menu' => 'My Account Menu',
    ));
}

add_action('wp_ajax_get_posts_data', 'get_posts_data');
add_action('wp_ajax_nopriv_get_posts_data', 'get_posts_data');
function get_posts_data()
{
    $paged = $_POST['page'] ? $_POST['page'] : 1;
    $args  = array(
        "post_type" => "post",
        "posts_per_page" => 2,
        "order" => "DESC",
        "paged" => $paged
    );
    $query = new WP_Query($args);
    while ($query->have_posts()) :
        $query->the_post();
        echo '<h2>' . get_the_title() . '</h2>';
    endwhile;
    wp_reset_postdata();
    wp_die();
}


function display_text($text = false, $tag = 'h2', $classes = ''){
    if($text == false){
        return false;
    } else {
        $tag = strtolower($tag);
        echo "<$tag class='$classes'>$text</$tag>";
    }
}