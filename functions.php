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
	if( !defined( 'FITNSTR_DIR_URI' ) )
		define( 'FITNSTR_DIR_URI', get_template_directory_uri().'/' );
	
	// assets URI
	if( !defined( 'FITNSTR_DIR_ASSETS_URI' ) )
		define( 'FITNSTR_DIR_ASSETS_URI', FITNSTR_DIR_URI.'assets/' );
	
	// Css File URI
	if( !defined( 'FITNSTR_DIR_CSS_URI' ) )
		define( 'FITNSTR_DIR_CSS_URI', FITNSTR_DIR_ASSETS_URI .'css/' );
	
	// Js File URI
	if( !defined( 'FITNSTR_DIR_JS_URI' ) )
		define( 'FITNSTR_DIR_JS_URI', FITNSTR_DIR_ASSETS_URI .'js/' );
	
	// Icon Images
	if( !defined('FITNSTR_DIR_ICON_IMG_URI') )
		define( 'FITNSTR_DIR_ICON_IMG_URI', FITNSTR_DIR_ASSETS_URI.'img/icon/' );
	
	//DIR inc
	if( !defined( 'FITNSTR_DIR_INC' ) )
		define( 'FITNSTR_DIR_INC', FITNSTR_DIR_URI.'inc/' );

	//Elementor Widgets Folder Directory
	if( !defined( 'FITNSTR_DIR_ELEMENTOR' ) )
		define( 'FITNSTR_DIR_ELEMENTOR', FITNSTR_DIR_INC.'elementor-widgets/' );

	// Base Directory
	if( !defined( 'FITNSTR_DIR_PATH' ) )
		define( 'FITNSTR_DIR_PATH', get_parent_theme_file_path().'/' );
	
	//Inc Folder Directory
	if( !defined( 'FITNSTR_DIR_PATH_INC' ) )
		define( 'FITNSTR_DIR_PATH_INC', FITNSTR_DIR_PATH.'inc/' );
	
	//Colorlib framework Folder Directory
	if( !defined( 'FITNSTR_DIR_PATH_LIB' ) )
		define( 'FITNSTR_DIR_PATH_LIB', FITNSTR_DIR_PATH_INC.'libraries/' );
	
	//Classes Folder Directory
	if( !defined( 'FITNSTR_DIR_PATH_CLASSES' ) )
		define( 'FITNSTR_DIR_PATH_CLASSES', FITNSTR_DIR_PATH_INC.'classes/' );

	
	//Widgets Folder Directory
	if( !defined( 'FITNSTR_DIR_PATH_WIDGET' ) )
		define( 'FITNSTR_DIR_PATH_WIDGET', FITNSTR_DIR_PATH_INC.'widgets/' );
		
	//Elementor Widgets Folder Directory
	if( !defined( 'FITNSTR_DIR_PATH_ELEMENTOR_WIDGETS' ) )
		define( 'FITNSTR_DIR_PATH_ELEMENTOR_WIDGETS', FITNSTR_DIR_PATH_INC.'elementor-widgets/' );
	

		
	/**
	 * Include File
	 *
	 */
	
	// Breadcrumbs file include
	require_once( FITNSTR_DIR_PATH_INC . 'fitnstr-breadcrumbs.php' );
	// Sidebar register file include
	require_once( FITNSTR_DIR_PATH_INC . 'widgets/fitnstr-widgets-reg.php' );
	// Post widget file include
	require_once( FITNSTR_DIR_PATH_INC . 'widgets/fitnstr-recent-post-thumb.php' );
	// News letter widget file include
	require_once( FITNSTR_DIR_PATH_INC . 'widgets/fitnstr-newsletter-widget.php' );
	//Social Links
	require_once( FITNSTR_DIR_PATH_INC . 'widgets/fitnstr-social-links.php' );
	// Instagram Widget
	require_once( FITNSTR_DIR_PATH_INC . 'widgets/fitnstr-instagram.php' );
	// Nav walker file include
	require_once( FITNSTR_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
	// Theme function file include
	require_once( FITNSTR_DIR_PATH_INC . 'fitnstr-functions.php' );

	// Theme Demo file include
	require_once( FITNSTR_DIR_PATH_INC . 'demo/demo-import.php' );

	// Post Like
	require_once( FITNSTR_DIR_PATH_INC . 'post-like.php' );
	// Theme support function file include
	require_once( FITNSTR_DIR_PATH_INC . 'support-functions.php' );
	// Html helper file include
	require_once( FITNSTR_DIR_PATH_INC . 'wp-html-helper.php' );
	// Pagination file include
	require_once( FITNSTR_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
	// Elementor Widgets
	require_once( FITNSTR_DIR_PATH_ELEMENTOR_WIDGETS . 'elementor-widget.php' );
	//
	require_once( FITNSTR_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
	
	require_once( FITNSTR_DIR_PATH_CLASSES . 'Class-Config.php' );
	// Customizer
	require_once( FITNSTR_DIR_PATH_INC . 'customizer/customizer.php' );
	// Class autoloader
	require_once( FITNSTR_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
	// Class fitnstr dashboard
	require_once( FITNSTR_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );
	// Common css
	require_once( FITNSTR_DIR_PATH_INC . 'fitnstr-commoncss.php' );


	if( class_exists( 'RW_Meta_Box' ) ){
		// Metabox Function
		require_once( FITNSTR_DIR_PATH_INC . 'fitnstr-metabox.php' );
	}
	

	// Admin Enqueue Script
	function fitnstr_admin_script(){
		wp_enqueue_style( 'fitnstr-admin', get_template_directory_uri().'/assets/css/fitnstr_admin.css', false, '1.0.0' );
		wp_enqueue_script( 'fitnstr_admin', get_template_directory_uri().'/assets/js/fitnstr_admin.js', false, '1.0.0' );
	}
	add_action( 'admin_enqueue_scripts', 'fitnstr_admin_script' );

	 
	// WooCommerce style desable
	add_filter( 'woocommerce_enqueue_styles', '__return_false' );


	/**
	 * Instantiate Fitnstr object
	 *
	 * Inside this object:
	 * Enqueue scripts, Google font, Theme support features, Fitnstr Dashboard .
	 *
	 */
	
	$Fitnstr = new Fitnstr();
	
