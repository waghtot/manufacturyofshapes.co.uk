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

				var e = $('<div class\"\"><h3>Dziękujemy</h3><p>Twoja wiadomość została wysłana.</div>');

				$('#contact_form').replaceWith(e);
				
			});

		});
	}
};

var init = function ()
{
	enquiry.initialise();
}

init();