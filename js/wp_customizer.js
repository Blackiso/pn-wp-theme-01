(function() {
	'use strict';

	function disableControlesInSection(id) {
		var settingId = 'st_id_'+id;
		var controlId = 'ct_id_'+id;
		var sectionId = wp.customize.control(controlId).section();
		var controles = wp.customize.section(sectionId).controls();

		function withValue(value) {
			controles.forEach(control => {
				if(control.id !== controlId) control.active.set(value);
			});
		}

		wp.customize(settingId, function(value) {
		
			withValue(value.get());
			value.bind(withValue);

		});
	}

	wp.customize.bind('ready', () => {
		disableControlesInSection('display_about');
	});

})();
