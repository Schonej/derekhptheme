<?php 

function load_stylesheets()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
        array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css',
        array(), false, 'all');
    wp_enqueue_style('stylesheet');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_jquery()
{
    wp_deregister_script('jquery');

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery3.1.3.min.js', '', 1, true);

    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'load_jquery');

function load_scripts()
{
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'load_scripts');

add_theme_support('menus');
add_theme_support('theme options');

register_nav_menus(
    array(
        'side-menu' => __('Side Menu', 'theme'), 
        'footer-menu' => __('Footer Menu', 'theme'),
    )
);

add_action('wp_enqueue_scripts', 'load_scripts');