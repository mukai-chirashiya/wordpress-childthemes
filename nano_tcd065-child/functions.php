<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
   wp_enqueue_style('nano-slick', get_template_directory_uri() . '/assets/css/slick.min.css');
   wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css', array('nano-slick'));
   wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
}

add_action('admin_enqueue_scripts', 'child_admin_scripts');
function child_admin_scripts()
{
   wp_enqueue_script('nano-widgets', get_template_directory_uri() . '/admin/assets/js/widget.min.js', array(),  version_num(), true);
}
