<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'BR_DIR_URI' ) ) {
	define( 'BR_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'BR_DIR_ASSETS_URI' ) ) {
	define( 'BR_DIR_ASSETS_URI', BR_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'BR_DIR_CSS_URI' ) ) {
	define( 'BR_DIR_CSS_URI', BR_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'BR_DIR_JS_URI' ) ) {
	define( 'BR_DIR_JS_URI', BR_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'BR_DIR_IMGS_URI' ) ) {
	define( 'BR_DIR_IMGS_URI', BR_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'BR_DIR_ICON_IMG_URI' ) ) {
	define( 'BR_DIR_ICON_IMG_URI', BR_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'BR_DIR_PATH' ) ) {
	define( 'BR_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'BR_DIR_PATH_INC' ) ) {
	define( 'BR_DIR_PATH_INC', BR_DIR_PATH . 'inc/' );
}

//Br Libraries Folder Directory
if ( ! defined( 'BR_DIR_PATH_LIBS' ) ) {
	define( 'BR_DIR_PATH_LIBS', BR_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'BR_DIR_PATH_CLASSES' ) ) {
	define( 'BR_DIR_PATH_CLASSES', BR_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'BR_DIR_PATH_HOOKS' ) ) {
	define( 'BR_DIR_PATH_HOOKS', BR_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function br_admin_script(){
    wp_enqueue_style( 'br-admin', get_template_directory_uri().'/assets/css/br-admin.css', false, '1.0.0' );
    wp_enqueue_script( 'br_admin', get_template_directory_uri().'/assets/js/br-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'br_admin_script' );



/**
 * Include File
 *
 */
require_once( BR_DIR_PATH_INC . 'br-breadcrumbs.php' );
require_once( BR_DIR_PATH_INC . 'br-widgets-reg.php' );
require_once( BR_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( BR_DIR_PATH_INC . 'post-like.php' );
require_once( BR_DIR_PATH_INC . 'br-functions.php' );
require_once( BR_DIR_PATH_INC . 'br-commoncss.php' );
require_once( BR_DIR_PATH_INC . 'support-functions.php' );
require_once( BR_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( BR_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( BR_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( BR_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( BR_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( BR_DIR_PATH_HOOKS . 'hooks.php' );
require_once( BR_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( BR_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( BR_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );

/**
 * Instantiate Br object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Br = new Br();