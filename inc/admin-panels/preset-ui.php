<?php

	$collectionTracker = ['name' => null, 'index' => 0];

	function create_text_input($label, $name, $placeholder, $value = null, $group = null, $collection = null, $type = 'input', $index = 0) {

		$fullName = $name;

		if ($group !== null) {

			$fullName = "customMeta[".$group."][".$name."]";

		}elseif ($collection !== null) {
			Global $collectionTracker;

			$fullName = "customMeta[".$collection."][".$index."][".$name."]";
		}

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

 ?>