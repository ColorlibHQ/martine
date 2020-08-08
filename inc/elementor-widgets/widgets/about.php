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
class Martine_About extends Widget_Base {

	public function get_name() {
		return 'martine-about';
	}

	public function get_title() {
		return __( 'About', 'martine' );
	}

	public function get_icon() {
		return 'eicon-thumbnails-half';
	}

	public function get_categories() {
		return [ 'martine-elements' ];
	}

	protected function _register_controls() {

        
        // ----------------------------------------  About content ------------------------------
        // Left content
        $this->start_controls_section(
			'img_content_section',
			[
				'label' => __( 'Left Image', 'martine' ),
			]
        );
        $this->add_control(
            'about_img',
            [
                'label'         => esc_html__( 'Upload Image', 'martine' ),
                'type'          => Controls_Manager::MEDIA,
                'show_external' => false,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
            ]
        );

        $this->end_controls_section(); // End item content

        // About content
		$this->start_controls_section(
			'about_contents',
			[
				'label' => __( 'About Section', 'martine' ),
			]
        );
        $this->add_control(
            'sub_title',
            [
                'label'         => esc_html__( 'Section Sub Title', 'martine' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __( 'Who we are', 'martine' )
            ]
        );
        $this->add_control(
            'sec_title',
            [
                'label'         => esc_html__( 'Section Title', 'martine' ),
                'type'          => Controls_Manager::TEXTAREA,
                'label_block'   => true,
                'default'       => __( 'We love to discover around the world', 'martine' )
            ]
        );

        $this->add_control(
            'about_txt',
            [
                'label'         => esc_html__( 'About Text', 'martine' ),
                'description'   => esc_html__('Use <br> tag for line break', 'martine'),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => __( '<p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged night yielding land creeping that seed appear were bearing.</p><p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged night yielding land creeping that seed appear were bearing.</p><p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged night yielding land creeping that seed appear were bearing.</p>', 'martine' )
            ]
        );
        $this->end_controls_section(); // End about content
        

        /**
         * Style Tab
         * ------------------------------ About Settings ------------------------------
         *
         */


        // Color Settings ==============================
        $this->start_controls_section(
            'color_sect', [
                'label' => __( 'Color Settings', 'martine' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
		$this->add_control(
			'sub_title_color', [
				'label'     => __( 'Sub Title Color', 'martine' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_us .about_text h5' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'sec_title_col', [
				'label'     => __( 'Title Color', 'martine' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_us .about_text h2' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'text_color', [
				'label'     => __( 'Text Color', 'martine' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_us .about_text p' => 'color: {{VALUE}};',
				],
			]
		);
		
        $this->end_controls_section();

        // Background Style ==============================
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Background Style', 'martine' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'martine' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .about_us',
            ]
        );
        $this->end_controls_section();


	}

    
	protected function render() {
        $settings       = $this->get_settings();
        $about_img      = !empty( $settings['about_img']['id'] ) ? wp_get_attachment_image( $settings['about_img']['id'], 'martine_about_img_555x585', false, array( 'alt' => 'about left image' ) ) : '';
        $sub_title      = !empty( $settings['sub_title'] ) ? $settings['sub_title'] : '';
        $sec_title      = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
        $about_content  = !empty( $settings['about_txt'] ) ? $settings['about_txt'] : '';
        $dynamic_class  = is_front_page() ? 'about_us section_padding' : 'about_us section_padding';
    ?>

    <!-- about us start-->
    <section class="<?php echo esc_attr( $dynamic_class )?>">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_img">
                        <?php
                            if( $about_img ){
                                echo wp_kses_post( $about_img );
                            }
                        ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_text">
                        <?php
                            echo '<h5>'.esc_html( $sub_title ).'</h5>';
                            
                            echo '<h2>'.esc_html( $sec_title ).'</h2>';
                            
                            if ( $about_content ) {
                                echo wp_kses_post( wpautop( $about_content ) );
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us end-->
    <?php

    }

}
