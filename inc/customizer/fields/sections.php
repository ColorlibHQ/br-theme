<?php 
/**
 * @Packge     : Br
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'br_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'br' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    // array(
    //     'id'   => 'br_general_section',
    //     'args' => array(
    //         'title'    => esc_html__( 'General', 'br' ),
    //         'panel'    => 'br_theme_options_panel',
    //         'priority' => 1,
    //     ),
    // ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'br_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'br' ),
            'panel'    => 'br_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'br_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'br' ),
            'panel'    => 'br_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'br_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'br' ),
            'panel'    => 'br_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'br_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'br' ),
            'panel'    => 'br_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'br_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'br' ),
            'panel'    => 'br_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'br_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'br' ),
            'panel'    => 'br_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'br_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'br' ),
            'panel'    => 'br_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>