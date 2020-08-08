<?php
namespace Martineelementor\Widgets;

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
 * Martine elementor section widget.
 *
 * @since 1.0
 */
class Martine_Search_Widget extends Widget_Base {

	public function get_name() {
		return 'martine-search-widget';
	}

	public function get_title() {
		return __( 'Search Widget', 'martine' );
	}

	public function get_icon() {
		return 'eicon-search-results';
	}

	public function get_categories() {
		return [ 'martine-elements' ];
	}

	protected function _register_controls() {

        
		// ----------------------------------------  Search Widget content ------------------------------
		$this->start_controls_section(
			'search_widget_contents',
			[
				'label' => __( 'Search Widget Section', 'martine' ),
			]
        );
        $this->add_control(
            'btn_label',
            [
                'label'         => esc_html__( 'Button Label', 'martine' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __( 'Search', 'martine' )
            ]
        );
        $this->add_control(
            'btn_url',
            [
                'label'         => esc_html__( 'Button URL', 'martine' ),
                'type'          => Controls_Manager::URL,
                'label_block'   => true,
                'default'       => [
                    'url'       => '#'
                ]
            ]
        );
        $this->end_controls_section(); // End search-widget content


        /**
         * Style Tab
         * ------------------------------ Search Widget Settings ------------------------------
         *
         */

        // Button Style ==============================
        $this->start_controls_section(
            'btn_styles', [
                'label' => __( 'Button Style', 'martine' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'btn_color', [
				'label'     => __( 'Button Color', 'martine' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .booking_part .form-row .btn_1' => 'color: {{VALUE}};',
				],
			]
		);
        $this->add_control(
			'btn_bg_color', [
				'label'     => __( 'Button BG Color', 'martine' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .booking_part .form-row .btn_1' => 'background-color: {{VALUE}};',
				],
			]
        );
        $this->add_control(
            'btn_hvr_styles_sep',
            [
                'label'     => __( 'Hover Styles', 'martine' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
			'btn_hvr_color', [
				'label'     => __( 'Button Hover Color', 'martine' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .booking_part .form-row .btn_1:hover' => 'color: {{VALUE}} !important;',
				],
			]
		);
        $this->add_control(
			'btn_hvr_bg_color', [
				'label'     => __( 'Button Hover BG Color', 'martine' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .booking_part .form-row .btn_1:hover' => 'background-color: {{VALUE}};',
				],
			]
        );
        $this->end_controls_section();

	}

	protected function render() {
        $settings       = $this->get_settings();
        
        // call load widget script
        $this->load_widget_script();
        
        $btn_label  = !empty( $settings['btn_label'] ) ? $settings['btn_label'] : '';
        $btn_url    = !empty( $settings['btn_url']['url'] ) ? $settings['btn_url']['url'] : '';
        ?>

    <!-- booking part start-->
    <section class="booking_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="booking_menu">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                            <a class="nav-link active" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="true">hotel</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" id="tricket-tab" data-toggle="tab" href="#tricket" role="tab" aria-controls="tricket" aria-selected="false">ticket</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" id="place-tab" data-toggle="tab" href="#place" role="tab" aria-controls="place" aria-selected="false">place</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="booking_content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                                <div class="booking_form">
                                    <form action="#">
                                        <div class="form-row">
                                            <div class="form_colum">
                                                <select class="nc_select">
                                                    <option selected>Choosace place </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_1" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_2" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <select class="nc_select">
                                                    <option selected>Persone </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form_btn">
                                                <a href="<?php echo esc_url( $btn_url )?>" class="btn_1"><?php echo esc_html( $btn_label )?></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tricket" role="tabpanel" aria-labelledby="tricket-tab">
                                <div class="booking_form">
                                    <form action="#">
                                        <div class="form-row">
                                            <div class="form_colum">
                                                <select class="nc_select">
                                                    <option selected>Choosace place </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_3" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_4" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <select class="nc_select">
                                                    <option selected>Persone </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form_btn">
                                                <a href="<?php echo esc_url( $btn_url )?>" class="btn_1"><?php echo esc_html( $btn_label )?></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="place" role="tabpanel" aria-labelledby="place-tab">
                                <div class="booking_form">
                                    <form action="#">
                                        <div class="form-row">
                                            <div class="form_colum">
                                                <select class="nc_select">
                                                    <option selected>Choosace place </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_5" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_6" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <select class="nc_select">
                                                    <option selected>Persone </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form_btn">
                                                <a href="<?php echo esc_url( $btn_url )?>" class="btn_1"><?php echo esc_html( $btn_label )?></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header part end-->
    <?php

    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            $('#datepicker_1').datepicker();
            $('#datepicker_2').datepicker();  
            $('#datepicker_3').datepicker();
            $('#datepicker_4').datepicker();  
            $('#datepicker_5').datepicker();
            $('#datepicker_6').datepicker();
        })(jQuery);
        </script>
        <?php 
        }
    }

}
