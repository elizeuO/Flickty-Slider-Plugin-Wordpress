<?php

/**
* Plugin Name: Flickty Slider For Wordpress
* Description: Plugin to apply flickity slider in wordpress: https://flickity.metafizzy.co/
* Version: 1.0.0
* Author: Elizeu Oliveira da Silva
**/

add_action('wp_enqueue_scripts', 'load_scripts');

function load_scripts(){
    //Add css
    wp_enqueue_style( 'flickity-slider',plugins_url( '/flickity/flickity.css',  __FILE__ ) );

    //Add js
    wp_enqueue_script( 'flickity-slider', plugin_dir_url('/flickity/flickity.js', __FILE__ ) , true );
}


