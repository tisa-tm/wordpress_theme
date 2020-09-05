<?php 
// function load_style(){
// 	wp_enqueue_style('style_roses', get_stylesheet_uri());
// }
// add_action('wp_enqueue_scripts','load_style');

function load_style(){
	wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');
}
add_action('wp_enqueue_scripts','load_style');

function load_rainfall(){
	wp_enqueue_style('rainfall', get_template_directory_uri().'/css/style_rainfall.css');
}
add_action('wp_enqueue_scripts','load_rainfall');

function load_slideshow(){
	wp_enqueue_style('slideshow', get_template_directory_uri().'/css/slideshow.css');
}
add_action('wp_enqueue_scripts','load_slideshow');


function load_style_small(){
	wp_enqueue_style('style_small', get_template_directory_uri().'/css/style_small.css');
}
add_action('wp_enqueue_scripts','load_style_small');

function load_my_script() { 
  wp_enqueue_script( 'js-file', get_template_directory_uri().'/js/my.js'); 
} 
add_action('wp_enqueue_scripts','load_my_script');

function load_slideshow_script() { 
  wp_enqueue_script( 'js-file2', get_template_directory_uri().'/js/slideshow.js'); 
} 
add_action('wp_enqueue_scripts','load_slideshow_script');
?>