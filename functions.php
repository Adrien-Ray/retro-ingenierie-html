<?php

//ajout function au theme
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

// style des scripts
function register_assets(){

	wp_enqueue_script(
		'wordpress',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js'
	);

	wp_enqueue_script(
		'custom-script',
		get_template_directory_uri().'/assets/scripts/main.js'
	);

      wp_enqueue_style(
		'retro-ingenierie-html',
		get_stylesheet_uri(),
		array(),
		'1.0'
	);
      wp_enqueue_style(
		'retro-ingenierie-html-mainCss',
		get_template_directory_uri().'/assets/styles/main.css',
		array(),
		'1.0'
	);
  }
  add_action('wp_enqueue_scripts', 'register_assets');

// prise en charge du logo du site
function wpc_theme_support() {
	add_theme_support('custom-logo', array(
		'flex-height' => true,
		'flex-width'  => true,
	));
}
add_action('after_setup_theme','wpc_theme_support');