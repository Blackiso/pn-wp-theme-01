<?php

function section_footer($wp_customize, $panel_id)
{
    $prefix = "footer_section";

    $wp_customize->add_section($prefix, array(
        'priority'       => 11,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Footer Settings', THEME_NAME),
        'description'    =>  __('Footer elements configuration', THEME_NAME),
        'panel'  => $panel_id,
    ));

    $wp_customize->add_setting($prefix . "_settings", array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'type' => 'option'
    ));

    // $wp_customize->add_control($prefix . "_settings", array(
    //     'label'          => __('Dark or light theme version?', THEME_NAME),
    //     'section'        => "$prefix",
    //     'settings'       => $prefix . "_settings",
    //     'type'           => 'radio',
    //     'choices'        => array(
    //         'dark'   => __('Dark'),
    //         'light'  => __('Light')
    //     )
    // ));

    $wp_customize->add_section($prefix . "xx", array(
        'priority'       => 11,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Footer Settings', THEME_NAME),
        'description'    =>  __('Footer elements configuration', THEME_NAME),
        'panel'  => $panel_id,
    ));

    $wp_customize->add_setting($prefix . "xx_settings", array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'type' => 'option'
    ));

    $wp_customize->add_control($prefix . "xx_settings", array(
        'label'          => __('Dark or light theme version?', THEME_NAME),
        'section'        => "$prefix" . "xx",
        'settings'       => $prefix . "xx_settings",
        'type'           => 'radio',
        'choices'        => array(
            'dark'   => __('Dark'),
            'light'  => __('Light')
        )
    ));

    $wp_customize->add_control(
        new WP_New_Menu_Customize_Control(
            $wp_customize,
            $prefix . "_settings",
            array(
                'label'          => __('Dark or light theme version?', THEME_NAME),
                'section'        => $prefix . "xx",
                'settings'       => $prefix . "_settings",
                'type'           => 'radio',
                'choices'        => array(
                    'dark'   => __('Dark'),
                    'light'  => __('Light')
                )
            )
        )
    );


    $wp_customize->add_section($prefix . "_1", array(
        'priority'       => 11,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Footer Settings', THEME_NAME),
        'description'    =>  __('Footer elements configuration', THEME_NAME),
        'panel'  => $panel_id,
    ));

    $wp_customize->add_setting($prefix . "_settings_1", array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'type' => 'option'
    ));

    $wp_customize->add_control($prefix . "_settings_1", array(
        'label'          => __('Dark or light theme version?', THEME_NAME),
        'section'        => "$prefix",
        'settings'       => $prefix . "_settings_1",
        'type'           => 'radio',
        'choices'        => array(
            'dark'   => __('Dark'),
            'light'  => __('Light')
        )
    ));

    // new_panel($wp_customize, [
    //     'id' => 'footer_panel',
    //     'priority'       => 10,
    //     'capability'     => 'edit_theme_options',
    //     'theme_supports' => '',
    //     'title'          => __('Theme Options', THEME_NAME),
    //     'description'    => __('Several settings pertaining my theme', THEME_NAME),
    // ], function($wp_customize, $panel_id2){

    // })

}
class WP_New_Menu_Customize_Control extends WP_Customize_Control
{
    public $type = 'new_menu';
    public function render_content()
    {
        
    }
}
