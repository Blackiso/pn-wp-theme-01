<?php
	

	class CustomizerUI {

		private $customizer;
		
		function __construct($customizer) {
			$this->customizer = $customizer;
		}

		public function preset_input_text($id, $name, $des, $placeholder, $section, $text_type = 'text') {
			$setting_id = "st_id_".$id;
			$control_id = "ct_id_".$id;

			$this->customizer->create_setting($setting_id, [
				'type' => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport' => 'refresh'
			]);

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

	}


	