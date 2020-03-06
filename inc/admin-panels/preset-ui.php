<?php

	function hidden_input($name, $group, $value) {
		$name = snipp_get_post_name($name, $group);
		?>
			<input type="hidden" value="<?php echo($value) ?>" name="<?php echo($name) ?>">
		<?php
	}

	function create_text_input($label, $name, $placeholder, $value = null, $group, $collection = null, $type = 'input', $index = 0) {

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

	function create_text_editor($id, $label, $name, $value = null, $group) {

		$fullName = snipp_get_post_name($name, $group);

		?>
			<span class="snipp-title"><?php echo __($label); ?></span>
		<?php

		wp_editor($value, $id, ['textarea_name' => $fullName]);

	}

	function snipp_get_post_name($name, $group, $collection = null, $index = 0) {
		$group = strpos($group, "[") !== false ? $group : "[".$group."]";
		$fullName = "customMeta[".$name."]";

		if ($collection !== null) {

			$fullName = "meta-boxes".$group."[".$collection."][".$index."][".$name."]";

		}else {

			$fullName = "meta-boxes".$group."[".$name."]";

		}
		return $fullName;
	}

 ?>