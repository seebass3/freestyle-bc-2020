<?php
/**
 * WP Bootstrap Starter Theme Customizer
 *
 * @package Freestyle BC
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function themeslug_sanitize_checkbox( $checked ) {
    // Boolean check.
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

function wp_bootstrap_starter_customize_register( $wp_customize ) {

    // Bootstrap and Fontawesome Option
    $wp_customize->add_setting( 'cdn_assets_setting', array(
        'default' => __( 'no','wp-bootstrap-starter' ),
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( 
        'cdn_assets',
        array(
            'label' => __( 'Use CDN for Assets', 'wp-bootstrap-starter' ),
            'description' => __( 'All Bootstrap Assets and FontAwesome will be loaded in CDN.', 'wp-bootstrap-starter' ),
            'section' => 'site_name_text_color',
            'settings' => 'cdn_assets_setting',
	        'type'    => 'select',
	        'choices' => array(
	            'yes' => __( 'Yes', 'wp-bootstrap-starter' ),
	            'no' => __( 'No', 'wp-bootstrap-starter' ),
        	)
        )
    );


    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'refresh';
    $wp_customize->get_control( 'header_textcolor'  )->section = 'site_name_text_color';
    $wp_customize->get_control( 'background_image'  )->section = 'site_name_text_color';
    $wp_customize->get_control( 'background_color'  )->section = 'site_name_text_color';

    // Add control for logo uploader
    $wp_customize->add_setting( 'wp_bootstrap_starter_logo', array(
        //'default' => __( '', 'wp-bootstrap-starter' ),
        'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wp_bootstrap_starter_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'wp-bootstrap-starter' ),
        'section'  => 'title_tagline',
        'settings' => 'wp_bootstrap_starter_logo',
    ) ) );

}
add_action( 'customize_register', 'wp_bootstrap_starter_customize_register' );

add_action( 'wp_head', 'wp_bootstrap_starter_customizer_css');
function wp_bootstrap_starter_customizer_css()
{
    ?>
    <style type="text/css">
        #page-sub-header { background: <?php echo get_theme_mod('header_bg_color_setting', '#fff'); ?>; }
    </style>
    <?php
}


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wp_bootstrap_starter_customize_preview_js() {
    wp_enqueue_script( 'wp_bootstrap_starter_customizer', get_template_directory_uri() . '/inc/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wp_bootstrap_starter_customize_preview_js' );
