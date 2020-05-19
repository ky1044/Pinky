<?php

function load_stylesheets() {
    // wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
    // wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.3.1', true );
}

add_action( 'wp_enqueue_scripts', 'load_stylesheets' );


function loadjs() {
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/scripts.js', array ( 'jquery' ), 1.1, true);


}


add_action('wp_enqueue_scripts','loadjs');