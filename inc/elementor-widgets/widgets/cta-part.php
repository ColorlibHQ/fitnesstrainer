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
class Fitnstr_Cta extends Widget_Base {

	public function get_name() {
		return 'fitnstr-cta';
	}

	public function get_title() {
		return __( 'Cta', 'fitnstr' );
	}

	public function get_icon() {
		return 'eicon-dual-button';
	}

	public function get_categories() {
		return [ 'fitnstr-elements' ];
	}

	protected function _register_controls() {

        
		// ----------------------------------------  Cta content ------------------------------
		$this->start_controls_section(
			'cta_content',
			[
				'label' => __( 'Cta Section', 'fitnstr' ),
			]
        );
        $this->add_control(
			'left_sec_sep', [
				'label'     => __( 'Left Section', 'fitnstr' ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'after'
			]
        );
        $this->add_control(
            'left_big_txt',
            [
                'label'         => esc_html__( 'Big Text', 'fitnstr' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( '08', 'fitnstr' )
            ]
        );
        $this->add_control(
            'left_sml_txt',
            [
                'label'         => esc_html__( 'Small Text', 'fitnstr' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Years Expesience', 'fitnstr' )
            ]
        );
        $this->add_control(
			'right_sec_sep', [
				'label'     => __( 'Right Section', 'fitnstr' ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'after'
			]
        );
        $this->add_control(
            'right_sml_txt',
            [
                'label'         => esc_html__( 'Right Small Text', 'fitnstr' ),
                'type'          => Controls_Manager::TEXTAREA,
                'label_block'   => true,
                'default'       => esc_html__( 'Hire me to get the best', 'fitnstr' )
            ]
        );
        $this->add_control(
            'right_big_txt',
            [
                'label'         => esc_html__( 'Right Big Text', 'fitnstr' ),
                'type'          => Controls_Manager::TEXTAREA,
                'label_block'   => true,
                'default'       => esc_html__( 'Want to start your next workout with me?', 'fitnstr' )
            ]
        );

        
        $this->end_controls_section(); // End cta content

        // Button Content
        $this->start_controls_section(
			'btn_content',
			[
				'label' => __( 'Button Section', 'fitnstr' ),
			]
        );
        $this->add_control(
            'btnlabel',
            [
                'label'         => esc_html__( 'Button Label', 'fitnstr' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'hire me', 'fitnstr' )
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
			'left_big_title_color', [
				'label'     => __( 'Left Big Title Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cta_area .our_expesience h2' => 'color: {{VALUE}};',
				],
			]
        );
        $this->add_control(
			'left_sml_title_color', [
				'label'     => __( 'Left Small Title Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cta_area .our_expesience p' => 'color: {{VALUE}};',
				],
			]
        );
        
        $this->add_control(
			'left_box_bg_sep', [
				'label'     => __( 'Left Box BG Styles', 'fitnstr' ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'after'
			]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'left_box_bg',
                'label' => __( 'Background', 'fitnstr' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .cta_area .our_expesience',
            ]
        );
        
        $this->add_control(
			'right_box_bg_sep', [
				'label'     => __( 'Right Box BG Styles', 'fitnstr' ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'after'
			]
        );

        $this->add_control(
			'right_sml_title_color', [
				'label'     => __( 'Right Small Title Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cta_area .cta_text p' => 'color: {{VALUE}};',
				],
			]
        );

        $this->add_control(
			'right_big_title_color', [
				'label'     => __( 'Right Big Title Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cta_area .cta_text h2' => 'color: {{VALUE}};',
				],
			]
        );

        $this->add_control(
			'right_box_bg_color', [
				'label'     => __( 'Right Box BG Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cta_area .cta_text' => 'background-color: {{VALUE}};',
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
            'button_styles', [
                'label' => __( 'Button Styles', 'fitnstr' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
			'btn_bg_color', [
				'label'     => __( 'Button BG Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cta_area .cta_text .btn_1' => 'background: {{VALUE}};',
				],
			]
        );
        
        $this->add_control(
			'btn_txt_color', [
				'label'     => __( 'Button Text Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cta_area .cta_text .btn_1' => 'color: {{VALUE}}!important;',
				],
			]
        );

        $this->add_control(
			'btn_hvr_styles_sep', [
				'label'     => __( 'Button Hover Styles', 'fitnstr' ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'after'
			]
        );
        
        $this->add_control(
			'btn_hvr_bg_color', [
				'label'     => __( 'Button Hover BG Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cta_area .cta_text .btn_1:hover' => 'background: {{VALUE}};',
				],
			]
        );
        
        $this->add_control(
			'btn_hvr_txt_color', [
				'label'     => __( 'Button Hover Text Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cta_area .cta_text .btn_1:hover' => 'color: {{VALUE}}!important;',
				],
			]
        );

        $this->end_controls_section();


	}

	protected function render() {
        $settings     = $this->get_settings();
        $left_big_txt    = !empty( $settings['left_big_txt'] ) ? $settings['left_big_txt'] : '';
        $left_sml_txt    = !empty( $settings['left_sml_txt'] ) ? $settings['left_sml_txt'] : '';
        $right_sml_txt    = !empty( $settings['right_sml_txt'] ) ? $settings['right_sml_txt'] : '';
        $right_big_txt    = !empty( $settings['right_big_txt'] ) ? $settings['right_big_txt'] : '';
        $btnlabel    = !empty( $settings['btnlabel'] ) ? $settings['btnlabel'] : '';
        $btnurl    = !empty( $settings['btnurl']['url'] ) ? $settings['btnurl']['url'] : '';
        ?>


        <!-- cta_part part start-->
        <section class="cta_area section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="cta_iner">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-md-3">
                                    <div class="our_expesience">
                                        <h2><?php echo esc_html( $left_big_txt )?></h2>
                                        <p><?php echo esc_html( $left_sml_txt )?></p>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9">
                                    <div class="cta_text d-flex justify-content-between align-items-center">
                                        <div class="cta_text_iner">
                                            <p><?php echo esc_html( $right_sml_txt )?></p>
                                            <h2><?php echo esc_html( $right_big_txt )?></h2>
                                        </div>
                                        <a href="<?php echo esc_url( $btnurl )?>" class="btn_1"><?php echo esc_html( $btnlabel )?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta_part part end-->
        <?php

    }

}
