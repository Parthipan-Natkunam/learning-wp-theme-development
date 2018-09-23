<?php
function simple_theme_post_setup_actions(){
    add_theme_support('post-thumbnails'); // featured image support
    register_nav_menus(array(   //menus
        'primary' => __('Primary Menu')
    )); 
}

function set_excerpt_length(){
    return 60;
}

//action hooks
add_action('after_setup_theme','simple_theme_post_setup_actions');

//filters
add_filter('excerpt_length','set_excerpt_length');