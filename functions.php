<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Define constant
	 *
	 */
	
	 
	// Base URI
	if( !defined( 'MARTINE_DIR_URI' ) )
		define( 'MARTINE_DIR_URI', get_template_directory_uri().'/' );
	
	// assets URI
	if( !defined( 'MARTINE_DIR_ASSETS_URI' ) )
		define( 'MARTINE_DIR_ASSETS_URI', MARTINE_DIR_URI.'assets/' );
	
	// Css File URI
	if( !defined( 'MARTINE_DIR_CSS_URI' ) )
		define( 'MARTINE_DIR_CSS_URI', MARTINE_DIR_ASSETS_URI .'css/' );
	
	// Js File URI
	if( !defined( 'MARTINE_DIR_JS_URI' ) )
		define( 'MARTINE_DIR_JS_URI', MARTINE_DIR_ASSETS_URI .'js/' );
	
	// Icon Images
	if( !defined('MARTINE_DIR_ICON_IMG_URI') )
		define( 'MARTINE_DIR_ICON_IMG_URI', MARTINE_DIR_ASSETS_URI.'img/icons/' );
	
	//DIR inc
	if( !defined( 'MARTINE_DIR_INC' ) )
		define( 'MARTINE_DIR_INC', MARTINE_DIR_URI.'inc/' );

	//Elementor Widgets Folder Directory
	if( !defined( 'MARTINE_DIR_ELEMENTOR' ) )
		define( 'MARTINE_DIR_ELEMENTOR', MARTINE_DIR_INC.'elementor-widgets/' );

	// Base Directory
	if( !defined( 'MARTINE_DIR_PATH' ) )
		define( 'MARTINE_DIR_PATH', get_parent_theme_file_path().'/' );
	
	//Inc Folder Directory
	if( !defined( 'MARTINE_DIR_PATH_INC' ) )
		define( 'MARTINE_DIR_PATH_INC', MARTINE_DIR_PATH.'inc/' );
	
	//Colorlib framework Folder Directory
	if( !defined( 'MARTINE_DIR_PATH_LIB' ) )
		define( 'MARTINE_DIR_PATH_LIB', MARTINE_DIR_PATH_INC.'libraries/' );
	
	//Classes Folder Directory
	if( !defined( 'MARTINE_DIR_PATH_CLASSES' ) )
		define( 'MARTINE_DIR_PATH_CLASSES', MARTINE_DIR_PATH_INC.'classes/' );

	
	//Widgets Folder Directory
	if( !defined( 'MARTINE_DIR_PATH_WIDGET' ) )
		define( 'MARTINE_DIR_PATH_WIDGET', MARTINE_DIR_PATH_INC.'widgets/' );
		
	//Elementor Widgets Folder Directory
	if( !defined( 'MARTINE_DIR_PATH_ELEMENTOR_WIDGETS' ) )
		define( 'MARTINE_DIR_PATH_ELEMENTOR_WIDGETS', MARTINE_DIR_PATH_INC.'elementor-widgets/' );
	

		
	/**
	 * Include File
	 *
	 */
	
	// Breadcrumbs file include
	require_once( MARTINE_DIR_PATH_INC . 'martine-breadcrumbs.php' );
	// Sidebar register file include
	require_once( MARTINE_DIR_PATH_INC . 'widgets/martine-widgets-reg.php' );
	// Post widget file include
	require_once( MARTINE_DIR_PATH_INC . 'widgets/martine-recent-post-thumb.php' );
	// News letter widget file include
	require_once( MARTINE_DIR_PATH_INC . 'widgets/martine-newsletter-widget.php' );
	//Social Links
	require_once( MARTINE_DIR_PATH_INC . 'widgets/martine-social-links.php' );
	// Instagram Widget
	require_once( MARTINE_DIR_PATH_INC . 'widgets/martine-instagram.php' );
	// Nav walker file include
	require_once( MARTINE_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
	// Theme function file include
	require_once( MARTINE_DIR_PATH_INC . 'martine-functions.php' );

	// Theme Demo file include
	require_once( MARTINE_DIR_PATH_INC . 'demo/demo-import.php' );

	// Post Like
	require_once( MARTINE_DIR_PATH_INC . 'post-like.php' );
	// Theme support function file include
	require_once( MARTINE_DIR_PATH_INC . 'support-functions.php' );
	// Html helper file include
	require_once( MARTINE_DIR_PATH_INC . 'wp-html-helper.php' );
	// Pagination file include
	require_once( MARTINE_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
	// Elementor Widgets
	require_once( MARTINE_DIR_PATH_ELEMENTOR_WIDGETS . 'elementor-widget.php' );
	//
	require_once( MARTINE_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
	
	require_once( MARTINE_DIR_PATH_CLASSES . 'Class-Config.php' );
	// Customizer
	require_once( MARTINE_DIR_PATH_INC . 'customizer/customizer.php' );
	// Class autoloader
	require_once( MARTINE_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
	// Class martine dashboard
	require_once( MARTINE_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );
	// Common css
	require_once( MARTINE_DIR_PATH_INC . 'martine-commoncss.php' );


	if( class_exists( 'RW_Meta_Box' ) ){
		// Metabox Function
		require_once( MARTINE_DIR_PATH_INC . 'martine-metabox.php' );
	}


	// Admin Enqueue Script
	function martine_admin_script(){
		wp_enqueue_style( 'martine-admin', get_template_directory_uri().'/assets/css/martine_admin.css', false, '1.0.0' );
		wp_enqueue_script( 'martine_admin', get_template_directory_uri().'/assets/js/martine_admin.js', false, '1.0.0' );
	}
	add_action( 'admin_enqueue_scripts', 'martine_admin_script' );

	 
	// WooCommerce style desable
	add_filter( 'woocommerce_enqueue_styles', '__return_false' );


	/**
	 * Instantiate Martine object
	 *
	 * Inside this object:
	 * Enqueue scripts, Google font, Theme support features, Martine Dashboard .
	 *
	 */
	
	$Martine = new Martine();
	
