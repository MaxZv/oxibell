<?php
/**
 * Oxibell functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Oxibell
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'oxibell_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function oxibell_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Oxibell, use a find and replace
		 * to change 'oxibell' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'oxibell', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'oxibell' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'oxibell_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'oxibell_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function oxibell_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'oxibell_content_width', 640 );
}
add_action( 'after_setup_theme', 'oxibell_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function oxibell_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'oxibell' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'oxibell' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'oxibell_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function oxibell_scripts() {
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' );
	wp_enqueue_style( 'slick', get_template_directory_uri().'/slick/slick.css');
	wp_enqueue_style( 'slick-themes', get_template_directory_uri().'/slick/slick-theme.css');
	wp_enqueue_style( 'oxibell-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'oxibell-style', 'rtl', 'replace' );

	wp_enqueue_script( 'new-jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slick', get_template_directory_uri().'/slick/slick.js', array('new-jquery'), _S_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array('new-jquery'), _S_VERSION, true );
	wp_enqueue_script( 'oxibell-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'oxibell_scripts' );

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

add_action('init', 'oxi_custom_post_init');
function oxi_custom_post_init()
{
    register_post_type('collection', array(
        'labels' => array(
            'name' => 'Коллекция',
            'singular_name' => 'collection-block',
            'add_new' => 'Добавить новую информацию',
            'add_new_item' => 'Добавить контент',
            'edit_item' => 'Редактировать информацию',
            'new_item' => 'Новая информация',
            'view_item' => 'Посмотреть информацию',
            'parent_item_colon' => '',
            'menu_name' => 'Коллекция',

        ),
        'public' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-buddicons-community',
        'supports' => array('title', 'thumbnail')
    ));
}


