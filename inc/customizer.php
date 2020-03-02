<?php

define('THEME_NAME', 'pn-wp-theme-01');
require get_template_directory() . "/inc/sections/section_header.php";
require get_template_directory() . "/inc/sections/section_footer.php";
require get_template_directory() . "/inc/sections/section_custom.php";
require get_template_directory() . "/inc/new_panel.php";

function wp_customize_register($wp_customize)
{

    new_panel($wp_customize, [
        'id' => 'theme_panel_1',
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Theme Options', THEME_NAME),
        'description'    => __('Several settings pertaining my theme', THEME_NAME),
    ], function ($wp_customize, $panel_id) {
        section_header($wp_customize, $panel_id);
        // section_custom($wp_customize, $panel_id);
        // section_footer($wp_customize, $panel_id);
    });
}

add_action('customize_register', 'wp_customize_register');
