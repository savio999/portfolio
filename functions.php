<?php
add_action('after_setup_theme', 'theme_setup');

function theme_setup() {
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('custom-header');
    add_image_size('thumb-300x200', 300, 200, true);
}

function theme_scripts(){
     wp_enqueue_style('Bootstrap-style', get_stylesheet_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css',"4.1.3");
     wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri().'/vendor/bootstrap/js/bootstrap.min.js',array('jquery'),'4.1.3',true);
}

add_action('wp_enqueue_scripts', 'theme_scripts');

