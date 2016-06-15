<?php 
function office_master_css_js(){
    
    wp_enqueue_style('google-font-1', '//fonts.googleapis.com/css?family=Open+Sans:400,300', null, 'v1.0', 'all');
    wp_enqueue_style('google-font-2', '//fonts.googleapis.com/css?family=PT+Sans');
    wp_enqueue_style('google-font-3', '//fonts.googleapis.com/css?family=Raleway');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css');
    wp_enqueue_style('theme-style', get_template_directory_uri().'/assets/css/style.css');
    wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.min.css');
    wp_enqueue_style('office-master-main-stylesheet', get_stylesheet_uri());
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', 'jquery', null, true);
    wp_enqueue_script('wow-js', get_template_directory_uri().'/js/wow.min.js', 'jquery', null, true);
    wp_enqueue_script('mixitup', get_template_directory_uri().'/js/jquery.mixitup.js', 'jquery', null, true);
    wp_enqueue_script('init_script', get_template_directory_uri().'/js/init.js', 'jquery', null, true);

    
    
}
add_action('wp_enqueue_scripts', 'office_master_css_js');