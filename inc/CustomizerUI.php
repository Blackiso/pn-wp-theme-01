<?php
	

	class CustomizerUI {

		private $customizer;
		
		function __construct($customizer) {
			$this->customizer = $customizer;
		}

		public function preset_input_text($id, $name, $des, $placeholder, $section, $text_type = 'text') {
			$control_id = "ct_id_".$id;
			$setting_id = "st_id_".$id;
			$this->add_setting($setting_id);
			$this->customizer->create_control($control_id, $section, [
				'type' => $text_type,
				'section' => $section['id'],
				'label' => __($name),
				'settings' => $setting_id,
				'description' => __($des),
				'input_attrs' => [
					'placeholder' => $placeholder
				]
			]);
		}

		public function preset_input_checkbox($id, $name, $des, $section) {
			$control_id = "ct_id_".$id;
			$setting_id = "st_id_".$id;
			$this->add_setting($setting_id, 'postMessage', 1);
			$this->customizer->create_control($control_id, $section, [
				'type' => 'checkbox',
				'section' => $section['id'],
				'label' => __($name),
				'settings' => $setting_id,
				'description' => __($des)
			]);
		}

		function add_setting($id, $transport = 'refresh', $default = '') {
			$this->customizer->create_setting($id, [
				'type' => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport' => $transport,
				'default' => $default
			]);
		} 
	}


	