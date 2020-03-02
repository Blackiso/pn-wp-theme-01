<?php

function section_subscribe($wp_customize, $panel_id)
{
    $prefix = "subscribe_section";
    $wp_customize->add_section($prefix, array(
        'priority'       => 11,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Subscribe Form', THEME_NAME),
        'description'    =>  __('Subscribe Form Configuration', THEME_NAME),
        'panel'  => $panel_id,
    ));

    // Show Subscribe Section
    $wp_customize->add_setting($prefix . "_settings_1", array(
        'default' => true,
        'capability' => 'edit_theme_options',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control($prefix . "_settings_1", array(
        'label'          => __('Show Subscribe Section?', THEME_NAME),
        'section'        => "$prefix",
        'settings'       => $prefix . "_settings_1",
        'type'           => 'checkbox'
    ));

    // Form Title
    $wp_customize->add_setting($prefix . "_settings_2", array(
        'default' => 'Subcribe to our Newsletter',
        'capability' => 'edit_theme_options',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control($prefix . "_settings_2", array(
        'label'          => __('Title', THEME_NAME),
        'section'        => "$prefix",
        'settings'       => $prefix . "_settings_2",
        'type'           => 'text'
    ));
    
    // Form Message
    $wp_customize->add_setting($prefix . "_settings_3", array(
        'default' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in',
        'capability' => 'edit_theme_options',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control($prefix . "_settings_3", array(
        'label'          => __('Message', THEME_NAME),
        'section'        => "$prefix",
        'settings'       => $prefix . "_settings_3",
        'type'           => 'textarea'
    ));

    // Email Placehlder
    $wp_customize->add_setting($prefix . "_settings_4", array(
        'default' => 'Enter email address',
        'capability' => 'edit_theme_options',
        'type' => 'theme_mod'
    ));
    
    $wp_customize->add_control($prefix . "_settings_4", array(
        'label'          => __('Email Placeholder', THEME_NAME),
        'section'        => "$prefix",
        'settings'       => $prefix . "_settings_4",
        'type'           => 'text'
    ));
}
