<?php
	

	class CustomizerUI {

		private $customizer;
		
		function __construct($customizer) {
			$this->customizer = $customizer;
		}

		public function preset_input_text($id, $name, $des, $placeholder, $parent, $text_type = 'text', $default = '') {
			$control_id = "ct_id_".$id;
			$setting_id = "st_id_".$id;
			$this->add_setting($setting_id);
			$this->customizer->create_control($control_id, $parent, [
				'type' => $text_type,
				'section' => $parent['id'],
				'label' => __($name),
				'settings' => $setting_id,
				'description' => __($des),
				'input_attrs' => [
					'placeholder' => $placeholder
				]
			]);
		}

		public function preset_input_checkbox($id, $name, $des, $parent) {
			$control_id = "ct_id_".$id;
			$setting_id = "st_id_".$id;
			$this->add_setting($setting_id, 1, 'postMessage');
			$this->customizer->create_control($control_id, $parent, [
				'type' => 'checkbox',
				'section' => $parent['id'],
				'label' => __($name),
				'settings' => $setting_id,
				'description' => __($des)
			]);
		}

		private function add_setting($id, $default = '', $transport = 'refresh') {
			$this->customizer->create_setting($id, [
				'type' => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport' => $transport,
				'default' => $default
			]);
		} 
	}


	