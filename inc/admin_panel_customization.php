<?php

	define('ADMIN_PANELS', TEMPLATE_DIR.'/inc/admin-panels/');

	function add_page_meta_box() {
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];

		if ($post_id == 12) {
			add_meta_box('services_meta_box', 'Services', 'render_meta_box', 'page', 'normal', 'high');
		}
		
	}

	function render_meta_box($post) {
		$empty_service = [['service-icon' => null, 'service-name' => null, 'service-des' => null]];	
		$saved_services = get_meta_box_array($post->ID, 'services_meta_box');

		if (empty($saved_services)) $saved_services = $empty_service;

		wp_nonce_field('services_meta_box', 'meta_box_nonce');
		
		require(ADMIN_PANELS.'services-panel.php');
	}

	function save_page_meta_box($post_id) {
		if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
		if(!isset( $_POST['meta_box_nonce']) || !wp_verify_nonce($_POST['meta_box_nonce'], 'services_meta_box')) return;
		if(!current_user_can('edit_post', $post_id)) return;

		$services = $_POST['services'];

		foreach ($services as $key => $value) {
			foreach ($value as $x => $val) {
				if ($val == "") {
					unset($services[$key]);
					continue;
				}
			}
		}

		update_post_meta($post_id, 'services_meta_box', $services);
	}

	function get_meta_box_array($post_id, $meta) {
		$values = get_post_custom($post_id);
		if (!isset($values[$meta])) return [];
		return unserialize($values[$meta][0]);
	}

	add_action('add_meta_boxes', 'add_page_meta_box');
	add_action('save_post', 'save_page_meta_box');