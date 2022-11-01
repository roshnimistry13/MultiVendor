 //login validation form
$("form[id='login-form']").validate(
{
	// Specify validation rules
	rules:
	{
		email_username:
		{
			required:true,
			//email:true
		},
		password:
		{
			required:true,
			minlength:5,
			maxlength:20
		},
		radio_user_type:
		{
			required:true,
		}
	},
	// Specify validation error messages
	messages:
	{
		email_username: "Please enter a email address or mobile number",
		password:
		{
			required:"Please enter password"
		},
		radio_user_type:
		{
			required:"Please select user type"
		},
	},
	errorPlacement: function(error, element) {
		if (element.attr("name") == "radio_user_type")
		error.insertAfter(element.parent().parent());
		else if (element.parent().hasClass("vd_checkbox") || element.parent().hasClass("vd_radio")){
			element.parent().append(error);
		} else if (element.parent().hasClass("vd_input-wrapper")){
			error.insertAfter(element.parent());
		}else {
			error.insertAfter(element);
		}
	}, 
	submitHandler: function(form)
	{
		form.submit();
	}
});

//forget password validation
$("form[id='forgetpass']").validate({
		// Specify validation rules
		rules:
		{
			email:
			{
				required: true,
				email:true,
				minlength:3,
				maxlength:50
			}
		},
		// Specify validation error messages
		messages:
		{
			email:
			{
				required: "Please Enter a email address Name"
			}
		},
		submitHandler: function(form)
		{
			form.submit();
		}
});

$("form[id='devlogin-form']").validate(
	{
		// Specify validation rules
		rules:
		{
			email:
			{
				required:true,
				//email:true
			},
			password:
			{
				required:true,
				minlength:5,
				maxlength:20
			},
		},
		// Specify validation error messages
		messages:
		{
			email: "Please enter a email address or mobile number",
			password:
			{
				required:"Please enter password"
			},
		},
		errorPlacement: function(error, element) {			
				error.insertAfter(element);
		}, 
		submitHandler: function(form)
		{
			form.submit();
		}
});