<?php
/**
 * kustiesbrivi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kustiesbrivi
 */

if ( ! function_exists( 'kustiesbrivi_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kustiesbrivi_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on kustiesbrivi, use a find and replace
		 * to change 'kustiesbrivi' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kustiesbrivi', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Header', 'kustiesbrivi' ),
                        'menu-2' => esc_html__( 'Footer', 'kustiesbrivi' ),
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
		add_theme_support( 'custom-background', apply_filters( 'kustiesbrivi_custom_background_args', array(
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
			'width'       => 300,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'kustiesbrivi_setup' );

/**
 * Register custom fonts.
 */
function kustiesbrivi_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Archivo Black and Tenor Sans, translate this to 'off'. Do not translate
	 * into your own language.
	 */
		$open_sans = _x( 'on', 'Open Sans font: on or off', 'kustiesbrivi' );

        $font_families = array();
        
        if ( 'off' !== $open_sans ) {
            $font_families[] = 'Open Sans:normal';
        }
        
	if ( in_array('on', array($open_sans))) {
	
		/*https://fonts.googleapis.com/css?family=Archivo+Black|Tenor+Sans*/
		$font_families[] = 'Open Sans:300,300i,400,400i,600,600i,800,800i';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );







	// $fonts_url = '';

	// /*
	//  * Translators: If there are characters in your language that are not
	//  * supported by Archivo Black and Tenor Sans, translate this to 'off'. Do not translate
	//  * into your own language.
	//  */
	// 	$archivo_black = _x( 'on', 'Archivo Black font: on or off', 'kustiesbrivi' );
    //     $tenor_sans = _x( 'on', 'Tenor Sans font: on or off', 'kustiesbrivi' );

    //     $font_families = array();
        
    //     if ( 'off' !== $archivo_black ) {
    //         $font_families[] = 'Archivo Black:400';
    //     }
    //     if ( 'off' !== $tenor_sans ) {
    //         $font_families[] = 'Tenor Sans:400';
    //     }
        
        
	// if ( in_array('on', array($archivo_black, $tenor_sans))) {
		
    //             /*https://fonts.googleapis.com/css?family=Archivo+Black|Tenor+Sans*/
	// 	$font_families[] = 'Libre Franklin:300,300i,400,400i,600,600i,800,800i';

	// 	$query_args = array(
	// 		'family' => urlencode( implode( '|', $font_families ) ),
	// 		'subset' => urlencode( 'latin,latin-ext' ),
	// 	);

	// 	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	// }

	// return esc_url_raw( $fonts_url );
}

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function kustiesbrivi_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'kustiesbrivi-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'kustiesbrivi_resource_hints', 10, 2 );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kustiesbrivi_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'kustiesbrivi_content_width', 640 );
}
add_action( 'after_setup_theme', 'kustiesbrivi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kustiesbrivi_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kustiesbrivi' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'kustiesbrivi' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'kustiesbrivi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kustiesbrivi_scripts() {
        //Enque Google fonts: 
    wp_enqueue_style('kustiesbrivi_fonts', kustiesbrivi_fonts_url());
	wp_enqueue_style( 'kustiesbrivi-style', get_stylesheet_uri() );

	wp_enqueue_script( 'kustiesbrivi-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151215', true );
	wp_localize_script('kustiesbrivi-navigation', 'kustiesbriviScreenReaderText', array(
		'expand' => __('Expand child menu', 'kustiesbrivi'),
		'collapse' => __('Collapse child menu', 'kustiesbrivi'),
	));

	wp_enqueue_script( 'kustiesbrivi-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kustiesbrivi_scripts' );

/**
 * Allow to upload svg files
 */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


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
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/inc/icon-functions.php' );

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
