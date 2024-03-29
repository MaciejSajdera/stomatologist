<?php
/**
 * mazurkatarzyna functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mazurkatarzyna
 */

if ( ! function_exists( 'mazurkatarzyna_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mazurkatarzyna_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mazurkatarzyna, use a find and replace
		 * to change 'mazurkatarzyna' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mazurkatarzyna', get_template_directory() . '/assets/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'mazurkatarzyna' ),
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
			)
		);

		// Set up the WordPress core custom background feature.
		// add_theme_support(
		// 	'custom-background',
		// 	apply_filters(
		// 		'mazurkatarzyna_custom_background_args',
		// 		array(
		// 			'default-color' => 'ffffff',
		// 			'default-image' => '',
		// 		)
		// 	)
		// );

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
add_action( 'after_setup_theme', 'mazurkatarzyna_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mazurkatarzyna_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mazurkatarzyna_content_width', 640 );
}
add_action( 'after_setup_theme', 'mazurkatarzyna_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mazurkatarzyna_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mazurkatarzyna' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mazurkatarzyna' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mazurkatarzyna_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mazurkatarzyna_scripts() {
	wp_enqueue_style( 'mazurkatarzyna-style', get_template_directory_uri() . '/dist/css/style.css', array(), '1.12');
	wp_enqueue_style( 'mazurkatarzyna-style-tailwind', get_template_directory_uri() . '/dist/css/tailwind.css', array(), '1.12');

	// Include our dynamic styles.
	// $custom_css = mazurkatarzyna_dynamic_styles();
	// wp_add_inline_style( 'mazurkatarzyna-style', $custom_css );

	wp_enqueue_script( 'mazurkatarzyna-app', get_template_directory_uri() . '/dist/js/main.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mazurkatarzyna_scripts' );

function wpb_add_google_fonts() {
	wp_enqueue_style( 'wpb-google-font1', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800;900&display=swap', false );
	wp_enqueue_style( 'wpb-google-font2', 'https://fonts.googleapis.com/css2?family=Yeseva+One:wght@400;600;800&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );


function my_login_logo_one() { 
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?> 
<style type="text/css"> 
body.login div#login h1 a {
	background-image: url(<?php echo $image[0]; ?>);
	width: 100%;
	height: 100%;
	background-size: contain;
	padding-bottom: 30px; 
} 
</style>
	<?php 
}
add_action( 'login_enqueue_scripts', 'my_login_logo_one' );


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
 * Generating dynamic sytles.
 */
// require get_template_directory() . '/inc/dynamic-styles.php';
