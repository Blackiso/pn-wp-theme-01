<?php
	
	define('TEMPLATE_DIR', get_template_directory());
	define('TEMPLATE_URI', get_template_directory_uri());


	function register_styles() {
		$files = scandir(TEMPLATE_DIR.'/css');
		foreach ($files as $file) {
			if (strpos($file, '.css') !== false) {
				wp_enqueue_style($file, get_template_directory_uri().'/css/'.$file, false, '1', 'all');
			}
		}
	}

	function register_scripts() {
		$files = scandir(TEMPLATE_DIR.'/js');
		foreach ($files as $file) {
			$dependecy = [];
			if ($file !== 'jquery.min.js') array_push($dependecy, 'jquery.min.js');

			if (strpos($file, '.js') !== false && $file !== 'main.js') {
				wp_enqueue_script($file, get_template_directory_uri().'/js/'.$file, $dependecy, '1', true);
			}
		}
		wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', false, '1', true);
	}


	add_action('wp_enqueue_scripts', 'register_scripts');
	add_action('wp_enqueue_scripts', 'register_styles');
