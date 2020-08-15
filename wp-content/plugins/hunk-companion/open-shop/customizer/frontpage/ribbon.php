<?php
$wp_customize->add_setting( 'open_shop_disable_ribbon_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'open_shop_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'open_shop_disable_ribbon_sec', array(
                'label'                 => esc_html__('Disable Section', 'open-shop'),
                'type'                  => 'checkbox',
                 'priority'   => 1,
                'section'               => 'open_shop_ribbon',
                'settings'              => 'open_shop_disable_ribbon_sec',
            ) ) );


    $wp_customize->add_setting( 'open_shop_ribbon_bg_img_url', array(
        'sanitize_callback' => 'esc_url',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_setting( 'open_shop_ribbon_bg_img_id', array(
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'open_shop_ribbon_bg_background_repeat', array(
        'default' => 'no-repeat',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'open_shop_ribbon_bg_background_size', array(
        'default' => 'auto',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'open_shop_ribbon_bg_background_attach', array(
        'default' => 'scroll',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'open_shop_ribbon_bg_background_position', array(
        'default' => 'center center',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );
    // Registers example_background control
    $wp_customize->add_control(
        new Open_Shop_Customize_Custom_Background_Control(
            $wp_customize,
            'open_shop_ribbon_bg_background_image',
            array(
                'label'     => esc_html__( 'Background Image', 'open-shop' ),
                'section'   => 'open_shop_ribbon',
                'priority'   => 2,
                'settings'    => array(
                    'image_url' => 'open_shop_ribbon_bg_img_url',
                    'image_id' => 'open_shop_ribbon_bg_img_id',
                    'repeat' => 'open_shop_ribbon_bg_background_repeat', // Use false to hide the field
                    'size' => 'open_shop_ribbon_bg_background_size',
                    'position' => 'open_shop_ribbon_bg_background_position',
                    'attach' => 'open_shop_ribbon_bg_background_attach'
                )
            )
        )
    );

$wp_customize->add_setting('open_shop_ribbon_text', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_textarea',
        'transport'         => 'postMessage',
        
  ));
$wp_customize->add_control('open_shop_ribbon_text', array(
        'label'    => __('Text', 'open-shop'),
        'section'  => 'open_shop_ribbon',
        'settings' => 'open_shop_ribbon_text',
         'type'    => 'textarea',
 ));

$wp_customize->add_setting('open_shop_ribbon_btn_text', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_text',
        'transport'         => 'postMessage',
        
  ));
$wp_customize->add_control('open_shop_ribbon_btn_text', array(
        'label'    => __('Button Text', 'open-shop'),
        'section'  => 'open_shop_ribbon',
        'settings' => 'open_shop_ribbon_btn_text',
         'type'    => 'text',
 ));

$wp_customize->add_setting('open_shop_ribbon_btn_link', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_text',
        
  ));
$wp_customize->add_control('open_shop_ribbon_btn_link', array(
        'label'    => __('Button Link', 'open-shop'),
        'section'  => 'open_shop_ribbon',
        'settings' => 'open_shop_ribbon_btn_link',
         'type'    => 'text',
 ));


  $wp_customize->add_setting('open_shop_ribbon_doc', array(
    'sanitize_callback' => 'open_shop_sanitize_text',
    ));
$wp_customize->add_control(new Open_Shop_Misc_Control( $wp_customize, 'open_shop_ribbon_doc',
            array(
        'section'     => 'open_shop_ribbon',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/open-shop/#ribbon-section',
        'description' => esc_html__( 'To know more go with this', 'open-shop' ),
        'priority'   =>100,
    )));