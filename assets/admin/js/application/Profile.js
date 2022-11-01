
var otp = '';
/*** UPATE PROFILE FORM ********************/

$("form[id='profile_form']").validate(
	{
		// Specify validation rules
		rules:
		{
			txt_name:
			{
				required:true,
				lettersonly:true,
			},
			txt_phone:
			{
				required:true,
				phone:true
			},
			txt_email:
			{
				required:true,
				email:true
			},
			
		},
		// Specify validation error messages
		messages:
		{
			txt_email: "Please enter email id",
			txt_name: "Please enter name",
			txt_phone: "Please enter phone no",
			
		},
		errorPlacement: function(error, element) {			
				error.insertAfter(element);
		}, 
		submitHandler: function(form)
		{
			// form.submit();
            // $.ajax({
            //     url: $(form).attr("action"),
            //     type: $(form).attr("method"),
            //     data: new FormData($(form)[0]),
            //     async: false,
            //     cache: false,
            //     contentType: false,
            //     processData: false,
            //     datatype: "json",
            //     success: function (json) {
            //         if (json["success"]) {
            //             Swal.fire("Success", "Successsfully Update Record", "success");       
            //             location.reload();                        
            //         }
            //         if (json["error"]) {
            //             Swal.fire("Error",json['error'], "error");
            //         }
            //     },
            // });
		}
});

/*********CHANGE PASSWORD FORM SUBMIT*********** */
$("form[id='update-password-form']").validate(
	{
		// Specify validation rules
		rules:
		{
			txt_oldpassword:
			{
				required:true,				
			},
			txt_new_password:
			{
				required:true,
			},			
			txt_confirm_password:
			{
				required:true,
                equalTo: "#txt_new_password",
			},			
		},
		// Specify validation error messages
		messages:
		{
			txt_oldpassword: "Please enter old password",
			txt_new_password: "Please enter new password",
			txt_confirm_password: "Please enter confirm password",
			
		},
		errorPlacement: function(error, element) {			
				error.insertAfter(element);
		},
});

function updateprofile(){
    if(!$("#profile_form").valid())
	{
		$("#profile_form").submit(function()
			{
				return false;
			});
		return false;
	}else{
        var form = "#profile_form";
        var formdata = new FormData($('#profile_form')[0]);
        var files = $('#file-upload')[0].files; console.log(files[0]);
        if(files.length > 0 ){
            formdata.append('file',files[0]);
        }

        $.ajax({
                url: $(form).attr("action"),
                type: $(form).attr("method"),
                data: formdata,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                datatype: "json",
                success: function (json) {
                    if (json["success"]) {
                        Swal.fire("Success", "Successsfully Update Record", "success");       
                        location.reload();                        
                    }
                    if (json["error"]) {
                        Swal.fire("Error",json['error'], "error");
                    }
                },
            });
    }
}

function updatePassword(){
	if(!$("#update-password-form").valid())
	{
		$("#update-password-form").submit(function()
			{
				return false;
			});
		return false;
	}
	else{
		showLoader();	
		$.ajax({
			url: base_url + "send-otp",
			type:'POST',
			data: {},
			datatype: "json",
			success: function (json) {
				if (json["success"]) {
					hideLoader();
					$('#otp-modal').modal('show');
					otp = json['otp'];console.log(otp);
				}
				if (json["error"]) {
					hideLoader();
				}
			},
		});	
			
	}


}

$(".btnsubmitotp").on("click", function () {
	showLoader();	
	var txt_otp = $('#txt_opt').val();
	$('#otp-modal').modal('hide');
	if(txt_otp == otp){		
			var form = "#update-password-form";	
			var formdata = new FormData($(form)[0]);
			var files = $('#file-upload')[0].files; console.log(files[0]);
			if(files.length > 0 ){
				formdata.append('file',files[0]);
			}
			
			$.ajax({
                url: $(form).attr("action"),
                type: $(form).attr("method"),
                data: formdata,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                datatype: "json",
                success: function (json) {					
                    if (json["success"]) {
						hideLoader();
                        Swal.fire("Success", "Successsfully Update Record", "success");
						
						setTimeout(function(){
							location.reload();
						}, 1500);       
						otp = '';           
                    }
                    if (json["error"]) {
						hideLoader();
                        Swal.fire("Error",json['error'], "error");
                    }
                },
            });
	}
});