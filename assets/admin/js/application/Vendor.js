//Load Submenu Datatable
jQuery(document).ready(function()
{
	table_name = 'vendorDatatable';
	url = base_url + "Admin/Vendor/bindDataTable";
	target = [0,5,6];

	toDataTable(table_name,url,target);
	$("#text_country").select2();
});


//Submenu validation form
$("form[id='vendor-form']").validate(
	{
		// Specify validation rules
		ignore: ".ignore",
		rules:
		{
			text_name: {
				required: true,
			},
			text_email: {
				required: true,
				validate_email: true,
			},
			text_contact_no: {
				required: true,
				phone: true,
				number: true,
			},
			text_gstin_no: {
				required: true,
				validate_gstin: true,
			},
			text_pan_no: {
				required: true,
				validate_pan: true,
			},
		},
		// Specify validation error messages
		messages: {
			text_name				: {required: "Please enter name"},
			text_email				: {required: "Please enter email id"},
			text_contact_no			: {required: "Please enter contact no",
										number : "Please enter a valid phone number",
									  },
			text_company			: {required: "Please enter company name"},
			text_gstin_no			: {required: "Please enter gstin no"},
			text_pan_no				: {required: "Please enter pan no"},
			text_street				: {required: "Please enter street"},
			text_city				: {required: "Please enter city"},
			text_state				: {required: "Please enter state"},
			text_pincode			: {required: "Please enter pincode"},
			text_country			: {required: "Please select country"},
		},
		
		errorPlacement: function(error, element) {
			if (element.attr("name") == "text_country" ){
				error.insertAfter(element.parent().find('.select2-container'));
			}
			else if (element.parent().hasClass("vd_checkbox") || element.parent().hasClass("vd_radio")){
				element.parent().append(error);
			} else if (element.parent().hasClass("vd_input-wrapper")){
				error.insertAfter(element.parent());
			}else {
				error.insertAfter(element);
			}
		}, 

		highlight: function (element) {
			$(element).addClass('vd_bd-red');
		},

		unhighlight: function (element) {
			$(element).closest('.control-group').removeClass('error');
		},

		submitHandler: function(form)
		{
			form.submit();
		}
	});

//Update Submenu Status
function updateVendor(id,is_active)
{
	if(is_active == 1)
		var isActive = "Enable";
	else if(is_active == 0)
		var isActive = "Disable";
	else
		var isActive = "Delete";

	Swal.fire(
		{
			title: 'Want to '+isActive+' Record ?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, '+isActive+' it!'
		}).then((result) =>
		{
			if (result.value)
			{
				var updateStatus =
				{
					id : id,
					status	:	is_active
				}
				$.ajax(
					{
						"url" : base_url + "Admin/Vendor/updateStatus",
						type: 'post',
						dataType: 'json',
						data: updateStatus,
						success: function (data)
						{
							if(data.status=="success")
							{
								var update_status = data.update_status;

								if(update_status == 1)
								var status1 = "Enable";
								else if(update_status == 0)
								var status1 = "Disable";
								else
								var status1 = "Delete";
								Swal.fire("Success", "Successsfully "+status1+"d Submenu.", "success");
								$('#vendorDatatable').DataTable().ajax.reload();
							}
							else if(data.status=="error")
							{
								Swal.fire("Error", "Something went wrong!!", "error");
							}
						},
						error: function (textStatus, errorThrown)
						{
							console.log(textStatus);
						}
					});
			}
		})
}
