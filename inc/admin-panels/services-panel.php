<?php hidden_input('current_meta_box', 'services-section', $current_meta_box) ?>
<div class="snipp-section-options">
	<?php 
		create_text_input('Services Section Tag', 'tag', 'Enter services section tag', 
			$current_values['tag'], 'services-section'); 
		create_text_input('Services Section Title', 'title', 'Enter services section title', 
			$current_values['title'], 'services-section');
		create_text_input(
			'Services Section Description', 'des', 'Enter services section description', 
			$current_values['des'], 'services-section', null, 'textarea'
		); 
	?>
</div>
<hr>
<div class="snipp-services-block">
	
	<?php for ($i = 0; $i < 4; $i++): ?>

	<div class="snipp-single-service">
		<span class="snipp-single-service-title">#<?php echo __('Service '.($i+1)); ?></span>
		<div>
		<?php 
			create_text_input(
				'Service Title', 'title', 'Enter service title', $current_values['services'][$i]['title'], 
				'services-section', 'services', 'input', $i
			); 
			create_text_input(
				'Service Description', 'des', 'Enter service description', $current_values['services'][$i]['des'], 
				'services-section', 'services', 'textarea', $i
			); 
		?>
		</div>
	</div>

	<?php endfor; ?>

</div>
<hr>
<div>
	<?php 
		create_text_editor('services-details', 'More Details', 'services-details', $current_values['services-details'], 'services-section');
	?>
</div>