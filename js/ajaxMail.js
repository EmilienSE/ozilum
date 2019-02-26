$(function() {
	var form = $('#contactForm');
	console.log(form);
	$(form).submit(function(event) {
    	event.preventDefault();
    	var formData = $(form).serialize();
    	$.ajax({
		    type: 'POST',
		    url: $(form).attr('action'),
		    data: formData
		});
    });
});