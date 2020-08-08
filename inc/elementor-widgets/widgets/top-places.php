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
 * Martine elementor Top Places section widget.
 *
 * @since 1.0
 */
class Martine_Top_Places extends Widget_Base {

	public function get_name() {
		return 'martine-top-places';
	}

	public function get_title() {
		return __( 'Top Places', 'martine' );
	}

	public function get_icon() {
		return 'eicon-map-pin';
	}

	public function get_categories() {
		return [ 'martine-elements' ];
	}

	protected function _register_controls() {
        
		// ----------------------------------------   Top Places content ------------------------------
        $this->start_controls_section(
			'top_places_section',
			[
				'label' => __( 'Top Places Content', 'martine' ),
			]
        );
        $this->add_control(
            'sec_title',
            [
                'label'         => esc_html__( 'Sec Title', 'martine' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Top Places to visit', 'martine' )
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label'         => esc_html__( 'Sub Title', 'martine' ),
                'type'          => Controls_Manager::TEXTAREA,
                'label_block'   => true,
                'default'       => esc_html__( 'Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.', 'martine' )
            ]
        );
        $this->add_control(
            'top_places_sep',
            [
                'label'     => __( 'Top Places', 'martine' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'top_places', [
                'label' => __( 'Create New', 'martine' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ item_title }}}',
                'fields' => [
                    [
                        'name'  => 'item_img',
                        'label' => __( 'Place Image', 'martine' ),
                        'type'  => Controls_Manager::MEDIA,
                    ],
                    [
                        'name'  => 'btn_label',
                        'label' => __( 'Button Label', 'martine' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'travel', 'martine' )
                    ],
                    [
                        'name'  => 'btn_url',
                        'label' => __( 'Button URL', 'martine' ),
                        'type'  => Controls_Manager::URL,
                        'label_block' => true,
                        'default' => [
                            'url'   => '#'
                        ]
                    ],
                    [
                        'name'  => 'item_title',
                        'label' => __( 'Place Title', 'martine' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Saintmartine Iceland', 'martine' )
                    ],
                    [
                        'name'  => 'item_location',
                        'label' => __( 'Place Location', 'martine' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Technaf, Bangladesh', 'martine' )
                    ],
                    [
		                'name' => 'reviewstar',
		                'label' => __('Star Review', 'martine'),
		                'type' => Controls_Manager::CHOOSE,
		                'options' => [
			                '1' => [
				                'title' => __('1', 'martine'),
				                'icon' => 'fa fa-star',
			                ],
			                '2' => [
				                'title' => __('2', 'martine'),
				                'icon' => 'fa fa-star',
			                ],
			                '3' => [
				                'title' => __('3', 'martine'),
				                'icon' => 'fa fa-star',
			                ],
			                '4' => [
				                'title' => __('4', 'martine'),
				                'icon' => 'fa fa-star',
			                ],
			                '5' => [
				                'title' => __('5', 'martine'),
				                'icon' => 'fa fa-star',
			                ],
                        ],
                        'default'  => '5'
	                ],
                    [
                        'name'  => 'review_count',
                        'label' => __( 'Review Count', 'martine' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( '(210 review)', 'martine' )
                    ],
                ],
                'default' => [
                    [
                        'item_img'          => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'btn_label'         => __( 'travel', 'martine' ),
                        'btn_url'           => [
                            'url'   => '#'
                        ],
                        'item_title'        => __( 'Saintmartine Iceland', 'martine' ),
                        'item_location'     => __( 'Technaf, Bangladesh', 'martine' ),
                        'reviewstar'        => '5',
                        'review_count'      => __( '(210 review)', 'martine' )
                    ],
                    [
                        'item_img'          => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'btn_label'         => __( 'travel', 'martine' ),
                        'btn_url'           => [
                            'url'   => '#'
                        ],
                        'item_title'        => __( 'Saintmartine Iceland', 'martine' ),
                        'item_location'     => __( 'Technaf, Bangladesh', 'martine' ),
                        'reviewstar'        => '5',
                        'review_count'      => __( '(210 review)', 'martine' )
                    ],
                    [
                        'item_img'          => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'btn_label'         => __( 'travel', 'martine' ),
                        'btn_url'           => [
                            'url'   => '#'
                        ],
                        'item_title'        => __( 'Saintmartine Iceland', 'martine' ),
                        'item_location'     => __( 'Technaf, Bangladesh', 'martine' ),
                        'reviewstar'        => '5',
                        'review_count'      => __( '(210 review)', 'martine' )
                    ],
                    [
                        'item_img'          => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'btn_label'         => __( 'travel', 'martine' ),
                        'btn_url'           => [
                            'url'   => '#'
                        ],
                        'item_title'        => __( 'Saintmartine Iceland', 'martine' ),
                        'item_location'     => __( 'Technaf, Bangladesh', 'martine' ),
                        'reviewstar'        => '5',
                        'review_count'      => __( '(210 review)', 'martine' )
                    ],
                    [
                        'item_img'          => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'btn_label'         => __( 'travel', 'martine' ),
                        'btn_url'           => [
                            'url'   => '#'
                        ],
                        'item_title'        => __( 'Saintmartine Iceland', 'martine' ),
                        'item_location'     => __( 'Technaf, Bangladesh', 'martine' ),
                        'reviewstar'        => '5',
                        'review_count'      => __( '(210 review)', 'martine' )
                    ],
                    [
                        'item_img'          => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'btn_label'         => __( 'travel', 'martine' ),
                        'btn_url'           => [
                            'url'   => '#'
                        ],
                        'item_title'        => __( 'Saintmartine Iceland', 'martine' ),
                        'item_location'     => __( 'Technaf, Bangladesh', 'martine' ),
                        'reviewstar'        => '5',
                        'review_count'      => __( '(210 review)', 'martine' )
                    ],
                ]
            ]
        );

        $this->add_control(
            'more_places_sep',
            [
                'label'     => __( 'More Places Button', 'martine' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'more_places_btn_label',
            [
                'label'     => __( 'Button Label', 'martine' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => __( 'Discover more', 'martine' )
            ]
        );

        $this->add_control(
            'more_places_btn_url',
            [
                'label'     => __( 'Page slug as reference', 'martine' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => 'top-places'
            ]
        );

        $this->end_controls_section(); // End Top Places content

        /**
         * Style Tab
         * ------------------------------ Style Tab Content ------------------------------
         *
         */

        // Top place Color Settings ==============================
        $this->start_controls_section(
            'serv_color_sett', [
                'label' => __( 'Top Place Color Settings', 'martine' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
 
        $this->add_control(
            'sec_title_color', [
                'label'     => __( 'Section Title Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section_tittle h2' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'sec_text_col', [
                'label'     => __( 'Section Text Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section_tittle p' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'serv_hvr_btn_styles_sep',
            [
                'label'     => __( 'Hover Button Styles', 'martine' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'item_hvr_btn_col', [
                'label'     => __( 'Button Text Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .top_place .single_place .hover_Text .place_btn' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'item_hvr_btn_bg_col', [
                'label'     => __( 'Button BG Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .top_place .single_place .hover_Text .place_btn' => 'background-color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'serv_hvr_styles_sep',
            [
                'label'     => __( 'Hover Text Color Styles', 'martine' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'serv_item_hov_color', [
                'label'     => __( 'Text Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .top_place .single_place .hover_Text h3' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .top_place .single_place .hover_Text p' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .top_place .single_place .hover_Text .place_review span' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .our_service .single_service:hover ul li a' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'item_hvr_stars_col', [
                'label'     => __( 'Star Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .top_place .single_place .hover_Text .place_review a' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'serv_hvr_bg_overlay_styles_sep',
            [
                'label'     => __( 'Background Overlay Color Styles', 'martine' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'item_hvr_bg_overlay_col', [
                'label'     => __( 'Background Overlay Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .top_place .single_place:after' => 'background-color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'serv_more_btn_styles_sep',
            [
                'label'     => __( 'More Button Styles', 'martine' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'more_btn_col', [
                'label'     => __( 'Button Text Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .top_place .btn_1' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'more_btn_bg_col', [
                'label'     => __( 'Button BG Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .top_place .btn_1' => 'background-color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'serv_more_btn_hvr_styles_sep',
            [
                'label'     => __( 'More Button Hover Styles', 'martine' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'more_hvr_btn_col', [
                'label'     => __( 'Button Hover Text Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .top_place .btn_1:hover' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'more_hvr_btn_bg_col', [
                'label'     => __( 'Button Hover BG Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .top_place .btn_1:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        ); 
        $this->end_controls_section();

    }
    
    public function martine_get_single_place_item( $item_img, $btn_label, $btn_url, $item_title, $item_location, $stars, $review_count ) { 
        ?>
        <div class="col-lg-6 col-md-6">
            <div class="single_place">
                <?php
                    if ( $item_img ) {
                        echo wp_kses_post( $item_img );
                    }
                ?>
                <div class="hover_Text d-flex align-items-end justify-content-between">
                    <div class="hover_text_iner">
                        <?php
                            echo '<a href="'.esc_url( $btn_url ).'" class="place_btn">' .esc_html( $btn_label ) . '</a>';

                            echo '<h3>' .esc_html( $item_title ) . '</h3>';
                            echo '<p>' .esc_html( $item_location ) . '</p>';
                        ?>
                        <div class="place_review">
                            <?php
                            if (!empty( $stars )) {
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($stars >= $i) {
                                        echo '<a href="#"><i class="fa fa-star"></i></a>';
                                    }
                                }
                            }

                            echo '<span>' .esc_html( $review_count ) . '</span>';
                            ?>
                        </div>
                    </div>
                    <div class="details_icon text-right">
                        <i class="ti-share"></i>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }

	protected function render() {
    $settings               = $this->get_settings();
    $sec_title              = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $sub_title              = !empty( $settings['sub_title'] ) ? $settings['sub_title'] : '';
    $top_places             = !empty( $settings['top_places'] ) ? $settings['top_places'] : '';
    $more_places_btn_label    = !empty( $settings['more_places_btn_label'] ) ? $settings['more_places_btn_label'] : '';
    $more_places_btn_url    = !empty( $settings['more_places_btn_url'] ) ? $settings['more_places_btn_url'] : '';
    $dynamic_class      = is_front_page() ? 'top_place section_padding' : 'top_place section_padding';
    ?>


    <!--top place start-->
    <section class="<?php echo esc_attr( $dynamic_class )?>">
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
                <?php
                if( is_array( $top_places ) && count( $top_places ) > 0 ){
                    foreach ( $top_places as $place ) {
                        $item_img = !empty( $place['item_img']['id'] ) ? wp_get_attachment_image($place['item_img']['id'], 'martine_top_places_555x396', false, ['alt' => 'place image']) : '';
                        $btn_label = !empty( $place['btn_label'] ) ? $place['btn_label'] : '';
                        $btn_url = !empty( $place['btn_url']['url'] ) ? $place['btn_url']['url'] : '';
                        $item_title = !empty( $place['item_title'] ) ? $place['item_title'] : '';
                        $item_location = !empty( $place['item_location'] ) ? $place['item_location'] : '';
                        $stars = !empty( $place['reviewstar'] ) ? $place['reviewstar'] : '';
                        $review_count = !empty( $place['review_count'] ) ? $place['review_count'] : '';
                        
                        $this->martine_get_single_place_item( $item_img, $btn_label, $btn_url, $item_title, $item_location, $stars, $review_count );    
                    }
                }

                if ( !empty( $more_places_btn_label ) ) {
                ?>

                    <a href="<?php echo esc_url(home_url('/')) . esc_html( $more_places_btn_url )?>" class="btn_1 text-cnter"><?php echo esc_html( $more_places_btn_label )?></a>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!--top place end-->
    <?php
    }
}
