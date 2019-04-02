<?php
/**
 * bpa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bpa
 */

if ( ! function_exists( 'bpa_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function bpa_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on bpa, use a find and replace
     * to change 'bpa' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'bpa', get_template_directory() . '/languages' );

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
      'menu-1' => esc_html__( 'Primary', 'bpa' ),
      'menu-2' => esc_html__( 'secondary', 'bpa' ),
      'menu-3' => esc_html__( 'social-links', 'bpa' ),
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
    add_theme_support( 'custom-background', apply_filters( 'bpa_custom_background_args', array(
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
add_action( 'after_setup_theme', 'bpa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bpa_content_width() {
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters( 'bpa_content_width', 640 );
}
add_action( 'after_setup_theme', 'bpa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bpa_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'bpa' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'bpa' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'bpa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bpa_scripts() {
  wp_enqueue_style( 'bpa-style', get_stylesheet_uri() );

  wp_enqueue_style( 'bpa-owl-carousel-style', get_template_directory_uri() . '/owl-carousel.css', array(), '20151215', true  );

  wp_enqueue_style( 'bpa-owl.theme.default-style', get_template_directory_uri() . '/owl.theme.default.min.css', array(), '20151215', true  );

  

  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800|Muli:200,300,400,700', true );
  
  wp_enqueue_script( 'bpa-owl', get_template_directory_uri() . '/js/owl.carousel-min.js', array(), '20151215', true );

  wp_enqueue_script( 'bpa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

  // wp_enqueue_script( 'bpa-owl', get_template_directory_uri() . '/js/owl.carousel-min.js', array(), '20151215', true );

  wp_enqueue_script( 'bpa-owl-carousel', get_template_directory_uri() . '/js/owl-carousel-min.js', array(), '20151215', true );


  wp_enqueue_script( 'bpa-wow', get_template_directory_uri() . '/js/wow.min.js', array(), '20151215', true );

  wp_enqueue_script('main', get_template_directory_uri() .'/js/main.js', array('jquery'), null, true);


  wp_enqueue_script('mk-jquery', get_template_directory_uri() .'/js/jquery.js', array('jquery'), null, true);

  wp_enqueue_script('mk-jquery-darkbox', get_template_directory_uri() .'/js/darkbox.min.js', array('jquery'), null, true);


  wp_enqueue_script( 'bpa-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'bpa_scripts' );

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



//enqueues our external font awesome stylesheet
function enqueue_our_required_stylesheets(){
  wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.3.1/css/all.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

add_post_type_support( 'page', 'excerpt' );