$(function () {
	'use strict';

	$('#fileupload').fileupload({
		// Uncomment the following to send cross-domain cookies:
		//xhrFields: {withCredentials: true},
		url: "<?= base_url() . 'albums/do_upload' ?>"
	});


	$('#fileupload').addClass('fileupload-processing');
	$.ajax({
		// Uncomment the following to send cross-domain cookies:
		//xhrFields: {withCredentials: true},
		url: $('#fileupload').fileupload('option', 'url'),
		dataType: 'json',
		context: $('#fileupload')[0]
	}).always(function () {
		$(this).removeClass('fileupload-processing');
	}).done(function (result) {
		$(this).fileupload('option', 'done')
			.call(this, $.Event('done'), {
				result: result
			});
	});

});


var loadFeatured = function (event) {
	var output = document.getElementById('featured_img');
	output.src = URL.createObjectURL(event.target.files[0]);
};


$(".remove_uploded").click(function () {
	$(this).parent().parent().remove();
});
