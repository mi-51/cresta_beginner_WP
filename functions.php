<?php


function beginner_script(){
  wp_enqueue_style( 'cresta-beginner', get_template_directory_uri(). '/scss/style.css', array(), '1.0.0' );
  wp_enqueue_style( 'style', get_template_directory_uri(). '/style.css', array(), '1.0.0' );
  wp_enqueue_script( 'script', get_template_directory_uri(). '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'beginner_script' );