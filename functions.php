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

	function create_portfolio_post_type() {
		$labels = [
			'name'                => __( 'Portfolios'),
	        'singular_name'       => __( 'Portfolio'),
	        'menu_name'           => __( 'Portfolios'),
	        'parent_item_colon'   => __( 'Parent Portfolio'),
	        'all_items'           => __( 'All Portfolios'),
	        'view_item'           => __( 'View Portfolio'),
	        'add_new_item'        => __( 'Add New Portfolio'),
	        'add_new'             => __( 'Add New'),
	        'edit_item'           => __( 'Edit Portfolio'),
	        'update_item'         => __( 'Update Portfolio'),
	        'search_items'        => __( 'Search Portfolios'),
	        'not_found'           => __( 'Not Found'),
	        'not_found_in_trash'  => __( 'Not found in Trash'),
		];

		register_post_type('portfolio', [
			'label'               => __('Portfolio'),
			'labels'              => $labels,
			'hierarchical'        => false,
	        'public'              => true,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_nav_menus'   => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 5,
	        'can_export'          => false,
	        'has_archive'         => false,
	        'exclude_from_search' => false,
	        'publicly_queryable'  => true,
	        'capability_type'     => 'post',
	        'show_in_rest'        => true,
		]);
	}

	// Wordpress hooks:
	add_action('init', 'create_portfolio_post_type');
	add_action('after_setup_theme', 'register_menus');
	add_action('wp_enqueue_scripts', 'register_scripts');
	add_action('wp_enqueue_scripts', 'register_styles');
	add_filter('nav_menu_css_class', 'menu_custom_li_classes');
	add_filter('nav_menu_link_attributes', 'menu_custom_a_classes');