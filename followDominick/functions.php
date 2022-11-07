<?php

function followdominick_register_styles(){

    $version = wp_get_theme()->get( 'Version' )
    wp_enqueue_style('followdominick-style', get_template_directory_uri() . "/style.css", array('followdominick-boostrap'), $version, 'all');
    wp_enqueue_style('followdominick-boostrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" , array(), '4.4.1', 'all');
    wp_enqueue_style('followdominick-fontawesome ', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'followdominick_register_styles');



function followdominick_register_scripts(){


}

add_action( 'wp_enqueue_scripts', 'followdominick_register_scripts');


?> 