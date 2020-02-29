<?php
	
	define('TEMPLATE_DIR', get_template_directory());
	define('TEMPLATE_URI', get_template_directory_uri());

	// Theme features:
	add_theme_support('menus');

	function register_styles() {
		$files = scandir(TEMPLATE_DIR.'/css');
		foreach ($files as $file) {
			if (strpos($file, '.css') !== false) {
				wp_enqueue_style($file, get_template_directory_uri().'/css/'.$file, false, '1', 'all');
			}
		}
	}

	function register_scripts() {
		$files = scandir(TEMPLATE_DIR.'/js/lib');
		foreach ($files as $file) {
			$dependecy = [];
			if ($file !== 'jquery.min.js') array_push($dependecy, 'jquery.min.js');

			if (strpos($file, '.js') !== false) {
				wp_enqueue_script($file, get_template_directory_uri().'/js/lib/'.$file, $dependecy, '1', true);
			}
		}
		wp_enqueue_script('particle', get_template_directory_uri().'/js/particle.js', false, '1', true);
		wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', false, '1', true);
	}

	function menu_custom_li_classes($classes) {
		$classes[] = 'nav-item';
		return $classes;
	}

	function menu_custom_a_classes($atts) {
		$atts['class'] = 'nav-link';
		return $atts;
	}

	function register_menus() {
		register_nav_menus(['main-menu' => __('Main menu')]);
	}


	// Wordpress hooks:
	add_action('after_setup_theme', 'register_menus');
	add_action('wp_enqueue_scripts', 'register_scripts');
	add_action('wp_enqueue_scripts', 'register_styles');
	add_filter('nav_menu_css_class', 'menu_custom_li_classes');
	add_filter('nav_menu_link_attributes', 'menu_custom_a_classes');