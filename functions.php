<?php
function my_enqueue() {
    wp_enqueue_style('reset', get_template_directory_uri().'/reset.css', array(), false, 'all');
    wp_enqueue_style('style', get_template_directory_uri().'/style.css', array(), false, 'all');
    // wp_enqueue_style('style', get_template_directory_uri().'/css/slick-theme.css', array(), false, 'all');
    wp_enqueue_script('jquery');
    wp_enqueue_script('my-custom-js', get_template_directory_uri() . '/script.js', array(), null, true);
  }
  add_action('wp_enqueue_scripts', 'my_enqueue');
?>