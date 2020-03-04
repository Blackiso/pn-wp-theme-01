<?php

	define('TEMPLATE_DIR', get_template_directory());
	define('TEMPLATE_URI', get_template_directory_uri());

	//For Costimizer
	require_once(TEMPLATE_DIR.'/inc/sanitizers.php');
	require_once(TEMPLATE_DIR.'/inc/CustomizerUI.php');
	require_once(TEMPLATE_DIR.'/inc/Customize.php');
	require_once(TEMPLATE_DIR.'/inc/customizer.php');
	require_once(TEMPLATE_DIR.'/inc/admin-panel-metabox.php');

	// Theme features:
	add_theme_support('menus');

	function register_styles() {
		$files = scandir(TEMPLATE_DIR.'/css');
		foreach ($files as $file) {
			if (strpos($file, '.css') !== false) {
				wp_enqueue_style($file, TEMPLATE_URI.'/css/'.$file, false, '1', 'all');
			}
		}
	}

	function load_admin_style() {
		wp_enqueue_style('admin_css_panel', TEMPLATE_URI.'/css/admin/admin-panel.css', false, '1', 'all');
	}

	function load_admin_scripts($hook) {
		if ($hook !== 'post.php') return;
		wp_enqueue_script('admin_js_panel', TEMPLATE_URI.'/js/admin-panel.js');
	}

	function register_scripts() {
		$files = scandir(TEMPLATE_DIR.'/js/lib');
		foreach ($files as $file) {
			$dependecy = [];
			if ($file !== 'jquery.min.js') array_push($dependecy, 'jquery.min.js');

			if (strpos($file, '.js') !== false) {
				wp_enqueue_script($file, TEMPLATE_URI.'/js/lib/'.$file, $dependecy, '1', true);
			}
		}
		wp_enqueue_script('particle', TEMPLATE_URI.'/js/particle.js', false, '1', true);
		wp_enqueue_script('main', TEMPLATE_URI.'/js/main.js', false, '1', true);
	}

	function customizer_script() {
		wp_enqueue_script('customizer.main.js', TEMPLATE_URI.'/js/wp_customizer.js', ['customize-controls'], '1', true);
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
			'not_found_in_trash'  => __( 'Not found in Trash')
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
			'menu_icon'           => 'dashicons-media-document',
			'menu_position'       => 5,
			'can_export'          => false,
			'has_archive'         => false,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest'        => true,
		]);
	}

	function get_part($name, $args = null) {
		$VARS = $args;
		include(locate_template('template-parts/'.$name.'.php', false, false));
	}

	function remove_page_text_editor() {
		remove_post_type_support('page', 'editor');
	}

	function get_services() {
		$post_id = url_to_postid(site_url('services'));
		$services = get_meta_box_array($post_id, 'services_meta_box');
		return $services;
	}

	// Wordpress hooks:
	add_action('admin_init', 'remove_page_text_editor');
	add_action('customize_register', 'customize_register');
	add_action('init', 'create_portfolio_post_type');
	add_action('after_setup_theme', 'register_menus');
	add_action('wp_enqueue_scripts', 'register_scripts');
	add_action('wp_enqueue_scripts', 'register_styles');
	add_action('customize_controls_enqueue_scripts', 'customizer_script');
	add_action('admin_enqueue_scripts', 'load_admin_style');
	add_action('admin_enqueue_scripts', 'load_admin_scripts');
	add_filter('nav_menu_css_class', 'menu_custom_li_classes');
	add_filter('nav_menu_link_attributes', 'menu_custom_a_classes');
	
 