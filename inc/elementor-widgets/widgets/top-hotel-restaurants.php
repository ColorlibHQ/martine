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
 * Martine elementor Top Hotel Restaurants section widget.
 *
 * @since 1.0
 */
class Martine_Top_Hotel_Restaurants extends Widget_Base {

	public function get_name() {
		return 'martine-top-hotel-restaurants';
	}

	public function get_title() {
		return __( 'Top Hotel Restaurants', 'martine' );
	}

	public function get_icon() {
		return 'eicon-global-settings';
	}

	public function get_categories() {
		return [ 'martine-elements' ];
	}

	protected function _register_controls() {
        
		// ----------------------------------------   Top Hotel Restaurants content ------------------------------
        $this->start_controls_section(
			'top_places_section',
			[
				'label' => __( 'Top Hotel Restaurants Content', 'martine' ),
			]
        );
        $this->add_control(
            'sec_title',
            [
                'label'         => esc_html__( 'Sec Title', 'martine' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Top Hotel & Restaurants', 'martine' )
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
                'label'     => __( 'Top Hotel Restaurants', 'martine' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'top_hotel_restaurants', [
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
                        'name'  => 'item_title',
                        'label' => __( 'Item Title', 'martine' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Hotel Polonia', 'martine' )
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
                    [
                        'name'  => 'item_location',
                        'label' => __( 'Location', 'martine' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'London, United Kingdom', 'martine' )
                    ],
                    [
                        'name'  => 'item_cost',
                        'label' => __( 'Cost', 'martine' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( '$500', 'martine' )
                    ],
                ],
                'default' => [
                    [
                        'item_img'          => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'item_title'        => __( 'Saintmartine Iceland', 'martine' ),
                        'reviewstar'        => '5',
                        'review_count'      => __( '(210 review)', 'martine' ),
                        'item_location'     => __( 'Technaf, Bangladesh', 'martine' ),
                        'item_cost'         => __( '$500', 'martine' ),
                        
                    ],
                    [
                        'item_img'          => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'item_title'        => __( 'Saintmartine Iceland', 'martine' ),
                        'reviewstar'        => '5',
                        'review_count'      => __( '(210 review)', 'martine' ),
                        'item_location'     => __( 'Technaf, Bangladesh', 'martine' ),
                        'item_cost'         => __( '$500', 'martine' ),
                        
                    ],
                    [
                        'item_img'          => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'item_title'        => __( 'Saintmartine Iceland', 'martine' ),
                        'reviewstar'        => '5',
                        'review_count'      => __( '(210 review)', 'martine' ),
                        'item_location'     => __( 'Technaf, Bangladesh', 'martine' ),
                        'item_cost'         => __( '$500', 'martine' ),
                        
                    ],
                ]
            ]
        );

        $this->end_controls_section(); // End Top Hotel Restaurants content

        /**
         * Style Tab
         * ------------------------------ Style Tab Content ------------------------------
         *
         */

        // Single Service Color Settings ==============================
        $this->start_controls_section(
            'serv_color_sett', [
                'label' => __( 'Top Hotel Color Settings', 'martine' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
 
        $this->add_control(
            'sec_title_color', [
                'label'     => __( 'Section Title Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hotel_list .section_tittle h2' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'sec_txt_color', [
                'label'     => __( 'Section Text Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hotel_list .section_tittle p' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'sing_item_styles_sep',
            [
                'label'     => __( 'Single Item Color Styles', 'martine' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'single_item_title_color', [
                'label'     => __( 'Title Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hotel_list .single_ihotel_list .hotel_text_iner h3 a' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'single_item_stars_color', [
                'label'     => __( 'Stars Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .place_review a' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'single_item_stars_label_color', [
                'label'     => __( 'Stars Label Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .place_review span' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'single_item_txt_color', [
                'label'     => __( 'Text Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hotel_list .single_ihotel_list .hotel_text_iner p' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'single_item_cost_styles_sep',
            [
                'label'     => __( 'Cost Color Styles', 'martine' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'single_item_cost_label_color', [
                'label'     => __( 'Cost Label Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hotel_list .single_ihotel_list .hotel_text_iner h5' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'single_item_cost_txt_color', [
                'label'     => __( 'Cost Text Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hotel_list .single_ihotel_list .hotel_text_iner h5 span' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'single_item_border_styles_sep',
            [
                'label'     => __( 'Border Color Styles', 'martine' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'single_item_border_bottom_color', [
                'label'     => __( 'Border Bottom Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hotel_list .single_ihotel_list' => 'border-color: {{VALUE}};',
                ],
            ]
        ); 
        
        $this->end_controls_section();

    }
    
    public function martine_get_single_hotel_restaurants_item( $item_img, $item_title, $stars, $review_count, $item_location, $item_cost ) { 
        ?>

    <div class="col-lg-4 col-sm-6">
        <div class="single_ihotel_list">
            <?php
                if ( $item_img ) {
                    echo wp_kses_post( $item_img );
                }
            ?>
            <div class="hover_text">
                <div class="hotel_social_icon">
                    <ul>
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="share_icon">
                    <i class="ti-share"></i>
                </div>
            </div>
            <div class="hotel_text_iner">
                <h3> <a href="#"> <?php echo esc_html( $item_title )?></a></h3>
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
                <p><?php echo esc_html( $item_location )?></p>
                <h5><?php _e( 'From', 'martine' )?> <span><?php echo esc_html( $item_cost )?></span></h5>
            </div>
        </div>
    </div>
    <?php
    }

	protected function render() {
    $settings        = $this->get_settings();
    $sec_title       = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $sub_title       = !empty( $settings['sub_title'] ) ? $settings['sub_title'] : '';
    $top_places      = !empty( $settings['top_hotel_restaurants'] ) ? $settings['top_hotel_restaurants'] : '';
    $dynamic_class   = is_front_page() ? 'hotel_list section_padding' : 'hotel_list section_padding';
    ?>

    <!--::top-hotel-restaurants start::-->
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
                        $item_img = !empty( $place['item_img']['id'] ) ? wp_get_attachment_image($place['item_img']['id'], 'martine_top_hotel_360x260', false, ['alt' => 'top hotel and restaurants image']) : '';
                        $item_title = !empty( $place['item_title'] ) ? $place['item_title'] : '';
                        $stars = !empty( $place['reviewstar'] ) ? $place['reviewstar'] : '';
                        $review_count = !empty( $place['review_count'] ) ? $place['review_count'] : '';
                        $item_location = !empty( $place['item_location'] ) ? $place['item_location'] : '';
                        $item_cost = !empty( $place['item_cost'] ) ? $place['item_cost'] : '';
                        
                        $this->martine_get_single_hotel_restaurants_item( $item_img, $item_title, $stars, $review_count, $item_location, $item_cost );    
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!--::top-hotel-restaurants end::-->
    <?php
    }
}
