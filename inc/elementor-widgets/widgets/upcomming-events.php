<?php
namespace Martineelementor\Widgets;

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
 * elementor events section widget.
 *
 * @since 1.0
 */
class Martine_Events extends Widget_Base {

	public function get_name() {
		return 'martine-events';
	}

	public function get_title() {
		return __( 'Upcomming Events', 'martine' );
	}

	public function get_icon() {
		return 'eicon-calendar';
	}

	public function get_categories() {
		return [ 'martine-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  Events Content ------------------------------
        $this->start_controls_section(
            'events_sec',
            [
                'label' => __( 'Events', 'martine' ),
            ]
        );
        $this->add_control(
            'event_title',
            [
                'label'         => esc_html__( 'Event Title', 'martine' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __( 'Upcoming Event', 'martine' )
            ]
        );
        $this->add_control(
            'read_more_txt',
            [
                'label'         => esc_html__( 'Event Details Text', 'martine' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __( 'Plan Details', 'martine' )
            ]
        );
		$this->add_control(
			'event_number', [
				'label'         => esc_html__( 'Event Number', 'martine' ),
				'type'          => Controls_Manager::NUMBER,
				'min'           => 1,
				'step'          => 1,
				'default'       => 3

			]
		);

        $this->end_controls_section(); // End events content

        //------------------------------ Color Settings ------------------------------
        $this->start_controls_section(
            'color_settings', [
                'label' => __( 'Color Settings', 'martine' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'sub_title_color', [
                'label'     => __( 'Sub Title Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .event_part .event_slider_content h5' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sec_big_title_color', [
                'label'     => __( 'Big Title Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .event_part .event_slider_content h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sec_text_color', [
                'label'     => __( 'Text Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .event_part .event_slider_content p' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .event_part .rating span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sec_text_val_color', [
                'label'     => __( 'Date, Cost & Organizer Values Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .event_part .event_slider_content p span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sec_stars_color', [
                'label'     => __( 'Stars Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .place_review a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'anchor_styles_sep',
            [
                'label'     => __( 'Button Styles', 'martine' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'anc_color', [
                'label'     => __( 'Button Text Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .event_part .btn_1' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'anc_bg_color', [
                'label'     => __( 'Button BG Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .event_part .btn_1' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'anchor_hvr_styles_sep',
            [
                'label'     => __( 'Button Hover Styles', 'martine' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'anc_hvr_color', [
                'label'     => __( 'Button Hover Text Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .event_part .btn_1:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'anc_hvr_bg_color', [
                'label'     => __( 'Button Hover BG Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .event_part .btn_1:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

        
        // Background Style ==============================
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'martine' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'sec_bg_img_sep',
            [
                'label'     => __( 'Section Background', 'martine' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'martine' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .event_part',
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {
        
    // call load widget script
    $this->load_widget_script();

    $settings       = $this->get_settings();
    $event_title    = !empty( $settings['event_title'] ) ? $settings['event_title'] : '';
    $read_more_txt  = !empty( $settings['read_more_txt'] ) ? $settings['read_more_txt'] : '';
    $pNumber        = $settings['event_number'];
    $dynamic_class  = is_front_page() ? 'our_project section_padding' : 'our_project section_padding single_page_project';
    ?>

    <!--upcomming events start-->
    <section class="event_part section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="event_slider owl-carousel" >
                        <?php            
                            //Load Events ==============
                            martine_event_section( $event_title, $read_more_txt, $pNumber );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--upcomming events end-->
    <?php

    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            var event = $('.event_slider');
            if (event.length) {
                event.owlCarousel({
                items: 1,
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
                    nav: false
                    },
                    600: {
                    nav: false
                    },
                    991: {
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
