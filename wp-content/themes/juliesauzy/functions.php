<?php

/**
 * Proper way to enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts', -1 );
function wpdocs_theme_name_scripts() {
  $active_theme_url = get_stylesheet_directory_uri();
	wp_enqueue_style( 'damier', $active_theme_url . '/css/damier.css' );
	wp_enqueue_script( 'tailwind', 'https://cdn.tailwindcss.com' );
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
}
