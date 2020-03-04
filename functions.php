    <?php

    define('TEMPLATE_URI', get_template_directory_uri());

    require get_template_directory() . "/wp_bootstrap_navwalker.php";

    function wp_enque_functions()
    {
        // CSS & JS Files
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

    function wpb_theme_setup()
    {
        // nav menus
        register_nav_menus(array('primary' => __('Primary Menu')));

        // support post formats
        add_theme_support('post-formats', array('aside', 'gallery', 'portfolio'));
    }

    function load_admin_script()
    {
        wp_register_style('admin_css', get_template_directory_uri() . '/css/admin-style.css', false, '1.0.0');
        wp_enqueue_style('admin_css');
        wp_register_script('jquery.min.js', get_template_directory_uri() . '/js/jquery.min.js', false, "1.0.0", true);
        wp_enqueue_script('jquery.min.js');
        wp_register_script('custom_script', get_template_directory_uri() . '/js/custom_script.js', false, "1.0.0", true);
        wp_enqueue_script('custom_script');
    }

    // function create_portfolio_post_type() {
	// 	$labels = [
	// 		'name'                => __( 'Portfolios'),
	// 		'singular_name'       => __( 'Portfolio'),
	// 		'menu_name'           => __( 'Portfolios'),
	// 		'parent_item_colon'   => __( 'Parent Portfolio'),
	// 		'all_items'           => __( 'All Portfolios'),
	// 		'view_item'           => __( 'View Portfolio'),
	// 		'add_new_item'        => __( 'Add New Portfolio'),
	// 		'add_new'             => __( 'Add New'),
	// 		'edit_item'           => __( 'Edit Portfolio'),
	// 		'update_item'         => __( 'Update Portfolio'),
	// 		'search_items'        => __( 'Search Portfolios'),
	// 		'not_found'           => __( 'Not Found'),
	// 		'not_found_in_trash'  => __( 'Not found in Trash')
	// 	];

	// 	register_post_type('portfolio', [
	// 		'label'               => __('Portfolio'),
	// 		'labels'              => $labels,
	// 		'hierarchical'        => false,
	// 		'public'              => true,
	// 		'show_ui'             => true,
	// 		'show_in_menu'        => true,
	// 		'show_in_nav_menus'   => true,
	// 		'show_in_admin_bar'   => true,
	// 		'menu_icon'           => 'dashicons-media-document',
	// 		'menu_position'       => 5,
	// 		'can_export'          => false,
	// 		'has_archive'         => false,
	// 		'exclude_from_search' => false,
	// 		'publicly_queryable'  => true,
	// 		'capability_type'     => 'post',
	// 		'show_in_rest'        => true,
	// 	]);
	// }

	// function get_part($name, $args = null) {
	// 	$VARS = $args;
	// 	include(locate_template('template-parts/'.$name.'.php', false, false));
	// }

	// add_action('init', 'create_portfolio_post_type');
    add_action('after_setup_theme', 'wpb_theme_setup');
    add_action('wp_enqueue_scripts', 'wp_enque_functions');
    add_action('admin_enqueue_scripts', 'load_admin_script');

    // theme customizer files
    require get_template_directory() . "/inc/customizer.php";
