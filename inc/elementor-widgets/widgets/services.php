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
 * Martine elementor Team Member section widget.
 *
 * @since 1.0
 */
class Martine_Services extends Widget_Base {

	public function get_name() {
		return 'martine-services';
	}

	public function get_title() {
		return __( 'Services', 'martine' );
	}

	public function get_icon() {
		return 'eicon-tools';
	}

	public function get_categories() {
		return [ 'martine-elements' ];
	}

	protected function _register_controls() {
        
		// ----------------------------------------   Services content ------------------------------

        // First service contents
        $this->start_controls_section(
			'services_content',
			[
				'label' => __( 'Services Contents', 'martine' ),
			]
        );
        $this->add_control(
            'serv_title',
            [
                'label'         => esc_html__( 'Service Title', 'martine' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'We offered best services', 'martine' )
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
            'services', [
                'label' => __( 'Create New', 'martine' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ item_title }}}',
                'fields' => [
                    [
                        'name'  => 'item_img',
                        'label' => __( 'Service Image', 'martine' ),
                        'type'  => Controls_Manager::MEDIA,
                    ],
                    [
                        'name'  => 'item_title',
                        'label' => __( 'Service Title', 'martine' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Transportation', 'martine' )
                    ],
                    [
                        'name'  => 'item_url',
                        'label' => __( 'Service URL', 'martine' ),
                        'type'  => Controls_Manager::URL,
                        'label_block' => true,
                        'default' => [
                            'url'   => '#'
                        ]
                    ],
                    [
                        'name'  => 'short_brief',
                        'label' => __( 'Short Brief', 'martine' ),
                        'type'  => Controls_Manager::TEXTAREA,
                        'label_block' => true,
                        'default' => __( 'All transportation cost we bear', 'martine' )
                    ],
                ],
                'default' => [
                    [
                        'item_img'     => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'item_title'   => __( 'Transportation', 'martine' ),
                        'item_url'     => [
                            'url'   => '#'
                        ],
                        'short_brief'   => __( 'All transportation cost we bear', 'martine' ),
                    ],
                    [
                        'item_img'     => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'item_title'   => __( 'Guidence', 'martine' ),
                        'item_url'     => [
                            'url'   => '#'
                        ],
                        'short_brief'   => __( 'All transportation cost we bear', 'martine' ),
                    ],
                    [
                        'item_img'     => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'item_title'   => __( 'Accomodation', 'martine' ),
                        'item_url'     => [
                            'url'   => '#'
                        ],
                        'short_brief'   => __( 'All transportation cost we bear', 'martine' ),
                    ],
                    [
                        'item_img'     => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ],
                        'item_title'   => __( 'Discover world', 'martine' ),
                        'item_url'     => [
                            'url'   => '#'
                        ],
                        'short_brief'   => __( 'All transportation cost we bear', 'martine' ),
                    ],
                ]
            ]
        );

        $this->end_controls_section(); // End Services content

        /**
         * Style Tab
         * ------------------------------ Style Tab Content ------------------------------
         *
         */

        // Service Color Settings ==============================
        $this->start_controls_section(
            'serv_color_sett', [
                'label' => __( 'Service Color Settings', 'martine' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
 
        $this->add_control(
            'sec_title_color', [
                'label'     => __( 'Section Title Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .best_services .section_tittle h2' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'sec_sub_title_color', [
                'label'     => __( 'Section Sub Title Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .best_services .section_tittle p' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'serv_sing_styles_sep',
            [
                'label'     => __( 'Single Item Styles', 'martine' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'service_sing_title', [
                'label'     => __( 'Service Title Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .best_services .single_ihotel_list h3 a' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'service_sing_text', [
                'label'     => __( 'Service Text Color', 'martine' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .best_services .single_ihotel_list p' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->end_controls_section();

    }


    public function martine_get_single_service_item( $item_img, $item_title, $item_url, $short_brief ) { 
        ?>
        <div class="col-lg-3 col-sm-6">
            <div class="single_ihotel_list">
                <?php
                    if ( $item_img ) {
                        echo wp_kses_post( $item_img );
                    }

                    echo '<h3> <a href="'.esc_url( $item_url ).'"> '.esc_html( $item_title ).'</a></h3>';

                    echo '<p>'.esc_html( $short_brief ).'</p>';
                ?>
            </div>
        </div>
    <?php
    }
    
	protected function render() {
    $settings       = $this->get_settings();
    $serv_title     = !empty( $settings['serv_title'] ) ? $settings['serv_title'] : '';
    $sub_title      = !empty( $settings['sub_title'] ) ? $settings['sub_title'] : '';
    $services       = !empty( $settings['services'] ) ? $settings['services'] : '';
    $dynamic_class  = is_front_page() ? 'best_services section_padding' : 'best_services section_padding';

    
    ?>

    <!--::our_services part start::-->
    <section class="<?php echo esc_attr( $dynamic_class )?>">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2><?php echo esc_html( $serv_title )?></h2>
                        <p><?php echo esc_html( $sub_title )?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if( is_array( $services ) && count( $services ) > 0 ){
                    foreach ( $services as $item ) {
                        $item_img = !empty( $item['item_img']['id'] ) ? wp_get_attachment_image($item['item_img']['id'], 'martine_services_img_263x190', false, ['alt' => 'service image']) : '';
                        $item_title = !empty( $item['item_title'] ) ? $item['item_title'] : '';
                        $item_url = !empty( $item['item_url']['url'] ) ? $item['item_url']['url'] : '';
                        $short_brief = !empty( $item['short_brief'] ) ? $item['short_brief'] : '';
                        
                        $this->martine_get_single_service_item( $item_img, $item_title, $item_url, $short_brief );    
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- our_service part end-->
    <?php
    }
}
