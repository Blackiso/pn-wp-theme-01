
window.onload = function() {
	
	function upload_image(btn, e) {
		e.preventDefault();
		var input = document.querySelector('#'+btn.dataset.inp);
		var image = document.querySelector('#'+btn.dataset.img);

		window.send_to_editor = (html) => {
			imgurl = jQuery(html).attr('src');
			input.value = imgurl;
			image.src = imgurl;
			tb_remove();
		}

		tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
        return false;
	}

	initBtnEvents();

	var addTeamMemberBtn = document.querySelector('#team-panel-add');
	if (addTeamMemberBtn) {
		addTeamMemberBtn.addEventListener('click', (e) => {
			e.preventDefault();
			var container = document.querySelector('.snipp-team-members-container');
			var memberHtmlAll = document.querySelectorAll('.snipp-member');
			var memberHtml = document.querySelectorAll('.snipp-member')[0];
			var newMemberHtml = memberHtml.cloneNode(true);
			var imgId = generateID(10);
			var inpId = generateID(10);

			newMemberHtml.querySelector('.snipp-image-prev').id = imgId;
			newMemberHtml.querySelector('input[type="hidden"]').id = inpId;

			var uploadBtn = newMemberHtml.querySelector('.img-upload-btn');
			uploadBtn.dataset.img = imgId;
			uploadBtn.dataset.inp = inpId;

			[...newMemberHtml.querySelectorAll('input[name],textarea[name]')].forEach(input => {
				input.value = '';
				input.name = input.name.substring(0, 34) + memberHtmlAll.length + input.name.substring(34 + 1);
			});

			newMemberHtml.querySelector('.snipp-image-prev').src = "";

			container.appendChild(newMemberHtml);
			initBtnEvents();
		});
	}

	function initBtnEvents() {
		var uploadBtns = document.querySelectorAll('.img-upload-btn');
		[...uploadBtns].forEach(btn => {
			console.log(btn);
			btn.addEventListener('click', upload_image.bind(this, btn));
		});
	}

	function generateID(n) {
		var characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
	    var randomString = 'id'; 
	  
	    for (var i = 0; i < n; i++) { 
	        var index = Math.floor(Math.random() * (characters.length - 1));
	        randomString += characters[index]; 
	    } 
	  
	    return randomString; 
	}
	
}