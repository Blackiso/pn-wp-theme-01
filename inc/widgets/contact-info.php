<?php

	class Contact_info_Widget extends WP_Widget {

		private $widget_name = 'Contact Informations';
		private $widget_desc = 'Add contact info to footer';
		
		function __construct() {
			parent::__construct('snipp_contact_info', __($this->widget_name), ['description' => __($this->widget_desc)]);
		}

		public function widget($args, $instance) {

			$title = apply_filters('widget_title', $instance['title']);

			echo $args['before_widget'];
			if (!empty($title)) {
				echo $args['before_title'] . $title . $args['after_title'];
			}
			
			echo __('Hello, World!');
			echo $args['after_widget'];

		}

		public function form($instance) {
			echo "string";
		}

		public function update($new_instance, $old_instance) {
			return [];
		}
	}

	function snipp_load_widget() {
    	register_widget('Contact_info_Widget');
	}

	add_action('widgets_init', 'snipp_load_widget');