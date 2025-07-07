<?php
/**
 * National Herbs functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package nationalherbs
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Theme Setup
 */
function nationalherbs_setup() {
	load_theme_textdomain( 'nationalherbs', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus( [
		'menu-1' => esc_html__( 'Primary', 'nationalherbs' ),
	] );

	add_theme_support( 'html5', [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	] );

	add_theme_support( 'custom-background', apply_filters( 'nationalherbs_custom_background_args', [
		'default-color' => 'ffffff',
		'default-image' => '',
	] ) );

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'custom-logo', [
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	] );
}
add_action( 'after_setup_theme', 'nationalherbs_setup' );

/**
 * Content Width
 */
function nationalherbs_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nationalherbs_content_width', 640 );
}
add_action( 'after_setup_theme', 'nationalherbs_content_width', 0 );

/**
 * Register Sidebar
 */
function nationalherbs_widgets_init() {
	register_sidebar( [
		'name'          => esc_html__( 'Sidebar', 'nationalherbs' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'nationalherbs' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	] );
}
add_action( 'widgets_init', 'nationalherbs_widgets_init' );

/**
 * Include Extra Files (Keep as is)
 */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Enqueue Styles and Scripts
 */
function nationalherbs_scripts() {
	// jQuery (WordPress Core)
	wp_enqueue_script( 'jquery' );

	// CSS Styles
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/vendor/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap_icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css' );
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css' );
	wp_enqueue_style( 'line-awesome', 'https://cdn.lineicons.com/3.0/lineicons.css' );
	wp_enqueue_style( 'owlcarousel_css', get_template_directory_uri() . '/assets/vendor/owl/owl.carousel.min.css' );
	wp_enqueue_style( 'owl_theme_css', get_template_directory_uri() . '/assets/vendor/owl/owl.theme.default.css' );
	wp_enqueue_style( 'nationalherbs-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/assets/css/theme.css', [], '1.5' );

	// JS Scripts
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/vendor/js/bootstrap.min.js', [], null, true );
	wp_enqueue_script( 'owlcarousel_js', get_template_directory_uri() . '/assets/vendor/owl/owl.carousel.min.js', ['jquery'], null, true );
	wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/assets/js/theme.js', ['jquery'], '1.0', true );

	// Navigation + Comments
	wp_enqueue_script( 'nationalherbs-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nationalherbs_scripts' );
