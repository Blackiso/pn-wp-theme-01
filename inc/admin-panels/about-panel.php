<?php hidden_input('current_meta_box', 'about-section', $current_meta_box) ?>
<div>
	<?php create_text_input('About Section Description', 'des', 'Enter a quick description', 
	$current_values['des'], 'about-section', null, 'textarea');  ?>
	<span class="snipp-note"><?php echo __('Add < > around words to highlight them.') ?></span>
	<hr>
	<div class="snipp-groupes-row">
		<?php 
			create_text_input('About Button Name', 'name', 'Enter button name', $current_values['btn']['name'], '[about-section][btn]', null);  
			create_text_input('About Button Link', 'link', 'Enter button link', $current_values['btn']['link'], '[about-section][btn]', null);  
		?>
	</div>
</div>