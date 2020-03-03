<div id="snipp-services-container">
	<?php foreach ($saved_services as $service): ?>
	<div class="snipp-panel-inp-label-grp snipp-panel-flex snipp-service">
		<label for="service-icon">Service Icon:</label>	
		<select name="services[0][service-icon]" value="<?php echo $service['service-icon'] ?>">
			<option value="1" <?php echo $service['service-icon'] == 1 ? 'selected' : '' ?>>Lightbulb</option>
			<option value="2" <?php echo $service['service-icon'] == 2 ? 'selected' : '' ?>>Computer</option>
			<option value="3" <?php echo $service['service-icon'] == 3 ? 'selected' : '' ?>>Option</option>
			<option value="4" <?php echo $service['service-icon'] == 4 ? 'selected' : '' ?>>Support</option>
		</select>

		<label for="service-name">Service Name:</label>	
		<input type="text" name="services[0][service-name]" placeholder="service name" value="<?php echo $service['service-name'] ?>">

		<label for="service-des">Service Description:</label>	
		<input type="text" name="services[0][service-des]" placeholder="service name" value="<?php echo $service['service-des'] ?>">
	</div>
	<?php endforeach; ?>
</div>

<div class="snipp-panel-button-container snipp-panel-flex">
	<button class="button-primary" id="snipp-add-service">Add Service</button>
</div>

<template id="snipp-panel-inp-label-grp-template">
	<div class="snipp-panel-inp-label-grp snipp-panel-flex snipp-service">
		<label for="service-icon">Service Icon:</label>	
		<select name="services[1][service-icon]" class="service-icon">
			<option value="1">Lightbulb</option>
			<option value="2">Computer</option>
			<option value="3">Option</option>
			<option value="4">Support</option>
		</select>

		<label for="service-name">Service Name:</label>	
		<input type="text" name="services[1][service-name]" placeholder="service name" class="service-name">

		<label for="service-des">Service Description:</label>	
		<input type="text" name="services[1][service-des]" placeholder="service name" class="service-des">
	</div>
<template>