<?php
/**
 * davinci functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package davinci
 */

if ( ! function_exists( 'davinci_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function davinci_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on davinci, use a find and replace
		 * to change 'davinci' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'davinci', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'davinci' ),
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
		add_theme_support( 'custom-background', apply_filters( 'davinci_custom_background_args', array(
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
add_action( 'after_setup_theme', 'davinci_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function davinci_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'davinci_content_width', 640 );
}
add_action( 'after_setup_theme', 'davinci_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function davinci_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'davinci' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'davinci' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'davinci_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function davinci_scripts() {
	wp_enqueue_style( 'davinci-style', get_stylesheet_uri() );

	wp_enqueue_script( 'davinci-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'davinci-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'davinci_scripts' );

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

add_filter('show_admin_bar', '__return_false'); 
add_filter( 'excerpt_length', function(){
	return 20;
} );


function my_paginate_links() {
   global $wp_rewrite, $wp_query;
   $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
   $pagination = array(
     'base' => @add_query_arg('paged','%#%'),
     'format' => '',
     'total' => $wp_query->max_num_pages,
     'current' => $current,
     'prev_text' => __('&lt;&lt;'),
     'next_text' => __('>>'),
     'end_size' => 1,
     'mid_size' => 1,
     'show_all' => false,
     'type' => 'list'
   );
   if ( $wp_rewrite->using_permalinks() )
   $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
   if ( !empty( $wp_query->query_vars['s'] ) )
   $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
   echo paginate_links( $pagination );
   }

function true_loadmore_scripts() {
	wp_enqueue_script('jquery'); // скорее всего он уже будет подключен, это на всякий случай
 	wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/loadmore.js', array('jquery') );
}
 
add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );


function true_load_posts(){
 
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
 
	// обычно лучше использовать WP_Query, но не здесь
	query_posts( $args );
	// если посты есть
	if( have_posts() ) :
 
		// запускаем цикл
		while( have_posts() ): the_post();
 
			get_template_part( 'template-parts/content', get_post_format() );
 
		endwhile;
 
	endif;
	die();
}
 
 
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');


   