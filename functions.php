<?php

include('inc/common_content.php');
include('inc/homepage_content.php');
include('inc/postpage_content.php');

include('template-parts/common/content-details.php');
include('template-parts/single/content-home.php');
include('template-parts/single/content-post.php');

function sr_theme_support()
{

    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    $defaultBanner = array(
        'default-image' => get_template_directory_uri() . '/assets/images/banner_no1.jpg',
        'uploads' => true,
    );

    add_theme_support('custom-header', $defaultBanner);
}

add_action('after_setup_theme', 'sr_theme_support');

function sr_theme_menus()
{

    $menus = array(
        'navmenu' => "Navbar Menu",
    );

    register_nav_menus($menus);
}

add_action('init', 'sr_theme_menus');

function sr_register_styles()
{

    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('fontawesome-style', "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css", array(), '4.5.0', 'all');
    wp_enqueue_style('sp-res-style', get_template_directory_uri() . "/style.css", ['fontawesome-style'], $version, 'all');
    wp_enqueue_style('img-full-box-style', get_template_directory_uri() . "/assets/css/img_full_box.css", [], $version, 'all');
}

add_action('wp_enqueue_scripts', 'sr_register_styles');

function sr_register_scripts()
{
    wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/20ab91acc4.js', [], '1.0.0', 'true');
    wp_enqueue_script('menu-btn', get_template_directory_uri() . "/assets/js/menu_btn.js", [], '1.0.0', 'true');
    wp_enqueue_script('img-full-box', get_template_directory_uri() . "/assets/js/img_box.js", [], '1.0.0', 'true');
}

add_action('wp_footer', 'sr_register_scripts');

function sr_sidebars_init(){
    $theme_name = wp_get_theme()->get('Theme Name');

    register_sidebar( array(
        'name'          => __( 'Contact Sidebar / Widget', $theme_name ),
        'id'            => 'sidebar_1_contact',
        'description' => 'Contact Sidebar / Widget',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}

add_action('widgets_init','sr_sidebars_init');

?>