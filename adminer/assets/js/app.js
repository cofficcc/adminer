$(document).ready(function() {
	$('form#default').submit(function(event) {
		var json;
		event.preventDefault();
		$.ajax({
			type: $(this).attr('method'),
			url: $(this).attr('action'),
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function(result) {         
                console.log(result);
				json = jQuery.parseJSON(result);
				if (json.url) {
					window.location.href = json.url;
				} else if(json.success) {
					$("#alertBlock").attr('class', 'alert alert-success mt-3')
					$("#alertBlock").html("<p class=\"text-white\">" + json.success + "</p>")
				} else {
					$("#alertBlock").attr('class', 'alert alert-danger mt-3')
					$("#alertBlock").html("<p class=\"text-white\">" + json.error + "</p>")
				}
			},
		});
	});
});