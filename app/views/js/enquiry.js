var enquiry = {
	initialise: function(){
		$('#send').click(function(){

			var enquiry = {
				"email":$('#u_email').val(),
				"message":$('#u_query').val()
			};

			$.ajax ({
				type: "POST",
				url: "home/enquiry",
				data: enquiry
			}).done(function(res){
				console.log(res);
			});

		});
	}
	// ,
	// validateEmail:function(e){

	// }
};

var init = function ()
{
	enquiry.initialise();
}

init();

// $(function() {
// 	// Setup form validation on the #register-form element
// 	$("#login-form").validate({
// 		// Specify the validation rules
// 		rules: {
// 			email: {
// 				required: true,
// 				email: true
// 			},
// 			query:{
// 				required: true,
// 				query: true
// 			}
// 		},
// 		// Specify the validation error messages
// 		messages: {			
// 			email: "Wprowadź poprawny adres email",
// 			query: "Wprowadź wiadomość"
// 		},
// 		submitHandler: function(form) {
// 			var enquiry = {
// 				"email":$('#u_email').val(),
// 				"message":$('#u_query').val()
// 			};

// 			$.ajax ({
// 				type: "POST",
// 				url: "home/enquiry",
// 				data: enquiry
// 			}).done(function(res){
// 				console.log('wyslane');
// 			});
// 		}
// 	});
// });