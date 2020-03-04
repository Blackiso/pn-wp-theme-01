<?php 

	$inputGroupes = [];

	function create_text_input($label, $group, $name, $palceholder, $value = null, $type = 'input') {
		Global $inputGroupes;

		if (!isset($inputGroupes[$group])) $inputGroupes[$group] = [];
		$index = sizeof($inputGroupes[$group]);

		$fullName = $group."[".$index."][".$name."]";
		array_push($inputGroupes[$group], "");
		$attr = 'type="text" name="'.$fullName.'" placeholder="'.$palceholder.'" value="'.$value.'"';
		
		?>
			<div class="snipp-inp-group">
				<label for="<?php echo($name) ?>"><?php echo $label; ?></label>	

				<?php if ($type == 'textarea'): ?>
				<textarea <?php echo $attr; ?>></textarea>
				<?php endif; ?>

				<?php if ($type == 'input'): ?>
				<input <?php echo $attr; ?>>
				<?php endif; ?>
			</div>
		<?php
	}

 ?>