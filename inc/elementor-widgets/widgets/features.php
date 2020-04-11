<?php
namespace Fitnstrelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
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
 * Fitnstr elementor Team Member section widget.
 *
 * @since 1.0
 */
class Fitnstr_Features extends Widget_Base {

	public function get_name() {
		return 'fitnstr-features';
	}

	public function get_title() {
		return __( 'Features', 'fitnstr' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'fitnstr-elements' ];
	}

	protected function _register_controls() {
        
		// ------------------   Features content ----------------------
		$this->start_controls_section(
			'features_block',
			[
				'label' => __( 'Features', 'fitnstr' ),
			]
		);
		$this->add_control(
            'features_content', [
                'label' => __( 'Create Feature', 'fitnstr' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name'      => 'icon',
                        'label'     => __( 'Select Icon', 'fitnstr' ),
                        'type'      => Controls_Manager::ICON,
                        'default'   => 'fa fa-mobile',
                        'options'   => fitnstr_flaticon_list()
                    ],
                    [
                        'name'  => 'label',
                        'label' => __( 'Title', 'fitnstr' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Latest instoment', 'fitnstr' )
                    ],
                    [
                        'name'      => 'desc',
                        'label'     => __( 'Descriptions', 'fitnstr' ),
                        'type'      => Controls_Manager::TEXTAREA,
                        'default'   => __( 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor', 'fitnstr' )
                    ],
                ],
            ]
        );

		$this->end_controls_section(); // End Features content

        /**
         * Style Tab
         * ------------------------------ Style Tab Content ------------------------------
         *
         */

        // Single Feature Color Settings ==============================
        $this->start_controls_section(
            'single_serv_color_sett', [
                'label' => __( 'Single Feature Color Settings', 'fitnstr' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'icon_color', [
                'label'     => __( 'Icon Color', 'fitnstr' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature_part .single_feature_part .eci' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'color_sub_ttitle', [
                'label'     => __( 'Title Color', 'fitnstr' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature_part .single_feature_part h3' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'txt_color', [
                'label'     => __( 'Text Color', 'fitnstr' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature_part .single_feature_part p' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->end_controls_section();

        // Background Style ==============================
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'fitnstr' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'item_hvr_bg_img_separator',
            [
                'label'     => __( 'Item Hover BG Image', 'fitnstr' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_hvr_bg_img',
                'label' => __( 'Background', 'fitnstr' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .feature_part .single_feature_part:after',
            ]
        );
        $this->add_control(
            'item_hvr_bg_color_separator',
            [
                'label'     => __( 'Item Hover BG Color', 'fitnstr' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_hvr_bg_color',
                'label' => __( 'Background', 'fitnstr' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .feature_part .single_feature_part:hover',
            ]
        );
        $this->add_control(
            'bg_txt_shade_separator',
            [
                'label'     => __( 'Section BG Text Shade', 'fitnstr' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'fitnstr' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .feature_part',
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();
    $feature_header = !empty( $settings['feature_header'] ) ? $settings['feature_header'] : '';
    $features = !empty( $settings['features_content'] ) ? $settings['features_content'] : '';
    ?>

    <!-- feature part start-->
    <section class="feature_part section_padding">
        <div class="container">
            <div class="row align-items-center">
                <?php
                if( is_array( $features ) && count( $features ) > 0 ){
                    foreach ( $features as $feature ) {
                        $fontIcon      = !empty( $feature['icon'] ) ? $feature['icon'] : '';
                        $feature_title = !empty( $feature['label'] ) ? $feature['label'] : '';
                        $feature_desc  = !empty( $feature['desc'] ) ? $feature['desc'] : '';
                ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature_part">
                        <?php
                            if( $fontIcon ){
                                echo '<span class="'. esc_attr( $fontIcon ) .'"></span>';
                            }
                        ?>
                        <h3><?php echo esc_html( $feature_title );?></h3>
                        <p><?php echo esc_html( $feature_desc );?></p>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!-- feature part end-->
    <?php
    }
}
