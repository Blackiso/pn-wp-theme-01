
<?php
define("TEMPLATE_DIR", get_template_directory());
    function wp_style_functions() {
        wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css',false,'1','all');
        wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css',false,'1','all');
        wp_enqueue_style('aos', get_template_directory_uri() . '/css/aos.css',false,'1','all');
        wp_enqueue_style('icomoon', get_template_directory_uri() . '/css/icomoon.css',false,'1','all');
        wp_enqueue_style('owl', get_template_directory_uri() . '/css/owl.carousel.min.css',false,'1','all');
        wp_enqueue_style('bootstrap-datepicker', get_template_directory_uri() . '/css/bootstrap-datepicker.css',false,'1','all');
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',false,'1','all');
        wp_enqueue_style('flaticon', get_template_directory_uri() . '/css/flaticon.css',false,'1','all');
    }
    
    add_action('wp_enqueue_scripts','wp_style_functions');


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
    add_action('wp_enqueue_scripts','register_scripts');
?>
