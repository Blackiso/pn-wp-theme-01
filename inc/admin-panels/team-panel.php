<?php
	foreach ($current_values['members'] as $index => $value) {
		foreach ($value as $x) {
			if ($x == "" && $index !== 0) unset($current_values['members'][$index]);
		}
	}
	hidden_input('current_meta_box', 'team-section', $current_meta_box) 
?>
<div>
	<?php create_text_input('Team Section Tag', 'tag', 'Enter team section tag', $current_values['tag'], 'team-section');  ?>
	<?php create_text_input('Team Section Title', 'title', 'Enter team section title', $current_values['title'], 'team-section');  ?>
	<?php create_text_input('Team Section Description', 'des', 'Enter team section description', $current_values['des'], 'team-section', null, 'textarea');  ?>
	<hr>
	<span class="snipp-title"><?php echo __('Team Members'); ?></span>
	<div class="snipp-team-members-container">
	<?php for ($i = 0; $i < sizeof($current_values['members']); $i++): ?>

			<div class="snipp-member">
				<?php create_image_upload('Upload Image', 'img', $current_values['members'][$i]['img'], 'team-section', 'members', $i); ?>	

				<div class="snipp-member-inps">
		<?php
				create_text_input('Member Name', 'name', 'Enter memebr name', $current_values['members'][$i]['name'], 'team-section', 'members', 'input', $i);
				create_text_input('Member Role', 'role', 'Enter memebr role', $current_values['members'][$i]['role'], 'team-section', 'members', 'input', $i);
				create_text_input('Member Description', 'des', 'Enter memebr description', $current_values['members'][$i]['des'], 'team-section', 'members', 'textarea', $i);
		?>
				</div>
			</div>
	<?php endfor; ?>
	</div>
	<div class="snipp-button-container">
		<button class="button-primary" id="team-panel-add">Add Team Member</button>
	</div>
</div>