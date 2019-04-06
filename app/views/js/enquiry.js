//start here

$(function() {
	// Setup form validation on the #register-form element
	$("#login-form").validate({
		// Specify the validation rules
		rules: {
			email: {
				required: true,
				email: true
			}
		},
		// Specify the validation error messages
		messages: {			
			email: "Wprowadź poprawny adres email"
		},
		submitHandler: function(form) {
			form.submit();
		}
	});
});