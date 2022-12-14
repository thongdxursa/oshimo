<?php
/**
 * Oshimo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Oshimo
 * @since Oshimo 1.0
 */


if ( ! function_exists( 'oshimo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Oshimo 1.0
	 *
	 * @return void
	 */
	function oshimo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'oshimo_support' );

if ( ! function_exists( 'oshimo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Oshimo 1.0
	 *
	 * @return void
	 */
	function oshimo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'oshimo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'oshimo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'oshimo_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
