<?php

function section_blog($wp_customize, $panel_id)
{

    $prefix = "blog_section";
    $wp_customize->add_section($prefix, array(
        'priority'       => 11,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Blog Section', THEME_NAME),
        'description'    =>  __('Blog Section Configuration', THEME_NAME),
        'panel'  => $panel_id,
    ));

    // Sub-title
    $wp_customize->add_setting($prefix . "_settings_1", array(
        'default' => "Blog",
        'capability' => 'edit_theme_options',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control($prefix . "_settings_1", array(
        'label'          => __('Sub-Title', THEME_NAME),
        'section'        => "$prefix",
        'settings'       => $prefix . "_settings_1",
        'type'           => 'text'
    ));

    // Title
    $wp_customize->add_setting($prefix . "_settings_2", array(
        'default' => 'Recent Blog',
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
        'label'          => __('Description', THEME_NAME),
        'section'        => "$prefix",
        'settings'       => $prefix . "_settings_3",
        'type'           => 'textarea'
    ));

    // Number of blog posts
    $wp_customize->add_setting($prefix . "_settings_4", array(
        'default' => 3,
        'capability' => 'edit_theme_options',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control($prefix . "_settings_4", array(
        'label'          => __('Number of blog posts', THEME_NAME),
        'section'        => "$prefix",
        'settings'       => $prefix . "_settings_4",
        'type'           => 'number'
    ));
}
