<?php

function load_scripts(){
    wp_enqueue_scritp('script-personalizado',get_template_directory_uri().'/assets/css/style-personalizado.css');
}

add_action( 'wp_enqueue_scritp','load_scripts'),