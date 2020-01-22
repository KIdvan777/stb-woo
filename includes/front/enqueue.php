<?php
if( ! defined( 'ABSPATH' )){
	exit;
}
/**
 * Enqueue scripts and styles.
 */
function stb_scripts() {
    // Styles

	wp_register_style( 'stb_google_fonts', get_template_directory_uri() . '/assets/css/google_fonts.scss' );
	wp_register_style( 'stb_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	// wp_register_style( 'stb_font_awesome_cdn','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css' );
	wp_register_style( 'stb_google_fonts', get_template_directory_uri() . '/assets/css/google_fonts.scss' );
	wp_register_style( 'stb_owl_carousel', get_template_directory_uri() . '/assets/css/owl/owl.carousel.min.css' );
	wp_register_style( 'stb_owl_theme_carousel', get_template_directory_uri() . '/assets/css/owl/owl.theme.default.min.css' );
	wp_register_style( 'stb-style', get_stylesheet_uri());

	wp_enqueue_style( 'stb_google_fonts');
	wp_enqueue_style( 'stb_bootstrap' );
	wp_enqueue_style( 'stb_font_awesome_cdn' );
	wp_enqueue_style( 'stb_owl_carousel');
	wp_enqueue_style( 'stb_owl_theme_carousel');
	wp_enqueue_style( 'stb-style' );

    // Scripts

	wp_register_script( 'stb-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_register_script( 'stb-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_register_script( 'stb_owl_js', get_template_directory_uri() . '/assets/css/owl/owl.carousel.min.js', array('jquery'), '20151215', true );
	wp_register_script( 'stb_slick_js', get_template_directory_uri() . '/assets/css/slick/slick.js', array('jquery'), '20151215', true );
	wp_register_script( 'stb_custom_js', get_template_directory_uri() . '/assets/js/custom.min.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'stb-navigation' );
	wp_enqueue_script( 'stb-skip-link-focus-fix' );
	wp_enqueue_script( 'stb_owl_js' );
	wp_enqueue_script( 'stb_slick_js' );
	wp_enqueue_script( 'stb_custom_js' );
	wp_localize_script('stb_custom_js', 'stb_ajax_search_form', array(
		'url' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('search-nonce')
	));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'stb_scripts' );
