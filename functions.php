<?php
    function locate_stylesheets() {
        $theme_dir = get_template_directory();
        $theme_uri = get_template_directory_uri();
        $cssfiles = glob($theme_dir."/css/*css");
        foreach($cssfiles as $file) {
            $index = strpos($file,"/css/");
            $fileName = substr($file,$index + strlen("/css/"));
            $filePath = $theme_uri . "/css/" . $fileName;
            if ($fileName =="style.css") {
                wp_enqueue_style( $fileName ,$filePath, array("bootstrap.min.css"), '1.1', 'all');
            }
            wp_enqueue_style( $fileName ,$filePath, array(), '1.1', 'all');
        }
    }


    function locate_scripts() {
        $theme_dir = get_template_directory();
        $theme_uri = get_template_directory_uri();
        wp_enqueue_script( 'jquery.min.js', $theme_uri . '/js/jquery.min.js', false, '1', 'true');
        $jsfiles = glob($theme_dir."/js/*js");
        foreach($jsfiles as $file) {
            $index = strpos($file,"/js/");
            $fileName = substr($file,$index + strlen("/js/"));
            $filePath = $theme_uri . "/js/" . $fileName;
            if ($fileName !="main.js" && $fileName != "jquery.min.js" && $fileName != "particle.js") {
                wp_enqueue_script( $fileName , $filePath, false, '1', 'true');
            }
        }
        wp_enqueue_script( 'particle.js', $theme_uri . '/js/particle.js', false, '1', 'true');
        wp_enqueue_script( 'main.js', $theme_uri . '/js/main.js', array("jquery.min.js"), '1', 'true');
    }

    add_action('wp_enqueue_scripts','locate_stylesheets');
    add_action('wp_enqueue_scripts',"locate_scripts");
?>