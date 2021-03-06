<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

/**
 * Twenty Fifteen only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'youngceaser_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function youngceaser_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/youngceaser
	 * If you're building a theme based on youngceaser, use a find and replace
	 * to change 'youngceaser' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'youngceaser' );

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
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'youngceaser' ),
		'social'  => __( 'Social Links Menu', 'youngceaser' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	/*
	 * Enable support for custom logo.
	 *
	 * @since Twenty Fifteen 1.5
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
	) );

	$color_scheme  = youngceaser_get_color_scheme();
	$default_color = trim( $color_scheme[0], '#' );

	// Setup the WordPress core custom background feature.

	/**
	 * Filter Twenty Fifteen custom-header support arguments.
	 *
	 * @since Twenty Fifteen 1.0
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type string $default-color     		Default color of the header.
	 *     @type string $default-attachment     Default attachment of the header.
	 * }
	 */
	add_theme_support( 'custom-background', apply_filters( 'youngceaser_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', youngceaser_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // youngceaser_setup
add_action( 'after_setup_theme', 'youngceaser_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function youngceaser_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'youngceaser' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'youngceaser' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'youngceaser_widgets_init' );

if ( ! function_exists( 'youngceaser_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Fifteen.
 *
 * @since Twenty Fifteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function youngceaser_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', 'youngceaser' ) ) {
		$fonts[] = 'Noto Sans:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Serif, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'youngceaser' ) ) {
		$fonts[] = 'Noto Serif:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'youngceaser' ) ) {
		$fonts[] = 'Inconsolata:400,700';
	}

	/*
	 * Translators: To add an additional character subset specific to your language,
	 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
	 */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'youngceaser' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Fifteen 1.1
 */
function youngceaser_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'youngceaser_javascript_detection', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */
function youngceaser_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'youngceaser-fonts', youngceaser_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

	// Load our main stylesheet.
	wp_enqueue_style( 'youngceaser-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'youngceaser-ie', get_template_directory_uri() . '/css/ie.css', array( 'youngceaser-style' ), '20141010' );
	wp_style_add_data( 'youngceaser-ie', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'youngceaser-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'youngceaser-style' ), '20141010' );
	wp_style_add_data( 'youngceaser-ie7', 'conditional', 'lt IE 8' );

	wp_enqueue_script( 'youngceaser-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141010', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'youngceaser-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20141010' );
	}

	wp_enqueue_script( 'youngceaser-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );
	wp_localize_script( 'youngceaser-script', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'youngceaser' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'youngceaser' ) . '</span>',
	) );
}
add_action( 'wp_enqueue_scripts', 'youngceaser_scripts' );

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Fifteen 1.7
 *
 * @param array   $urls          URLs to print for resource hints.
 * @param string  $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function youngceaser_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'youngceaser-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '>=' ) ) {
			$urls[] = array(
				'href' => 'https://fonts.gstatic.com',
				'crossorigin',
			);
		} else {
			$urls[] = 'https://fonts.gstatic.com';
		}
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'youngceaser_resource_hints', 10, 2 );

/**
 * Add featured image as background image to post navigation elements.
 *
 * @since Twenty Fifteen 1.0
 *
 * @see wp_add_inline_style()
 */
function youngceaser_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); border-top: 0; }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	wp_add_inline_style( 'youngceaser-style', $css );
}
add_action( 'wp_enqueue_scripts', 'youngceaser_post_nav_background' );

/**
 * Display descriptions in main navigation.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string  $item_output The menu item output.
 * @param WP_Post $item        Menu item object.
 * @param int     $depth       Depth of the menu.
 * @param array   $args        wp_nav_menu() arguments.
 * @return string Menu item with possible description.
 */
function youngceaser_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'youngceaser_nav_description', 10, 4 );

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function youngceaser_search_form_modify( $html ) {
	return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', 'youngceaser_search_form_modify' );

/**
 * Implement the Custom Header feature.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/customizer.php';

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

/**
 * @param $classes
 * @param $item
 * @return array
 */
function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}


add_action( 'init', 'create_post_type_about_us' );
function create_post_type_about_us() {
    register_post_type( 'landing_page_data',
        array(
            'labels' => array(
                'name' => __( 'Landing Page Data' ),
                'singular_name' => __( 'landing_page_data' )
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}

add_action( 'init', 'create_post_type_landing_info' );
function create_post_type_landing_info() {
    register_post_type( 'about_us_page',
        array(
            'labels' => array(
                'name' => __( 'About Us Page Data' ),
                'singular_name' => __( 'about_us_page' )
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}

add_action( 'init', 'create_post_type_consulting' );
function create_post_type_consulting() {
    register_post_type( 'consulting_type',
        array(
            'labels' => array(
                'name' => __( 'Consulting Page Data' ),
                'singular_name' => __( 'consulting_type' )
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}

add_action( 'init', 'create_post_type_contact' );
function create_post_type_contact() {
    register_post_type( 'contact_type',
        array(
            'labels' => array(
                'name' => __( 'Contact Page Data' ),
                'singular_name' => __( 'contact_type' )
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}




/**
 * @return array
 */
function get_landing_page_data(){
    $args = array(
        'post_type' => 'landing_page_data',
    );
    $aboutUsInfo = get_posts($args);
    return get_fields($aboutUsInfo[0]->ID);
}

/**
 * @return array
 */
function get_marketing_steps(){
    $args = array(
        'order' => 'ASC',
        'post_type' => 'marketing_steps',
    );
    $posts = get_posts($args);
    $marketingSteps = array();
    foreach($posts as $post){
        $marketingSteps[] = get_fields($post->ID);
    }
    return $marketingSteps;
}

/**
 * @return array
 */
function get_consulting_info(){
    $args = array(
        'post_type' => 'consulting_type',
    );
    $consultingInfo = get_posts($args);
    return get_fields($consultingInfo[0]->ID);
}

/**
 * @return array
 */
function get_contact_info(){
    $args = array(
        'post_type' => 'contact_type',
    );
    $contactInfo = get_posts($args);
    return get_fields($contactInfo[0]->ID);
}

/**
 * @return array
 */
function get_about_us_page(){
    $args = array(
        'post_type' => 'about_us_page',
    );
    $contactInfo = get_posts($args);
    return get_fields($contactInfo[0]->ID);
}


// add Continue reading link
function wpse69204_excerpt( $num_words = 20, $ending = '...', $post_id = null )
{
    global $post;

    // Truncate post content
    $current_post = $post_id ? get_post( $post_id ) : $post;
    $excerpt = strip_shortcodes( $current_post->post_content );
    $excerpt = wp_trim_words( $excerpt, $num_words, $ending );

    // Read more link
    $excerpt .= '<a href="' . get_permalink( $post ) . '" title="">...Continue reading...</a>';

    return $excerpt;
}

//enable threaded comments
function enable_threaded_comments(){
    if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('get_header', 'enable_threaded_comments');


//hide widget title
function flexible_widget_titles( $widget_title ) {

// get rid of any leading and trailing spaces

    $title = trim( $widget_title );

// check the first and last character, if [ and ] set the title to empty

    if ( $title[0] == '[' && $title[strlen($title) - 1] == ']' ) $title = '';

    return $title;

}

add_filter( 'widget_title', 'flexible_widget_titles' );