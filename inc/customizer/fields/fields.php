<?php 
/**
 * @Packge     : Br
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
// Epsilon_Customizer::add_field(
//     'br_theme_color',
//     array(
//         'type'        => 'epsilon-color-picker',
//         'label'       => esc_html__( 'Theme Color', 'br' ),
//         'description' => esc_html__( 'Select the theme color.', 'br' ),
//         'sanitize_callback' => 'sanitize_text_field',
//         'section'     => 'br_general_section',
//         'default'     => '#131313',
//     )
// );

// Header button label
Epsilon_Customizer::add_field(
    'br_header_top_btn_text',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Top Button Text', 'br' ),
        'section'     => 'br_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( 'Appointment', 'br' ),
    )
);

// Header button toggle
Epsilon_Customizer::add_field(
    'br_header_top_btn_toggler',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Use popup form?', 'br' ),
        'section'     => 'br_header_section',
        'default'     => true,
    )
);

// Popup Form Shortcode
Epsilon_Customizer::add_field(
    'br_popup_form_shortcode',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Popup Form Shortcode/Page URL', 'br' ),
        'section'     => 'br_header_section',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

// Header color sections
Epsilon_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Color Section', 'br' ),
        'section'     => 'br_header_section',

    )
);
 
// Header background color field
Epsilon_Customizer::add_field(
    'br_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'br' ),
        'description' => esc_html__( 'Select the header background color.', 'br' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'br_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'br_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'br' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'br_header_section',
        'default'     => '#131313',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'br_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'br' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'br_header_section',
        'default'     => '#808080',
    )
);

// Dropdown menu color field
Epsilon_Customizer::add_field(
    'br_dropdown_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'br' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'br_header_section',
        'default'     => '#131313',
    )
);

// Dropdown menu hover color field
Epsilon_Customizer::add_field(
    'br_dropdown_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'br' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'br_header_section',
        'default'     => '#808080',
    )
);


// Social Profile section
Epsilon_Customizer::add_field(
    'footer_social_profile_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Social Profile Section', 'br' ),
        'section'     => 'br_social_section',

    )
);

// Social Profiles Show/Hide
Epsilon_Customizer::add_field(
    'br_social_profile_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Social Profile Show/Hide', 'br' ),
        'section'     => 'br_social_section',
        'default'     => true,
    )
);

// Footer Social Profile links
Epsilon_Customizer::add_field(
	'br_social_profiles',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'br_social_section',
		'label'        => esc_html__( 'Social Profile Links', 'br' ),
        'button_label' => esc_html__( 'Add new social link', 'br' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
		),
		'default'      => [
            [
                'social_link_title' => esc_html__( 'Facebook', 'br' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-facebook',
            ],
            [
                'social_link_title' => esc_html__( 'Google Plus', 'br' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-google-plus',
            ],
            [
                'social_link_title' => esc_html__( 'Twitter', 'br' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-twitter',
            ],
            [
                'social_link_title' => esc_html__( 'Instagram', 'br' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-instagram',
            ],
        ],
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'br' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Facebook',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'br' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '#',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'br' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-facebook',
			),
			
		),
	)
);

/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'br_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'br' ),
        'description' => esc_html__( 'Set post excerpt length.', 'br' ),
        'section'     => 'br_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'br_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'br' ),
        'section'     => 'br_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'br_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'br' ),
        'section'     => 'br_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'br_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'br' ),
        'section'     => 'br_blog_section',
        'default'     => true
    )
);
 

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'br' ),
        'section'     => 'br_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'br_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'br' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'br' ),
        'section'     => 'br_footer_section',
        'default'     => true,
    )
);

// Footer Additional Settings section
Epsilon_Customizer::add_field(
    'footer_additional_settings_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Additional Settings', 'br' ),
        'section'     => 'br_footer_section',

    )
);


// Footer short text field
Epsilon_Customizer::add_field(
    'br_footer_text',
    array(
        'type'              => 'textarea',
        'label'             => esc_html__( 'Footer short text', 'br' ),
        'section'           => 'br_footer_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. <br> Quis ipsum suspendisse.',
    )
);

 
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'br_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'br' ),
        'section'           => 'br_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'br_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'br' ),
        'section'           => 'br_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'br_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'br' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'br_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'br_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'br' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'br_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'br_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'br' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'br_fof_section',
        'default'     => '#fff',
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'br_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'br' ),
        'section'     => 'br_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'br' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'br_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'br' ),
        'section'     => 'br_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'br_footer_widget_heading_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Heading Color', 'br' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'br_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'br_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'br' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'br_footer_section',
        'default'     => '#a3a3a3',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'br_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'br' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'br_footer_section',
        'default'     => '#9e9e9e',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'br_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'br' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'br_footer_section',
        'default'     => '#ffffff',
    )
);

