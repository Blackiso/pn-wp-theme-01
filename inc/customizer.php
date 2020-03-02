<?php

	function customize_register($wp_customize) {
		$customizerUi = new CustomizerUI(new Customize($wp_customize));
		$content_panel = [
			'id' => 'sipp_content_panel',
			'title' => 'Edit Content',
			'des' => 'Change the content that appears on the website.'
		];
		
		create_about_section($customizerUi, $content_panel);
	}

	function create_about_section($customizerUi, $panel) {
		$about_section = [
			'id' => 'snipp_about_section',
			'title' => 'Edit About Section',
			'des' => 'Edit about text that appears on about and home page.',
			'panel' => $panel
		];

		$customizerUi->preset_input_text('about_text', 'About You', 'Write a brief description about you.', 'Discription...', $about_section, 'textarea');
		$customizerUi->preset_input_text('about_text_highlight', 'Highlighted Word', 'Enter word that you want to highlight.', 'Word...', $about_section);
		$customizerUi->preset_input_text('about_text_btn', 'Button Text', 'Enter text to be showen on the button.', 'Text...', $about_section);
		$customizerUi->preset_input_text('about_text_btn_link', 'Button Link', 'Enter link for the button.', 'Link...', $about_section);
	}

	function customizer_about_section_text() {
		$text = get_theme_mod('st_id_about_text');
		$highlighted = get_theme_mod('st_id_about_text_highlight');
		if ($highlighted !== '') {
			$text = str_replace($highlighted, '<strong class="px-3">'.$highlighted.'</strong>', $text);
		}
		echo $text;
	}

	function customizer_about_section_btn() {
		return get_theme_mod('st_id_about_text_btn') !== '';
	}