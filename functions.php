<?php

// Theme setup:
if ( !function_exists( 'simplestever_setup' ) ) {
	function simplestever_setup() {
		load_theme_textdomain( 'simplestever' );
	}
}
add_action( 'after_setup_theme', 'simplestever_setup' );


if ( !function_exists('simplestever_scripts') ) {
	function simplestever_scripts() {
		wp_enqueue_style( 'simplestever-style', get_stylesheet_uri() );
	}
}
add_action( 'wp_enqueue_scripts', 'simplestever_scripts' );