<?php 
/**
 * @Packge     : Fitnstr
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

class fitnstr_theme_customizer {


    function __construct(){
        add_action( 'customize_register', array( $this, 'fitnstr_theme_customizer_options' ) );
        add_action( 'customize_controls_enqueue_scripts', array( $this, 'fitnstr_customizer_js' ) );
    }

    // Customize register hook

    public function fitnstr_theme_customizer_options( $wp_customize ){

        $wp_customize->add_setting( 'secondary_logo', 
            array(
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint'
            ) 
        ); // Add setting for logo uploader
            
        // Add control for logo uploader (actual uploader)
        $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'WP_Customize_Cropped_Image_Control', array(
            'label' => __( 'Secondary Logo', 'fitnstr' ),
            'priority'  => 9,
            'section' => 'title_tagline',
            'settings' => 'secondary_logo',
            ) ) 
        );
        
        // Include files
        include( FITNSTR_DIR_PATH_INC. 'customizer/fields/sections.php' );
        include( FITNSTR_DIR_PATH_INC. 'customizer/fields/fields.php' );

        // Change panel to theme option
        $wp_customize->get_section( 'title_tagline' )->panel      = 'fitnstr_theme_options_panel';
        // change priorities
        $wp_customize->get_section( 'title_tagline' )->priority     = 0;
        $wp_customize->remove_section( 'colors' );


    }


    // Customizer js enqueue

    public function fitnstr_customizer_js(){

        wp_enqueue_script( 'fitnstr-customizer', FITNSTR_DIR_URI.'inc/customizer/js/customizer.js', array('customize-controls'), '1.0', true );


        $about_page     = self::fitnstr_get_page_name( 'page-about.php' );
        $contact_page   = self::fitnstr_get_page_name( 'page-contact.php' );

        wp_localize_script( 'fitnstr-customizer', 'customizerdata', array(

            'site_url'      => site_url('/'),
            'blog_page'     => get_post_type_archive_link( 'post' ),
            'about_page'    => esc_html( !empty( $about_page[0]->post_name ) ? $about_page[0]->post_name : '' ),
            'contact_page'  => esc_html( !empty( $contact_page[0]->post_name ) ? $contact_page[0]->post_name : '' ),

        ) );

    }

    // Get page name by page template
    public static function fitnstr_get_page_name( $template ){

        $pages = get_pages(array(
            'meta_key' => '_wp_page_template',
            'meta_value' => esc_html( $template )
        ));

        return $pages;
    }

    // Image sanitization callback.

    public static function fitnstr_sanitize_image( $image, $setting ) {

        /*
         * Array of valid image file types.
         *
         * The array includes image mime types that are included in wp_get_mime_types()
         */
        $mimes = array(
            'jpg|jpeg|jpe' => 'image/jpeg',
            'gif'          => 'image/gif',
            'png'          => 'image/png',
            'bmp'          => 'image/bmp',
            'tif|tiff'     => 'image/tiff',
            'ico'          => 'image/x-icon'
        );

        // Return an array with file extension and mime_type.
        $file = wp_check_filetype( $image, $mimes );

        // If $image has a valid mime_type, return it; otherwise, return the default.
        return ( $file['ext'] ? $image : $setting->default );
    }

}
?>