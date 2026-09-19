<?php 
/**
 * @Packge     : Martine
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
Colorlib_Customizer::add_field(
    'martine_theme_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Theme Color', 'martine' ),
        'description' => esc_html__( 'Select the theme color.', 'martine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'martine_general_section',
        'default'     => '#0c3e72',
    )
);

// Secondary Theme color field
Colorlib_Customizer::add_field(
    'martine_secondary_theme_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Secondary Theme Color', 'martine' ),
        'description' => esc_html__( 'Select the secondary theme color.', 'martine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'martine_general_section',
        'default'     => '#fe5c24',
    )
);

// Header Top section
Colorlib_Customizer::add_field(
    'header_top_separator',
    array(
        'type'        => 'colorlib-separator',
        'label'       => esc_html__( 'Header Top Section', 'martine' ),
        'section'     => 'martine_header_section',
        'default'     => true,

    )
);

// Header Top Bar Show/Hide
Colorlib_Customizer::add_field(
    'martine_header_top_bar_toggle',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Header Top Bar Show/Hide', 'martine' ),
        'section'     => 'martine_header_section',
        'default'     => true,
    )
);


// Header social profile & phone number
Colorlib_Customizer::add_field(
    'header_top_soical_phone_separator',
    array(
        'type'        => 'colorlib-separator',
        'label'       => esc_html__( 'Header Top Social Profile & Phone Number Section', 'martine' ),
        'section'     => 'martine_header_section',
        'default'     => true,

    )
);

// Header Social Show/Hide
Colorlib_Customizer::add_field(
    'martine_social_profile_toggle',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Header Social Profile Show/Hide', 'martine' ),
        'section'     => 'martine_header_section',
        'default'     => true,
    )
);

//Social Profile links
Colorlib_Customizer::add_field(
	'martine_header_social',
	array(
		'type'         => 'colorlib-repeater',
		'section'      => 'martine_header_section',
		'label'        => esc_html__( 'Social Profile Links', 'martine' ),
        'button_label' => esc_html__( 'Add new social link', 'martine' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
		),
		'default'      => [
            [
                'social_link_title' => esc_html__( 'Facebook', 'beko' ),
                'social_url'  => '#',
                'social_icon'  => 'fa-brands fa-facebook',
            ],
            [
                'social_link_title' => esc_html__( 'Twitter', 'beko' ),
                'social_url'  => '#',
                'social_icon'  => 'fa-brands fa-twitter',
            ],
            [
                'social_link_title' => esc_html__( 'Instagram', 'beko' ),
                'social_url'  => '#',
                'social_icon'  => 'fa-brands fa-instagram',
            ],
            [
                'social_link_title' => esc_html__( 'Behance', 'beko' ),
                'social_url'  => '#',
                'social_icon'  => 'fa-brands fa-behance',
            ],
        ],
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'beko' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Twitter',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'beko' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '#',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'beko' ),
				'type'    => 'colorlib-icon-picker',
				'default' => 'fa-brands fa-twitter',
			),
			
		),
	)
);


// Header Phone Number
Colorlib_Customizer::add_field(
    'header_phone_number',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Header phone number', 'martine' ),
        'section'           => 'martine_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( '+880 356 257 142', 'martine' ),
    )
);


// Header book now button
Colorlib_Customizer::add_field(
    'header_book_now_btn_separator',
    array(
        'type'        => 'colorlib-separator',
        'label'       => esc_html__( 'Header Book Now Button Section', 'martine' ),
        'section'     => 'martine_header_section',
        'default'     => true,

    )
);

// Header right button field
Colorlib_Customizer::add_field(
    'martine_header_btn',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Header button show/hide', 'martine' ),
        'section'     => 'martine_header_section',
        'default'     => true
    )
);

// Header right button label
Colorlib_Customizer::add_field(
    'header_btn_label',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Header button label', 'martine' ),
        'section'           => 'martine_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'book now', 'martine' ),
    )
);

// Header right button url
Colorlib_Customizer::add_field(
    'booking_btn_url',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Header button url', 'martine' ),
        'section'           => 'martine_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '#',
    )
);

// Header right button hover background color
Colorlib_Customizer::add_field(
    'martine_booking_btn_bg_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Header Button Hover BG Color', 'martine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'martine_header_section',
        'default'     => '#fe5c24'
    )
);

// Header color sections
Colorlib_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'colorlib-separator',
        'label'       => esc_html__( 'Header Color Section', 'martine' ),
        'section'     => 'martine_header_section',

    )
);
 
// Header background color field
Colorlib_Customizer::add_field(
    'martine_header_bg_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'martine' ),
        'description' => esc_html__( 'Select the header background color.', 'martine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'martine_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu color field
Colorlib_Customizer::add_field(
    'martine_header_menu_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Header menu color', 'martine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'martine_header_section',
        'default'     => '#0c3e72',
    )
);

// Header nav menu hover color field
Colorlib_Customizer::add_field(
    'martine_header_menu_hover_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'martine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'martine_header_section',
        'default'     => '#fe5c24',
    )
);

// Header dropdown menu bg color field
Colorlib_Customizer::add_field(
    'martine_header_drop_menu_bg_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Dropdown menu BG color', 'martine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'martine_header_section',
        'default'     => '#fafafa',
    )
);

// Header dropdown menu color field
Colorlib_Customizer::add_field(
    'martine_header_drop_menu_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'martine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'martine_header_section',
        'default'     => '#212529',
    )
);

// Header dropdown menu hover color field
Colorlib_Customizer::add_field(
    'martine_header_drop_menu_hover_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'martine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'martine_header_section',
        'default'     => '#212529',
    )
);

/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Colorlib_Customizer::add_field(
    'martine_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'martine' ),
        'description' => esc_html__( 'Set post excerpt length.', 'martine' ),
        'section'     => 'martine_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Colorlib_Customizer::add_field(
    'martine_blog_meta',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'martine' ),
        'section'     => 'martine_blog_section',
        'default'     => true
    )
);
Colorlib_Customizer::add_field(
    'martine_like_btn',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'martine' ),
        'section'     => 'martine_blog_section',
        'default'     => true
    )
);
Colorlib_Customizer::add_field(
    'martine_blog_share',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'martine' ),
        'section'     => 'martine_blog_section',
        'default'     => true
    )
);

/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Colorlib_Customizer::add_field(
    'martine_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'martine' ),
        'section'           => 'martine_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Colorlib_Customizer::add_field(
    'martine_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'martine' ),
        'section'           => 'martine_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Colorlib_Customizer::add_field(
    'martine_fof_textone_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'martine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'martine_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Colorlib_Customizer::add_field(
    'martine_fof_texttwo_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'martine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'martine_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Colorlib_Customizer::add_field(
    'martine_fof_bg_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'martine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'martine_fof_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Colorlib_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'colorlib-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'martine' ),
        'section'     => 'martine_footer_section',

    )
);

// Footer widget toggle field
Colorlib_Customizer::add_field(
    'martine_footer_widget_toggle',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'martine' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'martine' ),
        'section'     => 'martine_footer_section',
        'default'     => true,
    )
);

// Footer Copyright section
Colorlib_Customizer::add_field(
    'martine_footer_copyright_separator',
    array(
        'type'        => 'colorlib-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'martine' ),
        'section'     => 'martine_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'martine' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Colorlib_Customizer::add_field(
    'martine_footer_copyright_text',
    array(
        'type'        => 'colorlib-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'martine' ),
        'section'     => 'martine_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget background color field
Colorlib_Customizer::add_field(
    'martine_footer_bg_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Background Color', 'martine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'martine_footer_section',
        'default'     => '#162b45',
    )
);

// Footer widget text color field
Colorlib_Customizer::add_field(
    'martine_footer_widget_text_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'martine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'martine_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget title color field
Colorlib_Customizer::add_field(
    'martine_footer_widget_title_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Widget Title Color', 'martine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'martine_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget anchor color field
Colorlib_Customizer::add_field(
    'martine_footer_widget_anchor_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'martine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'martine_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget anchor hover color field
Colorlib_Customizer::add_field(
    'martine_footer_widget_anchor_hover_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'martine' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'martine_footer_section',
        'default'     => '#fe5c24',
    )
);

