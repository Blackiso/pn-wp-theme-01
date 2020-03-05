<input type="hidden" name="current_meta_box" value="<?php echo $current_meta_box ?>">
<div class="snipp-section-options">
	<?php 
		create_text_input('Services Section Title', 'title', 'Enter services section title', 
			$current_values['services-section']['title'], 'services-section'); 
		create_text_input(
			'Services Section Description', 'des', 'Enter services section description', 
			$current_values['services-section']['des'], 'services-section', null, 'textarea'
		); 
	?>
</div>
<hr>
<div class="snipp-services-block">
	
	<?php for ($i = 0; $i < 4; $i++): ?>

	<div class="snipp-single-service">
		<span class="snipp-single-service-title">#<?php echo __('Service'.($i+1)); ?></span>
		<div>
		<?php 
			create_text_input(
				'Service Title', 'title', 'Enter service title', $current_values['services'][$i]['title'],
				 null, 'services', 'input', $i
			); 
			create_text_input(
				'Service Description', 'des', 'Enter service description', $current_values['services'][$i]['des'], 
				null, 'services', 'textarea', $i
			); 
		?>
		</div>
	</div>

	<?php endfor; ?>

</div>
<hr>
<div>
	<?php 
		create_text_editor('services-details', 'More Details', 'services-details', $current_values['services-details'], null);
	?>
</div>