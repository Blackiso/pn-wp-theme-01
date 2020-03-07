<?php

	define('ADMIN_PANELS', TEMPLATE_DIR.'/inc/admin-panels/');

	require(ADMIN_PANELS.'preset-ui.php');

	function add_page_meta_box() {
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
		$pages = [
			12 => [
				[
					'id' => 'services_meta_box',
					'title' => 'Services Section',
					'args' => ['meta' => 'services']
				]
			],
			9 => [
				[
					'id' => 'about_meta_box',
					'title' => 'About Section',
					'args' => ['meta' => 'about']
				],
				[
					'id' => 'team_meta_box',
					'title' => 'Team Section',
					'args' => ['meta' => 'team']
				],
				[
					'id' => 'testimony_meta_box',
					'title' => 'Testimony Section',
					'args' => ['meta' => 'testimony']
				]
			],
			30 => [
				[
					'id' => 'testimony_meta_box',
					'title' => 'Testimony Section',
					'args' => ['meta' => 'testimony', 'post' => 9]
				]
			]
		];

		if (isset($pages[$post_id])) {
			foreach ($pages[$post_id] as $box) {
				add_meta_box($box['id'], __($box['title']), 'render_meta_box', 'page', 'normal', 'low', $box['args']);
			}
			
		}
		
	}

	function render_meta_box($post, $metabox) {
		$current_meta_box = $metabox['args']['meta'].'_meta_box';
		wp_nonce_field($current_meta_box, $current_meta_box.'_nonce');
		$p_id = $metabox['args']['post'] ?? $post->post_ID;
		$current_values = get_meta_box_array($p_id, $current_meta_box);

		require(ADMIN_PANELS.$metabox['args']['meta'].'-panel.php');
	}

	function save_page_meta_box($post_id) {

		// debug_arrays($_POST);

		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
		if (!current_user_can('edit_post', $post_id)) return;

		if (isset($_POST['meta-boxes'])) {

			foreach ($_POST['meta-boxes'] as $meta_box) {

				if (!isset($meta_box['current_meta_box'])) return;

				$meta_box_id = $meta_box['current_meta_box'];
				unset($meta_box['current_meta_box']);

				if (!isset($_POST[$meta_box_id.'_nonce']) || !wp_verify_nonce($_POST[$meta_box_id.'_nonce'], $meta_box_id)) return;

				update_post_meta($post_id, $meta_box_id, $meta_box);
			}
		}
	}

	function get_meta_box_array($post_id, $meta) {
		$values = get_post_custom($post_id);
		if (!isset($values[$meta])) return [];
		return unserialize($values[$meta][0]);
	}

	add_action('add_meta_boxes', 'add_page_meta_box');
	add_action('save_post', 'save_page_meta_box');