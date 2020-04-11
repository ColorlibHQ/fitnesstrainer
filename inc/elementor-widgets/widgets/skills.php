<?php
namespace Fitnstrelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Utils;
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
class Fitnstr_Skills extends Widget_Base {

	public function get_name() {
		return 'fitnstr-skill';
	}

	public function get_title() {
		return __( 'Skills', 'fitnstr' );
	}

	public function get_icon() {
		return 'eicon-skill-bar';
	}

	public function get_categories() {
		return [ 'fitnstr-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Skills content ------------------------------
        $this->start_controls_section(
			'skill_heading',
			[
				'label' => __( 'Section Heading', 'fitnstr' ),
			]
		);
        $this->add_control(
            'title_txt',
            [
                'label'         => esc_html__( 'Section Title', 'fitnstr' ),
                'type'          => Controls_Manager::TEXTAREA,
                'label_block'   => true,
                'default'       => esc_html__( 'Some Latest Gym With me', 'fitnstr' )
            ]
        );
		$this->end_controls_section(); // End skill content
        
        
        // All contents
        $this->start_controls_section(
			'skill_label_content',
			[
				'label' => __( 'Skill Setting', 'fitnstr' ),
			]
		);

		$this->add_control(
            'skill_contents', [
                'label' => __( 'Create New', 'fitnstr' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ title }}}',
                'fields' => [
                    [
                        'name'  => 'title',
                        'label' => __( 'Skill Title', 'fitnstr' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Free Hand Workout', 'fitnstr' ),
                    ],
                    [
                        'name'  => 'value',
                        'label' => __( 'Skill Value', 'fitnstr' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => '90'
                    ],
                ],
            ]
		);

        $this->end_controls_section(); // End content
        
        // Right content
        $this->start_controls_section(
			'right_cont_sec',
			[
				'label' => __( 'Right Content Section', 'fitnstr' ),
			]
		);
        $this->add_control(
			'right_img',
			[
				'label'         => esc_html__( 'Select Image', 'fitnstr' ),
                'type'          => Controls_Manager::MEDIA,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
			]
		);
        $this->add_control(
            'vid_url',
            [
                'label'         => esc_html__( 'Video Url', 'fitnstr' ),
                'type'          => Controls_Manager::URL,
                'show_external' => false,
                'default'       => [
                    'url'       => 'http://www.youtube.com/watch?v=0O2aH4XLbto'
                ]
            ]
        );
		$this->end_controls_section(); // End content

        /**
         * Style Tab
         *
         */
		//------------------------------ Style Section ------------------------------
		
		$this->start_controls_section(
			'style_item',
			[
				'label' => __( 'Style Item', 'fitnstr' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
            'sec_title_color', [
                'label'     => __( 'Section Title Color', 'fitnstr' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .skil_part .section_tittle h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'sec_title_shd_color', [
                'label'     => __( 'Section Title Shade Color', 'fitnstr' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .skil_part .section_tittle h2:after' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();
        

        // Single Skill Color Settings ==============================
        $this->start_controls_section(
            'single_skill_color_sett', [
                'label' => __( 'Single Skill Color Settings', 'fitnstr' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'item_title_color', [
                'label'     => __( 'Item Title Color', 'fitnstr' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .skil_part .skil_text .single_skil p' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'skill_val_color', [
                'label'     => __( 'Skill Value Color', 'fitnstr' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .skil_part .skil_text .progress-bar .label' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'slide_bg_color', [
                'label'     => __( 'Slide BG Color', 'fitnstr' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .skil_part .skil_text .progress-bar .line' => 'background: {{VALUE}};',
                ],
            ]
        );    

        $this->end_controls_section();



        /*------------------------------ Background Style ------------------------------*/
		$this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'fitnstr' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'sec_shd_txt_img_sep',
            [
                'label'     => __( 'Section Shade Text Image', 'fitnstr' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sec_shd_txt_img',
                'label' => __( 'Background', 'fitnstr' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .skil_part:before',
            ]
        );

        $this->add_control(
            'right_img_bg_shd_sep',
            [
                'label'     => __( 'Right BG Shade Image', 'fitnstr' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'right_img_bg_shd_img',
                'label' => __( 'Background', 'fitnstr' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .skil_part:after',
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {
        $settings = $this->get_settings();
        $title_txt = !empty( $settings['title_txt'] ) ? $settings['title_txt'] : '';
        $skill_contents = !empty( $settings['skill_contents'] ) ? $settings['skill_contents'] : '';
        $right_img   = !empty( $settings['right_img']['id'] ) ? wp_get_attachment_image( $settings['right_img']['id'], 'fitnstr_skill_img_457x632', false, array( 'alt' => 'skill image' ) ) : '';
        $vid_url = !empty( $settings['vid_url']['url'] ) ? $settings['vid_url']['url'] : '';
        ?>

        <!--::skil part start::-->
        <section class="skil_part padding_bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section_tittle text-center">
                            <h2><?php echo esc_html( $title_txt )?></h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6">
                        <div class="skil_text">
                            <?php
                            if( is_array( $skill_contents ) && count( $skill_contents ) > 0 ){
                                foreach ($skill_contents as $skill ) {
                                    $title = !empty( $skill['title'] ) ? $skill['title'] : '';
                                    $value  = !empty( $skill['value'] ) ? $skill['value'] : '';
                                ?>
                                <div class="single_skil">
                                    <p><?php echo esc_html( $title )?></p>
                                    <div class="progress-bar">
                                        <div class="label" data-count="<?php echo esc_html( $value )?>"><?php echo esc_html( $value )?>%</div>
                                        <div class="line">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="skil_img">
                            <?php
                                if( $right_img ){
                                    echo wp_kses_post( $right_img );
                                }
                            ?>
                            <a href="<?php echo esc_url( $vid_url )?>" class="popup_youtube"> <i class="flaticon-play-button"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--::skil part end::-->
        <?php

    }
	
}
