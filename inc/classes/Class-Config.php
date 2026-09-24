<?php 
/**
 * @Packge 	   : Fitnstr
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	// Final Class
	final class Fitnstr{

		
		// Theme Version
		private $fitnstr_version = '1.0';

		// Minimum WordPress Version required
		private $min_wp = '4.0';

		// Minimum PHP version required 
		private $min_php = '5.6.25';

		function __construct(){
			// Theme Support
			add_action( 'after_setup_theme', array( $this, 'support' ) );
			// 
			$this->init();
		}

		// Theme init
		public function init(){
			//
			$this->setup();

			// customizer init Instantiate
			$this->customizer_init();
			
		}

		// Theme setup
		private function setup(){
			
			// Create enqueue class instance
			$enqueu = new fitnstr_Enqueue();
			$enqueu->scripts = $this->enqueue() ;
			$enqueu->fitnstr_scripts_enqueue_init() ;

		}
		// Theme Support
		public function support(){
			// content width
	        $GLOBALS['content_width'] = apply_filters( 'fitnstr_content_width', 751 );

	        
	        // text domain for translation.
	        load_theme_textdomain( 'fitnstr', FITNSTR_DIR_PATH . '/languages' );
	        
	        // support title tage
	        add_theme_support( 'title-tag' );
	        
	        // support logo
			add_theme_support( 'custom-logo', array(
				'height'      => 33,
				'width'       => 171,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'site-title', 'site-description' ),
			) );

			//Custom Hreader
			add_theme_support( 'custom-header', array(
				'flex-width'    => true,
				'width'         => 1920,
				'flex-height'   => true,
				'height'        => 625,
				'default-image' => get_template_directory_uri() . '/assets/img/banner.jpg'
			) );

			//Custom background
			add_theme_support( 'custom-background', array(
				'default-color' => 'ffffff'
			) );

	        //  support post format
	        add_theme_support( 'post-formats', array( 'video','audio' ) );
	        
	        // support post-thumbnails
	        add_theme_support( 'post-thumbnails', array( 'post' ) );
			
			// Site logo size
			add_image_size( 'fitnstr_logo_171x33', 171, 33, true );
					
			// About image size
			add_image_size( 'fitnstr_about_img_458x637', 458, 637, true );
					
			// Signature image size
			add_image_size( 'fitnstr_signature_img_96x70', 96, 70, true );
					
			// Skill image size
			add_image_size( 'fitnstr_skill_img_457x632', 457, 632, true );
					
			// Gallery image size
			add_image_size( 'fitnstr_gallery_img_370x361', 370, 361, true );
			add_image_size( 'fitnstr_gallery_img_759x397', 759, 397, true );
			add_image_size( 'fitnstr_gallery_img_272x270', 272, 270, true );
			add_image_size( 'fitnstr_gallery_img_370x607', 370, 607, true );
			add_image_size( 'fitnstr_gallery_img_272x291', 272, 291, true );
			add_image_size( 'fitnstr_gallery_img_478x571', 478, 571, true );
					
			// Testimonial image size
			add_image_size( 'fitnstr_client_img_140x140', 140, 140, true );

			// Partners image size
			add_image_size( 'fitnstr_partners_155x70', 155, 70, true );

			// Single blog post image size
			add_image_size( 'fitnstr_single_blog_750x375', 750, 375, true );
			add_image_size( 'fitnstr_np_thumb', 60, 60, true );

			// Latest post thumbnail Widget thumbnail size
			add_image_size( 'fitnstr_widget_post_thumb', 80, 80, true );
	        	        
	        // support automatic feed links
	        add_theme_support( 'automatic-feed-links' );
	        
	        // support html5
	        add_theme_support( 'html5' );
			
			// Add theme support for selective refresh for widgets.
			add_theme_support( 'customize-selective-refresh-widgets' );
						    
	        // register nav menu
	        register_nav_menus( array(
	            'primary-menu'   => esc_html__( 'Primary Menu', 'fitnstr' ),
				'social-menu'    => esc_html__( 'Social Menu', 'fitnstr' ),
	        ) );

	        // editor style
	        add_editor_style('assets/css/editor-style.css');

		} // end support method

		// enqueue theme style and script
		private function enqueue(){

			$cssPath = FITNSTR_DIR_CSS_URI;
			$jsPath  = FITNSTR_DIR_JS_URI;

			$scripts = array(
				'style' => array(
					array(
						'handler'		=> 'fitnesstrainer-google-font',
						'file' 			=> $this->google_font(),
					),
					array(
						'handler'		=> 'fitnesstrainer-bootstrap',
						'file' 			=> $cssPath.'bootstrap.min.css',
						'dependency' 	=> array(),
						'version' 		=> '5.3.8-5',
					),
					array(
						'handler'		=> 'fitnesstrainer-animate',
						'file' 			=> $cssPath.'animate.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'fitnesstrainer-owl-carousel',
						'file' 			=> $cssPath.'owl.carousel.min.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'fitnesstrainer-font-awesome',
						'file' 			=> $cssPath.'font-awesome.min.css',
						'dependency' 	=> array(),
						'version' 		=> '7.3.1-1',
					),
					array(
						'handler'		=> 'fitnesstrainer-themify',
						'file' 			=> $cssPath.'themify-icons.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'fitnesstrainer-flaticon',
						'file' 			=> $cssPath.'flaticon.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'fitnesstrainer-magnific-popup-css',
						'file' 			=> $cssPath.'magnific-popup.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'fitnesstrainer-nice-select-css',
						'file' 			=> $cssPath.'nice-select.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'fitnesstrainer-slick-css',
						'file' 			=> $cssPath.'slick.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'fitnesstrainer-gijgo-css',
						'file' 			=> $cssPath.'gijgo.min.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'fitnesstrainer-default-css',
						'file' 			=> $cssPath.'default.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'fitnesstrainer-style-css',
						'file' 			=> $cssPath.'style.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					
					array(
						'handler'		=> 'fitnesstrainer-fitnstr-style',
						'file' 			=> get_stylesheet_uri(),
					),
				),
				
				'scripts' => array(
					array(
						'handler'		=> 'fitnesstrainer-bootstrap',
						'file' 			=> $jsPath.'bootstrap.min.js',
						'dependency' 	=> array(),
						'version' 		=> '5.3.8-4',
						'in_footer' 	=> true
					),
					
					array(
						'handler'		=> 'fitnstr-ui-js',
						'file' 			=> $jsPath . ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? 'colorlib-ui.js' : 'colorlib-ui.min.js' ),
						'dependency' 	=> array(),
						'version' 		=> '3.0.0',
						'in_footer' 	=> true
					),
					array(
						'handler'		=> 'fitnesstrainer-fitnstr-custom',
						'file' 			=> $jsPath.'custom.js',
						'dependency' 	=> array( 'masonry', 'fitnstr-ui-js' ),
						'version' 		=> $this->fitnstr_version . '-s2',
						'in_footer' 	=> true
					),

				)
			);

			return $scripts;

		} // end enqueu method 

		// Google Font  
		private function google_font(){
			$font_url = '';

			/*
			 * The families this theme uses are bundled under
			 * assets/fonts/google, so nothing is fetched from Google and
			 * no request leaves the visitor's browser for a third party.
			 *
			 * Translators can still turn the fonts off for scripts these
			 * families do not cover.
			 */
			if ( 'off' !== _x( 'on', 'Google font: on or off', 'fitnstr' ) ) {
				$font_url = get_template_directory_uri() . '/assets/css/google-fonts.css';
			}

			return esc_url_raw( $font_url );
		} //End google_font method

		private function customizer_init(){

		
			

			
			// Instantiate fitnstr theme customizer
			$fitnstr_theme_customizer = new fitnstr_theme_customizer();
		}
	} // End Fitnstr Class

?>