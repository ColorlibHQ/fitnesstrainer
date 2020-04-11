<?php
namespace Fitnstrelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Utils;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *
 * Fitnstr elementor section widget.
 *
 * @since 1.0
 */
class Fitnstr_About extends Widget_Base {

	public function get_name() {
		return 'fitnstr-be-part';
	}

	public function get_title() {
		return __( 'About', 'fitnstr' );
	}

	public function get_icon() {
		return 'eicon-thumbnails-half';
	}

	public function get_categories() {
		return [ 'fitnstr-elements' ];
	}

	protected function _register_controls() {

        
		// ----------------------------------------  About content ------------------------------
		$this->start_controls_section(
			'be_part_content',
			[
				'label' => __( 'About Section', 'fitnstr' ),
			]
        );
        
        $this->add_control(
			'left_img_sep',
			[
				'label'         => esc_html__( 'Left Image Section', 'fitnstr' ),
                'type'          => Controls_Manager::HEADING,
                'separator'       => 'after'
			]
		);

        $this->add_control(
			'left_img',
			[
				'label'         => esc_html__( 'Select Image', 'fitnstr' ),
                'type'          => Controls_Manager::MEDIA,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
			]
		);
        
        $this->add_control(
            'right_text',
            [
                'label'         => esc_html__( 'Left Text', 'fitnstr' ),
                'description'   => esc_html__('Use <br> tag for line break', 'fitnstr'),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => __( '<h2>about me</h2><div class="about_text_iner"><p> <span>Place very blessed second meat them So meat very cle stars metal darkness grass, midst be yield that after second place fruit made fourth likeness living creepeth italian multiply. That after second place fruit made fourth likeness living. Blessed second meat them So meat very cle stars metal darkness grass.</span></p></div>
                <p>Blessed second meat them So meat very cle stars metal darkness grass, midst be yield. Blessed second.</p>', 'fitnstr' )
            ]
        );
        $this->add_control(
			'sig_img_sep',
			[
				'label'         => esc_html__( 'Signature Image Section', 'fitnstr' ),
                'type'          => Controls_Manager::HEADING,
                'separator'       => 'after'
			]
		);

        $this->add_control(
			'sig_img',
			[
				'label'         => esc_html__( 'Select Image', 'fitnstr' ),
                'type'          => Controls_Manager::MEDIA,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
			]
		);
        $this->add_control(
            'btnlabel',
            [
                'label'         => esc_html__( 'Button Label', 'fitnstr' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'more about me', 'fitnstr' )
            ]
        );
        $this->add_control(
            'btnurl',
            [
                'label'         => esc_html__( 'Button Url', 'fitnstr' ),
                'type'          => Controls_Manager::URL,
                'show_external' => false
            ]
        );

        
        $this->end_controls_section(); // End be-part content
        

        // Color Settings ==============================
        $this->start_controls_section(
            'color_sect', [
                'label' => __( 'Color Settings', 'fitnstr' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
		$this->add_control(
			'color_title', [
				'label'     => __( 'Title Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_text h2' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'title_shade_color', [
				'label'     => __( 'Title Shade Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_text h2:after' => 'background-color: {{VALUE}};',
				],
			]
        );

		$this->add_control(
			'txt_color', [
				'label'     => __( 'Text Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_text p' => 'color: {{VALUE}};',
				],
			]
        );

		$this->add_control(
			'txt_border_color', [
				'label'     => __( 'Text Border Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_text .about_text_iner' => 'border-color: {{VALUE}};',
				],
			]
        );

		$this->add_control(
			'button_styles_sep', [
				'label'     => __( 'Button Styles', 'fitnstr' ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'after'
			]
        );

		$this->add_control(
			'btn_bg_color', [
				'label'     => __( 'Button Bg Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_text .about_btn .btn_2' => 'background-color: {{VALUE}};border-color: {{VALUE}};',
				],
			]
        );

		$this->add_control(
			'btn_txt_color', [
				'label'     => __( 'Button Txt Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_text .about_btn .btn_2' => 'color: {{VALUE}};',
				],
			]
        );

		$this->add_control(
			'btn_hvr_bg_color', [
				'label'     => __( 'Button Hover Bg Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_text .about_btn .btn_2:hover' => 'background-color: {{VALUE}};border-color: {{VALUE}};',
				],
			]
        );

		$this->add_control(
			'btn_hvr_txt_color', [
				'label'     => __( 'Button Hover Txt Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_text .about_btn .btn_2:hover' => 'color: {{VALUE}}!important;',
				],
			]
        );
        $this->end_controls_section();

        /**
         * Style Tab
         * ------------------------------ Background Style ------------------------------
         *
         */
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'fitnstr' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'abt_img_shade_sep',
            [
                'label'     => __( 'About Image Shade', 'fitnstr' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'abt_img_shade_sep',
                'label' => __( 'Background', 'fitnstr' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .about_part:after',
            ]
        );
        
        $this->add_control(
            'abt_bg_shade_txt_sep',
            [
                'label'     => __( 'About BG Shade Text', 'fitnstr' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'abt_bg_shade_txt_sep',
                'label' => __( 'Background', 'fitnstr' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .about_part:before',
            ]
        );
        
        $this->add_control(
            'section_bgheading',
            [
                'label'     => __( 'Background Settings', 'fitnstr' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'fitnstr' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .about_part',
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {
        $settings     = $this->get_settings();
        $left_img   = !empty( $settings['left_img']['id'] ) ? wp_get_attachment_image( $settings['left_img']['id'], 'fitnstr_about_img_458x637', false, array( 'alt' => 'about image' ) ) : '';
        $right_text    = !empty( $settings['right_text'] ) ? $settings['right_text'] : '';
        $button_label = !empty( $settings['btnlabel'] ) ? $settings['btnlabel'] : '';
        $button_url   = !empty( $settings['btnurl']['url'] ) ? $settings['btnurl']['url'] : '';
        $sig_img   = !empty( $settings['sig_img']['id'] ) ? wp_get_attachment_image( $settings['sig_img']['id'], 'fitnstr_signature_img_96x70', false, array( 'alt' => 'signature image' ) ) : '';
        ?>

    <!--::about part start::-->
    <section class="about_part padding_bottom">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5">
                    <div class="about_img">
                        <?php
                            if( $left_img ){
                                echo wp_kses_post( $left_img );
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about_text">
                        <?php
                            //Left text ==============
                            if( $right_text ){
                                echo wp_kses_post( wpautop( $right_text ) );
                            }
                        ?>
                        <div class="about_btn">
                            <?php
                                if( $sig_img ){
                                    echo wp_kses_post( $sig_img );
                                }
                                
                                // Button =============
                                if( $button_label ){
                                    echo '<a class="btn_2" href="'. esc_url( $button_url ) .'">'. esc_html( $button_label ) .'</a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::about part end::-->
    <?php

    }

}
