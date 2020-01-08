<?php

// stb_setup

// stb_includes
include( get_template_directory() . '/includes/guttenberg.php' );
include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );
include( get_template_directory() . '/includes/content_width.php' );
include( get_template_directory() . '/includes/front/widgets.php' );
include( get_template_directory() . '/includes/tax-thumb.php' );
include( get_template_directory() . '/includes/var_dump.php' );
include( get_template_directory() . '/includes/filter/filter_simple.php' );
// include( get_template_directory() . '/includes/carbon-fields/cbr.php' );
// include( get_template_directory() . '/includes/custom-theme-options/theme-options.php' );
// include( get_template_directory() . '/includes/custom-theme-options/metabox.php' );

// stb_hooks
add_action( 'wp_enqueue_scripts', 'stb_scripts' );
add_action( 'after_setup_theme', 'stb_setup' );
add_action( 'after_setup_theme', 'stb_content_width', 0 );
add_action( 'widgets_init', 'stb_widgets_init' );

// add_action( 'after_setup_theme', 'crb_load' );
// add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );

// stb_shortcodes

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


// Setup

// Includes
include( get_template_directory() . '/includes/theme-customizer.php');

// Hooks


// Actions
