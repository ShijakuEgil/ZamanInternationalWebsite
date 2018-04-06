<?php

function zaman_admin_scripts($hook){
  if('toplevel_page_zaman_theme' != $hook){ return;}
  wp_register_style( 'zaman_admin', get_template_directory_uri().'/css/zaman.admin.css', array(), '1.0.0', 'all' );
  wp_enqueue_style('zaman_admin');

  wp_enqueue_media();

  wp_register_script('zaman_admin_js', get_template_directory_uri() . '/js/zaman.admin.js', array('jquery'),'1.0.0', true);
  wp_enqueue_script( 'zaman_admin_js');
}
add_action( 'admin_enqueue_scripts', 'zaman_admin_scripts' );

function zaman_enqueue_styles(){
  // wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css', array(), '4.0.0', 'all' );
  wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all' );
  wp_enqueue_style( 'font_awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array( ), '', 'all' );
  wp_enqueue_style('style', get_template_directory_uri().'/style.css', array(), '1.0.0', 'all');
  // wp_enqueue_style( 'font_awesome', get_template_directory_uri().'/fonts/font-awesome.min.css', array( ), '', 'all' );
  wp_enqueue_style( 'google_font','https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400i,500,500i,700,700i,900,900i',array(),'','all' );
  wp_enqueue_style( 'google_efects', 'https://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple|3d-float', array(),'','all');
  wp_enqueue_style('normalize_css', get_template_directory_uri().'/css/normalize.css', array(), '','all');
}
add_action( 'wp_enqueue_scripts','zaman_enqueue_styles');

function zaman_enqueue_scripts(){
  https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js
  // wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
  wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '4.0.0', true);
  wp_enqueue_script( 'bootstrap_js_bundle', 'https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js', array('jquery'), '4.0.0', true );
  wp_enqueue_script( 'boot_carousel_js', get_template_directory_uri().'/js/carousel.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'heading_animation_js', get_template_directory_uri().'/js/home_page_animated_heading.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'form_validation_js', get_template_directory_uri() .'/js/form_validation.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'about_us_js', get_template_directory_uri() .'/js/about_us.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'scroll_reveal_js', get_template_directory_uri() .'/js/scrollreveal.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'sidenav_js', get_template_directory_uri() .'/js/sidenav.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'funds_js', get_template_directory_uri() .'/js/funds.js', array('jquery'), '1.0.0', true);

  wp_register_script('single_default_slideshow', get_template_directory_uri(). '/js/single_default_ui_slideshow.js', array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'single_default_slideshow' );
}
add_action( 'wp_enqueue_scripts','zaman_enqueue_scripts');
