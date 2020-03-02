<?php

function section_header($wp_customize, $panel_id)
{
    $prefix = "header_section";
    $wp_customize->add_section($prefix, array(
        'priority'       => 11,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Header Settings', THEME_NAME),
        'description'    =>  __('Header elements configuration', THEME_NAME),
        'panel'  => $panel_id,
    ));

    // Header Text
    $wp_customize->add_setting($prefix . "_settings", array(
        'default' => 'We love to create Beautiful websites',
        'capability' => 'edit_theme_options',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control($prefix . "_settings", array(
        'label'          => __('Header Text', THEME_NAME),
        'section'        => "$prefix",
        'settings'       => $prefix . "_settings",
        'type'           => 'text'
    ));
    // echo "<p class=\"description\">This is my description</p>";

    // Text To Highlight
    $wp_customize->add_setting($prefix . "_settings_2", array(
        'default' => 'Beautiful',
        'capability' => 'edit_theme_options',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control($prefix . "_settings_2", array(
        'label'          => __('Highlight Word', THEME_NAME),
        'section'        => "$prefix",
        'settings'       => $prefix . "_settings_2",
        'type'           => 'text'
    ));

    // CTA Button
    $wp_customize->add_setting($prefix . "_settings_3", array(
        'default' => true,
        'capability' => 'edit_theme_options',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control($prefix . "_settings_3", array(
        'label'          => __('Show Call to Action Button?', THEME_NAME),
        'section'        => "$prefix",
        'settings'       => $prefix . "_settings_3",
        'type'           => 'checkbox'
    ));

    // Button Inner Text
    $wp_customize->add_setting($prefix . "_settings_4", array(
        'default' => 'Get in touch',
        'capability' => 'edit_theme_options',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control($prefix . "_settings_4", array(
        'label'          => __('Button Text', THEME_NAME),
        'section'        => "$prefix",
        'settings'       => $prefix . "_settings_4",
        'type'           => 'text'
    ));

    // Button url
    $wp_customize->add_setting($prefix . "_settings_5", array(
        'default' => "#",
        'capability' => 'edit_theme_options',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control($prefix . "_settings_5", array(
        'label'          => __('Button URL', THEME_NAME),
        'section'        => "$prefix",
        'settings'       => $prefix . "_settings_5",
        'type'           => 'text'
    ));

    // Open url in new tab ?
    $wp_customize->add_setting($prefix . "_settings_6", array(
        'default' => false,
        'capability' => 'edit_theme_options',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control($prefix . "_settings_6", array(
        'label'          => __('Open URL in a new tab?', THEME_NAME),
        'section'        => "$prefix",
        'settings'       => $prefix . "_settings_6",
        'type'           => 'checkbox'
    ));
}
