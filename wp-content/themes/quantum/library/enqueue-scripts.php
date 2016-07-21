<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_scripts' ) ) :
	function foundationpress_scripts() {

	// Enqueue the main Stylesheet.
	wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/assets/stylesheets/foundation.css', array(), '2.6.1', 'all' );

	// Deregister the jquery version bundled with WordPress.
	wp_deregister_script( 'jquery' );

	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

	// If you'd like to cherry-pick the foundation components you need in your project, head over to gulpfile.js and see lines 35-54.
	// It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/assets/javascript/foundation.js', array('jquery'), '2.6.1', true );

	// Add the comment-reply library on pages where it is necessary
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	}

	add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
	function brick(){
		if(is_archive() || is_home()){
			wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/javascript/custom/imagesloaded.pkgd.min.js');
			wp_enqueue_script('masonry', get_template_directory_uri() . '/assets/javascript/custom/masonry.pkgd.min.js');
			wp_enqueue_script('infinitescroll', get_template_directory_uri() . '/assets/javascript/custom/jquery.infinitescroll.min.js', array('jquery'));
			wp_enqueue_script('mason', get_template_directory_uri() . '/assets/javascript/custom/mason.js', array('jquery','imagesloaded', 'masonry', 'infinitescroll'), '1.1', true);
		}
	}

	add_action('wp_enqueue_scripts', 'brick');

	include("custom-post-types.php");
endif;
