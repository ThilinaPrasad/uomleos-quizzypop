$(function() {

	// Get the form.
	var form = $('#ajax-contact');

	// Get the messages div.
	var formMessages = $('#form-messages');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
	    //submitting loader
	    $('#submit').fadeOut('fast','linear',function(){
			$('#loader').fadeIn();
		});
	    
		// Stop the browser from submitting the form.
		e.preventDefault();

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			//$(formMessages).removeClass('error');
			//$(formMessages).addClass('success');

			// Set the message text.
		//	$(formMessages).text(response);
		
		console.log(typeof response);
		if(response.indexOf('Successfully') != -1){
		
$.confirm({
				theme: 'modern',
				icon: 'fa fa-check-circle',
				title: 'Success !',
				content: response ,
				draggable: true,
				animationBounce: 2.5,
				type: 'green',
				typeAnimated: true,
				buttons: {
					Delete: {
					text: 'Done',
					btnClass: 'btn-green',
					action : function () {
						location.reload();
					}
				}
				}
				});
			// Clear the form.
			$('#name').val('');
			$('#email').val('');
			$('#subject').val('');
			$('#message').val('');
			$('#month').val('');
			$('#password').val('');
		}else{
		    $.confirm({
				theme: 'modern',
				icon: 'fa fa-exclamation-triangle',
				title: 'Error !',
				content: response ,
				draggable: true,
				animationBounce: 2.5,
				type: 'red',
				typeAnimated: true,
				buttons: {
					Delete: {
					text: 'Try Again',
					btnClass: 'btn-red',
					action : function () {
						$('#loader').fadeOut('fast','linear',function(){
							$('#submit').fadeIn();
						});
					}
				}
				}
				});
		}
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			//$(formMessages).removeClass('success');
		//	$(formMessages).addClass('error');

			// Set the message text.
			if (data.responseText !== '') {
				//$(formMessages).text(data.responseText);
				$.confirm({
				theme: 'modern',
				icon: 'fa fa-exclamation-triangle',
				title: 'Error !',
				content: data.responseText ,
				draggable: true,
				animationBounce: 2.5,
				type: 'red',
				typeAnimated: true,
				buttons: {
					Delete: {
					text: 'Try Again',
					btnClass: 'btn-red',
					action : function () {
						
					}
				}
				}
				});
			} else {
				//$(formMessages).text('Oops! An error occured and your message could not be sent.');
					$.confirm({
				theme: 'modern',
				icon: 'fa fa-exclamation-triangle',
				title: 'Error !',
				content: 'Oops! An error occured and your message could not be sent.' ,
				draggable: true,
				animationBounce: 2.5,
				type: 'red',
				typeAnimated: true,
				buttons: {
					Delete: {
					text: 'Try Again',
					btnClass: 'btn-red',
					action : function () {
						
					}
				}
				}
				});
			}
		});

	});

});
