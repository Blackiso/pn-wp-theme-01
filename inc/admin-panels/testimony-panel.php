<?php hidden_input('current_meta_box', 'testimony-section', $current_meta_box) ?>
<div class="snipp-section-options">
	<?php 
		create_text_input('Testimony Section Tag', 'tag', 'Enter testimony section tag', 
			$current_values['tag'], 'testimony-section'); 
		create_text_input('Testimony Section Title', 'title', 'Enter testimony section title', 
			$current_values['title'], 'testimony-section');
		create_text_input(
			'Testimony Section Description', 'des', 'Enter testimony section description', 
			$current_values['des'], 'testimony-section', null, 'textarea'
		); 
	?>
</div>