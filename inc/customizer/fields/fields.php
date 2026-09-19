<?php 
/**
 * @Packge     : Fitnstr
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
Colorlib_Customizer::add_field(
    'fitnstr_theme_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Theme Color', 'fitnstr' ),
        'description' => esc_html__( 'Select the theme color.', 'fitnstr' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitnstr_general_section',
        'default'     => '#4438b7',
    )
);

// Header color sections
Colorlib_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'colorlib-separator',
        'label'       => esc_html__( 'Header Color Section', 'fitnstr' ),
        'section'     => 'fitnstr_header_section',

    )
);

 
// Sticky Header background color field
Colorlib_Customizer::add_field(
    'fitnstr_header_bg_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'fitnstr' ),
        'description' => esc_html__( 'Select the header background color for Home page.', 'fitnstr' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitnstr_header_section',
        'default'     => '#fff',
    )
);

// Sticky Header background color field for inner pages
Colorlib_Customizer::add_field(
    'fitnstr_header_bg_color_inner_pages',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color For Inner Pages', 'fitnstr' ),
        'description' => esc_html__( 'Select the sticky header background color for inner pages.', 'fitnstr' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitnstr_header_section',
        'default'     => '#4438b7',
    )
);

// Header nav menu color field
Colorlib_Customizer::add_field(
    'fitnstr_header_menu_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Header menu color', 'fitnstr' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitnstr_header_section',
        'default'     => '#1f1b1b',
    )
);

// Header nav menu hover color field
Colorlib_Customizer::add_field(
    'fitnstr_header_menu_hover_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'fitnstr' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitnstr_header_section',
        'default'     => '#1f1b1b',
    )
);

// Header nav menu hover shade color field
Colorlib_Customizer::add_field(
    'fitnstr_header_menu_hover_shade_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Header menu hover shade color', 'fitnstr' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitnstr_header_section',
        'default'     => '#9182ce',
    )
);


/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Colorlib_Customizer::add_field(
    'fitnstr_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'fitnstr' ),
        'description' => esc_html__( 'Set post excerpt length.', 'fitnstr' ),
        'section'     => 'fitnstr_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Colorlib_Customizer::add_field(
    'fitnstr_blog_meta',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'fitnstr' ),
        'section'     => 'fitnstr_blog_section',
        'default'     => true
    )
);
Colorlib_Customizer::add_field(
    'fitnstr_like_btn',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'fitnstr' ),
        'section'     => 'fitnstr_blog_section',
        'default'     => true
    )
);
Colorlib_Customizer::add_field(
    'fitnstr_blog_share',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'fitnstr' ),
        'section'     => 'fitnstr_blog_section',
        'default'     => true
    )
);


/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Colorlib_Customizer::add_field(
    'fitnstr_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'fitnstr' ),
        'section'           => 'fitnstr_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Colorlib_Customizer::add_field(
    'fitnstr_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'fitnstr' ),
        'section'           => 'fitnstr_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Colorlib_Customizer::add_field(
    'fitnstr_fof_textone_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'fitnstr' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitnstr_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Colorlib_Customizer::add_field(
    'fitnstr_fof_texttwo_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'fitnstr' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitnstr_fof_section',
        'default'     => '#656565',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Social Profile section
Colorlib_Customizer::add_field(
    'social_pro_separator',
    array(
        'type'        => 'colorlib-separator',
        'label'       => esc_html__( 'Social Profile Section', 'fitnstr' ),
        'section'     => 'fitnstr_footer_section',
        'default'     => true,

    )
);

// Social Profile Show/Hide
Colorlib_Customizer::add_field(
    'fitnstr_social_profile_toggle',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Social Profile Show/Hide', 'fitnstr' ),
        'section'     => 'fitnstr_footer_section',
        'default'     => true,
    )
);

//Social Profile links
Colorlib_Customizer::add_field(
	'fitnstr_header_social',
	array(
		'type'         => 'colorlib-repeater',
		'section'      => 'fitnstr_footer_section',
		'label'        => esc_html__( 'Social Profile Links', 'fitnstr' ),
        'button_label' => esc_html__( 'Add new social link', 'fitnstr' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
		),
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'fitnstr' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Twitter',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'fitnstr' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => 'https://twitter.com',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'fitnstr' ),
				'type'    => 'colorlib-icon-picker',
				'default' => 'fa-brands fa-twitter',
			),
			
		),
	)
);

// Footer Copyright section
Colorlib_Customizer::add_field(
    'fitnstr_footer_copyright_separator',
    array(
        'type'        => 'colorlib-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'fitnstr' ),
        'section'     => 'fitnstr_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'fitnstr' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Colorlib_Customizer::add_field(
    'fitnstr_footer_copyright_text',
    array(
        'type'        => 'colorlib-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'fitnstr' ),
        'section'     => 'fitnstr_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget background color field
Colorlib_Customizer::add_field(
    'fitnstr_footer_bg_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Background Color', 'fitnstr' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitnstr_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget text color field
Colorlib_Customizer::add_field(
    'fitnstr_footer_widget_text_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'fitnstr' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitnstr_footer_section',
        'default'     => '#777777',
    )
);

// Footer widget anchor color field
Colorlib_Customizer::add_field(
    'fitnstr_footer_widget_anchor_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'fitnstr' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitnstr_footer_section',
        'default'     => '#4438b7',
    )
);

// Footer widget anchor hover color field
Colorlib_Customizer::add_field(
    'fitnstr_footer_widget_anchor_hover_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'fitnstr' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitnstr_footer_section',
        'default'     => '#4438b7',
    )
);

// Footer Social icon section
Colorlib_Customizer::add_field(
    'fitnstr_footer_soc_icon_separator',
    array(
        'type'        => 'colorlib-separator',
        'label'       => esc_html__( 'Footer Social Icon Section', 'fitnstr' ),
        'section'     => 'fitnstr_footer_section',
        'default'     => true,

    )
);

// Footer Social icon bg color
Colorlib_Customizer::add_field(
    'fitnstr_footer_soc_icon_bg_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Social Icon BG Color', 'fitnstr' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitnstr_footer_section',
        'default'     => '#eeeeee',
    )
);

// Footer Social icon color
Colorlib_Customizer::add_field(
    'fitnstr_footer_soc_icon_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Social icon Color', 'fitnstr' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitnstr_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer Social icon hover bg color
Colorlib_Customizer::add_field(
    'fitnstr_footer_soc_icon_hvr_bg_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Social Icon Hover BG Color', 'fitnstr' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitnstr_footer_section',
        'default'     => '#4438b7',
    )
);

// Footer Social icon hover color
Colorlib_Customizer::add_field(
    'fitnstr_footer_soc_icon_hvr_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Social icon Hover Color', 'fitnstr' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'fitnstr_footer_section',
        'default'     => '#ffffff',
    )
);

