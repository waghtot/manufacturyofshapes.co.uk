var enquiry = {
	initialise: function(){

		$('#send').click(function(){

			if(enquiry.validateEmail()===true && enquiry.validateEnquiry()===true)
			{
				var dataset = {
					"email":$('#u_email').val(),
					"message":$('#u_query').val()
				};

				$.ajax ({
					type: "POST",
					url: "home/enquiry",
					data: dataset
				}).done(function(res){

					var e = $('<div class\"\"><h3>Dziękujemy</h3><p>Twoja wiadomość została wysłana.</div>');

					$('#contact_form').replaceWith(e);
					
				});
			}else{
				return false;
			}

		});
	},

	validateEmail: function(){
		var email = $('#u_email').val();
		var state = false;
		state = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email);
		return state;
	},

	validateEnquiry: function(){
		var query = $('#u_query').val();
		var state = false;
		if(query.length>0){
			state = true;
		}
		return state;
	}
};

var init = function ()
{
	enquiry.initialise();
}

init();