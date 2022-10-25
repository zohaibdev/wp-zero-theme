<?php

add_action('wp_enqueue_scripts', 'theme_scripts');
function theme_scripts()
{

    if (get_theme_mod('jquery_scripts') == true) :
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), false, true);
    endif;
    

    if (get_theme_mod('bootstrap_scripts') == true) :
        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
        wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array(), '1.0.0', true);
        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), '1.0.0', true);
    endif;


    if (get_theme_mod('slick_scripts') == true) :
        wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');;
        wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css');
        wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.0.0', true);
    endif;


    if (get_theme_mod('fancybox_scripts') == true) :
        wp_enqueue_style('fancybox-css', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css');
        wp_enqueue_script('jquery.fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array(), '1.0.0', true);
    endif;


    if (get_theme_mod('aos_scripts') == true) :
        wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
        wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '1.0.0', true);
    endif;


    if (get_theme_mod('font_awesome') == true) :
        wp_enqueue_style('font-awesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css');
    endif;


    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/theme.js', array(), '1.0.0', true);
    wp_localize_script('theme-js', 'the_ajax_script', array('ajaxurl' => admin_url('admin-ajax.php')));
}



if (get_theme_mod('bootstrap_scripts') == true) {
    add_action('after_setup_theme', 'register_navwalker');
    function register_navwalker()
    {
        require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
    }

    add_filter('nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3);
    function prefix_bs5_dropdown_data_attribute($atts, $item, $args)
    {
        if (is_a($args->walker, 'WP_Bootstrap_Navwalker')) {
            if (array_key_exists('data-toggle', $atts)) {
                unset($atts['data-toggle']);
                $atts['data-bs-toggle'] = 'dropdown';
            }
        }
        return $atts;
    }
}



add_action('login_enqueue_scripts', 'my_login_stylesheet');
function my_login_stylesheet()
{
    wp_enqueue_style('custom-login', get_stylesheet_directory_uri() . '/assets/css/style-login.css'); ?>
    <?php $homepage_id = get_option('page_on_front');
    $sliderItems = get_field('home_slider', $homepage_id); ?>
    <style>
        .login h1 a {
            background-image: url(<?php echo get_theme_mod('login_logo'); ?>) !important
        }

        body.login.js {
            background: url('<?php echo $sliderItems[0]['image']; ?>');
        }

        :root {
            --c1: <?php echo get_theme_mod('primary_color'); ?>;
            --c2: <?php echo get_theme_mod('secondary_color'); ?>;
            --c3: <?php echo get_theme_mod('optional_color'); ?>;
        }
    </style>
<?php
}