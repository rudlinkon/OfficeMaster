<?php
function office_master_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('slide-img', 1500, 500, true);
    add_image_size('sidebar-slide-img', 265, 192, true);
    add_image_size('team-member', 100, 80, true);
    add_image_size('post-thumb', 850, 490, true);
    register_nav_menus(array(
        'primary_menu'=>'Primary Menu'
    ));
}
add_action('after_setup_theme', 'office_master_theme_support');