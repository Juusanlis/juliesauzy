<?php

/**
 * Proper way to enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts', -1 );
function wpdocs_theme_name_scripts() {
  $active_theme_url = get_stylesheet_directory_uri();
	wp_enqueue_style( 'damier', $active_theme_url . '/css/damier.css' );
	wp_enqueue_script( 'tailwind', 'https://cdn.tailwindcss.com' );
	wp_enqueue_script( 'lottie', 'https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js' );
	wp_enqueue_script( 'parallax', 'https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js' );
	wp_enqueue_script( 'simple-parallax', 'https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js' );
	wp_enqueue_script( 'anime-js', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js' );
	wp_enqueue_script( 'popper', 'https://unpkg.com/popper.js@1' );
	wp_enqueue_script( 'tippy', 'https://cdnjs.cloudflare.com/ajax/libs/tippy.js/5.2.1/tippy.iife.min.js', array('popper') );
	wp_enqueue_style( 'tippy-css', 'https://cdnjs.cloudflare.com/ajax/libs/tippy.js/5.2.1/tippy.css' );
	wp_enqueue_script( 'aos-animate-js', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js' );
	wp_enqueue_style( 'aos-animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css' );
	wp_enqueue_script( 'main', $active_theme_url . '/js/main.js', array('tailwind', 'lottie', 'parallax', 'simple-parallax', 'aos-animate-js', 'anime-js', 'tippy' ) );
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
}
