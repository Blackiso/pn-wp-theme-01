<?php


define('TEMPLATE_DIR', get_template_directory());

function readPath($sub, $ext, $cb)
{
    $_dir = get_template_directory() . $sub;
    $_files = scandir($_dir, 1);

    foreach ($_files as $file) {
        if (strpos($file, $ext)) {
            $file_path = get_template_directory_uri() . $sub . $file;
            $cb($file_path, $file);
        }
    }
}
function wp_enque_functions()
{
    readPath("/css/", ".css", function ($path, $file) {
        wp_enqueue_style($file, $path, false, '1.1', 'all');
    });
}

function wp_register_scripts()
{
    $files = scandir(TEMPLATE_DIR . '/js');
    foreach ($files as $file) {
        $dependecy = [];
        if ($file !== 'jquery.min.js') array_push($dependecy, 'jquery.min.js');

        if (strpos($file, '.js') !== false && $file !== 'main.js') {
            wp_enqueue_script($file, get_template_directory_uri() . '/js/' . $file, $dependecy, '1', true);
        }
    }
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', false, '1', true);
}

add_action('wp_enqueue_scripts', 'wp_enque_functions');
add_action('wp_enqueue_scripts', 'wp_register_scripts');
