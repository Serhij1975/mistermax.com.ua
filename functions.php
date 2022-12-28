<?php


/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );

/**
 * mymax functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mymax
 */

if ( ! function_exists( 'mymax_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mymax_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mymax, use a find and replace
		 * to change 'mymax' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mymax', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 Включаем автоматич расставление тега title
		 
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */


					
					if ( function_exists( 'add_theme_support' ) ) {
						add_theme_support( 'post-thumbnails' );
						set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)
					 
						// additional image sizes
						// delete the next line if you do not need additional image sizes
						add_image_size( 'category-thumb', 150, 100 ); // 300 pixels wide (and unlimited height)
					 }

		
add_action( 'wp_enqueue_scripts', 'scripts_to_form' );
function scripts_to_form(){
wp_enqueue_script("script_form", get_bloginfo( 'stylesheet_directory' ).'/js/script-forma.js',array('jquery'),"0.1",false);

}
// 		end
		
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'mymax' ),



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
		add_theme_support( 'custom-background', apply_filters( 'mymax_custom_background_args', array(
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
add_action( 'after_setup_theme', 'mymax_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mymax_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'mymax_content_width', 640 );
}
add_action( 'after_setup_theme', 'mymax_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mymax_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mymax' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mymax' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mymax_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mymax_scripts() {
	wp_enqueue_style( 'mymax-style', get_stylesheet_uri() );

	wp_enqueue_script( 'mymax-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'mymax-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mymax_scripts' );



// Crunchify's Scroll to Top Script
function my_scripts_method(){



	// wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js', false, null);
		// wp_enqueue_script('jquery');
			wp_enqueue_script( 'mymax-button-up', get_template_directory_uri() . '/js/top_button.js', array('jquery'), null, true );

}
add_action('wp_enqueue_scripts', 'my_scripts_method' );

function mymax_scripts_up() {



		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
	}			
}
add_action( 'wp_enqueue_scripts', 'mymax_scripts_up' );








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
// require get_template_directory() . '/inc/customizer_univer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// ------------------------------------------------------------------
// Вешаем все блоки, поля и опции на хук admin_init
// ------------------------------------------------------------------
//
add_action( 'admin_init', 'eg_settings_api_init' );
function eg_settings_api_init() {
	// Добавляем блок опций на базовую страницу "Чтение"
	add_settings_section(
		'eg_setting_section', // секция
		'Заголовок для секции настроек',
		'eg_setting_section_callback_function',
		'reading' // страница
	);

	// Добавляем поля опций. Указываем название, описание, 
	// функцию выводящую html код поля опции.
	add_settings_field(
		'eg_setting_name',
		'Описание поля опции',
		'eg_setting_callback_function', // можно указать ''
		'reading', // страница
		'eg_setting_section' // секция
	);
	add_settings_field(
		'eg_setting_name2',
		'Описание поля опции2',
		'eg_setting_callback_function2',
		'reading', // страница
		'eg_setting_section' // секция
	);

	// Регистрируем опции, чтобы они сохранялись при отправке 
	// $_POST параметров и чтобы callback функции опций выводили их значение.
	register_setting( 'reading', 'eg_setting_name' );
	register_setting( 'reading', 'eg_setting_name2' );
}

// ------------------------------------------------------------------
// Сallback функция для секции
// ------------------------------------------------------------------
//
// Функция срабатывает в начале секции, если не нужно выводить 
// никакой текст или делать что-то еще до того как выводить опции, 
// то функцию можно не использовать для этого укажите '' в третьем 
// параметре add_settings_section
//
function eg_setting_section_callback_function() {
	echo '<p>Текст описывающий блок настроек</p>';
}

// ------------------------------------------------------------------
// Callback функции выводящие HTML код опций
// ------------------------------------------------------------------
//
// Создаем checkbox и text input теги
//
function eg_setting_callback_function() {
	echo '<input 
		name="eg_setting_name" 
		type="checkbox" 
		' . checked( 1, get_option( 'eg_setting_name' ), false ) . ' 
		value="1" 
		class="code" 
	/>';
}
function eg_setting_callback_function2() {
	echo '<input 
		name="eg_setting_name2"  
		type="text" 
		value="' . get_option( 'eg_setting_name2' ) . '" 
		class="code2"
	 />';
}
/*************************************************************************/



add_filter( 'wp_nav_menu_items', 'change_nav_menu_items', 10, 2 );

function change_nav_menu_items( $items, $args ) {
	if ( 'menu-1' == $args->theme_location ) {

		$items .= '<li>' . get_search_form( false ) . '</li>';
		// $items .= '<li>' . get_search_form( false ) . '</li>';
		// $items .= '<li class="search"><form role="search" method="get" id="searchform" action="'.home_url( '/' ).'"><input type="text" value=" " name="s" id="s" /><input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" /></form></li>';



	}
	return $items;
}




// menu-search-form.

function add_search_to_wp_menu ( $items, $args ) {
	if( 'menu-1' === $args -> theme_location ) {
	$items .= '<li class="menu-item menu-item-search">';
	$items .= '<form method="get" class="menu-search-form" action="' . get_bloginfo('home') . '/"><p><input class="text" type="text" value="Кто Ищет, Тот Найдет !" name="s" id="s" onfocus="if (this.value == \'Кто Ищет, Тот Найдет !\') {this.value = \'\';}" onblur="if (this.value == \'\') {this.value = \'Кто Ищет, Тот Найдет !\';}" /></p></form>';
	$items .= '</li>';
	}
	return $items;
	}
	add_filter('wp_nav_menu_items','add_search_to_wp_menu',10,2);



