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
class Fitnstr_Gallery extends Widget_Base {

	public function get_name() {
		return 'fitnstr-gallery';
	}

	public function get_title() {
		return __( 'Gallery', 'fitnstr' );
	}

	public function get_icon() {
		return 'eicon-gallery-justified';
	}

	public function get_categories() {
		return [ 'fitnstr-elements' ];
	}

	protected function _register_controls() {

        // Gallery Heading
		$this->start_controls_section(
			'section_heading',
			[
				'label' => __( 'Section Heading', 'fitnstr' ),
			]
		);
        $this->add_control(
			'sec_title',
			[
				'label'         => esc_html__( 'Section Title', 'fitnstr' ),
				'description'   => __( "Use < span> tag for color and italic word", "fitnstr" ),
				'type'          => Controls_Manager::WYSIWYG,
				'label_block'   => true,
				'default'       => __( '<h2>Latest Player Showcase</h2>', 'fitnstr' )
			]
        );
		$this->end_controls_section();  


		// ----------------------------------------  Gallery content ------------------------------
		$this->start_controls_section(
			'gallery_content',
			[
				'label' => __( 'Our Gallery', 'fitnstr' ),
			]
		);

		$this->add_control(
            'gallery_items', [
                'label' => __( 'Create New', 'fitnstr' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ location }}}',
                'fields' => [
                    [
                        'name'  => 'image',
                        'label' => __( 'Gallery Image', 'fitnstr' ),
                        'type'  => Controls_Manager::MEDIA,
                    ],
                    [
                        'name'  => 'image_size',
                        'label' => __( 'Image Size', 'fitnstr' ),
                        'type'  => Controls_Manager::SELECT,
                        'default'   => '370x361',
                        'options'   => [
                            '370x361'      => '370x361',
                            '759x397'      => '759x397',
                            '272x270'      => '272x270',
                            '370x607'      => '370x607',
                            '272x291'      => '272x291',
                            '478x571'      => '478x571',
                        ]
                    ],
                    [
                        'name'  => 'designation',
                        'label' => __( 'Designation', 'fitnstr' ),
                        'type'  => Controls_Manager::TEXT,
                        'default'   => __('Lead Trainer', 'fitnstr')
                    ],
                    [
                        'name'  => 'location',
                        'label' => __( 'Location', 'fitnstr' ),
                        'type'  => Controls_Manager::TEXT,
                        'default'   => __('Multi Plus Gym, USA', 'fitnstr')
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
			'color_ttitle', [
				'label'     => __( 'Title Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .gallery_part .section_tittle h2' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'shade_ttitle', [
				'label'     => __( 'Title Shade Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .gallery_part .section_tittle h2:after' => 'background-color: {{VALUE}};',
				],
			]
		);
        $this->end_controls_section();
        

        // Single Gallery Item style
		$this->start_controls_section(
			'sing_gal_item_style', [
				'label' => __( 'Single Gallery Item Style', 'fitnstr' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'item_hvr_txt_color', [
				'label'     => __( 'Item Hover Text Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .gallery_part .single_gallery_item .single_gallery_item_iner .gallery_item_text p, .gallery_part .single_gallery_item .single_gallery_item_iner .gallery_item_text h3' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'item_hvr_shd_bg_color', [
				'label'     => __( 'Item Hover Shade BG Color', 'fitnstr' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .gallery_part .single_gallery_item .single_gallery_item_iner:after' => 'background-color: {{VALUE}};',
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
            'bg_txt_shd_sep',
            [
                'label'     => __( 'Background Shade Text', 'fitnstr' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'bg_txt_shd',
                'label' => __( 'Section Background', 'fitnstr' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .gallery_part:after',
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();

    // Image size function
    function fitnstr_img_thumb_class( $img_size ){
        switch ( $img_size ) {
            case '370x361':
                $img_classes = '';
                break;

            case '759x397':
                $img_classes = ' grid-item--height-1 grid-item--width-1';
                break;

            case '272x270':
                $img_classes = '';
                break;

            case '370x607':
                $img_classes = ' grid-item--height-1';
                break;

            case '272x291':
                $img_classes = '';
                break;

            case '478x571':
                $img_classes = ' grid-item--width-1 sm_weight';
                break;
            
            default:
                $img_classes = '';
                break;
        }
        
        return $img_classes;
    }

    // call load widget script
    $this->load_widget_script();
    
	$title          = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $galleries       = !empty( $settings['gallery_items'] ) ? $settings['gallery_items'] : '';
    ?>

    <!-- gallery_part part start-->
    <section class="gallery_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <?php
                            //Title text ==============
                            if( $title ){
                                echo wp_kses_post( wpautop( $title ) );
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="gallery_part_item">
                        <div class="grid">
                            <div class="grid-sizer"></div>
                            <?php
                            if( is_array( $galleries ) && count( $galleries ) > 0 ){
                                foreach ($galleries as $gallery ) {
                                    $img_size = !empty( $gallery['image_size'] ) ? $gallery['image_size'] : '';
                                    $image = !empty( $gallery['image']['id'] ) ? wp_get_attachment_image_src( $gallery['image']['id'], $img_size, '', array('alt' => 'gallery image' ) ) : '';
                                    $designation = !empty( $gallery['designation'] ) ? $gallery['designation'] : '';
                                    $location = !empty( $gallery['location'] ) ? $gallery['location'] : '';
                                    ?>
                                    <a href="<?php echo esc_url( $image[0] )?>" class="grid-item bg_img img-gal<?php echo fitnstr_img_thumb_class( $img_size )?>"
                                        style="background-image: url(<?php echo esc_url( $image[0] )?>)">
                                        <div class="single_gallery_item">
                                            <div class="single_gallery_item_iner">
                                                <div class="gallery_item_text">
                                                    <p><?php echo esc_html( $designation )?></p>
                                                    <h3><?php echo esc_html( $location )?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <?php
                                }
                            }
                            ?>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery_part part end-->
    <?php

    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            $('.grid').masonry({
                itemSelector: '.grid-item',
                columnWidth: '.grid-sizer',
                percentPosition: true
            });
        })(jQuery);
        </script>
        <?php 
        }
    }
	
}
