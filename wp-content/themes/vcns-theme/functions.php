<?php
function vcns_theme_setup() {
  register_nav_menus([
    'main-menu' => __('Main Menu'),
  ]);
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'vcns_theme_setup');

function vcns_enqueue_styles() {
  wp_enqueue_style('vcns-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'vcns_enqueue_styles');
