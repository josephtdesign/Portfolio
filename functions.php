<?php

function enqueue_scripts(){
    wp_enqueue_script('main-js', get_template_directory_uri(). 'assets/js/main.js', array('jquery'), null, true);

}
add_action('wp_enqueue_scripts', 'enqueue_scripts');