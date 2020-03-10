<?php

	function snipp_get_main_navigation() {

		wp_nav_menu([
            'theme_location' => 'main-menu',
            'menu_class' => 'navbar-nav ml-auto',
            'container' => ''
        ]); 

	}

	function snipp_menu_li_class($classes, $item, $args) {

		if ($args->theme_location == 'main-menu') {
			$classes[] = 'nav-item';
		}

		return $classes;

	}

	add_filter('nav_menu_css_class', 'snipp_menu_li_class', 10, 3);

	function snipp_menu_a_class($attr, $item, $args) {

		if ($args->theme_location == 'main-menu') {
			$attr['class'] = 'nav-link';
		}

		return $attr;

	}

	add_filter('nav_menu_link_attributes', 'snipp_menu_a_class', 10, 3);