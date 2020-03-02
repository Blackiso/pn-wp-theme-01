<?php

function section_custom($wp_customize, $panel_id)
{
    $prefix = "custom_section";
    $wp_customize->add_section($prefix, array(
        'priority'       => 11,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Create Custom Section', THEME_NAME),
        'description'    =>  __('Create new secion', THEME_NAME),
        'panel'  => $panel_id,
    ));

    $wp_customize->add_setting($prefix . "_settings", array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'type' => 'option'
    ));
    $wp_customize->add_control($prefix . "_settings", array(
        'label'          => __('Dark or light theme version?', THEME_NAME),
        'section'        => "$prefix",
        'settings'       => $prefix . "_settings",
        'type'           => 'radio',
        'choices'        => array(
            'dark'   => __('Dark'),
            'light'  => __('Light')
        )
    ));
}
