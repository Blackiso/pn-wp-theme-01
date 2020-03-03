<?php

	class Customize {

		private $manager;
		private $panels = [];
		private $sections = [];
		
		function __construct($wp_customize) {
			$this->manager = $wp_customize;
		}

		public function create_panel($panel) {
			$this->manager->add_panel($panel['id'], [
				'title' => __($panel['title']),
				'description' => $panel['des'],
			]);
			$this->panels[] = $panel['id'];
		}

		public function create_section($section) {
			if (!in_array($section['parent']['id'], $this->panels)) $this->create_panel($section['parent']);

			$this->manager->add_section($section['id'], [
				'title' => __($section['title']),
				'description' => __($section['des']),
				'panel' => $section['parent']['id'],
				'capability' => 'edit_theme_options',
				'theme_supports' => '',
			]);
			$this->sections[] = $section['id'];
		}

		public function create_setting($id, $options) {
			$this->manager->add_setting($id, $options);
		}

		public function create_control($id, $parent, $options) {
			if (!in_array($parent['id'], $this->sections)) $this->create_section($parent);

			$this->manager->add_control($id, $options);
		}
	}