<?php
namespace Martineelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Utils;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Beko elementor gallery section widget.
 *
 * @since 1.0
 */
class Martine_Gallery extends Widget_Base {

	public function get_name() {
		return 'martine-gallery';
	}

	public function get_title() {
		return __( 'Gallery', 'martine' );
	}

	public function get_icon() {
		return 'eicon-gallery-justified';
	}

	public function get_categories() {
		return [ 'martine-elements' ];
	}

	protected function _register_controls() {

        // Gallery Heading
		$this->start_controls_section(
			'section_heading',
			[
				'label' => __( 'Section Heading', 'martine' ),
			]
		);
        $this->add_control(
            'sec_title',
            [
                'label'         => esc_html__( 'Gallery Title', 'martine' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __( 'Our gallery', 'martine' )
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label'         => esc_html__( 'Sub Title', 'martine' ),
                'type'          => Controls_Manager::TEXTAREA,
                'label_block'   => true,
                'default'       => __( 'Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.', 'martine' )
            ]
        );
		$this->end_controls_section();  


		// ----------------------------------------  Gallery content ------------------------------
		$this->start_controls_section(
			'gallery_content',
			[
				'label' => __( 'Gallery Content', 'martine' ),
			]
		);

		$this->add_control(
            'gallery_items', [
                'label' => __( 'Create New', 'martine' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ image_size }}}',
                'fields' => [
                    [
                        'name'      => 'image',
                        'label'     => __( 'Gallery Image', 'martine' ),
                        'type'      => Controls_Manager::MEDIA,
                        'default'   => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ]
                    ],
                    [
                        'name'  => 'image_size',
                        'label' => __( 'Image Size', 'martine' ),
                        'type'  => Controls_Manager::SELECT,
                        'default'   => 'martine_gallery_img_556x441',
                        'options'   => [
                            'martine_gallery_img_556x441' => '556x441',
                            'martine_gallery_img_556x521' => '556x521',
                            'martine_gallery_img_556x310' => '556x310',
                        ]
                    ],
                ],
                'default' => [
                    [
                        'image' => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'image_size'      => '556x441'
                    ],
                    [
                        'image' => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'image_size'      => '556x521'
                    ],
                    [
                        'image' => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'image_size'      => '556x310'
                    ],
                    [
                        'image' => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'image_size'      => '556x310'
                    ],
                    [
                        'image' => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'image_size'      => '556x310'
                    ],
                ]
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
				'label' => __( 'Style Section Heading', 'martine' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'color_ttitle', [
				'label'     => __( 'Section Title Color', 'martine' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .our_gallery .section_tittle h2' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'color_text', [
				'label'     => __( 'Sub Title Color', 'martine' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .our_gallery .section_tittle p' => 'color: {{VALUE}};',
				],
			]
		);
        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();

    // call load widget script
    $this->load_widget_script();
    
	$sec_title       = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
	$sub_title       = !empty( $settings['sub_title'] ) ? $settings['sub_title'] : '';
    $galleries       = !empty( $settings['gallery_items'] ) ? $settings['gallery_items'] : '';
    ?>

    <!--::gallery part start::-->
    <section class="our_gallery section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2><?php echo esc_html( $sec_title )?></h2>
                        <p><?php echo esc_html( $sub_title )?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-columns">
                        <?php
                        if( is_array( $galleries ) && count( $galleries ) > 0 ){
                            foreach ($galleries as $gallery ) {
                                $img_size = !empty( $gallery['image_size'] ) ? $gallery['image_size'] : '';
                                $image = !empty( $gallery['image']['id'] ) ? wp_get_attachment_image_src( $gallery['image']['id'], $img_size, '', array('alt' => 'gallery image' ) ) : '';
                                ?>
                                <div class="card">
                                    <a href="<?php echo esc_url( $image[0] )?>" class="gallery_img">
                                    <img src="<?php echo esc_url( $image[0] )?>" class="card-img-top" alt="">
                                    </a>
                                </div>
                                <?php
                            }
                        }
                        ?>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php

    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            $('.gallery_img').magnificPopup({
                type: 'image',
                gallery:{
                enabled:true
                }
            });
        })(jQuery);
        </script>
        <?php 
        }
    }
	
}
