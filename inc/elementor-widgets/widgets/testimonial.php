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
 * Fitnstr elementor section widget.
 *
 * @since 1.0
 */
class Fitnstr_Testimonial extends Widget_Base {

	public function get_name() {
		return 'fitnstr-testimonial';
	}

	public function get_title() {
		return __( 'Testimonial', 'fitnstr' );
	}

	public function get_icon() {
		return 'eicon-testimonial-carousel';
	}

	public function get_categories() {
		return [ 'fitnstr-elements' ];
	}

	protected function _register_controls() {

        // Testimonial Heading
		$this->start_controls_section(
			'section_heading',
			[
				'label' => __( 'Section Heading', 'fitnstr' ),
			]
		);
        $this->add_control(
            'sec_title',
            [
                'label'         => esc_html__( 'Title', 'fitnstr' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __( 'Testimonial', 'fitnstr' )
            ]
        );
        
		$this->end_controls_section(); 


		// ----------------------------------------  Customers review content ------------------------------
		$this->start_controls_section(
			'customersreview_content',
			[
				'label' => __( 'Customers Review', 'fitnstr' ),
			]
        );

		$this->add_control(
            'review_slider', [
                'label' => __( 'Create Review', 'fitnstr' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name'  => 'image',
                        'label' => __( 'Client Image', 'fitnstr' ),
                        'type'  => Controls_Manager::MEDIA,
                        'label_block' => true,
                    ],
                    [
                        'name'  => 'label',
                        'label' => __( 'Name', 'fitnstr' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => esc_html__( 'Daniel E Gilcritst', 'fitnstr' )
                    ],
                    [
                        'name'  => 'designation',
                        'label' => __( 'Designation', 'fitnstr' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => esc_html__( 'Richard Kellerman', 'fitnstr' )
                    ],
                    [
                        'name'  => 'desc',
                        'label' => __( 'Descriptions', 'fitnstr' ),
                        'type'  => Controls_Manager::TEXTAREA,
                        'default'   => __('Enim a, scelerisque aliquet. Vivamus neque diam sed at pede laoreet orci. Potenti vel In sagitis nulla augue vitae et tempus torquent. Lacinia neque mus taciti ante prsent at facilisis Enim scelerisque aliquet. Vivamus neque diam sed .', 'fitnstr')
                    ],
                ],
            ]
		);

		$this->end_controls_section(); // End exibition content

        /**
         * Style Tab
         *
         */
		//------------------------------ Style Section ------------------------------
		$this->start_controls_section(
			'style_section', [
				'label' => __( 'Style Section Heading', 'fitnstr' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'color_secttitle', [
				'label'     => __( 'Section Title Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .review_part .section_tittle h2' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'sec_title_shd_color', [
				'label'     => __( 'Section Title Shade Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .review_part .section_tittle h2:after' => 'background-color: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();

        // Single item style
		$this->start_controls_section(
			'style_item',
			[
				'label' => __( 'Style Item', 'fitnstr' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
        );
        
        $this->add_control(
			'sing_item_bg_color', [
				'label'     => __( 'Single Item BG Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .review_part .single_slider' => 'background-color: {{VALUE}};',
				],
			]
		);
        
        $this->add_control(
			'icon_color', [
				'label'     => __( 'Prev/Next Icon Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .review_part .slick_right' => 'color: {{VALUE}};',
					'{{WRAPPER}} .review_part .slick_left' => 'color: {{VALUE}};',
				],
			]
		);
        
        
        $this->add_control(
			'icon_color_hvr', [
				'label'     => __( 'Prev/Next Icon Hover Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .review_part .slick_right:hover' => 'color: {{VALUE}};',
					'{{WRAPPER}} .review_part .slick_left:hover' => 'color: {{VALUE}};',
				],
			]
		);
        
        $this->add_control(
			'sing_item_title_color', [
				'label'     => __( 'Item Title Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .review_part .slider-thumbnails h3' => 'color: {{VALUE}};',
				],
			]
		);
        
        $this->add_control(
			'sing_item_desg_color', [
				'label'     => __( 'Item Designation Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .review_part .slider-thumbnails p' => 'color: {{VALUE}};',
				],
			]
		);
        
        $this->add_control(
			'sing_rev_txt_color', [
				'label'     => __( 'Review Text Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .review_part .client_review_text p' => 'color: {{VALUE}};',
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
            'section_bg_shd_txt_sep',
            [
                'label'     => __( 'Background Shade Text', 'fitnstr' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_bg_shd_txt',
                'label' => __( 'Background', 'fitnstr' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .review_part:after',
            ]
        );

        $this->add_control(
            'section_bgheading',
            [
                'label'     => __( 'Background Settings', 'fitnstr' ),
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
                'selector' => '{{WRAPPER}} .review_part',
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();
    // call load widget script
	$this->load_widget_script();
	$title = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
	$reviews = !empty( $settings['review_slider'] ) ? $settings['review_slider'] : '';

    ?>
        
    <!--::review_part start::-->
    <section class="review_part padding_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <?php
                        if( $title ){
                            echo '<h2>'. wp_kses_post( $title ) .'</h2>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10">
                    <!-- MAIN SLIDES -->
                    <div class="slider text-center">
                        <?php
                        if( is_array( $reviews ) && count( $reviews ) > 0 ){
                            foreach ($reviews as $review ) {
                                $aName = !empty( $review['label'] ) ? $review['label'] : '';
                                $desig = !empty( $review['designation'] ) ? $review['designation'] : '';
                                $desc  = !empty( $review['desc'] ) ? $review['desc'] : '';
                                $image = !empty( $review['image']['id'] ) ? wp_get_attachment_image( $review['image']['id'], 'fitnstr_client_img_140x140', '', array('class' => 'image','alt' => $review['label'] ) ) : '';
                                ?>
                                <div class="single_slider">
                                    <div class="slider-thumbnails">
                                        <?php
                                            // Client Image ----------------------
                                            if( $image ){
                                                echo wp_kses_post( $image );
                                            }

                                            // Client Name ----------------------
                                            if( $aName ){
                                                echo '<h3>'. esc_html( $aName ) .'</h3>';
                                            }

                                            // Designation ---------------
                                            if( $desig ){
                                                echo '<p>'. esc_html( $desig ) .'</p>';
                                            }
                                            ?>
                                    </div>
                                    <div class="client_review_text text-center">
                                        <p><?php echo esc_html( $desc )?></p>
                                    </div>
                                </div>
                                <?php
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::review_part end::-->

    <?php

    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){

            $('.slider').slick({
                slidesToShow: 1,
                speed: 1000,
                infinite: true,
                autoplay:false,
                pauseOnHover: true,
                dots: false,
                prevArrow: '<i class="slick_left flaticon-left-arrow"></i>',
                nextArrow: '<i class="slick_right flaticon-arrow-pointing-to-right"></i>',
                responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                    }
                }, 
                {
                    breakpoint: 600,
                    settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                    }
                }
                ]
            });
            
        })(jQuery);
        </script>
        <?php 
        }
    }
	
}
