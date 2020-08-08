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
 * Martine elementor reviews section widget.
 *
 * @since 1.0
 */
class Martine_Reviews extends Widget_Base {

	public function get_name() {
		return 'martine-reviews';
	}

	public function get_title() {
		return __( 'Testimonials', 'martine' );
	}

	public function get_icon() {
		return 'eicon-testimonial-carousel';
	}

	public function get_categories() {
		return [ 'martine-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  Review Section ------------------------------
        $this->start_controls_section(
            'review_heading',
            [
                'label' => __( 'Review Contents', 'martine' ),
            ]
        );
        $this->add_control(
            'sec_title',
            [
                'label'         => esc_html__( 'Sec Title', 'martine' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'What they said', 'martine' )
            ]
        );
        $this->add_control(
            'reviews_sep',
            [
                'label'     => __( 'Reviews', 'martine' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'reviews_content', [
                'label' => __( 'Create New', 'martine' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ client_name }}}',
                'fields' => [
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
                        'name'  => 'rev_txt',
                        'label' => __( 'Review Text', 'martine' ),
                        'type'  => Controls_Manager::TEXTAREA,
                        'default' => __( 'Waters make fish every without firmament saw had. Morning air subdue. Our Air very one whales grass is fish whales winged night yielding land creeping that seed', 'martine' )
                    ],
                    [
                        'name'  => 'client_name',
                        'label' => __( 'Client Name', 'martine' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Allen Miller', 'martine' )
                    ],
                ],
                'default' => [
                    [
                        'reviewstar'      => '5',
                        'rev_txt'           => __( 'Waters make fish every without firmament saw had. Morning air subdue. Our Air very one whales grass is fish whales winged night yielding land creeping that seed', 'martine' ),
                        'client_name'       => __( 'Justine Miller', 'martine' ),
                    ],
                    [
                        'reviewstar'      => '5',
                        'rev_txt'           => __( 'Waters make fish every without firmament saw had. Morning air subdue. Our Air very one whales grass is fish whales winged night yielding land creeping that seed', 'martine' ),
                        'client_name'       => __( 'Allen Miller', 'martine' ),
                    ],
                    [
                        'reviewstar'      => '5',
                        'rev_txt'           => __( 'Waters make fish every without firmament saw had. Morning air subdue. Our Air very one whales grass is fish whales winged night yielding land creeping that seed', 'martine' ),
                        'client_name'       => __( 'Justine Miller', 'martine' ),
                    ],
                    [
                        'reviewstar'      => '5',
                        'rev_txt'           => __( 'Waters make fish every without firmament saw had. Morning air subdue. Our Air very one whales grass is fish whales winged night yielding land creeping that seed', 'martine' ),
                        'client_name'       => __( 'Allen Miller', 'martine' ),
                    ],
                    [
                        'reviewstar'      => '5',
                        'rev_txt'           => __( 'Waters make fish every without firmament saw had. Morning air subdue. Our Air very one whales grass is fish whales winged night yielding land creeping that seed', 'martine' ),
                        'client_name'       => __( 'Justine Miller', 'martine' ),
                    ],
                ]
            ]
        );

        $this->end_controls_section(); // End section top content
        

        /**
         * Style Tab
         * ------------------------------ Style Tab Content ------------------------------
         *
         */

        // Heading Style ==============================
        $this->start_controls_section(
            'color_sect', [
                'label' => __( 'Style Reviews', 'martine' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'sec_title_color', [
                'label'     => __( 'Section Title Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .client_review .section_tittle h2' => 'color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'nav_btn_txt_col', [
                'label'     => __( 'Navigation Buttons Text Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .client_review .owl-nav button' => 'color: {{VALUE}} !important;',
                ],
            ]
        );  
        $this->add_control(
            'nav_btn_bg_col', [
                'label'     => __( 'Navigation Buttons BG Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .client_review .owl-nav button' => 'background-color: {{VALUE}} !important;',
                ],
            ]
        );  
        $this->add_control(
            'single_rev_styles_sep',
            [
                'label'     => __( 'Review Single Item Styles', 'martine' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_control(
            'sing_item_bg_color', [
                'label'     => __( 'Single Item BG Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .client_review .single_review_slider' => 'background-color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'stars_color', [
                'label'     => __( 'Stars Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .client_review .single_review_slider .place_review a' => 'color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'color_rev_txt', [
                'label'     => __( 'Review Text Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .client_review .single_review_slider p' => 'color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'color_rev_name_txt', [
                'label'     => __( 'Reviewer Name Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .client_review .single_review_slider h5' => 'color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'sec_bg_color_sep',
            [
                'label'     => __( 'Section BG Color Style', 'martine' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_control(
            'sec_bg_color', [
                'label'     => __( 'Section BG Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .client_review' => 'background-color: {{VALUE}};',
                ],
            ]
        );  
        
        $this->end_controls_section();


    }
    
    public function martine_get_single_review_item( $stars, $rev_txt, $client_name ) {
        ?>
        <div class="single_review_slider">
            <div class="place_review">
                <?php
                if (!empty( $stars )) {
                    for ($i = 1; $i <= 5; $i++) {
                        if ($stars >= $i) {
                            echo '<a href="#"><i class="fa fa-star"></i></a>';
                        }
                    }
                }
                ?>
            </div>
            <p><?php echo esc_html( $rev_txt )?> </p>
            <h5> - <?php echo esc_html( $client_name )?></h5>
        </div>
        <?php
    }

	protected function render() {

    // call load widget script
    $this->load_widget_script();
                
    $settings       = $this->get_settings();
    $sec_heading    = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $reviews        = !empty( $settings['reviews_content'] ) ? $settings['reviews_content'] : '';
    $dynamic_class  = is_front_page() ? 'client_review section_padding' : 'client_review section_padding';
    ?>

    <!--::review_part start::-->
    <section class="<?php echo esc_attr( $dynamic_class )?>">
        <div class="container">
            <div class="row ">
                <div class="col-xl-6">
                    <div class="section_tittle">
                        <h2><?php echo esc_html( $sec_heading )?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="client_review_slider owl-carousel">
                        <?php
                        if( is_array( $reviews ) && count( $reviews ) > 0 ){
                            foreach ( $reviews as $review ) {
                                $stars = !empty( $review['reviewstar'] ) ? $review['reviewstar'] : '';
                                $rev_txt        = !empty( $review['rev_txt'] ) ? $review['rev_txt'] : '';
                                $client_name    = !empty( $review['client_name'] ) ? $review['client_name'] : '';

                                $this->martine_get_single_review_item( $stars, $rev_txt, $client_name );
                            }
                        }
                        ?>
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
            var review = $('.client_review_slider');
            if (review.length) {
                review.owlCarousel({
                items: 3,
                loop: true,
                dots: false,
                autoplay: true,
                margin: 40,
                autoplayHoverPause: true,
                autoplayTimeout: 5000,
                nav: true,
                navText: [
                    '<i class="ti-angle-left"></i>',
                    '<i class="ti-angle-right"></i>'
                ],
                responsive: {
                    0: {
                    items: 1,
                    nav: false
                    },
                    576: {
                    items: 2,
                    nav: false
                    },
                    768: {
                    items: 2,
                    nav: false

                    },
                    991: {
                    items: 3,
                    nav: true
                    }
                }
                });
            }
        })(jQuery);
        </script>
        <?php 
        }
    }
}
