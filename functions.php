<?php
/**
 * drglasses functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package drglasses
 */

if ( ! function_exists( 'drglasses_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function drglasses_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on drglasses, use a find and replace
		 * to change 'drglasses' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'drglasses', get_template_directory() . '/languages' );

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
			'main-menu' => esc_html__( 'Main Menu', 'drglasses' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'drglasses' ),
		) );
		
		function default_menus(){
			
			
			echo '<ul id="main-menu" class="nav navbar-nav"> 
			
			<li><a href="'.home_url().'">Home</a></li>
			
			</ul>';
			
		}
		
		function default_footer_menus(){
			
			
			echo '<ul id="secondary-menu" class="nav navbar-nav"> 
			
			<li><a href="'.home_url().'">Home</a></li>
			
			</ul>';
			
		}
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
		add_theme_support( 'custom-background', apply_filters( 'drglasses_custom_background_args', array(
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
add_action( 'after_setup_theme', 'drglasses_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function drglasses_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'drglasses_content_width', 640 );
}
add_action( 'after_setup_theme', 'drglasses_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function drglasses_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Glass Sidebar', 'drglasses' ),
		'id'            => 'grclass-sidebar',
		'description'   => esc_html__( 'Add Glass Sidebar here.', 'drglasses' ),
		'before_widget' => '<aside class="widget ">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '<div class="red_label"></div></h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Contact Sidebar', 'drglasses' ),
		'id'            => 'contact-sidebar',
		'description'   => esc_html__( 'Add Contact Sidebar here.', 'drglasses' ),
		'before_widget' => '<div class="col-xs-6">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3><div id="fb-root"></div>',
	) );
	
}
add_action( 'widgets_init', 'drglasses_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function drglasses_scripts() {
	
	wp_enqueue_style( 'drglasses-awesome', get_template_directory_uri().'/css/font-awesome.min.css' );
	wp_enqueue_style( 'drglasses-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'drglasses-style', get_stylesheet_uri() );
	wp_enqueue_style( 'drglasses-respnsive', get_template_directory_uri().'/css/responsive.css' );

	
		 
	wp_enqueue_script( 'drglasses-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'drglasses-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );

	wp_enqueue_script( 'drglasses-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'drglasses_scripts' );

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
 * drop down
 */
require get_template_directory() . '/nav-menu.php';

/**
 * Theme options
 */
require_once get_template_directory() .'/inc/theme-options/cs-framework.php';

/**
 * Theme options
 */
require_once get_template_directory() .'/inc/theme-options/ms-options.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

