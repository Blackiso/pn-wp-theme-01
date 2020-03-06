<?php hidden_input('current_meta_box', 'team-section', $current_meta_box) ?>
<div>
	<?php create_text_input('Team Section Title', 'title', 'Enter team section title', null, 'team-section');  ?>
	<?php create_text_input('Team Section Description', 'des', 'Enter team section description', null, 'team-section', null, 'textarea');  ?>
	<hr>
	<span class="snipp-title"><?php echo __('Team Members'); ?></span>
	<?php 

		for ($i = 0; $i < 3; $i++) { 

		?>
			<div class="snipp-member">
		<?php 
				create_image_upload('Upload Image', 'img', null, 'team-section', 'members', $i);
		 ?>		
				<div class="snipp-member-inps">
		<?php

				create_text_input('Member Name', 'name', 'Enter memebr name', null, 'team-section', 'members', 'input', $i);
				create_text_input('Member Role', 'role', 'Enter memebr role', null, 'team-section', 'members', 'input', $i);
				create_text_input('Member Description', 'des', 'Enter memebr description', null, 'team-section', 'members', 'textarea', $i);
		?>
				</div>
			</div>
			<span class="snipp-sep"></span>
		<?php

		}

	 ?>

</div>