<?php

function enqueue_scripts(){
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], null);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], null);
    wp_enqueue_script('main-js', 
    get_template_directory_uri(). '/assets/js/main.js', 
    array('jquery'), 
    null, 
    true);
   

}
add_action('wp_enqueue_scripts', 'enqueue_scripts');