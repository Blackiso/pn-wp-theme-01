<?php

	define('ADMIN_PANELS', TEMPLATE_DIR.'/inc/admin-panels/');

	require(ADMIN_PANELS.'preset-ui.php');

	function add_page_meta_box() {
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];

		if ($post_id == 12) {
			add_meta_box('services_meta_box', 'Services Section', 'render_meta_box', 'page', 'normal', 'high', ['services']);
		}
		
	}

	function render_meta_box($post, $metabox) {
		$current_meta_box = $metabox['args'][0].'_meta_box';
		wp_nonce_field($current_meta_box, 'meta_box_nonce');
		$current_values = get_meta_box_array($post->post_ID, $current_meta_box);

		require(ADMIN_PANELS.$metabox['args'][0].'-panel.php');
	}

	function save_page_meta_box($post_id) {
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
		if (!isset( $_POST['meta_box_nonce']) || !wp_verify_nonce($_POST['meta_box_nonce'], $_POST['current_meta_box'])) return;
		if (!current_user_can('edit_post', $post_id)) return;
		if (!isset($_POST['current_meta_box'])) return;

		// debug_arrays($_POST);

		update_post_meta($post_id, $_POST['current_meta_box'], $_POST['customMeta']);
	}

	function get_meta_box_array($post_id, $meta) {
		$values = get_post_custom($post_id);
		if (!isset($values[$meta])) return [];
		return unserialize($values[$meta][0]);
	}

	add_action('add_meta_boxes', 'add_page_meta_box');
	add_action('save_post', 'save_page_meta_box');