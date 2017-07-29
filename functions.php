<?php
/**
 * ds-skoda functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ds-skoda
 */

if ( ! function_exists( 'ds_skoda_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ds_skoda_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on ds-skoda, use a find and replace
	 * to change 'ds-skoda' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ds-skoda', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Header', 'ds-skoda' ),
		'menu-2' => esc_html__( 'Footer', 'ds-skoda' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ds_skoda_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif;
add_action( 'after_setup_theme', 'ds_skoda_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ds_skoda_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ds_skoda_content_width', 640 );
}
add_action( 'after_setup_theme', 'ds_skoda_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ds_skoda_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ds-skoda' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ds-skoda' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ds_skoda_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ds_skoda_scripts() {
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css');
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	wp_enqueue_style( 'jquery-ui',  get_template_directory_uri() .'/js/jquery-ui/jquery-ui.min.css', array(), null, 'all' );
	wp_enqueue_style( 'owl-carousel',  get_template_directory_uri() .'/js/owl-carousel/owl.carousel.css', array(), null, 'all' );
	wp_enqueue_style( 'owl-theme',  get_template_directory_uri() .'/js/owl-carousel/owl.theme.css', array(), null, 'all' );
	wp_enqueue_style( 'skoda-font',  get_template_directory_uri() .'/fonts/skodafont/stylesheet.css', array(), null, 'all' );

	// Add our main style last item
	wp_enqueue_style( 'ds-skoda-style', get_stylesheet_uri() );

	// Add jQuery from CDN
	wp_deregister_script( 'jquery' );
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', '', null, true);
	wp_enqueue_script('jquery');

	// Vendor Scripts
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/js/jquery-ui/jquery-ui.min.js', array(), '20151215', true );
	wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'gmap3', get_template_directory_uri() . '/js/gmap3.min.js', array(), '20151215', true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ds_skoda_scripts' );

/**
 * Enqueue Admin scripts
 */
add_action( 'admin_enqueue_scripts', 'ds_skoda_admin_scripts');

function ds_skoda_admin_scripts() {
	wp_enqueue_media();
	wp_register_script('admin_custom_script', get_template_directory_uri() . '/js/admin-scripts.js', array('jquery') );
	wp_enqueue_script('admin_custom_script');
}


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
 * Implement custom widget feature.
 */
require get_template_directory() . '/inc/custom-widgets.php';


/**
 * Implement custom post types.
 */
require get_template_directory() . '/inc/custom-post-types.php';


/**
 * Register our metaboxes.
 */
function ds_get_meta_box( $meta_boxes ) {
	$prefix = 'ds-';

	// home banner slider
	$meta_boxes[] = array(
		'id' => 'banner-slider',
		'title' => esc_html__( 'Banner Slider', 'ds-skoda' ),
		'post_types' => array( 'page' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
			array(
				'id' => $prefix . 'banner-slider-image',
				'type' => 'image_advanced',
				'name' => esc_html__( 'Slides', 'ds-skoda' ),
			)
		)
	);

	// page banner
	$meta_boxes[] = array(
		'title'  => esc_html__( 'Page Banner', 'ds-skoda' ),
		'post_types' => array( 'page', 'car' ),
		'fields' => array(
			array(
				'id'               => $prefix . 'page-banner-image',
				'name'             => esc_html__( 'Image', 'ds-skoda' ),
				'type'             => 'image',
				'force_delete'     => false
			),
		)
	);

	// car price
	$meta_boxes[] = array(
		'title'  => __( 'Car Price', 'ds-skoda' ),
		'post_types' => array( 'car' ),
		'fields' => array(
			array(
				'name'        => __( 'Sale Price', 'ds-skoda' ),
				'label_description' => __( 'The price of the car', 'your' ),
				'id'          => $prefix . 'car-price',
				'desc'        => __( 'This price will update after saving', 'ds-skoda' ),
				'type'        => 'text',

				// Default value (optional)
				'std'         => __( '$1,000', 'ds-skoda' ),

				// Placeholder
				'placeholder' => __( 'Enter the price here', 'ds-skoda' ),

				// Input size
				'size'        => 30,
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'ds_get_meta_box' );

/**
 * Get field meta value
 */
rwmb_the_value( $field_id, $args = array(), $post_id = null, $echo = true );
