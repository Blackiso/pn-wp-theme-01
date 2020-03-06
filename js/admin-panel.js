(function() {
	'use strict';

	window["runScriptForPost12"] = function(post_ID) {
		
		var numberOfServices = document.querySelectorAll(".snipp-service").length;
		var addServiceBtn = document.querySelector("#snipp-add-service");

		addServiceBtn.addEventListener('click', function(e) {
			e.preventDefault();
			if (numberOfServices < 3) add_service();
		});

		function add_service() {
			numberOfServices++;
			var serviceTemplate = document.querySelector("#snipp-panel-inp-label-grp-template");
			var servicesContainer = document.querySelector("#snipp-services-container");
			serviceTemplate = serviceTemplate.content.querySelector(".snipp-service");
			serviceTemplate.querySelector(".service-icon").name = "services["+numberOfServices+"][service-icon]";
			serviceTemplate.querySelector(".service-name").name = "services["+numberOfServices+"][service-name]";
			serviceTemplate.querySelector(".service-des").name = "services["+numberOfServices+"][service-des]";
			var item = document.importNode(serviceTemplate, true);
			servicesContainer.appendChild(item);
		}

	}

	window.onload = function() {
		// var post_ID = document.querySelector("#post_ID");
		// var post_ID = post_ID.value;
		// var scriptFunction = "runScriptForPost"+post_ID;

		// var fn = window[scriptFunction];
		// if(typeof fn === 'function')  fn(post_ID);

	}

})();

jQuery(document).ready( function($) {

	function upload_image(btn, e) {
		e.preventDefault();
		var inputId = btn.dataset.inp;
		var imageId = btn.dataset.img;
		var input = document.querySelector('#'+inputId);
		var image = document.querySelector('#'+imageId);

		console.log(inputId);

		window.send_to_editor = (html) => {
			imgurl = jQuery(html).attr('src');
			input.value = imgurl;
			image.src = imgurl;
			tb_remove();
		}

		tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true' );
        return false;
	}

	var uploadBtns = document.querySelectorAll('.img-upload-btn');
	[...uploadBtns].forEach(btn => {
		btn.addEventListener('click', upload_image.bind(this, btn));
	});

});