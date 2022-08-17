/**** valiadte for email and phone no */
jQuery.validator.addMethod("phone", function (phone_number, element) {
	phone_number = phone_number.replace(/\s+/g, "");
	return this.optional(element) || phone_number.length > 9 && phone_number.length < 12 ;
}, "Please enter valid phone number");

jQuery.validator.addMethod("validate_email", function(value, element) {

	if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
		return true;
	} else {
		return false;
	}
}, "Account Email can contain only ASCII characters. This must be in the format of something@email.com");





//login validation form
$("form[id='contact-form']").validate(
{
	// Specify validation rules
	rules:
	{
		ct_name:
		{
			required:true,
			//email:true
		},
		ct_email:
		{
			required:true,
		},
		ct_phone:
		{
			required:true,
		},
		ct_message:
		{
			required:true,
		},
	},
	// Specify validation error messages
	messages:
	{
		ct_name: "Please enter a name",
		ct_email: { required:"Please enter email" },
		ct_phone: { required:"Please enter phone number" },
		ct_message: { required:"Please enter message" },
	},
	submitHandler: function(form)
	{
		form.submit();
	}
});

$("form[id='customer-login']").validate(
{
	// Specify validation rules
	rules:
	{
		txt_cust_email_phone:
		{
			required:true,
			//validate_email:true
		},
		txt_cust_password:
		{
			required:true,
		},
	},
	// Specify validation error messages
	messages:
	{
		txt_cust_email_phone: "Please enter a email/phone",
		txt_cust_password: { required:"Please enter password" },
	},
	submitHandler: function(form)
	{
		// form.submit();
		$.ajax({
			url: $(form).attr('action'),
			type: $(form).attr('method'),
			data: new FormData($(form)[0]),
			async: false,
			cache: false,
			contentType: false,
			processData: false,
			datatype: 'json',
			success: function(json) {
				if (json['success']) {
				   //Swal.fire("Success",json['success'], "success");
					$('#customer-login')[0].reset();	
					if (json['redirect']) {
						location.href = json['redirect'];
					}				
				}
				if (json['error']) {   
					//Swal.fire("Error",json['error'], "error");	                         
				}
			}
		});
	}
});

// Forgot password form 
$("form[id='RecoverForm']").validate(
{
	// Specify validation rules
	rules:
	{
		recoverEmail:
		{
			required:true,
			//email:true
		},
	},
	// Specify validation error messages
	messages:
	{
		recoverEmail: "Please enter a email",
	},
	submitHandler: function(form)
	{
		form.submit();
	}
});


// Forgot password form 
$("form[id='RegisterForm']").validate(
{
	// Specify validation rules
	rules:
	{
		name:
		{
			required:true,
		},
		email:
		{
			required:true,
			validate_email :true,
		},
		contact_no:
		{
			required:true,
			phone :true,
		},
		password:
		{
			required:true,
			//max: 8,
		},
		gender:
		{
			required:true,
		},
	},
	// Specify validation error messages
	messages:
	{
		name: "Please enter a name",
		email: { required:"Please enter email" },
		contact_no: { required:"Please enter contact no" },
		password: { required:"Please enter password" },
		gender: { required:"Please select gender" },
	},
	errorPlacement: function(error, element) {
		if (element.attr("name") == "gender")
			error.insertAfter(element.parent().parent().find('.form-check-inline').last());
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
		// form.submit();
		$.ajax({
			url: $(form).attr('action'),
			type: $(form).attr('method'),
			data: new FormData($(form)[0]),
			async: false,
			cache: false,
			contentType: false,
			processData: false,
			datatype: 'json',
			success: function(json) {
				if (json['success']) {
				   //Swal.fire("Success",json['success'], "success");
				   $('#RegisterForm')[0].reset();	
				   if (json['redirect']) {
						location.href = json['redirect'];
					}
				   	$('#RegisterForm').removeClass('is_selected');						
					$('#customer-login').addClass('is_selected');
									
				}
				if (json['error']) {   
					//Swal.fire("Error",json['error'], "error");	                         
				}
			}
		});
	}
});

// change password form 
$("form[id='change-password']").validate(
{
	// Specify validation rules
	rules:
	{
		current_password:
		{
			required:true,
		},
		new_password:
		{
			required:true,
		},
		confrim_password:
		{
			required:true,
			equalTo : "#new_password"
		},
	},
	// Specify validation error messages
	messages:
	{
		current_password: "Please enter current password",
		new_password: { required:"Please enter new password" },
		confrim_password: { required:"Please confrim password" },
	},
	submitHandler: function(form)
	{
		// form.submit();
		$.ajax({
			url: $(form).attr('action'),
			type: $(form).attr('method'),
			data: new FormData($(form)[0]),
			async: false,
			cache: false,
			contentType: false,
			processData: false,
			datatype: 'json',
			success: function(json) {
				if (json['success']) {
				   //Swal.fire("Success",json['success'], "success");
				   $('#change-password')[0].reset();	
				   if (json['redirect']) {
						location.href = json['redirect'];
					}
				   	$('#change-password').removeClass('is_selected');
									
				}
				if (json['error']) {   
					//Swal.fire("Error",json['error'], "error");	                         
				}
			}
		});
	}
});




