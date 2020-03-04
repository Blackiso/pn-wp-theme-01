<div class="snipp-section-options">
	<?php 
		create_text_input('Services Section Title', 'service-section', 'title', 'Enter services section title'); 
		create_text_input(
			'Services Section Description', 'service-section', 'des', 
			'Enter services section description', null, 'textarea'
		); 
	?>
</div>
<div class="snipp-services-block">
	
	<?php for ($i = 0; $i < 3; $i++): ?>

	<div class="snipp-single-service">
		<span class="snipp-single-service-title">Service #1</span>
		<div>
		<?php 
			create_text_input('Service Title', 'services', 'service-title', 'Enter service title'); 
			create_text_input(
				'Service Description', 'services', 'service-des', 
				'Enter service description', null, 'textarea'
			); 
		?>
		</div>
	</div>

	<?php endfor; ?>

</div>
