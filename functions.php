<?php 
	
	define('SNIPP_DIR', get_template_directory());
	define('SNIPP_INC', get_template_directory().'/inc/');
	define('SNIPP_URI', get_template_directory_uri());
	
	//Setup Theme
	function snipp_setup() {

		add_theme_support('menus');
		add_theme_support('post-thumbnails');

		register_nav_menus([
			'main-menu' => __('Main menu')
		]);

	}

	add_action('after_setup_theme', 'snipp_setup');


	//Load styles and javascript files
	function snipp_scripts() {

		$css_files = scandir(SNIPP_DIR.'/css');
		$js_files = scandir(SNIPP_DIR.'/js/lib');

		foreach ($css_files as $file) {
			if (strpos($file, '.css') !== false) {
				wp_enqueue_style($file, SNIPP_URI.'/css/'.$file, false, '1', 'all');
			}
		}

		foreach ($js_files as $file) {
			$dependecy = [];
			if ($file !== 'jquery.min.js') $dependecy[] = 'jquery.min.js';

			if (strpos($file, '.js') !== false) {
				wp_enqueue_script($file, SNIPP_URI.'/js/lib/'.$file, $dependecy, '1', true);
			}
		}

		wp_enqueue_script('particle', SNIPP_URI.'/js/particle.js', false, '1', true);
		wp_enqueue_script('main', SNIPP_URI.'/js/main.js', false, '1', true);

	}

	add_action('wp_enqueue_scripts', 'snipp_scripts');


	//Require other scripts
	require SNIPP_INC.'template-functions.php';