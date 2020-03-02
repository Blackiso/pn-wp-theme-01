<?php

define('TEMPLATE_URI', get_template_directory_uri());

function wp_enque_functions()
{
    $CSS_FILES = array(
        "open-iconic-bootstrap.min.css",
        "animate.css",
        "owl.carousel.min.css",
        "owl.theme.default.min.css",
        "magnific-popup.css",
        "aos.css",
        "ionicons.min.css",
        "bootstrap-datepicker.css",
        "jquery.timepicker.css",
        "flaticon.css",
        "icomoon.css",
        "style.css"
    );
    $JS_FILES = array(
        "jquery.min.js",
        "jquery-migrate-3.0.1.min.js",
        "popper.min.js",
        "bootstrap.min.js",
        "jquery.easing.1.3.js",
        "jquery.waypoints.min.js",
        "jquery.stellar.min.js",
        "owl.carousel.min.js",
        "jquery.magnific-popup.min.js",
        "aos.js",
        "jquery.animateNumber.min.js",
        "bootstrap-datepicker.js",
        "jquery.timepicker.min.js",
        "particles.min.js",
        "particle.js",
        "scrollax.min.js",
        "google-map.js",
        "main.js"
    );
    foreach ($CSS_FILES as $file) {
        wp_enqueue_style($file, TEMPLATE_URI . "/css/$file", false, '1.1', 'all');
    }
    foreach ($JS_FILES as $file) {
        wp_enqueue_script($file, TEMPLATE_URI . "/js/$file", false, '1.1', true);
    }
}

function load_admin_style()
{
    wp_register_style('admin_css', get_template_directory_uri() . '/css/admin-style.css', false, '1.0.0');
    wp_enqueue_style('admin_css');
}

add_action('wp_enqueue_scripts', 'wp_enque_functions');
add_action('admin_enqueue_scripts', 'load_admin_style');

// theme customizer files
require get_template_directory() . "/inc/customizer.php";
