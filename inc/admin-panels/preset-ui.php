<?php

	function create_text_input($label, $name, $placeholder, $value = null, $group = null, $collection = null, $type = 'input', $index = 0) {

		$fullName = snipp_get_post_name($name, $group, $collection, $index);
		$attr = 'type="text" name="'.$fullName.'" placeholder="'.__($placeholder).'"';
		
		?>
			<div class="snipp-inp-group">
				<label for="<?php echo($name) ?>"><?php echo __($label); ?></label>	

				<?php if ($type == 'textarea'): ?>
				<textarea <?php echo $attr; ?>> <?php echo $value; ?> </textarea>
				<?php endif; ?>

				<?php if ($type == 'input'): ?>
				<input <?php echo $attr; ?> value="<?php echo($value) ?>">
				<?php endif; ?>
			</div>
		<?php
	}

	function create_text_editor($id, $label, $name, $value = null, $group = null) {

		$fullName = snipp_get_post_name($name, $group);

		?>
			<span class="snipp-title"><?php echo __($label); ?></span>
		<?php

		wp_editor($value, $id, ['textarea_name' => $fullName]);

	}

	function snipp_get_post_name($name, $group = null, $collection = null, $index = 0) {
		$fullName = "customMeta[".$name."]";

		if ($group !== null) {

			$fullName = "customMeta[".$group."][".$name."]";

		}elseif ($collection !== null) {

			$fullName = "customMeta[".$collection."][".$index."][".$name."]";
		}
		return $fullName;
	}

 ?>