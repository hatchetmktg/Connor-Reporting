<?php
/**
 * Connor Reporting functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Connor_Reporting
 */

if ( ! function_exists( 'connor_reporting_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function connor_reporting_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Connor Reporting, use a find and replace
		 * to change 'connor_reporting' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'connor_reporting', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'connor_reporting' ),
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
		add_theme_support( 'custom-background', apply_filters( 'connor_reporting_custom_background_args', array(
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
add_action( 'after_setup_theme', 'connor_reporting_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function connor_reporting_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'connor_reporting_content_width', 640 );
}
add_action( 'after_setup_theme', 'connor_reporting_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function connor_reporting_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'connor_reporting' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'connor_reporting' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'connor_reporting_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function connor_reporting_scripts() {
	wp_enqueue_style( 'connor_reporting-style', get_stylesheet_uri() );

	wp_enqueue_script( 'connor_reporting-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'connor_reporting-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'connor_reporting_scripts' );

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
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

add_filter( 'gform_notification', 'rw_notification_attachments', 10, 3 );
function rw_notification_attachments( $notification, $form, $entry ) {
    $log = 'rw_notification_attachments() - ';
    GFCommon::log_debug( $log . 'starting.' );
 
    if ( $notification['name'] == 'Admin Notification' ) {
 
        $fileupload_fields = GFCommon::get_fields_by_type( $form, array( 'fileupload' ) );
 
        if ( ! is_array( $fileupload_fields ) ) {
            return $notification;
        }
 
        $notification['attachments'] = rgar( $notification, 'attachments', array() );
        $upload_root = RGFormsModel::get_upload_root();
 
        foreach( $fileupload_fields as $field ) {
 
            $url = rgar( $entry, $field->id );
 
            if ( empty( $url ) ) {
                continue;
            } elseif ( $field->multipleFiles ) {
                $uploaded_files = json_decode( stripslashes( $url ), true );
                foreach ( $uploaded_files as $uploaded_file ) {
                    $attachment = preg_replace( '|^(.*?)/gravity_forms/|', $upload_root, $uploaded_file );
                    GFCommon::log_debug( $log . 'attaching the file: ' . print_r( $attachment, true  ) );
                    $notification['attachments'][] = $attachment;
                }
            } else {
                $attachment = preg_replace( '|^(.*?)/gravity_forms/|', $upload_root, $url );
                GFCommon::log_debug( $log . 'attaching the file: ' . print_r( $attachment, true  ) );
                $notification['attachments'][] = $attachment;
            }
 
        }
 
    }
 
    GFCommon::log_debug( $log . 'stopping.' );
 
    return $notification;
}